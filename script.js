/* script.js */

document.addEventListener('DOMContentLoaded', () => {
    const navLinks = document.querySelectorAll('.nav-link');
    const loginBoxes = document.querySelectorAll('.form-box'); // Get all form boxes (Login & Signup)

    // 1. Navigation Protection
    navLinks.forEach(link => {
        link.addEventListener('click', e => {
            if (localStorage.getItem('loggedIn') !== 'true') {
                e.preventDefault();
                alert('Please log in first.');
            }
        });
    });

    // 2. Index Page (Login/Signup) Logic
    if (loginBoxes.length > 0) {
        // Expose showForm to the window so the 'onclick' in your HTML works
        window.showForm = function(formId) {
            loginBoxes.forEach(box => box.classList.remove('active'));
            const targetForm = document.getElementById(formId);
            if (targetForm) targetForm.classList.add('active');
        };

        // Allow forms to submit normally to login_signup.php while setting the login flag
        loginBoxes.forEach(box => {
            const form = box.querySelector('form');
            if (form) {
                form.addEventListener('submit', () => {
                    localStorage.setItem('loggedIn', 'true');
                });
            }
        });
    }

    // 3. Services Page (Booking) Logic
    const bookButtons = document.querySelectorAll('.book-now-btn');
    const popup = document.getElementById('popup');
    
    if (bookButtons.length > 0 && popup) {
        bookButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                popup.style.display = 'flex';
                // Ensure the form shows and success message is hidden when opening
                const formContainer = document.getElementById('booking-form-container');
                const successMsg = document.getElementById('success-message');
                if (formContainer) formContainer.style.display = 'block';
                if (successMsg) successMsg.style.display = 'none';
            });
        });

        // 4. Handle Booking Form Submission
        const bookingForm = document.getElementById('hotel-booking-form');
        if (bookingForm) {
            bookingForm.addEventListener('submit', function(e) {
                e.preventDefault(); // Stop page reload

                // Create FormData from the form inputs
                const formData = new FormData(this);

                // Send data to add_booking.php
                fetch('add_booking.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        // Only show the success message if the database saved successfully
                        document.getElementById('booking-form-container').style.display = 'none';
                        document.getElementById('success-message').style.display = 'block';
                    } else {
                        alert('Database Error: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred. Check if add_booking.php exists.');
                });
            });
        }

        // Close/Cancel button logic
        const closeBtn = document.getElementById('closePopup');
        if (closeBtn) {
            closeBtn.addEventListener('click', () => {
                popup.style.display = 'none';
            });
        }
    }

    // 5. Manage Booking Logic (Edit Functionality)
    const editButtons = document.querySelectorAll('.edit-btn');
    const editPopup = document.getElementById('editPopup');
    const editForm = document.getElementById('edit-booking-form');

    if (editButtons.length > 0 && editPopup) {
        // Open popup and pre-fill data when Edit is clicked
        editButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                document.getElementById('edit_id').value = btn.dataset.id;
                document.getElementById('edit_name').value = btn.dataset.name;
                document.getElementById('edit_pax').value = btn.dataset.pax;
                document.getElementById('edit_date').value = btn.dataset.date;
                document.getElementById('edit_phone').value = btn.dataset.phone;
                
                editPopup.style.display = 'flex'; // Show the edit modal
            });
        });

        // Close the Edit popup
        const closeEditBtn = document.getElementById('closeEditPopup');
        if (closeEditBtn) {
            closeEditBtn.addEventListener('click', () => {
                editPopup.style.display = 'none';
            });
        }

        // Handle the Update request via AJAX
        if (editForm) {
            editForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(this);

                fetch('update_booking.php', {
                    method: 'POST',
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    if (data.status === 'success') {
                        alert('Booking updated successfully!');
                        location.reload(); // Refresh to show changes in the table
                    } else {
                        alert('Error: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while updating the booking.');
                });
            });
        }
    }
});