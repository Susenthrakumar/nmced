<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NMC</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css\about.css">
</head>
<body>

<!-- Top Menu with Left-Aligned Info and Right-Aligned Social Media -->
<div class="top-menu py-2" style="background-color: rgb(0, 34, 145); padding: 20px;">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Left Side: Email, Phone, Important Links, College Login -->
        <div class="left-info d-flex align-items-center" style="gap: 40px; color: white; margin-left: -80px;">
            <!-- Email and Phone -->
            <div class="contact-info" style="font-family: 'Merriweather', serif; font-size: 16px;">
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
        <a href="index.html"><b>Home</b></a>    
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



 <!-- About Us -->
    <!-- Breadcrumb Section -->
<div class="breadcrumb-section" style="font-family: Georgia, serif">
    <h1><b>About the College</b></h1>
    <div class="breadcrumbs">
       <a href="index.php">Home</a> /   About Us   </a>  / About the College
    </div>
</div>




<section class="history-section">
    <div class="text-content fade-in" style="font-family: Georgia, serif;">
        <h1 style="text-align: center; color: red; animation: fadeIn 2s ease-out;">
            Our History
        </h1>
        <p class="justified-text" style="animation: slideIn 2s ease-out;">
            Nehru Memorial College of Education, established in 2013 in Trichy, Tamil Nadu, is a renowned coeducational
            institution dedicated to shaping skilled and ethical educators. The college is affiliated with Tamil Nadu 
            Teachers Education University (TNTEU), a prestigious university specializing in teacher education, and is approved by the 
            National Council for Teacher Education (NCTE), ensuring compliance with rigorous academic and professional standards. 
            Registered under the All India Survey on Higher Education (AISHE), the institution emphasizes transparency and accountability in 
            all its operations. Since 2014, the college has been offering the Bachelor of Education (B.Ed.) program, admitting 100 students annually.
            This program is designed to provide aspiring educators with a strong foundation in teaching methodologies, pedagogy, and effective 
            classroom management, blending theoretical knowledge with practical learning experiences to prepare them for successful teaching careers.
        </p>       
    </div>
    <div class="image-content fade-in">
        <img src="images/banner/clg_photo_.JPG" alt="Sathyasai B.Ed. College" style="animation: fadeInImage 2s ease-out;">
    </div>
</section>





<div class="container">
    <div class="section-title fade-in" style="font-family: Georgia, serif; color: red;">Meet Our Leaders</div>
    <div class="leaders-section" style="font-family: Georgia, serif">
        <div class="profiles">
            <div class="profile fade-in">
                <img src="images/leader/president_.jpg" alt="Leader 2">
                <h4>Er.Pon.Balasubramanian</h4>
                <p>President</p>
            </div>
            <div class="profile fade-in">
                <img src="images/leader/secretary_.jpg" alt="Leader 3">
                <h4>Pon.Ravichandran</h4>
                <p>Secretary</p>
            </div>
            <div class="profile fade-in">
                <img src="images/leader/Principal.png" alt="Leader 3">
                <h4>Dr.R.Karpagam</h4>
                <p>Principal</p>
            </div>
        </div>
    </div>
</div>
<script src="js/leaders.js"></script>





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

</body>
</php>
