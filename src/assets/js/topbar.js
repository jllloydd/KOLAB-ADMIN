document.addEventListener("DOMContentLoaded", function() {
    var currentUrl = window.location.href;
    var dashboardUrl = "dashboard/";

    if (currentUrl.includes(dashboardUrl)) {
        document.querySelector(".topbar-image-dashboard").classList.add("active");
        document.querySelector(".topbar-dashboard-text").classList.add("active");
    }
});

document.addEventListener("DOMContentLoaded", function() {
    var currentUrl = window.location.href;
    var dashboardUrl = "bookings/";

    if (currentUrl.includes(dashboardUrl)) {
        document.querySelector(".topbar-image-booking").classList.add("active");
        document.querySelector(".topbar-booking-text").classList.add("active");
    }
});

document.addEventListener("DOMContentLoaded", function() {
    var currentUrl = window.location.href;
    var dashboardUrl = "admins/";

    if (currentUrl.includes(dashboardUrl)) {
        document.querySelector(".topbar-image-admin").classList.add("active");
        document.querySelector(".topbar-admin-text").classList.add("active");
    }
});

document.addEventListener("DOMContentLoaded", function() {
    var currentUrl = window.location.href;
    var dashboardUrl = "users/";

    if (currentUrl.includes(dashboardUrl)) {
        document.querySelector(".topbar-image-user").classList.add("active");
        document.querySelector(".topbar-user-text").classList.add("active");
    }
});



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
  
  
  