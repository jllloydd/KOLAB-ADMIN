let currentBookingIdToUpdate = null;

document.addEventListener("DOMContentLoaded", function () {
    fetchAllBookings();
});

function sortBookings() {
    const criteria = document.getElementById('sortCriteria').value;
    const direction = document.getElementById('sortDirection').value;
    fetchAllBookings(criteria, direction);
}

function fetchAllBookings(page = 1, criteria = 'fullname', direction = 'asc') {
    console.log("Fetching bookings..."); // Debug: log fetching process start
    fetch('../data/load.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `action=fetchAllBookings&page=${page}&criteria=${encodeURIComponent(criteria)}&direction=${encodeURIComponent(direction)}`
    })
        .then(response => response.json())
        .then(data => {
            if (data.status) {
                console.log("Fetch successful, displaying bookings."); // Debug: log successful fetch
                displayBookings(data.bookings);
                const cumulativeCount = (page - 1) * 10 + data.bookings.length;
                updateBookingCount(cumulativeCount, data.totalRecords);
                setupPagination(data.totalPages, page);
            } else {
                console.error('Failed to fetch bookings');
                displayNoResults();
            }
        })
        .catch(error => {
            console.error('Error fetching bookings:', error);
            displayNoResults();
        });
}

function displayBookings(bookings) {
    console.log("Displaying bookings, count:", bookings.length); // Debug: log number of bookings to display
    const bookingListElement = document.getElementById('bookingList');
    bookingListElement.innerHTML = '';  // Clear existing entries

    bookings.forEach(booking => {
        const row = `
            <tr>
                <td class="reference_num">${booking.reference_number}</td>
                <td class="customer_name">${booking.fullname}</td>
                <td class="email">${booking.email}</td>
                <td class="term">${booking.term_rate}</td>
                <td class="date">${booking.booking_date}</td>
                <td class="booking_status"><span class="badge ${getBadgeClass(booking.status)}">${booking.status}</span></td>
                <td class="payment_method"><span class="badge ${getBadgeClass(booking.payment_method)}">${booking.payment_method}</span></td>
                <td>
                    <div class="d-flex gap-2">
                        <button class="btn btn-sm btn-success edit-item-btn" onclick="openModal('${booking.bookingid}', '${booking.booking_date}')">View</button>
                    </div>
                </td>
            </tr>`;
        bookingListElement.insertAdjacentHTML('beforeend', row);
    });

    console.log("Booking elements added to DOM, reinitializing List.js");
    initializeListJs();
}

function initializeListJs() {
    const options = {
        valueNames: ['reference_num', 'customer_name', 'email', 'term', 'date', 'booking_status', 'payment_method'],
        listClass: 'list'  // This refers to a class inside the container identified by the ID
    };

    // Since your tbody has the ID 'bookingList', let's ensure we are initializing with the correct container
    if (document.getElementById('bookingManagementData')) {
        try {
            // Initialize List.js on the table container 'bookingManagementData', not on the 'bookingList'
            const bookingList = new List('bookingManagementData', options);
            window.bookingListInstance = bookingList;
            console.log("List.js initialized successfully on bookingManagementData.");
        } catch (error) {
            console.error("Failed to initialize List.js:", error);
        }
    } else {
        console.log("Element with ID 'bookingManagementData' not found.");
    }
}

function updateBookingCount(displayCount, totalCount) {
    const countElement = document.getElementById('bookingCount');
    if (countElement) {
        countElement.innerHTML = `Showing <strong>${displayCount}</strong> from <strong>${totalCount}</strong> data`;
    }
}

function displayNoResults() {
    const bookingList = document.getElementById('bookingList');
    bookingList.innerHTML = `
        <tr>
            <td colspan="8" class="text-center">No bookings found.</td>
        </tr>`;
    updateBookingCount(0);
}

function setupPagination(totalPages, currentPage) {
    const paginationContainer = document.querySelector('.pagination');
    paginationContainer.innerHTML = ''; // Clear existing pagination links
    for (let i = 1; i <= totalPages; i++) {
        const pageItem = document.createElement('li');
        pageItem.className = 'page-item ' + (i === currentPage ? 'active' : '');
        const pageLink = document.createElement('a');
        pageLink.className = 'page-link';
        pageLink.href = '#';
        pageLink.innerText = i;
        pageLink.addEventListener('click', function (e) {
            e.preventDefault();
            fetchAllBookings(i);
        });
        pageItem.appendChild(pageLink);
        paginationContainer.appendChild(pageItem);
    }
}

function searchBookings() {
    const query = document.getElementById('searchInput').value.trim();
    fetch('../data/load.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `action=searchBookings&query=${encodeURIComponent(query)}`
    })
        .then(response => response.json())
        .then(data => {
            if (data.status) {
                displayBookings(data.bookings);
                updateBookingCount(data.bookings.length);
            } else {
                console.error('Search failed:', data.message);
                displayNoResults();
            }
        })
        .catch(error => console.error('Error searching bookings:', error));
}

function getBadgeClass(status) {
    switch (status.toLowerCase()) {
        case 'checked in':
            return 'badge-check-in';
        case 'pending':
            return 'badge-pending';
        case 'cancelled':
            return 'badge-cancelled';
        case 'checked out':
            return 'badge-checked-out';
        case 'on-site':
            return 'badge-onsite';
        case 'online':
            return 'badge-online';
        default:
            return 'badge-secondary'; // Default badge for unrecognized status
    }
}

function openModal(bookingId) {
    console.log("openModal called with bookingId:", bookingId);
    $.ajax({
        url: '../data/load.php',  // Adjust if necessary to point to the correct path
        type: 'POST',
        data: {
            action: 'viewModal',
            bookingId: bookingId
        },
        dataType: 'json',
        beforeSend: function () {
            // Display a loading text or spinner before the request completes
            $('#myModal').find('.modal-body').html('<div class="loader">Loading...</div>');
        },
        success: function (response) {
            if (response.success) {
                // Populate the modal fields with the fetched data
                var data = response.data;
                $('#myModal').find('.guest-name').text(data.fullname);
                $('#myModal').find('.info-style').first().text(data.number);
                $('#myModal').find('.info-style').last().text(data.email);
                $('#myModal').find('.modal-blue').first().text('#' + data.reference_number);
                $('#myModal').find('.badge-pending').text(data.status);
                $('#myModal').find('.modal-info').eq(0).text(data.term_rate);
                $('#myModal').find('.modal-info').eq(1).text(data.pax + ' Pax');
                $('#myModal').find('.modal-info').eq(2).text(data.booking_date);

                // Show the modal
                $('#myModal').modal('show');
            } else {
                // Handle no data or errors
                $('#myModal').find('.modal-body').html('<p class="text-warning">' + response.message + '</p>');
            }
        },
        error: function (xhr, status, error) {
            // Handle any AJAX errors
            $('#myModal').find('.modal-body').html('<p class="text-danger">Error loading data. Please try again.</p>');
            console.error('AJAX Error:', status, error);
        }
    });
}

function closeModal() {
    $('#myModal').modal('hide');
}
