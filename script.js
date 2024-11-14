// script.js

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        target.scrollIntoView({
            behavior: 'smooth'
        });
    });
});

///function to send email notification


    ///function to send email notification
    


    function toggleMenu() {
        const navLinks = document.querySelector('.nav-links');
        navLinks.classList.toggle('active');
    }
    


    
  // Handle form submission
  document.getElementById('submitAppointmentForm').addEventListener('click', function() {
    // Get form data
    var form = document.getElementById('appointmentForm');
    var name = form.name.value;
    var email = form.email.value;
    var phone = form.phone.value;
    var appointmentDate = form.appointmentDate.value;
    var message = form.message.value;

    // Simple form validation
    if (name && email && phone && appointmentDate) {
      // You can send the form data to a server (e.g., via AJAX or a form POST request)
      // For now, we will just show a success message
      document.getElementById('successMessage').style.display = 'block';
      setTimeout(function() {
        document.getElementById('successMessage').style.display = 'none';
        $('#appointmentModal').modal('hide'); // Close the modal
      }, 3000); // Hide success message after 3 seconds

      // Reset the form
      form.reset();
    } else {
      // Show error message if validation fails
      document.getElementById('errorMessage').style.display = 'block';
      setTimeout(function() {
        document.getElementById('errorMessage').style.display = 'none';
      }, 3000); // Hide error message after 3 seconds
    }
  });
