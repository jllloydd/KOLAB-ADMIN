var start_date = document.getElementById("event-start-date")
    , timepicker1 = document.getElementById("timepicker1")
    , timepicker2 = document.getElementById("timepicker2")
    , date_range = null
    , T_check = null;
function flatPickrInit() {
    var e = {
        enableTime: !0,
        noCalendar: !0
    };
    flatpickr(start_date, {
        enableTime: !1,
        mode: "range",
        minDate: "today",
        onChange: function (e, t, n) {
            1 < t.split("to").length ? document.getElementById("event-time").setAttribute("hidden", !0) : (document.getElementById("timepicker1").parentNode.classList.remove("d-none"),
                document.getElementById("timepicker1").classList.replace("d-none", "d-block"),
                document.getElementById("timepicker2").parentNode.classList.remove("d-none"),
                document.getElementById("timepicker2").classList.replace("d-none", "d-block"),
                document.getElementById("event-time").removeAttribute("hidden"))
        }
    });
    flatpickr(timepicker1, e),
        flatpickr(timepicker2, e)
}
function flatpicekrValueClear() {
    start_date.flatpickr().clear(),
        timepicker1.flatpickr().clear(),
        timepicker2.flatpickr().clear()
}
function eventClicked() {
    document.getElementById("form-event").classList.add("view-event"),
        document.getElementById("event-title").classList.replace("d-block", "d-none"),
        document.getElementById("event-category").classList.replace("d-block", "d-none"),
        document.getElementById("event-start-date").parentNode.classList.add("d-none"),
        document.getElementById("event-start-date").classList.replace("d-block", "d-none"),
        document.getElementById("event-time").setAttribute("hidden", !0),
        document.getElementById("timepicker1").parentNode.classList.add("d-none"),
        document.getElementById("timepicker1").classList.replace("d-block", "d-none"),
        document.getElementById("timepicker2").parentNode.classList.add("d-none"),
        document.getElementById("timepicker2").classList.replace("d-block", "d-none"),
        document.getElementById("event-location").classList.replace("d-block", "d-none"),
        document.getElementById("event-description").classList.replace("d-block", "d-none"),
        document.getElementById("event-start-date-tag").classList.replace("d-none", "d-block"),
        document.getElementById("event-timepicker1-tag").classList.replace("d-none", "d-block"),
        document.getElementById("event-timepicker2-tag").classList.replace("d-none", "d-block"),
        document.getElementById("event-location-tag").classList.replace("d-none", "d-block"),
        document.getElementById("event-description-tag").classList.replace("d-none", "d-block"),
        document.getElementById("btn-save-event").setAttribute("hidden", !0)
}
function editEvent(e) {
    var t = e.getAttribute("data-id");
    ("new-event" == t ? (document.getElementById("modal-title").innerHTML = "",
        document.getElementById("modal-title").innerHTML = "Add Event",
        document.getElementById("btn-save-event").innerHTML = "Add Event",
        eventTyped) : "edit-event" == t ? (e.innerHTML = "Cancel",
            e.setAttribute("data-id", "cancel-event"),
            document.getElementById("btn-save-event").innerHTML = "Update Event",
            e.removeAttribute("hidden"),
            eventTyped) : (e.innerHTML = "Edit",
                e.setAttribute("data-id", "edit-event"),
                eventClicked))()
}
function eventTyped() {
    document.getElementById("form-event").classList.remove("view-event"),
        document.getElementById("event-title").classList.replace("d-none", "d-block"),
        document.getElementById("event-category").classList.replace("d-none", "d-block"),
        document.getElementById("event-start-date").parentNode.classList.remove("d-none"),
        document.getElementById("event-start-date").classList.replace("d-none", "d-block"),
        document.getElementById("timepicker1").parentNode.classList.remove("d-none"),
        document.getElementById("timepicker1").classList.replace("d-none", "d-block"),
        document.getElementById("timepicker2").parentNode.classList.remove("d-none"),
        document.getElementById("timepicker2").classList.replace("d-none", "d-block"),
        document.getElementById("event-location").classList.replace("d-none", "d-block"),
        document.getElementById("event-description").classList.replace("d-none", "d-block"),
        document.getElementById("event-start-date-tag").classList.replace("d-block", "d-none"),
        document.getElementById("event-timepicker1-tag").classList.replace("d-block", "d-none"),
        document.getElementById("event-timepicker2-tag").classList.replace("d-block", "d-none"),
        document.getElementById("event-location-tag").classList.replace("d-block", "d-none"),
        document.getElementById("event-description-tag").classList.replace("d-block", "d-none"),
        document.getElementById("btn-save-event").removeAttribute("hidden")
}
function upcomingEvent(e) {
    e.sort(function (e, t) {
        return new Date(e.start) - new Date(t.start)
    }),
        document.getElementById("upcomingEvent").innerHTML = null,
        Array.from(e).forEach(function (e) {
            var t = e.title
                , n = (l = e.end ? (endUpdatedDay = new Date(e.end)).setDate(endUpdatedDay.getDate() - 1) : l) || void 0;
            n = "Invalid Date" == n || null == n ? null : (a = new Date(n).toLocaleDateString("en", {
                year: "numeric",
                month: "numeric",
                day: "numeric"
            }),
                new Date(a).toLocaleDateString("en-GB", {
                    day: "numeric",
                    month: "short",
                    year: "numeric"
                }).split(" ").join(" "));
            (e.start ? str_dt(e.start) : null) === (l ? str_dt(l) : null) && (n = null);
            var a = e.start
                , d = (a = "Invalid Date" === a || void 0 === a ? null : (d = new Date(a).toLocaleDateString("en", {
                    year: "numeric",
                    month: "numeric",
                    day: "numeric"
                }),
                    new Date(d).toLocaleDateString("en-GB", {
                        day: "numeric",
                        month: "short",
                        year: "numeric"
                    }).split(" ").join(" ")),
                    n ? " to " + n : "")
                , n = e.className.split("-")
                , i = e.description || ""
                , e = tConvert(getTime(e.start))
                , l = (e == (l = tConvert(getTime(l))) && (e = "Full day event",
                    l = null),
                    l ? " to " + l : "");
            u_event = "<div class='card mb-3'>                        <div class='card-body'>                            <div class='d-flex mb-3'>                                <div class='flex-grow-1'><i class='mdi mdi-checkbox-blank-circle me-2 text-" + n[1] + "'></i><span class='fw-medium'>" + a + d + " </span></div>                                <div class='flex-shrink-0'><small class='badge bg-primary-subtle text-primary ms-auto'>" + e + l + "</small></div>                            </div>                            <h6 class='card-title fs-16'> " + t + "</h6>                            <p class='text-muted text-truncate-two-lines mb-0'> " + i + "</p>                        </div>                    </div>",
                document.getElementById("upcomingEvent").innerHTML += u_event
        })
}
function getTime(e) {
    if (null != (e = new Date(e)).getHours())
        return e.getHours() + ":" + (e.getMinutes() ? e.getMinutes() : 0)
}
function tConvert(e) {
    var e = e.split(":")
        , t = e[0]
        , e = e[1]
        , n = 12 <= t ? "PM" : "AM";
    return (t = (t %= 12) || 12) + ":" + (e < 10 ? "0" + e : e) + " " + n
}
document.addEventListener("DOMContentLoaded", function () {
    flatPickrInit();
    var modal = new bootstrap.Modal(document.getElementById("event-modal"), {
        keyboard: false
    });

    var calendarEl = document.getElementById("calendar");
    var calendar = new FullCalendar.Calendar(calendarEl, {
        timeZone: "local",
        editable: true,
        droppable: true,
        selectable: true,
        navLinks: true,
        initialView: getInitialView(),
        themeSystem: "bootstrap",
        headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth"
        },
        windowResize: function () {
            calendar.changeView(getInitialView());
        },
        events: fetchEvents,
        eventClick: function (info) {
            eventClicked(); // Call eventClicked to set up the modal for viewing
            editEventModal(info.event); // Load event data into the modal
        },
        dateClick: function (info) {
            openNewEventModal(info.dateStr); // Prepare the modal for adding a new event
        }
    });

    calendar.render();

    function getInitialView() {
        if (window.innerWidth >= 768 && window.innerWidth < 1200) {
            return "timeGridWeek";
        } else if (window.innerWidth <= 768) {
            return "listMonth";
        } else {
            return "dayGridMonth";
        }
    }

    function fetchEvents(fetchInfo, successCallback, failureCallback) {
        const requestOptions = {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams({
                'action': 'fetchAllEvents'
            })
        };

        fetch('../data/load.php', requestOptions)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok: ' + response.statusText);
                }
                return response.json();
            })
            .then(data => {
                if (!data.success) {
                    throw new Error('Data fetch error: ' + data.message);
                }
                const events = data.events.map(event => ({
                    id: event.event_id,
                    title: event.event_title,
                    start: `${event.event_date}T${event.start_time}`,
                    end: `${event.event_date}T${event.end_time}`,
                    allDay: false // Adjust according to the actual nature of your events
                }));
                successCallback(events);
            })
            .catch(error => {
                console.error('Error fetching events:', error);
                failureCallback(error);
            });
    }

    function editEventModal(event) {
        // Fill the modal with event details for editing
        document.getElementById("event-title").value = event.title;
        document.getElementById("event-start-date").value = event.start.toISOString().slice(0, 10);
        modal.show();
    }

    function openNewEventModal(dateStr) {
        // Setup the modal to add a new event
        document.getElementById("form-event").reset();
        document.getElementById("modal-title").innerText = "Add Event";
        document.getElementById("event-start-date").value = dateStr;
        modal.show();
    }
});


var str_dt = function (e) {
    var e = new Date(e)
        , t = "" + ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"][e.getMonth()]
        , n = "" + e.getDate()
        , e = e.getFullYear();
    return t.length < 2 && (t = "0" + t),
        [(n = n.length < 2 ? "0" + n : n) + " " + t, e].join(",")
};
