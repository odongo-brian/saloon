<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swizz Beauty and Cutz</title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body style="margin-top: 70px;"> <!-- Offset body content to avoid overlap with fixed navbar -->
    <!-- <header>
        <nav class="navbar">
            <h1 class="logo">Swizz Beauty and Cutz</h1>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="#about-us">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact-us">Contact</a></li>
            </ul>
            <a href="tel:+1234567890" class="call-button">Call: +254 715 443 674</a>
            <div class="hamburger" onclick="toggleMenu()">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </nav>
    </header> -->


    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #f8e9e8;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Swizz Beauty and Cutz
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#about-us">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#contact-us">Contact</a>
        </li>
        
        <a href="tel:+1234567890" class="call-button">Call: +254 715 443 674</a>
        
       
      </ul>
      
    </div>
  </div>
</nav>


    <section class="hero" style="display: flex; align-items: center; justify-content: space-between; padding: 2em;">
        <div class="hero-content" style="max-width: 50%;">
            <h2 style="font-size: 2em; margin-bottom: 0.5em;">I'm a Passionate Beautician and Makeup Artist Based in Nairobi, kenya.</h2>
            <p style="margin-bottom: 1em;">Dedicated to providing exceptional beauty services to enhance your natural beauty.</p>
            <a href="contact.html" style="text-decoration: none; color: white; background-color: #e45858; padding: 0.75em 1.5em; border-radius: 5px;">Book Appointment</a>
            
        </div>
        <div class="hero-image" style="flex: 1; display: flex; justify-content: flex-end;">
            <img src="img/profile.jpg" alt="one of our massage chairs" style="max-width: 50%; border-radius: 10px;">
        </div>
    </section>

    <section class="services-intro" id="services" style="padding: 2em; text-align: center;">
        <!-- <h2 style="font-size: 1.8em; margin-bottom: 0.5em;">My Services</h2>
        <p style="margin-bottom: 1em;">Explore a range of beauty and makeup services tailored to your unique needs.</p> -->
        <!-- <div class="services-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1em;">
            <div class="service-item" style="background-color: #f0f0f0; padding: 1em; border-radius: 5px;">Make Up</div>
            <div class="service-item" style="background-color: #f0f0f0; padding: 1em; border-radius: 5px;">Hair Color</div>
            <div class="service-item" style="background-color: #f0f0f0; padding: 1em; border-radius: 5px;">Hair Cut</div>
            <div class="service-item" style="background-color: #f0f0f0; padding: 1em; border-radius: 5px;">Hair Setting</div>
            <div class="service-item" style="background-color: #f0f0f0; padding: 1em; border-radius: 5px;">Professional Photoshoot</div>
            <div class="service-item" style="background-color: #f0f0f0; padding: 1em; border-radius: 5px;">Skin Treatment</div>
            <div class="service-item" style="background-color: #f0f0f0; padding: 1em; border-radius: 5px;">Fashion Make Up</div>
            <div class="service-item" style="background-color: #f0f0f0; padding: 1em; border-radius: 5px;">Bridal Make Up</div>
        </div> -->



        <?php
            // Hardcoded array of services
            $services = [
                [
                    'name' => 'Haircut',
                    'description' => 'A stylish and professional haircut tailored to your preferences.',
                    'price' => 1000.00,
                    'image' => 'hair-cut.jpg'
                ],
                [
                    'name' => 'Facial',
                    'description' => 'Deep cleansing facial treatment to refresh your skin.',
                    'price' => 1500.00,
                    'image' => 'facial.jpg'
                ],
                [
                    'name' => 'Manicure',
                    'description' => 'Beautiful and long-lasting manicure with a variety of colors.',
                    'price' => 2500.00,
                    'image' => 'manicure.jpg'
                ],
                [
                    'name' => 'Pedicure',
                    'description' => 'Relaxing and rejuvenating pedicure for smooth and soft feet.',
                    'price' => 3000.00,
                    'image' => 'pedicure.jpg'
                ]
            ];
            ?>

            <section class="services-section">
                    <h2 style="font-size: 1.8em; margin-bottom: 0.5em;">Our Salon Services</h2>
                    <div class="services-container">
                        <?php if (count($services) > 0): ?>
                            <?php foreach ($services as $service): ?>
                                <div class="service-card">
                                    <img src="img/<?php echo htmlspecialchars($service['image']); ?>" alt="<?php echo htmlspecialchars($service['name']); ?>" class="service-image">
                                    <h3><?php echo htmlspecialchars($service['name']); ?></h3>
                                    <p><?php echo htmlspecialchars($service['description']); ?></p>
                                    <span class="price">Ksh.<?php echo number_format($service['price'], 2); ?></span>
                                    <button class="cta-button" onclick="bookingModal('<?php echo $service['name']; ?>')">Book Now</button>
                                    </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No services available at the moment.</p>
                        <?php endif; ?>
                    </div>
                </section>


                <!-- Booking Modal Form -->
                <div id="bookingModal" class="modal" style="display: none;">
                    <div class="modal-content">
                        <span class="close-btn" onclick="closeModal()">&times;</span>
                        <h2>Book an Appointment</h2>
                        <form method="POST" id="bookingForm" action="booking_process.php">
                            <input type="hidden" name="service_name" id="service_name">
                            <label for="name">Full Name:</label>
                            <input type="text" name="name" required>
                            <label for="email">Email:</label>
                            <input type="email" name="email" required>
                            <label for="phone">Phone Number:</label>
                            <input type="text" name="phone" required>
                            
                            <label for="phone">Service Name:</label>
                            <input type="text" name="service_name" required>                      
                            
                            <label for="appointment_date">Preferred Appointment Date:</label>
                            <input type="date" name="appointment_date" required>
                            <button type="submit" class="cta-button">Submit</button>
                        </form>
                    </div>
                </div>






        



    <section id="about-us" style="padding: 60px 0; background-color: #f9f9f9;">
        <div class="container">
            <h2 style="text-align: center; font-size: 2em; color: #333; margin-bottom: 1em;">About Us</h2>
            <div class="row">
                <!-- Salon Introduction -->
                <div class="col-md-6" style="padding: 15px;">
                    <h3 style="color: #ff704d; font-size: 1.5em;">Welcome to Swizz Beauty and Cutz</h3>
                    <p style="font-size: 1.1em; color: #555;">
                        We are a professional beauty salon that offers a wide range of services to pamper you and help you look and feel your best. 
                        Whether you are here for a quick haircut, a soothing spa treatment, or a bridal makeover, we promise a personalized and luxurious experience.
                    </p>
                    <p style="font-size: 1.1em; color: #555;">
                        Our mission is to provide top-quality beauty and wellness services in a relaxing and welcoming environment. With a dedicated team of professionals, 
                        we aim to enhance your natural beauty and leave you feeling rejuvenated and confident.
                    </p>
                </div>
    
                <!-- Salon Image -->
                <div class="col-md-6" style="padding: 15px;">
                    <img src="img/ourlogo.jpg" class="ourlogo" alt="Salon Interior" style="width: 100%; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                </div>
            </div>
    
            <div class="row">
                <!-- Mission Statement -->
                <div class="col-md-12" style="text-align: center; margin-top: 40px;">
                    <h3 style="color: #ff704d; font-size: 1.5em;">Our Mission</h3>
                    <p style="font-size: 1.1em; color: #555; max-width: 800px; margin: 0 auto;">
                        At Swizz Beauty and Cutz, we are dedicated to enhancing your beauty and confidence through personalized beauty services. We strive to make every visit a memorable experience, 
                        ensuring you leave feeling refreshed, relaxed, and beautiful.
                    </p>
                </div>
            </div>
    
            <div class="row">
                <!-- Meet Our Team -->
                <div class="col-md-12" style="text-align: center; margin-top: 60px;">
                    <h3 style="color: #ff704d; font-size: 1.5em;">Meet Our Experts</h3>
                    <div class="team-member" style="display: flex; justify-content: center; gap: 30px; flex-wrap: wrap;">
                        <!-- Team Member 1 -->
                        <div class="team-member-card" style="max-width: 250px; text-align: center; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                            <img src="img/hair.jpg" alt="Team Member 1" style="width: 80%; height:fit-content; border-radius: 10px; margin-bottom: 15px;">
                            <h4 style="color: #333;">John Kamau</h4>
                            <p style="color: #ff704d; font-weight: bold;">Hair Stylist</p>
                            <p style="color: #555;">John is our expert hair stylist with over 10 years of experience, specializing in trendy cuts and styles for all hair types.</p>
                        </div>
                        <!-- Team Member 2 -->
                        <div class="team-member-card" style="max-width: 250px; text-align: center; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                            <img src="img/makeup.jpg" alt="Team Member 2" style="width: 80%; height:fit-content; border-radius: 10px; margin-bottom: 15px;">
                            <h4 style="color: #333;">Jane Smith</h4>
                            <p style="color: #ff704d; font-weight: bold;">Makeup Artist</p>
                            <p style="color: #555;">Jane is a talented makeup artist with a passion for enhancing natural beauty, specializing in bridal and fashion makeup.</p>
                        </div>
                        <!-- Team Member 3 -->
                        <div class="team-member-card" style="max-width: 250px; text-align: center; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                            <img src="img/skin.jpg" alt="Team Member 3" style="width: 80%; height:fit-content; border-radius: 10px; margin-bottom: 15px;">
                            <h4 style="color: #333;">Maria Lee</h4>
                            <p style="color: #ff704d; font-weight: bold;">Skin Specialist</p>
                            <p style="color: #555;">Maria is our skincare expert, offering rejuvenating facials and skin treatments to help you achieve glowing, healthy skin.</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row">
                <!-- Customer Testimonials -->
                <div class="col-md-12" style="text-align: center; margin-top: 60px;">
                    <h3 style="color: #ff704d; font-size: 1.5em;">What Our Clients Say</h3>
                    <div class="testimonials" style="display: flex; justify-content: center; gap: 30px; flex-wrap: wrap;">
                        <!-- Testimonial 1 -->
                        <div class="testimonial-card" style="max-width: 300px; background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                            <p style="font-style: italic; color: #555;">"I had an amazing experience at Swizz Beauty and Cutz! The team made me feel so relaxed and pampered. My hair has never looked better!"</p>
                            <p style="font-weight: bold; color: #333;">Emily Harris</p>
                            <p style="color: #ff704d;">Client</p>
                        </div>
                        <!-- Testimonial 2 -->
                        <div class="testimonial-card" style="max-width: 300px; background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                            <p style="font-style: italic; color: #555;">"I came here for a bridal makeover and was blown away by the attention to detail. The makeup and hair were absolutely perfect for my big day!"</p>
                            <p style="font-weight: bold; color: #333;">Sophia Williams</p>
                            <p style="color: #ff704d;">Bride</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact us section -->
    <section id="contact-us" style="padding: 60px 0; background-color: #f9f9f9;">
        <div class="container">
            <h2 style="text-align: center; font-size: 2em; color: #333; margin-bottom: 1em;">Contact Us</h2>
    
            <div class="row">
                <!-- Contact Information -->
                <div class="col-md-6" style="padding: 15px;">
                    <h3 style="color: #ff704d; font-size: 1.5em;">Get in Touch</h3>
                    <p style="font-size: 1.1em; color: #555;">
                        Have a question or want to book an appointment? You can reach out to us through the following contact methods:
                    </p>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="font-size: 1.1em; color: #555; margin-bottom: 10px;">
                            <strong style="color: #333;">Address:</strong> Swizz Beauty and Cutz, 18-0100, Nairobi
                        </li>
                        <li style="font-size: 1.1em; color: #555; margin-bottom: 10px;">
                            <strong style="color: #333;">Phone:</strong> +254 7000 000 00
                        </li>
                        <li style="font-size: 1.1em; color: #555; margin-bottom: 10px;">
                            <strong style="color: #333;">Email:</strong> <a href="mailto:info@yoursalon.com" style="color: #ff704d;">infoSwizzbeauty.com</a>
                        </li>
                        <li style="font-size: 1.1em; color: #555; margin-bottom: 10px;">
                            <strong style="color: #333;">Follow Us:</strong>
                            <div style="margin-top: 10px;">
                                <a href="https://facebook.com" style="margin-right: 15px; color: #3b5998;">Facebook</a>
                                <a href="https://instagram.com" style="margin-right: 15px; color: #C13584;">Instagram</a>
                                <a href="https://twitter.com" style="color: #1da1f2;">Twitter</a>
                            </div>
                        </li>
                    </ul>
                </div>
    
                <!-- Contact Form -->
                <!-- Contact Form -->
                <div class="col-md-6" style="padding: 15px;">
                    <h3 style="color: #ff704d; font-size: 1.5em;">Send Us a Message</h3>

                    <!-- Display success or error message -->
                    <?php if(isset($_GET['status'])): ?>
                        <div class="alert" style="color: green; font-size: 1.1em;">
                            <?php echo htmlspecialchars($_GET['status']); ?>
                        </div>
                    <?php endif; ?>

                    <form id="contact-form" action="process_contact.php" method="POST">
                        <div style="margin-bottom: 15px;">
                            <label for="name" style="font-size: 1.1em; color: #333;">Your Name</label>
                            <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; margin-top: 5px; border-radius: 5px; border: 1px solid #ddd;">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="email" style="font-size: 1.1em; color: #333;">Your Email</label>
                            <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; margin-top: 5px; border-radius: 5px; border: 1px solid #ddd;">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="message" style="font-size: 1.1em; color: #333;">Your Message</label>
                            <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 10px; margin-top: 5px; border-radius: 5px; border: 1px solid #ddd;"></textarea>
                        </div>
                        <button type="submit" style="background-color: #ff704d; color: white; padding: 12px 20px; border: none; border-radius: 5px; cursor: pointer;">Send Message</button>
                    </form>
                </div>

            </div>
    
            <!-- Map Section -->
            <div class="row" style="margin-top: 60px;">
                <div class="col-md-12" style="text-align: center;">
                    <h3 style="color: #ff704d; font-size: 1.5em;">Find Us on the Map</h3>
                    <div style="max-width: 100%; overflow: hidden; border-radius: 10px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3938.407366877537!2d-74.00475868475535!3d40.71272877933039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDPCsDMyJzQ2LjgiTiA3NMKwMTAuNzI2W!5e0!3m2!1sen!2sus!4v1635154967645!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Swizz Beauty and Cutz, 18-0100, Nairobi</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+2547000000 </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span> infoSwizzbeauty.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.php"><img src="img/ourlogo.jpg" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>We are a professional beauty salon </p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#about-us">about</a></li>
                                <li><a href="#services">services</a></li>
                                <li><a href="#contact-us">Contact</a></li>
                                <li><a href="#services">Expert Team</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Business Hours</h3>
                            </div>
                            <div>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li>Monday – Closed</li>
                                <li>Tuesday : 11.00 – 09.00</li>
                                <li>Wednesday : 11.00 – 09.00</li>
                                <li>Thursday : 11.00 – 09.00</li>
                                <li>Friday : 11.00 – 09.00</li>
                                <li>Saturday : 11.00 – 09.00</li>
                                <li>Sunday : 11.00 – 09.00</li>
                            </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2024, All Right Reserved <a href="https://codepen.io/anupkumar92/">Swizz</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#contact-us">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>






        <!-- JavaScript to Show/Hide Modal -->
    <script>
         // Open modal when Book Now button is clicked
    function bookingModal(serviceName) {
        document.getElementById('service_name').value = serviceName;
        // Show the modal
        document.getElementById('bookingModal').style.display = 'block';
    }

    // Close the modal
    function closeModal() {
        document.getElementById('bookingModal').style.display = 'none';
    }

    // Show an alert after form submission (success or failure)
    function showAlert(message, isSuccess) {
        const alertDiv = document.createElement('div');
        alertDiv.classList.add(isSuccess ? 'alert-success' : 'alert-error');
        alertDiv.textContent = message;
        document.body.appendChild(alertDiv);
        setTimeout(() => alertDiv.remove(), 3000); // Remove after 3 seconds
    }
    </script>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>
</html>
