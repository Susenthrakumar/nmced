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

// Variable to track deletion status
$deletion_success = false;

// Insert data into the database
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
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
            echo "<p>Alumni details successfully registered! <a href='alumni_form.php'>Go back to form</a></p>";
        } else {
            echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }
    } else {
        echo "<p>Failed to upload photo. Please try again.</p>";
    }
}

// Delete record if passout_year and phone_number are provided
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $passout_year = $_POST['passout_year'];
    $phone = $_POST['phone_number'];

    // Delete query
    $sql_delete = "DELETE FROM alumni WHERE passout_year = '$passout_year' AND phone_number = '$phone'";

    if ($conn->query($sql_delete) === TRUE) {
        $deletion_success = true;
    } else {
        echo "<p>Error: " . $sql_delete . "<br>" . $conn->error . "</p>";
    }
}

// Close connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 5% auto;
            background: white;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
            color: #555;
        }
        input, textarea, select {
            margin-top: 5px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            margin-top: 20px;
            padding: 10px;
            font-size: 16px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Delete Alumni Record</h2>
        <!-- Delete Form -->
        <form method="POST" action="">
            <label for="passout_year">Passed Out Year:</label>
            <select id="passout_year" name="passout_year" required>
                <option value="">Select Year</option>
                <?php
                    // Get the current year
                    $current_year = date("Y");

                    // Start year from 2010
                    $start_year = 2000;

                    // Loop through the years from 2010 to the current year
                    for ($year = $current_year; $year >= $start_year; $year--) {
                        echo "<option value='$year'>$year</option>";
                    }
                ?>
            </select>

            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" required>

            <button type="submit" name="delete">Delete Record</button>
        </form>
    </div>

    <?php if ($deletion_success): ?>
        <script type="text/javascript">
            alert("Alumni record deleted successfully!");
        </script>
    <?php endif; ?>
</body>
</html>
