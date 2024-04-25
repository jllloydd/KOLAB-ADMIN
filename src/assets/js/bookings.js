let currentBookingIdToUpdate = null;

document.addEventListener("DOMContentLoaded", function() {
    fetchAllBookings();
});

function sortBookings() {
    const criteria = document.getElementById('sortCriteria').value;
    const direction = document.getElementById('sortDirection').value;
    fetchAllBookings(criteria, direction);
}

function fetchAllBookings(page = 1, criteria = 'fullname', direction = 'asc') {
    fetch('../data/load.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: `action=fetchAllBookings&page=${page}&criteria=${encodeURIComponent(criteria)}&direction=${encodeURIComponent(direction)}`
    })
    .then(response => response.json())
    .then(data => {
        if (data.status) {
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
    const bookingList = document.getElementById('bookingList');
    bookingList.innerHTML = '';  // Clear existing entries

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
                        <button class="btn btn-sm btn-success edit-item-btn" onclick="openUpdateModal('${booking.bookingid}', '${booking.booking_date}')">View</button>
                    </div>
                </td>
            </tr>`;
        bookingList.insertAdjacentHTML('beforeend', row);
    });

    if (bookings.length === 0) {
        displayNoResults();
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
    for(let i = 1; i <= totalPages; i++) {
        const pageItem = document.createElement('li');
        pageItem.className = 'page-item ' + (i === currentPage ? 'active' : '');
        const pageLink = document.createElement('a');
        pageLink.className = 'page-link';
        pageLink.href = '#';
        pageLink.innerText = i;
        pageLink.addEventListener('click', function(e) {
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
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
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

function openUpdateModal(bookingid, booking_date) {
    currentBookingIdToUpdate = bookingid;
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
