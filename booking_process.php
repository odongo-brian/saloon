<?php
include('config/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $service_name = $_POST['service_name'];
    $phone = $_POST['phone'];
    $customer_name = $_POST['name'];
    $email = $_POST['email'];
    $appointment_time = $_POST['appointment_date'];


    //inserting to db
    $query = "INSERT INTO bookings (service_name, phone, name, email, appointment_date) 
              VALUES ('$service_name', '$phone', '$customer_name', '$email', '$appointment_time')";
    mysqli_query($conn, $query);
    

    // For now, let's just display a confirmation message
    echo "<h3>Booking Confirmation</h3>";
    echo "<p>Thank you, $customer_name! Your booking for $service_name on $appointment_time has been confirmed.</p>";
    // echo "<p>Price: $$price</p>";
} else {
    echo "<p>Invalid request.</p>";
}
?>
