<?php
session_start();
$username = $_SESSION["email"];
if (!isset($_SESSION["email"])) {
    echo '<script>alert("You are not logged in.");
    window.location.href = "index.html";</script>';
    exit();
}

// Assuming you have a database connection here
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gopi";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get data from the POST request
    $name = $_POST['name'];
    $email = $_POST['email'];
    // Get the current date
    $currentDate = date("d-m-20y");

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO cername (name, email, date1) VALUES (:name, :email, :currentDate)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':currentDate', $currentDate);
    $stmt->execute();

    // Redirect back to the form or wherever you want after successful insertion
    header('Location: your_form_page.php');
    exit();
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

// Close the database connection
$conn = null;
?>
