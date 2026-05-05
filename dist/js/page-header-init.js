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
  },
    "disbursement-scheduled.php": {
    title: "All Scheduled Disbursements",
    breadcrumbs: ["Manage Disbursement", "Scheduled Disbursement"]
  },
    "disbursement-scheduled-view.php": {
    title: "Scheduled Customer Details",
    breadcrumbs: ["Manage Disbursement", "Scheduled Customer Details"]
  },
  "disbursement-today.php": {
    title: "Today Disbursements",
    breadcrumbs: ["Manage Disbursement", "Today Disbursements"]
  },
    "disbursement-today-view.php": {
    title: "Today Disbursement Customer Details",
    breadcrumbs: ["Manage Disbursement", "Today Disbursements"]
  },
    "disbursed-due.php": {
    title: "Due Disbursements",
    breadcrumbs: ["Manage Disbursement", "Due Disbursements"]
  },
    "disbursed-due-view.php": {
    title: "Due Disbursement Customer Details",
    breadcrumbs: ["Manage Disbursement", "Due Disbursements"]
  },
   "disbursed-loans.php": {
    title: "All Disbursed Loans",
    breadcrumbs: ["Manage Disbursement", "All Disbursed Loans"]
  },
     "emi-all-customer.php": {
    title: "Customer's EMI",
    breadcrumbs: ["Manage Collections", "Customer's EMI"]
  },
  "emi-pending.php": {
      title: "Today's Pending EMI",
      breadcrumbs: ["Manage Collections", "Today's Pending EMI"]
    },
     "emi-received.php": {
      title: "Today's Received EMI",
      breadcrumbs: ["Manage Collections", "Today's Received EMI"]
    },
        "emi-overdue.php": {
      title: "All Overdue EMI",
      breadcrumbs: ["Manage Collections", "All Overdue EMI"]
    },
    "closed-loan.php": {
      title: "All Closed Loan",
      breadcrumbs: ["Manage Collections", "All Closed Loan"]
    },
     "product-category.php": {
      title: "All Category",
      breadcrumbs: ["Loan Products", "All Category"]
    },
      "tenure.php": {
      title: "All Tenures",
      breadcrumbs: ["Loan Products", "All Tenures"]
    },
       "products.php": {
      title: "All Products",
      breadcrumbs: ["Loan Products", "All Products"]
    },
       "system-activity.php": {
      title: "Overall System Activity",
      breadcrumbs: ["Dashboard", "Overall System Activity"]
    },
         "support-tickets.php": {
      title: "All Support Tickets",
      breadcrumbs: ["Dashboard", "All Support Tickets"]
    },
     "ticket-details.php": {
      title: "Ticket Details",
      breadcrumbs: ["All Support Tickets", "Ticket Details"]
    },
      "user-management.php": {
      title: "User Management",
      breadcrumbs: ["User Permission", "User Management"]
    },
       "roles-permission.php": {
      title: "Roles & Permissions",
      breadcrumbs: ["User Permission", "Roles & Permissions"]
    },
       "roles-permission-add.php": {
      title: "Add New Roles & Permissions",
      breadcrumbs: ["User Permission", "Roles & Permissions"]
    },
        "role-permission-edit.php": {
      title: "Update Role & Permissions",
      breadcrumbs: ["User Permission", "Update Role & Permissions"]
    },
      "dsa-list.php": {
      title: "All DSA",
      breadcrumbs: ["DSA Management", "All DSA"]
    },
        "all-leads.php": {
      title: "All Leads",
      breadcrumbs: ["DSA Management", "All Leads"]
    },
        "dsa-report.php": {
      title: "Report",
      breadcrumbs: ["DSA Management", "All DSA Report"]
    },
      "dsa-details.php": {
      title: "DSA Details",
      breadcrumbs: ["DSA Management", "DSA Details"]
    },

    
    
  
  // Add more pages if needed
};

document.addEventListener('DOMContentLoaded', function () {
  let path = window.location.pathname;
  let currentPage = path.substring(path.lastIndexOf('/') + 1);

  // ✅ Treat empty string (like from /VASAP-admin/) as index.php
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
