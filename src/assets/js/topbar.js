document.addEventListener("DOMContentLoaded", function() {
    var currentUrl = window.location.href;
    var dashboardUrl = "bookings/";

    if (currentUrl.includes(dashboardUrl)) {
        document.querySelector(".topbar-heading").textContent = "Bookings";
    }
});

document.addEventListener("DOMContentLoaded", function() {
    var currentUrl = window.location.href;
    var dashboardUrl = "admins/";

    if (currentUrl.includes(dashboardUrl)) {
        document.querySelector(".topbar-heading").textContent = "Admins";
    }
});

document.addEventListener("DOMContentLoaded", function() {
    var currentUrl = window.location.href;
    var dashboardUrl = "users/";

    if (currentUrl.includes(dashboardUrl)) {
        document.querySelector(".topbar-heading").textContent = "Users";
    }
});

function toggleCollapse() {
    var content = document.getElementById('navbar-collapse');
    if (content.classList.contains('show')) {
      content.classList.remove('show');
    } else {
      content.classList.add('show');
    }
  }
  
  
  