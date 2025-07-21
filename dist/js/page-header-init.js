const pageConfig = {
  "index.php": {
    title: "Dashboard Overview",
    breadcrumbs: ["Home", "Dashboard"]
  },
  "customer-new.php": {
    title: "All New Customers",
    breadcrumbs: ["Dashboard", "All New Customers"]
  },
  "customer-view.php": {
    title: "Customer Details",
    breadcrumbs: ["New Customer","Customer Details"]
  },
  "collection-reports.html": {
    title: "Collection Reports",
    breadcrumbs: ["Reports & Analytics", "Collection Reports"]
  },
  "settings.html": {
    title: "General Settings",
    breadcrumbs: ["Settings", "General Settings"]
  },
  "profile.html": {
    title: "Profile",
    breadcrumbs: ["Pages", "Profile"]
  },
  "edit-profile.html": {
    title: "Edit Profile",
    breadcrumbs: ["Pages", "Edit Profile"]
  },
  "risk-rules.html": {
    title: "Risk Rules",
    breadcrumbs: ["Settings", "Risk Rules"]
  }
  // Add more pages if needed
};

document.addEventListener('DOMContentLoaded', function () {
  let path = window.location.pathname;
  let currentPage = path.substring(path.lastIndexOf('/') + 1);

  // ✅ Treat empty string (like from /asap-admin/) as index.php
  if (!currentPage || currentPage === '') {
    currentPage = 'index.php';
  }

  const config = pageConfig[currentPage];

  if (config) {
    const titleElement = document.querySelector('.pg-title');
    if (titleElement) titleElement.textContent = config.title;

    const breadcrumbElement = document.querySelector('.breadcrumb');
    if (breadcrumbElement) {
      breadcrumbElement.innerHTML = '';
      config.breadcrumbs.forEach((crumb, index) => {
        const li = document.createElement('li');
        li.classList.add('breadcrumb-item');

        if (index === config.breadcrumbs.length - 1) {
          li.classList.add('active');
          li.setAttribute('aria-current', 'page');
          li.textContent = crumb;
        } else {
          const a = document.createElement('a');
          a.href = '#';
          a.textContent = crumb;
          li.appendChild(a);
        }

        breadcrumbElement.appendChild(li);
      });
    }

    // ✅ Show the header now that everything is set
    document.querySelector('.js-header')?.style.removeProperty('display');
  }
});
