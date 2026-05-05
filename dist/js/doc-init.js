document.addEventListener('DOMContentLoaded', function () {
  console.log("DOM fully loaded");

  var options = {
    valueNames: ['component', 'category', { name: 'link', attr: 'href' }],
    item: `<li><a class="dropdown-item link">
              <span class="category"></span><span class="cat-sep">/</span><span class="component"></span>
           </a></li>`
  };

  var docSearchList = new List('doc-list', options);
  console.log("List initialized", docSearchList);

  fetch("dist/doc-search.json")
    .then(response => {
      console.log("JSON fetch success", response);
      return response.json();
    })
    .then(data => {
      console.log("JSON parsed", data);
      docSearchList.add(data);
      $('.no-result').hide();
    })
    .catch(err => console.error("JSON fetch error", err));

  docSearchList.on('updated', function (list) {
    const resultCount = list.matchingItems.length;
    console.log("Search updated. Matches:", resultCount);
    if (resultCount > 0) {
      $('.no-result').hide();
    } else {
      $('.no-result').show();
    }

    const search_term = $('.doc-form-control').val();
    $('.category,.component').removeHighlight?.().highlight?.(search_term);
  });

  $(document).on("show.bs.dropdown", "#doc-list .dropdown-toggle", function () {
    docSearchList.search();
  });

  $(document).on("keyup", function (e) {
    if (e.keyCode === 191) {
      $('#doc-list .input-search input').trigger('focus');
      $("#doc-list .dropdown-toggle").dropdown('show');
    }
  });
});
