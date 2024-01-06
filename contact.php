
<?php
session_start();
$username = $_SESSION["email"];
if (!isset($_SESSION["email"])) {
   
    echo '<script>alert("You are not logged in.");
    window.location.href = "index.html";</script>';

    exit();
}

?>
<?php
// Database connection parameters
$servername = "localhost"; // Change to your database server
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "gopi"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // SQL query to insert data into the database
    $sql = "INSERT INTO contactus(name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Form submitted successfully!";
        // Send email (you may need to configure your server for email sending
        //$to = "gopisettu3011@gmail.com";
        //$subject = "New Form Submission";
        //$headers = "From: $email";

       // mail($to, $subject, $message, $headers);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
