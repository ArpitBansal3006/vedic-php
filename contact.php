<?php
session_start(); 
$authenticated = false;
if (isset($_SESSION["email"])) {
    $authenticated = true;
}

// Include the header
include 'layout/header.php'; 

// Database connection (update with your DB credentials)
$servername = "localhost";
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "vediccollectionsdb"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Insert data into database
    $sql = "INSERT INTO contact_messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        $success_message = "Your message has been sent successfully!";
    } else {
        $error_message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!-- Contact Section -->
<section class="contact-section container" style="padding-top: 120px; padding-bottom: 80px;">
    <h2 class="text-center contact-title" style="font-size: 2.5rem; font-weight: bold; color: #333; margin-bottom: 40px;">Contact Us</h2>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <form method="POST" action="">
                <?php if (isset($success_message)) { echo "<div class='alert alert-success'>$success_message</div>"; } ?>
                <?php if (isset($error_message)) { echo "<div class='alert alert-danger'>$error_message</div>"; } ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" style="border-radius: 8px;" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" style="border-radius: 8px;" required>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject" style="border-radius: 8px;" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message" style="border-radius: 8px;" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="padding: 10px 30px; font-size: 1.2rem; transition: all 0.3s;">Send Message</button>
            </form>
        </div>
    </div>
</section>

<?php include 'layout/footer.php'; // Includes the footer section ?>