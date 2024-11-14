<?php
// Hardcoded array of services (same as before)
$services = [
    [
        'name' => 'Haircut',
        'description' => 'A stylish and professional haircut tailored to your preferences.',
        'price' => 30.00,
        'image' => 'haircut.jpg'
    ],
    [
        'name' => 'Facial',
        'description' => 'Deep cleansing facial treatment to refresh your skin.',
        'price' => 50.00,
        'image' => 'facial.jpg'
    ],
    [
        'name' => 'Manicure',
        'description' => 'Beautiful and long-lasting manicure with a variety of colors.',
        'price' => 25.00,
        'image' => 'manicure.jpg'
    ],
    [
        'name' => 'Pedicure',
        'description' => 'Relaxing and rejuvenating pedicure for smooth and soft feet.',
        'price' => 30.00,
        'image' => 'pedicure.jpg'
    ]
];

// Check if the form was submitted for booking
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection
    $host = 'localhost';
    $dbname = 'salon_db';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insert booking into the database
        $stmt = $pdo->prepare("INSERT INTO bookings (name, email, phone, service_name, appointment_date) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$_POST['name'], $_POST['email'], $_POST['phone'], $_POST['service_name'], $_POST['appointment_date']]);

        // Set a success message
        $success_message = "Your booking was successful!";
    } catch (PDOException $e) {
        $error_message = "Booking failed: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Services</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="services-section">
        <h2>Our Salon Services</h2>
        <div class="services-container">
            <?php foreach ($services as $service): ?>
                <div class="service-card">
                    <img src="uploads/<?php echo htmlspecialchars($service['image']); ?>" alt="<?php echo htmlspecialchars($service['name']); ?>" class="service-image">
                    <h3><?php echo htmlspecialchars($service['name']); ?></h3>
                    <p><?php echo htmlspecialchars($service['description']); ?></p>
                    <span class="price">$<?php echo number_format($service['price'], 2); ?></span>
                    <button class="cta-button" onclick="openModal('<?php echo $service['name']; ?>')">Book Now</button>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Modal -->
    <div id="bookingModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <h2>Book an Appointment</h2>
            <form method="POST" id="bookingForm">
                <input type="hidden" name="service_name" id="service_name">
                <label for="name">Full Name:</label>
                <input type="text" name="name" required>
                <label for="email">Email:</label>
                <input type="email" name="email" required>
                <label for="phone">Phone Number:</label>
                <input type="text" name="phone" required>
                <label for="appointment_date">Preferred Appointment Date:</label>
                <input type="date" name="appointment_date" required>
                <button type="submit" class="cta-button">Submit</button>
            </form>
        </div>
    </div>

    <!-- Success or Error Message -->
    <?php if (isset($success_message)): ?>
        <div class="alert success">
            <p><?php echo $success_message; ?></p>
        </div>
    <?php elseif (isset($error_message)): ?>
        <div class="alert error">
            <p><?php echo $error_message; ?></p>
        </div>
    <?php endif; ?>

    <script>
        // Open the modal and set the service name
        function openModal(serviceName) {
            document.getElementById('bookingModal').style.display = 'block';
            document.getElementById('service_name').value = serviceName;
        }

        // Close the modal
        function closeModal() {
            document.getElementById('bookingModal').style.display = 'none';
        }

        // Close modal when clicked outside
        window.onclick = function(event) {
            if (event.target === document.getElementById('bookingModal')) {
                closeModal();
            }
        }
    </script>
</body>
</html>
