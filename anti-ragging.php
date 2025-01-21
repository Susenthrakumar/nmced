<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NMC</title>
    <link rel="stylesheet" href="css/clubs.css">
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
    <h1><b>Committees</b></h1>
    <div class="breadcrumbs">
        <a href="index.php">Home</a> /   Committees  </a>  / Anti-Ragging Committee
    </div>
</div>



<!-- side menus -->
<div class="container" style="font-family: Georgia, serif">
    <div class="sidebar">
        <a href="Science-club.php" style="text-decoration: none;"><button>Science Club</button></a>
        <a href="maths-club.php" style="text-decoration: none;"><button >Maths Club</button></a>
        <a href="arts-club.php" style="text-decoration: none;"><button >Arts Club</button></a>
        <a href="eco-club.php" style="text-decoration: none;"><button>Eco Club</button></a>
        <a href="Et-club.php" style="text-decoration: none;"><button >Educational Technology Club</button></a>
        <a href="guidance-counseling.php" style="text-decoration: none;"><button >Guidance & Counseling Cell</button></a>
        <a href="grievance-redressal.php" style="text-decoration: none;"><button >Grievance Redressal Cell</button></a>
        <a href="anti-ragging.php" style="text-decoration: none;"><button class="active">Anti-Ragging Committee</button></a>
        <a href="youth-red-cross.php" style="text-decoration: none;"><button>Youth Red Cross Society</button></a>
        <a href="pta.php" style="text-decoration: none;"><button>Parent Teachers Association</button></a>
        <a href="library-committee.php" style="text-decoration: none;"><button>Library Advisory Committee</button></a>
        <a href="alumni-association.php" style="text-decoration: none;"><button>Alumni Association</button></a>
    </div>
    


    <!-- Main Content Area -->
    <div class="main-content">
        <h2 class="infra-title" style="font-family: Georgia, serif;  text-align: center; color: rgb(201, 9, 9)"><b>Anti-Ragging Committee</b></h2>
        <h2 class="infra-title" style="font-family: Georgia, serif;   color: rgb(201, 9, 9); margin-bottom: 10px;" ><b>About</b></h2>
        <p style="font-family: Georgia, serif; text-align: justify; color: black; margin-top: 0px; text-indent: 30px;">
            A disciplinary committee and anti ragging committee was inaugurated in 2021. The purpose of the club to improve discipline in the classrooms and the campus by conducting inquiries on cases of misbehavior and recommending suitable punishment. Ragging in any form is strictly prohibited in and outside the institution. Any complaint about ragging (if any) is brought to the notice of the Anti-ragging committee which takes cognizance of the matter and takes immediate action.
        </p>
        <h2 class="infra-title"  style="font-family: Georgia, serif;   color: rgb(201, 9, 9); margin-bottom: 10px;" ><b>Anti-Ragging Committee Members</b></h2>
                <table>
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Designation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center;">1</td>
                            <td>Mr. T. SENTHIL KUMAR, Physical Director</td>
                            <td>Coordinator</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">2</td>
                            <td>Mrs. V. MALATHI, Assistant Professor in Commerce</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">3</td>
                            <td>Mrs. R. MYTHILY, Assistant Professor in Performing Arts</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">4</td>
                            <td>Mr. S. ANANTHAKUMAR, Assistant Professor in Education</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">5</td>
                            <td>Mr. M. KANNAIYAN, Assistant Professor in Education</td>
                            <td>Member</td>
                        </tr>
                    </tbody>
                </table>
    </div>
</div>

























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


<!-- Add FontAwesome CDN in your php <head> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome CDN for Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</body>
</php>
