document.addEventListener("DOMContentLoaded", function() {
    var currentUrl = window.location.href;
    var dashboardUrl = "dashboard/";

    if (currentUrl.includes(dashboardUrl)) {
        document.querySelector(".image-dashboard").classList.add("active");
        document.querySelector(".dashboard-text").classList.add("active");
    }
});

document.addEventListener("DOMContentLoaded", function() {
    var currentUrl = window.location.href;
    var dashboardUrl = "bookings/";

    if (currentUrl.includes(dashboardUrl)) {
        document.querySelector(".image-booking").classList.add("active");
        document.querySelector(".booking-text").classList.add("active");
    }
});

document.addEventListener("DOMContentLoaded", function() {
    var currentUrl = window.location.href;
    var dashboardUrl = "admins/";

    if (currentUrl.includes(dashboardUrl)) {
        document.querySelector(".image-admin").classList.add("active");
        document.querySelector(".admin-text").classList.add("active");
    }
});

document.addEventListener("DOMContentLoaded", function() {
    var currentUrl = window.location.href;
    var dashboardUrl = "users/";

    if (currentUrl.includes(dashboardUrl)) {
        document.querySelector(".image-user").classList.add("active");
        document.querySelector(".user-text").classList.add("active");
    }
});

