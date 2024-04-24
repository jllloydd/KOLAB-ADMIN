document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById('loginForm');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        var formData = new FormData(this);
        fetch('data/submit.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status) {
                // Redirect to homepage or dashboard upon successful login
                window.location.href = 'index.php';
            } else {
                // Display an error message if login fails
                document.getElementById('loginMessage').textContent = 'Invalid username or password. Please try again.';
                setTimeout(function() {
        window.location.reload();
                }, 3000);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById('loginMessage').textContent = 'Login failed due to a technical issue. Please try again later.';
        });
    });
});