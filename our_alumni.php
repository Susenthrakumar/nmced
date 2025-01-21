<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NMC</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css\our_alumni.css">
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




 <!-- About Us -->
    <!-- Breadcrumb Section -->
<div class="breadcrumb-section" style="font-family: Georgia, serif">
    <h1><b>Alumni Directory</b></h1>
    <div class="breadcrumbs">
       <a href="index.php">Home</a> /   Academics  </a>  / Alumni Directory
    </div>
</div>



<?php
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

// Define records per page
$records_per_page = 10;

// Get the current page number from the URL (default is 1)
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start_from = ($page - 1) * $records_per_page;

// Get filter values from URL or default to empty
$department_filter = isset($_GET['department']) ? $_GET['department'] : '';
$year_filter = isset($_GET['year']) ? $_GET['year'] : '';
$district_filter = isset($_GET['district']) ? $_GET['district'] : '';

// Build SQL query with filters
$sql = "SELECT * FROM alumni WHERE 1";

// Apply department filter if selected
if ($department_filter) {
    $sql .= " AND department = '$department_filter'";
}

// Apply year filter if selected
if ($year_filter) {
    $sql .= " AND passout_year = '$year_filter'";
}

// Apply district filter if selected
if ($district_filter) {
    $sql .= " AND district = '$district_filter'";
}

// Add LIMIT and OFFSET for pagination
$sql .= " LIMIT $start_from, $records_per_page";

$result = $conn->query($sql);

// Fetch total number of records for pagination
$sql_total = "SELECT COUNT(*) FROM alumni WHERE 1";
if ($department_filter) {
    $sql_total .= " AND department = '$department_filter'";
}
if ($year_filter) {
    $sql_total .= " AND passout_year = '$year_filter'";
}
if ($district_filter) {
    $sql_total .= " AND district = '$district_filter'";
}
$result_total = $conn->query($sql_total);
$row_total = $result_total->fetch_row();
$total_records = $row_total[0];

// Calculate total pages
$total_pages = ceil($total_records / $records_per_page);
?>

<style>
/* General Styles */

.alum-container {
    width: 90%;
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background: white;
    border-radius: 8px;
    text-align: center; /* Centers the entire container */
    border-radius: 10px;
    box-shadow: 0 8px 10px rgba(0, 0, 0, 0.3);
    margin-Bottom: 30px;
}

/* Filter Form */
.filter-form {
    margin-bottom: 20px;
}

.filter-form form {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    padding: 2%;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
}

.filter-form select {
    padding: 10px 14px;
    font-size: 18px;
    border: 1px solid #ccc;
    border-radius: 4px;
    flex: 1;
    background: #fff;
    max-width: 300px;
}



.filter-form input[type="submit"] {
    background-color:  rgb(27, 75, 235);
    color: white;
    border: none;
    padding: 12px 24px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 18px;
    transition: background-color 0.3s ease;
}

.filter-form input[type="submit"]:hover {
    background-color: rgb(0, 34, 145);
}

/* Alumni Cards */
.alumni-card {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    background: rgb(248, 248, 248);
    border: 1px solid #ddd;
    padding: 20px;
    margin: 20px auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 60%; /* Reduced width for a compact design */
    transition: all 0.3s ease; /* Smooth transition for hover effects */
}

.alumni-card:hover {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); /* Increase shadow effect */
    transform: translateY(-7px); /* Lift the card slightly */
}

.alumni-photo img {
    width: 200px; /* Adjusted size for better fit */
    height: 200px;
    object-fit: fill;
    border: 2px solid #ddd; /* Thinner border */
    margin-top: 40px; /* Move image 10px down */
    margin-left: 30px;
}

.alumni-details {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 5px; /* Consistent gap between details */
}

.alumni-details h2 {
    margin: 0 0 10px;
    font-size: 22px; /* Slightly smaller font for compact design */
    color: red;
    margin-right: 100px;
    text-transform: uppercase;
}

.alumni-details p {
    margin: 0; /* Removed extra margin for a tighter layout */
    font-size: 22px; /* Adjusted font size for compact design */
    margin-left: 20px;
    color: #333;
    display: flex;
    align-items: center;
}

.alumni-details span {
    font-weight: bold;
    color: #555;
    margin-right: 10px; /* Space between label and value */
    text-align: left; /* Align labels to the left */
    display: inline-block; /* Ensures the text stays on the same line */
    min-width: 120px; /* Fixed width for consistent colon alignment */
}

/* Responsive Design */
@media (max-width: 768px) {
    .alumni-card {
        flex-direction: column;
        text-align: center;
        width: 90%; /* Adjusted width for smaller screens */
    }

    .alumni-photo img {
        margin: 0 auto 15px; /* Center photo */
    }

    .alumni-details {
        text-align: center;
    }

    .alumni-details span {
        min-width: auto; /* Remove fixed width for better responsiveness */
    }
}


/* Pagination */
.pagination {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 20px;
    
}

.pagination a {
    display: inline-block;
    padding: 10px 20px;
    background-color: rgb(27, 75, 235);
    color: white;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.pagination a:hover {
    background-color: rgb(0, 34, 145);
}

.pagination a:disabled {
    background-color: #ccc;
    pointer-events: none;
}


</style>


    <div class="alum-container" style="margin-top: 20px; font-family: 'Merriweather', serif; font-size: 20px;">
        <!-- Filter Form -->
        <div class="filter-form">
            <form action="" method="get">
                <select name="department">
                    <option value="">Select Department</option>
                    <option value="English" <?php echo $department_filter == 'English' ? 'selected' : ''; ?>>English</option>
                    <option value="Tamil" <?php echo $department_filter == 'Tamil' ? 'selected' : ''; ?>>Tamil</option>
                    <option value="Mathematics" <?php echo $department_filter == 'Mathematics' ? 'selected' : ''; ?>>Mathematics</option>
                    <option value="Physical Science" <?php echo $department_filter == 'Physical Science' ? 'selected' : ''; ?>>Physical Science</option>
                    <option value="Biological Science" <?php echo $department_filter == 'Biological Science' ? 'selected' : ''; ?>>Biological Science</option>
                    <option value="Computer Science" <?php echo $department_filter == 'Computer Science' ? 'selected' : ''; ?>>Computer Science</option>
                    <option value="Economics" <?php echo $department_filter == 'Economics' ? 'selected' : ''; ?>>Economics</option>
                    <option value="History" <?php echo $department_filter == 'History' ? 'selected' : ''; ?>>History</option>
                    <option value="Commerce" <?php echo $department_filter == 'Commerce' ? 'selected' : ''; ?>>Commerce</option>
                </select>


                <select name="year">
                    <option value="">Select Passed Out Year</option>
                    <?php
                    // Loop from 2014 to the current year
                    for ($year = 2014; $year <= date("Y"); $year++) {
                        echo "<option value=\"$year\" " . ($year_filter == $year ? 'selected' : '') . ">$year</option>";
                    }
                    ?>
                </select>

                <select name="district">
                    <option value="">Select District</option>
                    <option value="Ariyalur" <?php echo $district_filter == 'Ariyalur' ? 'selected' : ''; ?>>Ariyalur</option>
                    <option value="Chengalpattu" <?php echo $district_filter == 'Chengalpattu' ? 'selected' : ''; ?>>Chengalpattu</option>
                    <option value="Chennai" <?php echo $district_filter == 'Chennai' ? 'selected' : ''; ?>>Chennai</option>
                    <option value="Coimbatore" <?php echo $district_filter == 'Coimbatore' ? 'selected' : ''; ?>>Coimbatore</option>
                    <option value="Cuddalore" <?php echo $district_filter == 'Cuddalore' ? 'selected' : ''; ?>>Cuddalore</option>
                    <option value="Dharmapuri" <?php echo $district_filter == 'Dharmapuri' ? 'selected' : ''; ?>>Dharmapuri</option>
                    <option value="Dindigul" <?php echo $district_filter == 'Dindigul' ? 'selected' : ''; ?>>Dindigul</option>
                    <option value="Erode" <?php echo $district_filter == 'Erode' ? 'selected' : ''; ?>>Erode</option>
                    <option value="Kallakurichi" <?php echo $district_filter == 'Kallakurichi' ? 'selected' : ''; ?>>Kallakurichi</option>
                    <option value="Kancheepuram" <?php echo $district_filter == 'Kancheepuram' ? 'selected' : ''; ?>>Kancheepuram</option>
                    <option value="Kanniyakumari" <?php echo $district_filter == 'Kanniyakumari' ? 'selected' : ''; ?>>Kanniyakumari</option>
                    <option value="Karur" <?php echo $district_filter == 'Karur' ? 'selected' : ''; ?>>Karur</option>
                    <option value="Krishnagiri" <?php echo $district_filter == 'Krishnagiri' ? 'selected' : ''; ?>>Krishnagiri</option>
                    <option value="Madurai" <?php echo $district_filter == 'Madurai' ? 'selected' : ''; ?>>Madurai</option>
                    <option value="Mayiladuthurai" <?php echo $district_filter == 'Mayiladuthurai' ? 'selected' : ''; ?>>Mayiladuthurai</option>
                    <option value="Nagapattinam" <?php echo $district_filter == 'Nagapattinam' ? 'selected' : ''; ?>>Nagapattinam</option>
                    <option value="Namakkal" <?php echo $district_filter == 'Namakkal' ? 'selected' : ''; ?>>Namakkal</option>
                    <option value="The Nilgiris" <?php echo $district_filter == 'The Nilgiris' ? 'selected' : ''; ?>>The Nilgiris</option>
                    <option value="Perambalur" <?php echo $district_filter == 'Perambalur' ? 'selected' : ''; ?>>Perambalur</option>
                    <option value="Pudukottai" <?php echo $district_filter == 'Pudukottai' ? 'selected' : ''; ?>>Pudukottai</option>
                    <option value="Ramanathapuram" <?php echo $district_filter == 'Ramanathapuram' ? 'selected' : ''; ?>>Ramanathapuram</option>
                    <option value="Ranipet" <?php echo $district_filter == 'Ranipet' ? 'selected' : ''; ?>>Ranipet</option>
                    <option value="Salem" <?php echo $district_filter == 'Salem' ? 'selected' : ''; ?>>Salem</option>
                    <option value="Sivagangai" <?php echo $district_filter == 'Sivagangai' ? 'selected' : ''; ?>>Sivagangai</option>
                    <option value="Tenkasi" <?php echo $district_filter == 'Tenkasi' ? 'selected' : ''; ?>>Tenkasi</option>
                    <option value="Thanjavur" <?php echo $district_filter == 'Thanjavur' ? 'selected' : ''; ?>>Thanjavur</option>
                    <option value="Theni" <?php echo $district_filter == 'Theni' ? 'selected' : ''; ?>>Theni</option>
                    <option value="Thiruvallur" <?php echo $district_filter == 'Thiruvallur' ? 'selected' : ''; ?>>Thiruvallur</option>
                    <option value="Thiruvarur" <?php echo $district_filter == 'Thiruvarur' ? 'selected' : ''; ?>>Thiruvarur</option>
                    <option value="Thoothukudi" <?php echo $district_filter == 'Thoothukudi' ? 'selected' : ''; ?>>Thoothukudi</option>
                    <option value="Tiruchirappalli" <?php echo $district_filter == 'Tiruchirappalli' ? 'selected' : ''; ?>>Tiruchirappalli</option>
                    <option value="Thirunelveli" <?php echo $district_filter == 'Thirunelveli' ? 'selected' : ''; ?>>Thirunelveli</option>
                    <option value="Tirupathur" <?php echo $district_filter == 'Tirupathur' ? 'selected' : ''; ?>>Tirupathur</option>
                    <option value="Tiruppur" <?php echo $district_filter == 'Tiruppur' ? 'selected' : ''; ?>>Tiruppur</option>
                    <option value="Tiruvannamalai" <?php echo $district_filter == 'Tiruvannamalai' ? 'selected' : ''; ?>>Tiruvannamalai</option>
                    <option value="Vellore" <?php echo $district_filter == 'Vellore' ? 'selected' : ''; ?>>Vellore</option>
                    <option value="Viluppuram" <?php echo $district_filter == 'Viluppuram' ? 'selected' : ''; ?>>Viluppuram</option>
                    <option value="Virudhunagar" <?php echo $district_filter == 'Virudhunagar' ? 'selected' : ''; ?>>Virudhunagar</option>
                </select>


                <input type="submit" value="Filter">
            </form>
        </div>

        <!-- Display Alumni Cards -->
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="alumni-card">
                    <div class="alumni-photo">
                        <img src="<?php echo htmlspecialchars($row['photo']); ?>" alt="Alumni Photo">
                    </div>
                    <div class="alumni-details">
                        <h2 style="color: red; text-transform: uppercase;"><?php echo htmlspecialchars($row['name']); ?></h2>
                        <p><span>Department:</span> <?php echo htmlspecialchars($row['department']); ?></p>
                        <p><span>Passed Out:</span> <?php echo htmlspecialchars($row['passout_year']); ?></p>
                        <p><span>Designation:</span> <?php echo htmlspecialchars($row['current_designation']); ?></p>
                        <p><span>Phone:</span> <?php echo htmlspecialchars($row['phone_number']); ?></p>
                        <p><span>District :</span> <?php echo htmlspecialchars($row['district']); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No alumni records found.</p>
        <?php endif; ?>

        <!-- Pagination links -->
        <div class="pagination">
            <?php if ($page > 1): ?>
                <a href="?page=1&department=<?php echo $department_filter; ?>&year=<?php echo $year_filter; ?>&district=<?php echo $district_filter; ?>">First</a>
                <a href="?page=<?php echo $page - 1; ?>&department=<?php echo $department_filter; ?>&year=<?php echo $year_filter; ?>&district=<?php echo $district_filter; ?>">Previous</a>
            <?php endif; ?>

            <?php if ($page < $total_pages): ?>
                <a href="?page=<?php echo $page + 1; ?>&department=<?php echo $department_filter; ?>&year=<?php echo $year_filter; ?>&district=<?php echo $district_filter; ?>">Next</a>
                <a href="?page=<?php echo $total_pages; ?>&department=<?php echo $department_filter; ?>&year=<?php echo $year_filter; ?>&district=<?php echo $district_filter; ?>">Last</a>
            <?php endif; ?>
        </div>
    </div>


<?php
// Close connection
$conn->close();
?>




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
</html>
