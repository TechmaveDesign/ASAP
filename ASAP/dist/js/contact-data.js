"use strict";
$(function () {
    /* Select2 */
    $("#input_tags_1,#input_tags_2,#input_tags_3").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    });

    // Track currently open dropdown
    let currentlyOpenDropdown = null;

    function positionDropdownMenu(button, menu) {
        if (currentlyOpenDropdown && currentlyOpenDropdown.get(0) !== menu.get(0)) {
            currentlyOpenDropdown.hide();
        }

        if (!menu.data('appended')) {
            $('body').append(menu);
            menu.data('appended', true);
        }

        const offset = $(button).offset();
        const height = $(button).outerHeight();
        menu.css({
            position: 'absolute',
            top: offset.top + height,
            left: offset.left,
            display: 'block',
            zIndex: 1055,
            minWidth: $(button).outerWidth()
        });

        currentlyOpenDropdown = menu;
    }

    $(document).on('click', function (e) {
        if (
            !$(e.target).closest('.columnvisible_dropdownmenus').length &&
            !$(e.target).closest('.exportdropdown_menu').length &&
            !$(e.target).closest('.dropdown-toggle').length
        ) {
            $('.columnvisible_dropdownmenus, .exportdropdown_menu').hide();
            currentlyOpenDropdown = null;
        }
    });

    function setupSearchInputIcons() {
        $('.dataTables_filter').each(function () {
            const $filter = $(this);
            const $input = $filter.find('input');

            if ($filter.hasClass('enhanced')) return;

            $filter.addClass('enhanced');

            $input.wrap('<div class="search-wrapper position-relative d-inline-block"></div>');
            const $wrapper = $input.parent();

            const $searchIcon = $('<iconify-icon icon="majesticons:search-line" class="search-icon position-absolute" style="left: 8px; top: 50%; transform: translateY(-50%); pointer-events: none;"></iconify-icon>');
            const $clearIcon = $('<iconify-icon icon="material-symbols:close" class="clear-icon position-absolute" style="right: 8px; top: 50%; transform: translateY(-50%); cursor: pointer; display: none;"></iconify-icon>');

            $wrapper.append($searchIcon, $clearIcon);
            $input.css({ paddingLeft: '30px', paddingRight: '25px' });

            function toggleIcons() {
                const hasText = $input.val().length > 0;
                $searchIcon.toggle(!hasText);
                $clearIcon.toggle(hasText);
            }

            $input.on('input', toggleIcons);
            toggleIcons();

            $clearIcon.on('click', function () {
                $input.val('').trigger('input').trigger('keyup');
            });
        });
    }

    $(".common-datatable").each(function (index) {
        var $table = $(this);

        if (!$.fn.DataTable.isDataTable($table)) {
            var targetDt = $table.DataTable({
                dom: '<"row"<"col-7 mb-3 contact-toolbar-left-' + index + ' contact-toolbar-left"><"col-5 mb-3 contact-toolbar-right"flip>><"row"<"col-sm-12"t>><"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
                columnDefs: [{ searchable: false, orderable: false }],
                pagingType: 'simple_numbers',
                order: [1, 'asc'],
                language: {
                    search: "",
                    searchPlaceholder: "Search here...",
                    info: "_START_ - _END_ of _TOTAL_",
                    sLengthMenu: "View  _MENU_",
                    paginate: {
                        next: '<i class="ri-arrow-right-s-line"></i>',
                        previous: '<i class="ri-arrow-left-s-line"></i>'
                    }
                },
                drawCallback: function () {
                    $table.closest('.common-datatable_wrapper').find('.pagination')
                        .addClass('custom-pagination pagination-simple justify-content-end');
                    setupSearchInputIcons();
                }
            });

            setupSearchInputIcons(); // Initial call

            $(document).on('click', '.del-button', function () {
                targetDt.row('.selected').remove().draw(false);
                return false;
            });

            $("div.contact-toolbar-left-" + index).addClass("contact-toolbar-left").html(
                '<div class="d-xxl-flex filterbyTable d-none align-items-center form-group mb-0">' +
                '<label class="flex-shrink-0 mb-0 me-2">Filter by:</label></div>'
            );

            if ($(".contact-toolbar-left-" + index + " .dataTables_length").length === 0) {
                var lengthMenu = $('<div class="dataTables_length"><label>Show </label>' +
                    '<select class="form-select form-select-sm" aria-label=".form-select-sm example">' +
                    '<option value="10">10</option><option value="25">25</option>' +
                    '<option value="50">50</option><option value="100">100</option>' +
                    '</select><label> entries</label></div>');
                $("div.contact-toolbar-left-" + index).append(lengthMenu);
            }

            if (!$table.parent().hasClass('table-responsive')) {
                $table.wrap('<div class="table-responsive"></div>');
            }

            var columnDropdown = $('<div class="dropdown d-inline-block position-relative"></div>');
            var columnButton = $('<button class="dropdownButton btn btn-sm dropdown-toggle d-flex align-items-center" type="button">' +
                '<i class="bi bi-layout-three-columns me-1"></i> Columns</button>');
            var columnMenu = $('<ul class="dropdown-menu columnvisible_dropdownmenus shadow"></ul>');

            targetDt.columns().every(function () {
                var column = this;
                var columnCheckbox = $('<li><label class="dropdown-item">' +
                    '<input type="checkbox" class="column-checkbox form-check-input is-valid" checked="checked">' +
                    column.header().textContent + '</label></li>');
                columnCheckbox.find('input').on('change', function () {
                    column.visible($(this).is(':checked'));
                });
                columnMenu.append(columnCheckbox);
            });

            columnButton.on('click', function (e) {
                e.stopPropagation();
                if (columnMenu.is(':visible')) {
                    columnMenu.hide();
                    currentlyOpenDropdown = null;
                } else {
                    positionDropdownMenu(this, columnMenu);
                }
            });

            columnDropdown.append(columnButton);
            $("div.contact-toolbar-left-" + index).append(columnDropdown);

            var exportDropdown = $('<div class="dropdown d-inline-block position-relative"></div>');
            var exportButton = $('<button class="dropdownButton btn btn-sm dropdown-toggle d-flex align-items-center " type="button">' +
                '<i class="bi bi-download me-1"></i> Export</button>');
            var exportMenu = $('<div class="dropdown-menu exportdropdown_menu shadow p-2"></div>');

            new $.fn.dataTable.Buttons(targetDt, {
                buttons: ['copy', 'excel', 'csv', 'pdf', 'print']
            }).container().appendTo(exportMenu);

            exportButton.on('click', function (e) {
                e.stopPropagation();
                if (exportMenu.is(':visible')) {
                    exportMenu.hide();
                    currentlyOpenDropdown = null;
                } else {
                    positionDropdownMenu(this, exportMenu);
                }
            });

            exportDropdown.append(exportButton);
            $("div.contact-toolbar-left-" + index).append(exportDropdown);
        }
    });
});
