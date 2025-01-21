<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NMCED</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css\home.css">
    <link rel="stylesheet" href="css\Sub_Eve.css">
    <link rel="stylesheet" href="css\runner.css">
    <link rel="stylesheet" href="css\home_events.css">
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
        <a href="index.php" class="active">Home</a>
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




<!-- Banner -->
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner" style="font-family: 'Garamond', serif">
      <div class="carousel-item active">
        <img src="images/banner/clg_photo.jpg" class="d-block w-100" alt="...">
        <div class="overlay">
            <h1>Ignite Your Passion for Teaching</h1>
            <p style="font-size: 20px;">Become a Certified Educator with Us</p>
            <a href="contact.php" class="btn-custom">Get Admission Now</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/gallery/1.jpg" class="d-block w-100" alt="...">
        <div class="overlay">
            <h1>The Power of Knowledge,<br> The Heart of Teaching</h1>
            <a href="contact.php" class="btn-custom">Get Admission Now</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/gallery/5.jpg" class="d-block w-100" alt="..." >
        <div class="overlay">
          <h1>Teaching is the One Profession,<br>That Creates All Other Professions</h1>
          <a href="contact.php" class="btn-custom">Get Admission Now</a>
        </div>
      </div>
    </div>
    <!-- Carousel controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>
  <!-- Bootstrap JS & Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  <script>
    // Custom JavaScript to ensure smooth carousel transitions
    $('#carouselExample').carousel({
      interval: 7000 // Set interval for sliding to 7 seconds
    });
  </script>

<div class="top-menu py-2" style="font-family: Georgia, serif; background-color: rgb(0, 34, 145);">
    <div class="container d-flex justify-content-between align-items-center flex-wrap">
        <!-- Scrolling Text -->
        <div class="scrolling-text" style="flex: 1;  padding-right: 10px; overflow: hidden; white-space: nowrap;">
            <div class="scrolling-content" style="display: inline-block; animation: scroll-text 15s linear infinite;color: white;"><b>
                Admission open for BEd 2024-25,</b> <a href="#" style="color: yellow; text-decoration: none;"><b>Click here to download application forms</b></a> &nbsp;&nbsp;&nbsp; 
                <b> New courses available for 2024-25 session!</b> <a href="#" style="color: yellow; text-decoration: none;"><b>Explore now</b></a>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes scroll-text {
        0% { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
    }
    .scrolling-content {
        display: inline-block;
        white-space: nowrap;
    }
 </style>



<!-- Small banner Section with Left-aligned Image and Right-aligned Text -->
<section class="banner-section">
    <!-- Left-aligned Image -->
    <img src="images/banner/clg_photo.jpg" alt="samll banner">

    <!-- Right-aligned Content -->
    <div class="banner-content" style="font-family: 'Merriweather', serif">
        <h1><b>Welcome to Nehru Memorial College Of Education</b></h1>
        <p class="no-margin-bottom"></p>

        <h4><i class="fas fa-sun vision-icon"></i> Vision</h4>
        <p>For Knowledge Justice and Peace.</p>

        <h4><i class="fas fa-crosshairs mission-icon"></i> Mission</h4>
        <p style="margin-bottom: 5px;">With a view to realizing this vision, the college has taken up the following mission.<br> To impart the right kind of teacher education knowledge among.</p>
        <p class="no-margin-bottom"></p>

        <h4><i class="fas fa-flag motto-icon"></i> Motto</h4>
        <p> Good Teacher + Good Student = Good Nation</p>
    </div>
</section>
<script src="js/home.js"></script>




<!-- Events and Announcements Section -->
<div class="container mt-4 mb-4" style="font-family: 'Merriweather', serif">
    <div class="row">
        <!-- Upcoming Events -->
        <div class="col-md-6">
            <div class="card custom-card custom-card-events">
                <div class="card-header custom-card-header">
                    Upcoming Events
                </div>
                <div class="card-body" >
                    <marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="2" class="event-marquee">
                        <p style="font-size: 18px;"><i class="fas fa-calendar-alt text-danger"></i > Stay tuned for more exciting events</p>
                        <p style="font-size: 18px;"><i class="fas fa-calendar-alt text-danger"></i> Stay tuned for more exciting events</p>
                        <p style="font-size: 18px;"><i class="fas fa-calendar-alt text-danger"></i> Stay tuned for more exciting events</p>
                    </marquee>
                </div>
            </div>
        </div>

        <!-- Announcements -->
        <div class="col-md-6">
            <div class="card custom-card custom-card-announcements">
                <div class="card-header custom-card-header">
                    Announcement
                </div>
                <div class="card-body d-flex align-items-center justify-content-center">
                    <p style="margin-bottom: -10px; font-size: 18px;" class="announcement-text"><i class="fas fa-bullhorn text-info"></i> Stay tuned for more exciting announcements!</p>
                </div>
                <div class="card-body d-flex align-items-center justify-content-center">
                    <p style="font-size: 18px;" class="announcement-text"><i class="fas fa-bullhorn text-info"></i> Stay tuned for more exciting announcements!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/events_announcements.js"></script>




<!-- Container for Subjects -->
<div class="container">
    <div class="subject-section "  style="font-family: 'Merriweather', serif;">
            <h5 class="mb-1">
                SUBJECTS OFFERED
            </h5>
        <p class="no-margin-bottom"></p>
        <p class="no-margin-bottom"></p>
        <div class="row">
            <div class="col-md-3">
                <div class="subject-card">
                    <img src="images/subjects/Tamil.jpg" alt="Tamil">
                    <div class="subject-card-title">Tamil</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="subject-card">
                    <img src="images/subjects/English.jpg" alt="English">
                    <div class="subject-card-title">English</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="subject-card">
                    <img src="images/subjects/Maths.jpg" alt="Mathematics">
                    <div class="subject-card-title">Mathematics</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="subject-card">
                    <img src="images/subjects/Physical Science.jpg" alt="Physical Science">
                    <div class="subject-card-title">Physical Science</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="subject-card">
                    <img src="images/subjects/bio sci.jpg" alt="Biological Science">
                    <div class="subject-card-title">Biological Science</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="subject-card">
                    <img src="images/subjects/cs.jpg" alt="Computer Science">
                    <div class="subject-card-title">Computer Science</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="subject-card">
                    <img src="images/subjects/history.jpg" alt="History">
                    <div class="subject-card-title">History</div>
                </div>
            </div>           
            <div class="col-md-3">
                <div class="subject-card">
                    <img src="images/subjects/commerce.jpg" alt="Commerce">
                    <div class="subject-card-title">Commerce</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="subject-card">
                    <img src="images/subjects/Economics.jpg" alt="Economics">
                    <div class="subject-card-title">Economics</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/home_subjects.js"></script>




<!-- Websites -->
<div id="trigger-animation" class="logo-section horizontal">
    <div class="logo-item">
      <a href="https://aishe.gov.in" target="_blank">
        <img src="images/webiste logo/AISHE.png" alt="AISHE">
      </a>
    </div>
    <div class="logo-item">
      <a href="https://swayam.gov.in" target="_blank">
        <img src="images/webiste logo/swayam.png" alt="SWAYAM">
      </a>
    </div>

    <div class="logo-item">
      <a href="https://tnteu.ac.in" target="_blank">
        <img src="images/webiste logo/Tnteu.png" alt="TNTEU">
      </a>
    </div>
    <div class="logo-item">
      <a href="https://ugc.gov.in" target="_blank">
        <img src="images/webiste logo/UGC.png" alt="ugc">
      </a>
    </div>
    <div class="logo-item">
        <a href="https://ncte.gov.in" target="_blank">
          <img src="images/webiste logo/NCTE.png" alt="NCTE" style="width: 100px; height: auto; margin-left: 10px; ">
        </a>
      </div>
    <div class="logo-item">
        <a href="https://trb.tn.gov.in" target="_blank">
            <img src="images/webiste logo/TRB.png" alt="TRB" style="width: 280px; height: auto; margin-right: 10px; margin-left: -100px;">
        </a>
    </div>
</div>
<script src="js/website_logo.js"></script>



<!-- Documents -->
<div class="button-container" style="font-family: 'Merriweather', serif;">
    <a href="#" target="blank" class="button">University Affiliation Order</a>
    <a href="documents/college doc/Tnteu.pdf" target="blank" class="button">TNTEU</a>
    <a href="documents/college doc/Ncte.pdf" target="blank" class="button">NCTE</a>
    <a href="documents/college doc/Aishe.pdf" target="blank" class="button">AISHE</a>
    <a href="documents/college doc/PAR CERTIFICATE.pdf" target="blank" class="button">PAR</a>
    <a href="#" target="blank" class="button">Affidavit</a>
</div>
<script src="js/clg_documents.js"></script>




<!-- Runner -->
<section class="stats-section" style="font-family: 'Agbalumo', sans-serif;" >
    <div class="stats-container" >
      <div class="stat-box">
        <i class="fas fa-smile"></i>
        <div class="stat-number" data-target="1300">0</div>
        <div class="stat-label">Completed Students</div>
      </div>
      <div class="stat-box">
        <i class="fas fa-bookmark"></i>
        <div class="stat-number" data-target="10">0</div>
        <div class="stat-label">Years of Experience</div>
      </div>
      <div class="stat-box">
        <i class="fas fa-users"></i>
        <div class="stat-number" data-target="16">0</div>
        <div class="stat-label">Our Employees</div>
      </div>
      <div class="stat-box">
        <i class="fas fa-graduation-cap"></i>
        <div class="stat-number" data-target="200">0</div>
        <div class="stat-label">Present Students</div>
      </div>
    </div>
</section>
<script src="js/runner_animate.js"></script>
  


<!-- Events -->
<div class="latest-events " style="font-family: 'Georgia', serif; margin-bottom: 30px;">
    <h2 style="font-size: 32px; font-weight: bold; color: rgb(0, 34, 145); text-transform: uppercase; letter-spacing: 2px; margin-bottom: 20px; font-family:'Garamond', serif; position: relative; text-align: center;">
        <b>Latest Events</b>
        <span style="display: block; width: 80px; height: 4px; background: rgb(255, 69, 0); margin: 10px auto 0; border-radius: 2px;"></span>
    </h2>
    
    <div class="events-container ">
        <div class="event-card">
            <a href="gallery.php#Inauguration" style="text-decoration: none; color: inherit;">
                <img src="images/home_events/Event_1.JPG" alt="events1" style="width: 100%; height: 100%; object-fit: cover; object-position: center top;">
                <h3><b>Inauguration Function</b></h3>
            </a>
        </div>
        <div class="event-card ">
            <a href="gallery.php#pongal-function" style="text-decoration: none; color: inherit;">
                <img src="images/home_events/Event_2.JPG" alt="events2" style="width: 100%; height: 100%; object-fit: cover; object-position: center top;">
                <h3><b>Pongal Function</b></h3>
            </a>
        </div>
        <div class="event-card">
            <a href="gallery.php#Anti-Drug" style="text-decoration: none; color: inherit;">
                <img src="images/home_events/Events_3.jpeg" alt="events3" style="width: 100%; height: 100%; object-fit: cover; object-position: center top;">
                <h3><b>Anti Drug</b></h3>
            </a>
        </div>
    </div>
    <a href="gallery.php" style="text-decoration: none;">
        <button class="view-more">View More</button>
    </a>
</div>
<script src="js/home_events.js"></script>



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


<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome CDN for Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</body>
</php>
