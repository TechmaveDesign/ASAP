$(document).ready(function() {
    let options = [];
    let inputs = [];
    let dates = [];
    let multiselectOptions = [];
    let currentFieldData = null; // To store field data for editing
    let newOptionInput = null; // Track the new option input for auto-saving
    let newInputInput = null; // Track the new input field for auto-saving
    let newDateInput = null; // Track the new date input for auto-saving
    let newMultiselectInput = null; // Track the new multiselect option input for auto-saving
    let targetSection = null; // Track the target section for adding fields

    // Show modal when Add Field button is clicked (either header or section)
    $('.add-field-button, .add-field-button-section').on('click', function() {
        targetSection = $(this).data('section-id'); // Set the target section based on the button clicked
        const modal = new bootstrap.Modal('#addFieldModal');
        modal.show();
        currentFieldData = null; // Reset current field data for adding new fields
        options = []; // Reset options when opening modal
        inputs = []; // Reset inputs when opening modal
        dates = []; // Reset dates when opening modal
        multiselectOptions = []; // Reset multiselect options when opening modal
        newOptionInput = null; // Reset new option input
        newInputInput = null; // Reset new input input
        newDateInput = null; // Reset new date input
        newMultiselectInput = null; // Reset new multiselect option input
        updateOptionsList();
        updateInputList();
        updateDateList();
        updateMultiselectList();
        setupFieldType();
        setupNewOptionInput();
        setupNewInputInput();
        setupNewDateInput();
        setupNewMultiselectInput();
    });

    // Show modal for editing existing field
    $('.fields-container').on('click', '.edit-field', function() {
        const field = $(this).closest('.dynamic-field');
        const sectionId = field.closest('.form-section').attr('id');
        const fieldType = field.find('.customdataPicker').length ? 'date' : 
                         field.find('.select2').length ? 'select' : 
                         field.find('.multiselect-preview').length ? 'multiselect' : 
                         field.find('input[type="checkbox"]').length ? 'checkbox' : 
                         field.find('input[type="radio"]').length ? 'radio' : 'input';
        currentFieldData = { type: fieldType, label: field.find('label').text(), options: [], placeholder: '', date: '', multiselectOptions: [] };

        if (fieldType === 'select') {
            currentFieldData.options = field.find('.select2 option:selected').text() ? [field.find('.select2 option:selected').text()] : [];
        } else if (fieldType === 'checkbox' || fieldType === 'radio') {
            currentFieldData.options = field.find('.form-check-label').map(function() {
                return $(this).text();
            }).get();
        } else if (fieldType === 'input') {
            currentFieldData.placeholder = field.find('input').attr('placeholder') || '';
        } else if (fieldType === 'date') {
            currentFieldData.date = field.find('.customdataPicker').val() || '';
        } else if (fieldType === 'multiselect') {
            currentFieldData.multiselectOptions = field.find('.multiselect-checkbox:checked').map(function() {
                return $(this).val();
            }).get();
        }

        const modal = new bootstrap.Modal('#addFieldModal');
        modal.show();
        $('#fieldType').val(fieldType).trigger('change');

        if (fieldType === 'input') {
            inputs = [{ label: currentFieldData.label, placeholder: currentFieldData.placeholder }];
            updateInputList();
        } else if (fieldType === 'select') {
            options = currentFieldData.options;
            updateOptionsList();
            $('#fieldOptionsContainer .label-text').text(currentFieldData.label);
        } else if (fieldType === 'checkbox' || fieldType === 'radio') {
            options = currentFieldData.options;
            updateOptionsList();
            $('#fieldOptionsContainer .label-text').text(currentFieldData.label || (fieldType === 'checkbox' ? 'Checkbox Field' : 'Radio Field'));
        } else if (fieldType === 'date') {
            dates = [currentFieldData.date];
            updateDateList();
            $('#dateFieldsContainer .label-text').text(currentFieldData.label);
        } else if (fieldType === 'multiselect') {
            multiselectOptions = currentFieldData.multiselectOptions;
            updateMultiselectList();
            $('#multiselectFieldsContainer .label-text').text(currentFieldData.label);
        }
        newOptionInput = null; // Reset new option input for editing
        newInputInput = null; // Reset new input input for editing
        newDateInput = null; // Reset new date input for editing
        newMultiselectInput = null; // Reset new multiselect option input for editing
        targetSection = sectionId; // Set the target section for editing
        setupNewOptionInput();
        setupNewInputInput();
        setupNewDateInput();
        setupNewMultiselectInput();
    });

    // Close modal
    $('#addFieldModal .btn-close').on('click', function() {
        const modal = bootstrap.Modal.getInstance('#addFieldModal');
        modal.hide();
        $('#fieldForm')[0].reset();
        $('#fieldOptionsContainer, #inputFieldsContainer, #dateFieldsContainer, #multiselectFieldsContainer').hide();
        options = [];
        inputs = [];
        dates = [];
        multiselectOptions = [];
        currentFieldData = null;
        newOptionInput = null;
        newInputInput = null;
        newDateInput = null;
        newMultiselectInput = null;
        targetSection = null;
        updateOptionsList();
        updateInputList();
        updateDateList();
        updateMultiselectList();
    });

    // Handle field type change to show/hide options or inputs and set label
    function setupFieldType() {
        $('#fieldType').on('change', function() {
            const fieldType = $(this).val();
            $('#fieldOptionsContainer, #inputFieldsContainer, #dateFieldsContainer, #multiselectFieldsContainer').hide();
            const $labelContainer = $('#fieldLabelContainer');
            const $labelText = $labelContainer.find('.label-text');
            const $editIcon = $labelContainer.find('.edit-icon');
            const $editableInput = $('#selectLabelEditable');

            if (fieldType === 'input') {
                $('#inputFieldsContainer').show();
                $labelText.text('').hide();
                $editIcon.hide();
                $editableInput.hide();
            } else if (fieldType === 'select') {
                $('#fieldOptionsContainer').show();
                $labelText.text('Select Field').show();
                $editIcon.show();
            } else if (fieldType === 'checkbox') {
                $('#fieldOptionsContainer').show();
                $labelText.text('Checkbox Field').show();
                $editIcon.show();
            } else if (fieldType === 'radio') {
                $('#fieldOptionsContainer').show();
                $labelText.text('Radio Field').show();
                $editIcon.show();
            } else if (fieldType === 'date') {
                $('#dateFieldsContainer').show();
                $labelText.text('Date Field').show();
                $editIcon.show();
            } else if (fieldType === 'multiselect') {
                $('#multiselectFieldsContainer').show();
                $labelText.text('MultiSelect Field').show();
                $editIcon.show();
            }
            options = []; // Reset options when changing field type
            inputs = []; // Reset inputs when changing field type
            dates = []; // Reset dates when changing field type
            multiselectOptions = []; // Reset multiselect options when changing field type
            newOptionInput = null; // Reset new option input
            newInputInput = null; // Reset new input input
            newDateInput = null; // Reset new date input
            newMultiselectInput = null; // Reset new multiselect option input
            updateOptionsList();
            updateInputList();
            updateDateList();
            updateMultiselectList();
            setupNewOptionInput();
            setupNewInputInput();
            setupNewDateInput();
            setupNewMultiselectInput();
        });
    }

    // Setup new option input for auto-saving
    function setupNewOptionInput() {
        const $newOption = $('#newOption');
        $newOption.off('blur keyup').on('blur keyup', function(e) {
            if (e.type === 'blur' || e.key === 'Enter') {
                const newOption = $(this).val().trim();
                if (newOption && newOptionInput !== newOption) { // Prevent duplicate additions
                    options.push(newOption);
                    newOptionInput = null; // Reset after saving
                    $(this).val(''); // Clear the input
                    updateOptionsList();
                }
            }
        });
    }

    // Add new blank option input when clicking "Add Option" (prevent blank options)
    $('#addOption').on('click', function() {
        const newOption = $('#newOption').val().trim();
        if (newOption) {
            options.push(newOption);
            newOptionInput = null; // Reset after saving a valid option
            $('#newOption').val(''); // Clear the input
            updateOptionsList();
        } else {
            // Add a new blank input for another option if the current one is empty
            if (!newOptionInput) {
                newOptionInput = ''; // Track new blank input
                $('#optionsList').append(`
                    <div class="option-item">
                        <input type="text" class="form-control new-option-input" placeholder="Enter option text">
                    </div>
                `);
                setupNewOptionBlankInput();
            }
        }
    });

    // Setup new blank option input for auto-saving
    function setupNewOptionBlankInput() {
        $('.new-option-input').off('blur keyup').on('blur keyup', function(e) {
            if (e.type === 'blur' || e.key === 'Enter') {
                const newOption = $(this).val().trim();
                if (newOption) {
                    options.push(newOption);
                    newOptionInput = null; // Reset after saving
                    $(this).closest('.option-item').remove(); // Remove the blank input
                    updateOptionsList();
                }
            }
        });
    }

    // Update options list in the modal (options are editable, save on blur/Enter, no remove option for unsaved inputs)
    function updateOptionsList() {
        const optionsHtml = options.map(option => `
            <div class="option-item">
                <input type="text" class="form-control" value="${option}" data-index="${options.indexOf(option)}">
                <button class="btn btn-danger remove-option ms-2">×</button>
            </div>
        `).join('');
        $('#optionsList').html(optionsHtml);

        // Handle editing and saving of saved options (save when clicking outside or pressing Enter)
        $('#optionsList input').off('blur keyup').on('blur keyup', function(e) {
            if (e.type === 'blur' || e.key === 'Enter') {
                const index = $(this).data('index');
                const newValue = $(this).val().trim();
                if (newValue) {
                    options[index] = newValue;
                } else {
                    $(this).val(options[index]); // Revert if empty
                }
            }
        });

        // Handle removal of saved options
        $('.remove-option').off('click').on('click', function() {
            const index = $(this).siblings('input').data('index');
            options.splice(index, 1);
            updateOptionsList();
        });

        // Handle label editing for select, checkbox, and radio fields (always editable) with pencil icon
        const $labelContainer = $('#fieldLabelContainer');
        const $labelText = $labelContainer.find('.label-text');
        const $editIcon = $labelContainer.find('.edit-icon');
        const $editableInput = $('#selectLabelEditable');
        const fieldType = $('#fieldType').val();

        $editIcon.off('click').on('click', function() {
            const currentLabel = $labelText.text().trim();
            $labelText.hide();
            $editIcon.hide();
            $editableInput.val(currentLabel).show().focus();

            // Save label when clicking outside or pressing Enter
            $editableInput.on('blur keyup', function(e) {
                if (e.type === 'blur' || e.key === 'Enter') {
                    const newLabel = $(this).val().trim();
                    if (newLabel) {
                        $labelText.text(newLabel).show();
                    } else {
                        $labelText.text(fieldType === 'select' ? 'Select Field' : fieldType === 'checkbox' ? 'Checkbox Field' : fieldType === 'radio' ? 'Radio Field' : fieldType === 'date' ? 'Date Field' : 'MultiSelect Field').show();
                    }
                    $editIcon.show();
                    $(this).hide();
                }
            });
        });
    }

    // Setup new input field for auto-saving
    function setupNewInputInput() {
        const $inputItems = $('#inputList .input-item');
        $inputItems.each(function() {
            const $labelInput = $(this).find('input.editable');
            const $placeholderInput = $(this).find('input[placeholder="Enter placeholder"]');
            const index = $(this).find('.label-text').data('index');

            $labelInput.off('blur keyup').on('blur keyup', function(e) {
                if (e.type === 'blur' || e.key === 'Enter') {
                    const newLabel = $(this).val().trim();
                    if (newLabel) {
                        inputs[index].label = newLabel;
                        $(this).closest('.input-item').find('.label-text').text(newLabel).show();
                        $(this).closest('.input-item').find('.edit-icon').show();
                    } else {
                        inputs[index].label = `Input ${index + 1}`;
                        $(this).closest('.input-item').find('.label-text').text(`Input ${index + 1}`).show();
                        $(this).closest('.input-item').find('.edit-icon').show();
                    }
                    $(this).hide();
                }
            });

            $placeholderInput.off('blur keyup').on('blur keyup', function(e) {
                if (e.type === 'blur' || e.key === 'Enter') {
                    const newPlaceholder = $(this).val().trim();
                    if (newPlaceholder) {
                        inputs[index].placeholder = newPlaceholder;
                    } else {
                        inputs[index].placeholder = '';
                        $(this).val(''); // Clear if empty
                    }
                }
            });
        });
    }

    // Add new blank input field when clicking "Add Input" (prevent blank inputs)
    $('#addInput').on('click', function() {
        const newInput = { label: `Input ${inputs.length + 1}`, placeholder: '' };
        inputs.push(newInput);
        updateInputList();
        setupNewInputInput();
    });

    // Update input list in the modal (inputs are editable, save on blur/Enter)
    function updateInputList() {
        const inputsHtml = inputs.map((input, index) => `
            <div class="input-item">
                <div class="Edit_Field_label">
                    <span class="label-text" data-index="${index}">${input.label}</span>
                    <iconify-icon icon="ph:pencil-simple-line" class="edit-icon" data-index="${index}"></iconify-icon>
                </div>
                <input type="text" class="form-control editable" data-index="${index}" value="${input.label}" style="display: none;">
               <div class="Inputwithremove_flex">
                <input type="text" class="form-control mt-2" placeholder="Enter placeholder" data-index="${index}" value="${input.placeholder}">
                <button class="btn btn-danger remove-option ms-2" style="display: ${input.label === `Input ${index + 1}` && !input.placeholder ? 'none' : 'block'}">×</button>
               </div>
            </div>
        `).join('');
        $('#inputList').html(inputsHtml);

        // Handle label editing with pencil icon
        $('.label-text, .edit-icon').off('click').on('click', function() {
            const index = $(this).data('index');
            const labelText = $('.label-text[data-index="' + index + '"]');
            const editIcon = $('.edit-icon[data-index="' + index + '"]');
            const editableInput = $('.editable[data-index="' + index + '"]');
            labelText.hide();
            editIcon.hide();
            editableInput.show().focus();
        });

        setupNewInputInput();

        // Handle removal of saved inputs
        $('.remove-option').off('click').on('click', function() {
            const index = $(this).closest('.input-item').find('.label-text').data('index');
            inputs.splice(index, 1);
            updateInputList();
        });
    }

    // Setup new date input for auto-saving
    function setupNewDateInput() {
        const $newDate = $('#newDate');
        flatpickr($newDate, {
            dateFormat: 'Y-m-d',
            onChange: function(selectedDates, dateStr) {
                if (dateStr && newDateInput !== dateStr) {
                    dates.push(dateStr);
                    newDateInput = null; // Reset after saving
                    updateDateList();
                }
            }
        });

        $newDate.off('blur').on('blur', function() {
            const dateStr = $(this).val().trim();
            if (dateStr && newDateInput !== dateStr) {
                dates.push(dateStr);
                newDateInput = null; // Reset after saving
                updateDateList();
            }
        });
    }

    // Update date list in the modal (date is editable, save on blur/change)
    function updateDateList() {
        const datesHtml = dates.map(date => `
            <div class="option-item">
                <input type="text" class="form-control customdataPicker flatpickr-input" value="${date}" data-index="${dates.indexOf(date)}" readonly="readonly">
                <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                <button class="btn btn-danger remove-option ms-2">×</button>
            </div>
        `).join('');
        $('#dateFieldsContainer').find('.fields-container').html(datesHtml);

        // Handle editing and saving of dates (save when changed via flatpickr)
        $('#dateFieldsContainer .customdataPicker').each(function() {
            flatpickr($(this)[0], {
                dateFormat: 'Y-m-d',
                onChange: function(selectedDates, dateStr, instance) {
                    const index = $(instance.input).data('index');
                    if (dateStr) {
                        dates[index] = dateStr;
                    } else {
                        $(instance.input).val(dates[index]); // Revert if empty
                    }
                }
            });
        });

        // Handle removal of saved dates
        $('#dateFieldsContainer .remove-option').off('click').on('click', function() {
            const index = $(this).siblings('.customdataPicker').data('index');
            dates.splice(index, 1);
            updateDateList();
        });

        // Handle label editing for date field (always editable) with pencil icon
        const $dateLabel = $('#dateFieldsContainer .label-text');
        const $dateEditIcon = $('#dateFieldsContainer .edit-icon');
        const $dateEditableInput = $('#dateLabelEditable');

        $dateEditIcon.off('click').on('click', function() {
            const currentLabel = $dateLabel.text().trim();
            $dateLabel.hide();
            $dateEditIcon.hide();
            $dateEditableInput.val(currentLabel).show().focus();

            // Save label when clicking outside or pressing Enter
            $dateEditableInput.on('blur keyup', function(e) {
                if (e.type === 'blur' || e.key === 'Enter') {
                    const newLabel = $(this).val().trim();
                    if (newLabel) {
                        $dateLabel.text(newLabel).show();
                    } else {
                        $dateLabel.text('Date Field').show(); // Default if empty
                    }
                    $dateEditIcon.show();
                    $(this).hide();
                }
            });
        });
    }

    // Setup new multiselect option input for auto-saving
    function setupNewMultiselectInput() {
        const $newMultiselectOption = $('#newMultiselectOption');
        $newMultiselectOption.off('blur keyup').on('blur keyup', function(e) {
            if (e.type === 'blur' || e.key === 'Enter') {
                const newOption = $(this).val().trim();
                if (newOption && newMultiselectInput !== newOption) { // Prevent duplicate additions
                    multiselectOptions.push(newOption);
                    newMultiselectInput = null; // Reset after saving
                    $(this).val(''); // Clear the input
                    updateMultiselectList();
                }
            }
        });
    }

    // Add new blank multiselect option input when clicking "Add Multiselect Option" (prevent blank options)
    $('#addMultiselectOption').on('click', function() {
        const newOption = $('#newMultiselectOption').val().trim();
        if (newOption) {
            multiselectOptions.push(newOption);
            newMultiselectInput = null; // Reset after saving a valid option
            $('#newMultiselectOption').val(''); // Clear the input
            updateMultiselectList();
        } else {
            // Add a new blank input for another option if the current one is empty
            if (!newMultiselectInput) {
                newMultiselectInput = ''; // Track new blank input
                $('#multiselectOptionsList').append(`
                    <div class="multiselect-item">
                        <input type="text" class="form-control new-multiselect-input" placeholder="Enter option text">
                    </div>
                `);
                setupNewMultiselectBlankInput();
            }
        }
    });

    // Setup new blank multiselect option input for auto-saving
    function setupNewMultiselectBlankInput() {
        $('.new-multiselect-input').off('blur keyup').on('blur keyup', function(e) {
            if (e.type === 'blur' || e.key === 'Enter') {
                const newOption = $(this).val().trim();
                if (newOption) {
                    multiselectOptions.push(newOption);
                    newMultiselectInput = null; // Reset after saving
                    $(this).closest('.multiselect-item').remove(); // Remove the blank input
                    updateMultiselectList();
                }
            }
        });
    }

    // Update options list in the modal (options are editable, save on blur/Enter, no remove option for unsaved inputs)
    function updateOptionsList() {
        const optionsHtml = options.map(option => `
            <div class="option-item">
                <input type="text" class="form-control" value="${option}" data-index="${options.indexOf(option)}">
                <button class="btn btn-danger remove-option ms-2">×</button>
            </div>
        `).join('');
        $('#optionsList').html(optionsHtml);

        // Handle editing and saving of saved options (save when clicking outside or pressing Enter)
        $('#optionsList input').off('blur keyup').on('blur keyup', function(e) {
            if (e.type === 'blur' || e.key === 'Enter') {
                const index = $(this).data('index');
                const newValue = $(this).val().trim();
                if (newValue) {
                    options[index] = newValue;
                } else {
                    $(this).val(options[index]); // Revert if empty
                }
            }
        });

        // Handle removal of saved options
        $('.remove-option').off('click').on('click', function() {
            const index = $(this).siblings('input').data('index');
            options.splice(index, 1);
            updateOptionsList();
        });

        // Handle label editing for select, checkbox, and radio fields (always editable) with pencil icon
        const $labelContainer = $('#fieldLabelContainer');
        const $labelText = $labelContainer.find('.label-text');
        const $editIcon = $labelContainer.find('.edit-icon');
        const $editableInput = $('#selectLabelEditable');
        const fieldType = $('#fieldType').val();

        $editIcon.off('click').on('click', function() {
            const currentLabel = $labelText.text().trim();
            $labelText.hide();
            $editIcon.hide();
            $editableInput.val(currentLabel).show().focus();

            // Save label when clicking outside or pressing Enter
            $editableInput.on('blur keyup', function(e) {
                if (e.type === 'blur' || e.key === 'Enter') {
                    const newLabel = $(this).val().trim();
                    if (newLabel) {
                        $labelText.text(newLabel).show();
                    } else {
                        $labelText.text(fieldType === 'select' ? 'Select Field' : fieldType === 'checkbox' ? 'Checkbox Field' : fieldType === 'radio' ? 'Radio Field' : fieldType === 'date' ? 'Date Field' : 'MultiSelect Field').show();
                    }
                    $editIcon.show();
                    $(this).hide();
                }
            });
        });
    }

    // Update multiselect list in the modal (multiselect options are editable, save on blur/Enter)
    function updateMultiselectList() {
        const multiselectHtml = multiselectOptions.map(option => `
            <div class="multiselect-item">
                <input type="text" class="form-control" value="${option}" data-index="${multiselectOptions.indexOf(option)}">
                <button class="btn btn-danger remove-option ms-2">×</button>
            </div>
        `).join('');
        $('#multiselectOptionsList').html(multiselectHtml);

        // Handle editing and saving of multiselect options (save when clicking outside or pressing Enter)
        $('#multiselectOptionsList input').off('blur keyup').on('blur keyup', function(e) {
            if (e.type === 'blur' || e.key === 'Enter') {
                const index = $(this).data('index');
                const newValue = $(this).val().trim();
                if (newValue) {
                    multiselectOptions[index] = newValue;
                } else {
                    $(this).val(multiselectOptions[index]); // Revert if empty
                }
            }
        });

        // Handle removal of multiselect options
        $('#multiselectOptionsList .remove-option').off('click').on('click', function() {
            const index = $(this).siblings('input').data('index');
            multiselectOptions.splice(index, 1);
            updateMultiselectList();
        });

        // Handle label editing for multiselect field (always editable) with pencil icon
        const $multiselectLabel = $('#multiselectFieldsContainer .label-text');
        const $multiselectEditIcon = $('#multiselectFieldsContainer .edit-icon');
        const $multiselectEditableInput = $('#multiselectLabelEditable');

        $multiselectEditIcon.off('click').on('click', function() {
            const currentLabel = $multiselectLabel.text().trim();
            $multiselectLabel.hide();
            $multiselectEditIcon.hide();
            $multiselectEditableInput.val(currentLabel).show().focus();

            // Save label when clicking outside or pressing Enter
            $multiselectEditableInput.on('blur keyup', function(e) {
                if (e.type === 'blur' || e.key === 'Enter') {
                    const newLabel = $(this).val().trim();
                    if (newLabel) {
                        $multiselectLabel.text(newLabel).show();
                    } else {
                        $multiselectLabel.text('MultiSelect Field').show(); // Default if empty
                    }
                    $multiselectEditIcon.show();
                    $(this).hide();
                }
            });
        });
    }

    // Submit new field form (or update existing field) to the target section
    $('#fieldForm').on('submit', function(e) {
        e.preventDefault();
        const fieldType = $('#fieldType').val();
        let fieldHtml = '';

        if (fieldType === 'input') {
            if (inputs.length === 0) {
                inputs.push({ label: 'Input 1', placeholder: '' });
            }
            inputs.forEach(input => {
                fieldHtml += `
                    <div class="dynamic-field">
                        <label class="form-label">${input.label}</label>
                        <input type="text" placeholder="${input.placeholder}" class="form-control">
                        <button class="remove-field">×</button>
                        <button class="edit-field"><iconify-icon icon="fluent:edit-16-regular"></iconify-icon></button>
                    </div>`;
            });
        } else if (fieldType === 'select') {
            let selectLabel = $('#fieldOptionsContainer .label-text').text() || 'Select Field';
            let selectOptions = '<select class="select2 form-select">';
            options.forEach(option => {
                selectOptions += `<option value="${option}">${option}</option>`;
            });
            selectOptions += '</select>';
            fieldHtml = `
                <div class="dynamic-field">
                    <label class="form-label">${selectLabel}</label>
                    ${selectOptions}
                    <button class="remove-field">×</button>
                    <button class="edit-field"><iconify-icon icon="fluent:edit-16-regular"></iconify-icon></button>
                </div>`;
        } else if (fieldType === 'checkbox') {
            let checkboxLabel = $('#fieldOptionsContainer .label-text').text() || 'Checkbox Field';
            let checkboxes = '<div class="FlexCheckbox_container">';
            options.forEach(option => {
                checkboxes += `
                     <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="${option.replace(' ', '-')}" name="checkbox-group">
                        <label class="form-check-label" for="${option.replace(' ', '-')}">${option}</label>
                    </div>`;
            });
            checkboxes += '</div>';
            fieldHtml = `
                <div class="dynamic-field">
                    <label class="form-label">${checkboxLabel}</label>
                    ${checkboxes}
                    <button class="remove-field">×</button>
                    <button class="edit-field"><iconify-icon icon="fluent:edit-16-regular"></iconify-icon></button>
                </div>`;
        } else if (fieldType === 'radio') {
            let radioLabel = $('#fieldOptionsContainer .label-text').text() || 'Radio Field';
            let radios = '<div class="FlexCheckbox_container">';
            options.forEach(option => {
                radios += `
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="${option.replace(' ', '-')}" name="radio-group" value="${option}">
                        <label class="form-check-label" for="${option.replace(' ', '-')}">${option}</label>
                    </div>`;
            });
            radios += '</div>';
            fieldHtml = `
                <div class="dynamic-field">
                    <label class="form-label">${radioLabel}</label>
                    ${radios}
                    <button class="remove-field">×</button>
                    <button class="edit-field"><iconify-icon icon="fluent:edit-16-regular"></iconify-icon></button>
                </div>`;
        } else if (fieldType === 'date') {
            let dateLabel = $('#dateFieldsContainer .label-text').text() || 'Date Field';
            if (dates.length === 0) {
                dates.push(''); // Default empty date if none provided
            }
            dates.forEach(date => {
                fieldHtml += `
                    <div class="dynamic-field">
                        <label class="form-label">${dateLabel}</label>
                        <div class="form-group">
                            <input class="form-control customdataPicker flatpickr-input" type="text" value="${date}" placeholder="Select Date" readonly="readonly">
                            <iconify-icon icon="ion:calendar-outline" class="dateinput_icon"></iconify-icon>
                        </div>
                        <button class="remove-field">×</button>
                        <button class="edit-field"><iconify-icon icon="fluent:edit-16-regular"></iconify-icon></button>
                    </div>`;
            });
        } else if (fieldType === 'multiselect') {
            let multiselectLabel = $('#multiselectFieldsContainer .label-text').text() || 'MultiSelect Field';
            fieldHtml = `
                <div class="dynamic-field">
                    <label class="form-label">${multiselectLabel}</label>
                    <div class="dropdown-multiselect">
                        <div class="multiselect-preview dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Select options
                            <div class="buttons">
                                <button class="edit-btn btn btn-link">Edit</button>
                                <button class="remove-btn btn btn-link">×</button>
                            </div>
                        </div>
                        <div class="dropdown-menu">
                            ${multiselectOptions.map(option => `
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input multiselect-checkbox" id="${option.replace(' ', '-')}" value="${option}">
                                    <label class="form-check-label" for="${option.replace(' ', '-')}" style="cursor: pointer;">${option}</label>
                                </div>
                            `).join('')}
                        </div>
                    </div>
                    <button class="remove-field">×</button>
                    <button class="edit-field"><iconify-icon icon="fluent:edit-16-regular"></iconify-icon></button>
                </div>`;
        }

        // If editing an existing field, replace it in the target section; otherwise, append to the target section
        if (currentFieldData) {
            $(`.fields-container[data-section="${targetSection}"] .dynamic-field`).each(function() {
                if ($(this).find('label').text() === currentFieldData.label && $(this).find('.customdataPicker').length === (fieldType === 'date' ? 1 : 0) ||
                    $(this).find('.select2').length === (fieldType === 'select' ? 1 : 0) ||
                    $(this).find('.multiselect-preview').length === (fieldType === 'multiselect' ? 1 : 0)) {
                    $(this).replaceWith(fieldHtml);
                    return false; // Break the loop after replacing
                }
            });
        } else {
            $(`.fields-container[data-section="${targetSection}"]`).append(fieldHtml);
        }

        // Initialize Select2 for new or edited select fields
        $('.select2').select2({
            placeholder: "Select an option",
            allowClear: true
        });

        // Initialize flatpickr for date fields
        $('.customdataPicker').each(function() {
            flatpickr($(this)[0], {
                dateFormat: 'Y-m-d',
                onChange: function(selectedDates, dateStr) {
                    const $field = $(this.input).closest('.dynamic-field');
                    const index = $field.find('.customdataPicker').index(this.input);
                    if (dateStr) {
                        dates[index] = dateStr;
                    } else {
                        dates[index] = '';
                        $(this.input).val(''); // Revert if empty
                    }
                }
            });
        });

        // Handle multiselect preview and checkboxes
        $('.multiselect-preview').off('click').on('click', function(e) {
            if (!$(e.target).hasClass('edit-btn') && !$(e.target).hasClass('remove-btn')) {
                // Dropdown toggle is handled by Bootstrap
            }
        });

        $('.multiselect-checkbox').off('change').on('change', function() {
            updateMultiselectPreview($(this).closest('.dynamic-field').find('.multiselect-preview'));
        });

        $('.edit-btn').off('click').on('click', function(e) {
            e.stopPropagation();
            const $field = $(this).closest('.dynamic-field');
            const label = $field.find('label').text();
            const multiselectOptions = $field.find('.multiselect-checkbox:checked').map(function() {
                return $(this).val();
            }).get();
            currentFieldData = { type: 'multiselect', label, multiselectOptions };
            $('#fieldType').val('multiselect').trigger('change');
            multiselectOptions.forEach(option => multiselectOptions.push(option));
            updateMultiselectList();
            $('#multiselectFieldsContainer .label-text').text(label);
            const modal = new bootstrap.Modal('#addFieldModal');
            modal.show();
        });

        $('.remove-btn').off('click').on('click', function(e) {
            e.stopPropagation();
            $(this).closest('.dynamic-field').remove();
        });

        // Remove field functionality (only delete in section)
        $('.remove-field').off('click').on('click', function() {
            $(this).closest('.dynamic-field').remove();
        });

        // Reset and hide modal
        const modal = bootstrap.Modal.getInstance('#addFieldModal');
        modal.hide();
        $('#fieldForm')[0].reset();
        $('#fieldOptionsContainer, #inputFieldsContainer, #dateFieldsContainer, #multiselectFieldsContainer').hide();
        options = [];
        inputs = [];
        dates = [];
        multiselectOptions = [];
        currentFieldData = null;
        newOptionInput = null;
        newInputInput = null;
        newDateInput = null;
        newMultiselectInput = null;
        targetSection = null;
        updateOptionsList();
        updateInputList();
        updateDateList();
        updateMultiselectList();
    });

    // Update multiselect preview to show count of selected options
    function updateMultiselectPreview($preview) {
        const $checkboxes = $preview.closest('.dropdown-multiselect').find('.multiselect-checkbox:checked');
        const count = $checkboxes.length;
        if (count > 0) {
            $preview.text(`${count} selected`).addClass('selected');
        } else {
            $preview.text('Select options').removeClass('selected');
        }
    }

    // Update options list in the modal (options are editable, save on blur/Enter, no remove option for unsaved inputs)
    function updateOptionsList() {
        const optionsHtml = options.map(option => `
            <div class="option-item">
                <input type="text" class="form-control" value="${option}" data-index="${options.indexOf(option)}">
                <button class="btn btn-danger remove-option ms-2">×</button>
            </div>
        `).join('');
        $('#optionsList').html(optionsHtml);

        // Handle editing and saving of saved options (save when clicking outside or pressing Enter)
        $('#optionsList input').off('blur keyup').on('blur keyup', function(e) {
            if (e.type === 'blur' || e.key === 'Enter') {
                const index = $(this).data('index');
                const newValue = $(this).val().trim();
                if (newValue) {
                    options[index] = newValue;
                } else {
                    $(this).val(options[index]); // Revert if empty
                }
            }
        });

        // Handle removal of saved options
        $('.remove-option').off('click').on('click', function() {
            const index = $(this).siblings('input').data('index');
            options.splice(index, 1);
            updateOptionsList();
        });

        // Handle label editing for select, checkbox, and radio fields (always editable) with pencil icon
        const $labelContainer = $('#fieldLabelContainer');
        const $labelText = $labelContainer.find('.label-text');
        const $editIcon = $labelContainer.find('.edit-icon');
        const $editableInput = $('#selectLabelEditable');
        const fieldType = $('#fieldType').val();

        $editIcon.off('click').on('click', function() {
            const currentLabel = $labelText.text().trim();
            $labelText.hide();
            $editIcon.hide();
            $editableInput.val(currentLabel).show().focus();

            // Save label when clicking outside or pressing Enter
            $editableInput.on('blur keyup', function(e) {
                if (e.type === 'blur' || e.key === 'Enter') {
                    const newLabel = $(this).val().trim();
                    if (newLabel) {
                        $labelText.text(newLabel).show();
                    } else {
                        $labelText.text(fieldType === 'select' ? 'Select Field' : fieldType === 'checkbox' ? 'Checkbox Field' : fieldType === 'radio' ? 'Radio Field' : fieldType === 'date' ? 'Date Field' : 'MultiSelect Field').show();
                    }
                    $editIcon.show();
                    $(this).hide();
                }
            });
        });
    }
});