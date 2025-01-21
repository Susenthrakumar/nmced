<?php
session_start(); // Start session at the top
ob_start(); // Start output buffering

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumni_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize message variable
$message = "";
$message_color = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $department = $_POST['department'];
    $passout_year = $_POST['passout_year'];
    $designation = $_POST['current_designation'];
    $email = $_POST['email'];
    $phone = $_POST['phone_number'];
    $address = $_POST['address'];
    $district = $_POST['district'];

    // Handle file upload
    $photo_name = $_FILES['photo']['name'];
    $photo_tmp_name = $_FILES['photo']['tmp_name'];
    $photo_folder = "uploads/" . basename($photo_name);

    // Create uploads directory if not exists
    if (!is_dir('uploads')) {
        mkdir('uploads', 0777, true);
    }

    if (move_uploaded_file($photo_tmp_name, $photo_folder)) {
        $sql = "INSERT INTO alumni (name, department, passout_year, current_designation, email, phone_number, address, district, photo) 
                VALUES ('$name', '$department', '$passout_year', '$designation', '$email', '$phone', '$address', '$district', '$photo_folder')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['message'] = "Alumni details successfully registered!";
            $_SESSION['message_color'] = "rgb(0, 34, 145)";
        } else {
            $_SESSION['message'] = "Error: " . $conn->error;
            $_SESSION['message_color'] = "red";
        }

        // Redirect to avoid form resubmission on page refresh
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        $_SESSION['message'] = "Failed to upload photo. Please try again.";
        $_SESSION['message_color'] = "red";

        // Redirect to avoid form resubmission on page refresh
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}

// Close connection
$conn->close();
ob_end_flush(); // End output buffering
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NMC</title>
    <link rel="stylesheet" href="css\alumni.css">
</head>
<body>

<!-- Top Menu with Left-Aligned Info and Right-Aligned Social Media -->
<div class="top-menu py-2" style="background-color: rgb(0, 34, 145); padding: 20px;">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Left Side: Email, Phone, Important Links, College Login -->
        <div class="left-info d-flex align-items-center" style="gap: 40px; color: white; margin-left: -80px;">
            <!-- Email and Phone -->
            <div class="contact-inf" style="font-family: 'Merriweather', serif; font-size: 16px;">
                <i class="fas fa-envelope"></i> 
                <a href="mailto:nmced@nmc.ac.in" style="color: white; text-decoration: none; margin-right: 20px;">
                    <b>nmced@nmc.ac.in</b>
                </a>
                <i class="fas fa-phone"></i> 
                <a href="tel:+919842956720" style="color: white; text-decoration: none;">
                    <b>(+91) 9842956720</b>
                </a>
            </div>

            <!-- Important Links -->
            <a href="#" style="color: white; text-decoration: none; display: flex; align-items: center; gap: 10px; font-family: 'Merriweather', serif; font-size: 16px;">
                <i class="fas fa-link"></i>
                <b>Important Links</b>
            </a>

            <!-- College Login (Highlighted) -->
            <a href="#" style="color: white; background-color: #0059d4; padding: 10px 20px; border-radius: 5px; text-decoration: none; display: flex; align-items: center; gap: 10px; font-family: 'Merriweather', serif; font-size: 16px;">
                <i class="fas fa-user-lock"></i>
                <b>College Login</b>
            </a>
        </div>

        <!-- Right Side: Social Media Icons -->
        <div class="social-icons d-flex" style="gap: 15px; margin-right: -80px;">
            <a href="#" style="text-decoration: none; width: 30px; align-items: center; display: flex; justify-content: center; height: 30px; background-color: #7b9eeb; color: white; border-radius: 50%;">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" style="text-decoration: none; width: 30px; align-items: center; display: flex; justify-content: center; height: 30px; background-color: #1DA1F2; color: white; border-radius: 50%;">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" style="text-decoration: none; width: 30px; align-items: center; display: flex; justify-content: center; height: 30px; background-color: #E1306C; color: white; border-radius: 50%;">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
</div>


<!-- Logo and Menus -->
<div class="mains-header">
    <!-- Logo Box -->
    <div class="logo-box">
        <figure class="logo">
            <a href="images/logo/c_logo.PNG"><img src="images/logo/c_logo.PNG" alt="Logo"></a>
        </figure>
    </div>
    <!-- Navigation -->
    <nav class="navigation">
        <a href="index.php"><b>Home</b></a>
            <!-- About Us Dropdown -->
            <div class="dropdown">
                <a href="#" class="dropdown-toggle"><b>About Us</b></a>
                <div class="dropdown-menu">
                    <a href="about.php"><b>About the College</b></a>
                    <a href="faculty.php"><b>Faculty</b></a>
                    <a href="committes.php"><b>Committees</b></a>
                    <a href="Facilities.php" ><b>Facilities</b></a>
                    <a href="infrastructure.php"><b>Infrastructure</b></a>
                </div>
            </div>
            <div class="dropdown">
                <a href="#" class="dropdown-toggle"><b>Academics</b></a>
                <div class="dropdown-menu">
                    <a href="Student details.php"><b>Students Details</b></a>
                    <a href="syllabus.php"><b>Syllabus</b></a>
                    <a href="scholarships.php"><b>Scholarships</b></a>
                    <a href="calendar.php"><b>Calender</b></a>
                    <a href="fee payment.php"><b>Fee Payment</b></a>
                </div>
            </div>
            <div class="dropdown">
                <a href="#" class="dropdown-toggle"><b>Alumni</b></a>
                <div class="dropdown-menu">
                    <a href="alumni.php"><b>Alumni Enrollment</b></a>
                    <a href="our_alumni.php"><b>Alumni Directory</b></a>
                </div>
            </div>
            <a href="gallery.php"><b>Gallery</b></a>
            <a href="contact.php"><b>Contact us</b></a> 
    </nav>
</div>




 <!-- breadcrumb-section -->
<div class="breadcrumb-section" style="font-family: Georgia, serif">
    <h1><b>Alumni</b></h1>
    <div class="breadcrumbs">
        <a href="index.php">Home</a> /   Alumni   </a>  
    </div>
</div>



<div class="alumni-container" style="font-family: Georgia, serif">
    <header>
        <h2 style="color: red; font-family: Georgia, serif">Nehru Memorial College of Education Alumni Association</h2>
    </header>
    <section class="alumni-content">
        <p class="alumni-intro">The Nehru Memorial College of Education Alumni Association serves as a vital link between the college and its members, playing a crucial role in enhancing the institution's reputation for excellence in teacher education. Members contribute to the college’s growth through their active participation in various initiatives, providing valuable insights, mentorship, and resources. The association organizes regular meetings and an annual reunion to foster connections, encouraging the sharing of experiences and supporting the college’s development. With the collective efforts of its members, the Alumni Association continues to strengthen the bond between past and present, ensuring the college’s legacy of high-quality education endures.</p>
    </section>
</div>






<div class="form-container" style="font-family: Georgia, serif">
    <h2 style="color: red; font-family: Georgia, serif">Alumni Registration Form</h2>
    <form id="alumniForm" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required placeholder="Enter your full name">

        <label for="department">Department:</label>
        <select id="department" name="department" required>
            <option value="">Select your Department</option>
            <option value="English">English</option>
            <option value="Tamil">Tamil</option>
            <option value="Mathematics">Mathematics</option>
            <option value="Physical Science">Physical Science</option>
            <option value="Biological Science">Biological Science</option>
            <option value="Economics">Economics</option>
            <option value="Computer Science">Computer Science</option>
            <option value="History">History</option>
            <option value="Commerce">Commerce</option>
        </select>

        <label for="passout_year">Passed Out Year:</label>
        <select id="passout_year" name="passout_year" required>
            <?php
                $current_year = date("Y");
                for ($i = $current_year; $i >= 2000; $i--) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>

        <label for="current_designation">Current Designation:</label>
        <input type="text" id="current_designation" name="current_designation" required placeholder="Enter your current designation">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required placeholder="Enter your email address">

        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" required placeholder="Enter your phone number" maxlength="10" pattern="\d{10}">
        <span id="phoneError" class="error"></span>

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="3" required placeholder="Enter your address"></textarea>

        <label for="district">District:</label>
        <select id="district" name="district" required>
        <option value="" disabled selected>Select your district</option>
                <option value="Ariyalur">Ariyalur</option>
                <option value="Chengalpattu">Chengalpattu</option>
                <option value="Chennai">Chennai</option>
                <option value="Coimbatore">Coimbatore</option>
                <option value="Cuddalore">Cuddalore</option>
                <option value="Dharmapuri">Dharmapuri</option>
                <option value="Dindigul">Dindigul</option>
                <option value="Erode">Erode</option>
                <option value="Kallakurichi">Kallakurichi</option>
                <option value="Kancheepuram">Kancheepuram</option>
                <option value="Kanniyakumari">Kanniyakumari</option>
                <option value="Karur">Karur</option>
                <option value="Krishnagiri">Krishnagiri</option>
                <option value="Madurai">Madurai</option>
                <option value="Mayiladuthurai">Mayiladuthurai</option>
                <option value="Nagapattinam">Nagapattinam</option>
                <option value="Namakkal">Namakkal</option>
                <option value="The Nilgiris">The Nilgiris</option>
                <option value="Perambalur">Perambalur</option>
                <option value="Pudukottai">Pudukottai</option>
                <option value="Ramanathapuram">Ramanathapuram</option>
                <option value="Ranipet">Ranipet</option>
                <option value="Salem">Salem</option>
                <option value="Sivagangai">Sivagangai</option>
                <option value="Tenkasi">Tenkasi</option>
                <option value="Thanjavur">Thanjavur</option>
                <option value="Theni">Theni</option>
                <option value="Thiruvallur">Thiruvallur</option>
                <option value="Thiruvarur">Thiruvarur</option>
                <option value="Thoothukudi">Thoothukudi</option>
                <option value="Tiruchirappalli">Tiruchirappalli</option>
                <option value="Thirunelveli">Thirunelveli</option>
                <option value="Tirupathur">Tirupathur</option>
                <option value="Tiruppur">Tiruppur</option>
                <option value="Tiruvannamalai">Tiruvannamalai</option>
                <option value="Vellore">Vellore</option>
                <option value="Viluppuram">Viluppuram</option>
                <option value="Virudhunagar">Virudhunagar</option>
            </select>


        <label for="photo">Upload Photo:</label>
        <input type="file" id="photo" name="photo" accept="image/*" required>

        <button type="submit" style="font-size: 25px; margin-top: 20px; border-radius: 5px;">Register</button>

    </form>
</div>

 
<?php
// Display message from session
if (isset($_SESSION['message']) && isset($_SESSION['message_color'])) {
    $message = $_SESSION['message'];
    $message_color = $_SESSION['message_color'];

    // Clear the session message to avoid showing it again on page refresh
    unset($_SESSION['message']);
    unset($_SESSION['message_color']);
} else {
    $message = "";
    $message_color = "";
}
?>


<div id="message-modal" class="modal">
    <div class="modal-content" style="background-color: <?php echo $message_color; ?>; font-family: Georgia, serif; color: white;">
        <?php echo htmlspecialchars($message); ?>
    </div>
</div>



<style>
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1000; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width of viewport */
        height: 100%; /* Full height of viewport */
        background-color: rgba(0, 0, 0, 0.5); /* Black with opacity */
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
    }

    .modal-content {
        font-size: 20px;
        width: 80%; /* Adjust width for smaller popup */
        max-width: 400px; /* Set a max width */
        padding: 20px; /* Add padding */
        border-radius: 10px; /* Rounded corners */
        text-align: center; /* Center the text */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add some shadow for effect */
        background-color: rgb(0, 34, 145); /* Ensure background is visible */
    }
</style>


<script src="js/alumni_reg.js"></script>








<!-- Footer -->
<footer style="background-color: rgb(0, 34, 145); color: white; padding: 30px 0; font-family: Arial, sans-serif;">
    <div style="display: flex; justify-content: space-around; flex-wrap: wrap; max-width: 1200px; margin: auto;">
        
        <!-- Contact -->
        <div style="flex: 1; min-width: 250px; font-family: Georgia, serif;">
            <h3 style="color: white; border-bottom: 3px solid #f04e30; display: inline-block;font-size: 22px;"><b>Contact  us</b></h3>  
            <p style="margin: 8px 0; font-size: 18px;">
                <i class="fas fa-map-marker-alt" style="color: white; margin-right: 8px;"></i>
                Abinimangalam, Tiruchirappalli - 621007, Tamilnadu, South India
            </p>
            <p style="margin: 5px 0; color: white;">&#9742; <a href="tel:+919842956720" style="font-family: 'Merriweather', serif; color: white; text-decoration: none; font-size: 18px;">(+91) 9842956720</a></p>
            <p style="margin: 5px 0; color: white;">&#9993; <a href="mailto:nmced@nmc.ac.in" style="color: white; text-decoration: none; font-size: 18px;">nmced@nmc.ac.in</a></p>
            <p style="margin: 5px 0; color: white">&#127760; <a href="http://nmced.ac.in" target="_blank" style="color: white; text-decoration: none; font-size: 18px;">www.nmced.ac.in</a></p>
            <div style="margin-top: 10px;">
                <a href="#" style="color: white; margin-right: 10px;"><i class="fab fa-facebook"></i></a>
                <a href="#" style="color: white; margin-right: 10px;"><i class="fab fa-twitter"></i></a>
                <a href="#" style="color: white;"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <!-- Quick Links -->
        <div style="font-family: Georgia, serif; min-width: 200px; margin-top: 0px;  margin-right: 10px;">
            <h3 style="color: white; border-bottom: 3px solid #f04e30; display: inline-block; font-size: 22px; ">
                <b>Quick Links</b>
            </h3>            
            <ul style="list-style: none; padding: 0; font-size: 18px; ">
                <li style="display: flex; align-items: center; margin-bottom: 5px;">
                    <span style="display: inline-block; width: 0; height: 0; border-top: 5px solid transparent; border-left: 5px solid white; border-bottom: 5px solid transparent; margin-right: 8px;"></span>
                    <a href="index.php" style="color: white; text-decoration: none;">Home</a>
                </li>              
                <li style="display: flex; align-items: center; margin-bottom: 5px;">
                    <span style="display: inline-block; width: 0; height: 0; border-top: 5px solid transparent; border-left: 5px solid white; border-bottom: 5px solid transparent; margin-right: 8px;"></span>
                    <a href="about.php" style="color: white; text-decoration: none;">About Us</a>
                </li>
                <li style="display: flex; align-items: center; margin-bottom: 5px;">
                    <span style="display: inline-block; width: 0; height: 0; border-top: 5px solid transparent; border-left: 5px solid white; border-bottom: 5px solid transparent; margin-right: 8px;"></span>
                    <a href="faculty.php" style="color: white; text-decoration: none;">Faculty</a>
                </li>
                <li style="display: flex; align-items: center; margin-bottom: 5px;">
                    <span style="display: inline-block; width: 0; height: 0; border-top: 5px solid transparent; border-left: 5px solid white; border-bottom: 5px solid transparent; margin-right: 8px;"></span>
                    <a href="gallery.php" style="color: white; text-decoration: none;">Gallery</a>
                </li>
                <li style="display: flex; align-items: center; margin-bottom: 5px;">
                    <span style="display: inline-block; width: 0; height: 0; border-top: 5px solid transparent; border-left: 5px solid white; border-bottom: 5px solid transparent; margin-right: 8px;"></span>
                    <a href="scholarships.php" style="color: white; text-decoration: none;">Scholarships</a>
                </li>
                <li style="display: flex; align-items: center; margin-bottom: 5px;">
                    <span style="display: inline-block; width: 0; height: 0; border-top: 5px solid transparent; border-left: 5px solid white; border-bottom: 5px solid transparent; margin-right: 8px;"></span>
                    <a href="Fee payment.php" style="color: white; text-decoration: none;">Fee Payment</a>
                </li>
                
            </ul>
        </div>


        <!-- Important Links -->
        <div style="font-family: Georgia, serif; min-width: 200px; margin-top: 0px; margin-right: 10px;">
            <h3 style="color: white; border-bottom: 3px solid #f04e30; display: inline-block; font-size: 22px;"><b>Important Links</b></h3>
            <ul style="list-style: none; padding: 0; font-size: 18px; ">
                <li style="display: flex; align-items: center; margin-bottom: 10px;">
                    <span style="display: inline-block; width: 0; height: 0; border-top: 5px solid transparent; border-left: 5px solid white; border-bottom: 5px solid transparent; margin-right: 8px;"></span>
                    <a href="https://ncte.gov.in/website/index.aspx" style="color: white; text-decoration: none;" target="_blank">NCTE</a>
                </li>
                <li style="display: flex; align-items: center; margin-bottom: 10px;">
                    <span style="display: inline-block; width: 0; height: 0; border-top: 5px solid transparent; border-left: 5px solid white; border-bottom: 5px solid transparent; margin-right: 8px;"></span>
                    <a href="http://tnteu.ac.in" style="color: white; text-decoration: none;" target="_blank">TNTEU</a>
                </li>
                <li style="display: flex; align-items: center; margin-bottom: 10px;">
                    <span style="display: inline-block; width: 0; height: 0; border-top: 5px solid transparent; border-left: 5px solid white; border-bottom: 5px solid transparent; margin-right: 8px;"></span>
                    <a href="http://aishe.gov.in" style="color: white; text-decoration: none;" target="_blank">AISHE</a>
                </li>
                <li style="display: flex; align-items: center; margin-bottom: 10px;">
                    <span style="display: inline-block; width: 0; height: 0; border-top: 5px solid transparent; border-left: 5px solid white; border-bottom: 5px solid transparent; margin-right: 8px;"></span>
                    <a href="https://www.ugc.gov.in" style="color: white; text-decoration: none; " target="_blank">UGC</a>
                </li>
                <li style="display: flex; align-items: center; margin-bottom: 10px;">
                    <span style="display: inline-block; width: 0; height: 0; border-top: 5px solid transparent; border-left: 5px solid white; border-bottom: 5px solid transparent; margin-right: 8px;"></span>
                    <a href="https://trb.tn.gov.in" style="color: white; text-decoration: none;" target="_blank">TRB</a>
                </li>
                
            </ul>
        </div>

        <!-- Find Us -->
        <div style="font-family: Georgia, serif; flex: 1; min-width: 200px; text-align: center; margin-right: 10px; margin-top: 0px;">
            <h3 style="color: white; border-bottom: 3px solid #f04e30; display: inline-block; margin-right: -40px;  font-size: 22px;"><b>Find Us</b></h3>
            <div>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.645130403057!2d78.6815890739489!3d11.06521025380286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaff14493c2a03%3A0x267359e0e06d8c97!2sNehru%20Memorial%20College!5e0!3m2!1sen!2sin!4v1734649285703!5m2!1sen!2sin" 
                    width="300" 
                    height="200" 
                    style="border:0; width: 100%; height: 200px; border: 0;margin-left: 20px;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>        
    </div>
</footer>
<script src="js/footer_fade.js"></script>

<!-- Footer Bottom - Separate Section -->
<div style="text-align: center; padding-top: 5px; background-color: black; color: white; font-family: Georgia, serif; border-bottom: 3px solid rgb(0, 34, 145)">
    <p style="margin: 0;"><b>&copy; 2024 Nehru Memorial College of Education. All Rights Reserved</b></p>
    <!-- Back to Top Button -->
    <button id="backToTop" class="back-to-top-btn" style="position: fixed; bottom: 30px; right: 30px; background-color: whitek; color: black; border: none; border-radius: 50%; padding: 10px 15px; font-size: 18px; cursor: pointer;">
        <i class="fas fa-arrow-up"></i>
    </button>
</div>
<script src="js/top_up.js"></script>


<!-- Add FontAwesome CDN in your HTML <head> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome CDN for Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</body>
</html>
