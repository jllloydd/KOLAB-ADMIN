let currentBookingIdToUpdate = null;
document.addEventListener("DOMContentLoaded", function() {
    fetchAllBookings();
});

function sortBookings() {
    const criteria = document.getElementById('sortCriteria').value;
    const direction = document.getElementById('sortDirection').value;
    fetchAllBookings(criteria, direction);
}

function fetchAllBookings(criteria = 'fullname', direction = 'asc') {
    fetch('../data/load.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: `action=fetchAllBookings&criteria=${encodeURIComponent(criteria)}&direction=${encodeURIComponent(direction)}`
    })
    .then(response => response.json())
    .then(data => {
        if (data.status) {
            displayBookings(data.bookings);
        } else {
            console.error('Failed to fetch bookings');
        }
    })
    .catch(error => console.error('Error fetching bookings:', error));
}

function displayBookings(bookings) {
    const bookingManagement = document.getElementById('bookingManagementData');
    let tableHTML = `<div class="table-responsive"><table class="table align-middle table-nowrap" id="bookingManagementTable"><thead class="table-light"><tr><th>Reference No.</th><th>Guest</th><th>Email</th><th>Number</th><th>Booking Date</th><th>Status</th><th>DOB</th><th>Address</th><th>Pax</th><th>Start Time</th><th>End Time</th><th>Payment Method</th><th>Voucher</th><th>Date Created</th><th>Action</th></tr></thead><tbody class="list">`;

    bookings.forEach(booking => {
        tableHTML += `<tr>
            <td>${booking.reference_number || ''}</td>
            <td>${booking.fullname}</td>
            <td>${booking.email}</td>
            <td>${booking.number}</td>
            <td>${booking.booking_date}</td>
            <td><span class="badge ${getBadgeClass(booking.status)}">${booking.status}</span></td>
            <td>${booking.dob || ''}</td>
            <td>${booking.address || ''}</td>
            <td>${booking.pax || ''}</td>
            <td>${booking.start_time || ''}</td>
            <td>${booking.end_time || ''}</td>
            <td>${getPaymentMethod(booking.payment_method)}</td>
            <td>${booking.voucher}</td>
            <td>${booking.date_created || ''}</td>
            <td>
                <button class="btn btn-sm btn-success edit-item-btn" onclick="openUpdateModal('${booking.bookingid}', '${booking.booking_date}')">View</button>
            </td>
        </tr>`;
    });

    tableHTML += `</tbody></table></div>`;
    bookingManagement.innerHTML = tableHTML;
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
        default:
            return 'badge-secondary'; // Default badge for unrecognized status
    }
}

function getPaymentMethod(methodId) {
    switch (methodId) {
        case 1:
            return 'Credit Card';
        case 2:
            return 'PayPal';
        case 3:
            return 'Cash';
        default:
            return 'Not Specified';
    }
}

function searchBookings() {
    const query = document.getElementById('searchInput').value.trim();
    if (query) {
        fetch('../data/load.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: `action=searchBookings&query=${encodeURIComponent(query)}`
        })
        .then(response => response.json())
        .then(data => {
            if (data.status) {
                displayBookings(data.bookings);
            } else {
                console.error('Search failed:', data.message);
                // Optionally, show a "no results found" message
            }
        })
        .catch(error => console.error('Error searching bookings:', error));
    }
}

function openUpdateModal(bookingid, booking_date) {
    currentBookingIdToUpdate = bookingid;
    // Setup the booking date input
    var bookingDateInput = document.getElementById('bookingRegDateUpdate');
    if (bookingDateInput) {
        bookingDateInput.value = booking_date;
    }

    var modal = document.getElementById('updateModal');
    if (modal) {
        modal.style.display = 'block';
    } else {
        console.error('The update modal was not found in the DOM.');
    }
}

function closeModal() {
    var modal = document.getElementById('updateModal');
    if (modal) {
        modal.style.display = 'none';
    }
}

function submitUpdate() {
    const booking_date = document.getElementById('bookingRegDateUpdate').value;
    fetch('../data/load.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: `action=updateBookingDetails&bookingid=${currentBookingIdToUpdate}&booking_date=${booking_date}`
    })
    .then(response => response.json())
    .then(data => {
        if (data.status) {
            alert('Booking updated successfully.');
            fetchAllBookings();
            closeModal();
        } else {
            alert('Failed to update booking: ' + data.message);
        }
    })
    .catch(error => console.error('Error updating booking:', error));
}