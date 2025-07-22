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
  "customer-approved.php": {
    title: "All Approved Customers",
    breadcrumbs: ["KYC & Business Management", "All Approved Customers"]
  },
  "customer-rejected.php": {
    title: "All Rejected Customers",
    breadcrumbs: ["KYC & Business Management", "All Rejected Customers"]
  },
  "customer-all.php": {
    title: "All Customers",
    breadcrumbs: ["Customers Management", "All Customers"]
  },
  "customer-approved-view.php": {
    title: "Approved Customer Details",
    breadcrumbs: ["KYC & Business Management", "Approved Customer Details"]
  },
  "customer-rejected-view.php": {
    title: "Rejected Customer Details",
    breadcrumbs: ["KYC & Business Management", "Rejected Customer Details"]
  },
    "credit-assessment.php": {
    title: "All Credit Assessment Status",
    breadcrumbs: ["Dashboard", "All Credit Assessment Status"]
  },
      "credit-assessment-view.php": {
    title: "Customer All Details",
    breadcrumbs: ["Dashboard", "Customer All Details"]
  },
     "customer-consent.php": {
    title: "All Customer Consent Request",
    breadcrumbs: ["Dashboard", "Customer Consent Request"]
  },
     "customer-consent-view.php": {
    title: "Customer Details",
    breadcrumbs: ["Customer Consent", "Customer Details"]
  },
      "disbursement-approval.php": {
    title: "Disbursement Approval",
    breadcrumbs: ["Dashboard", "Disbursement Approval"]
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
