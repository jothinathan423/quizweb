<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Replace the database credentials with your own
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "gopi";

    // Create connection
    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the form submitted is for signup or login
    if (isset($_POST["signup"])) {
        // Signup logic
        $confirmPassword = $_POST["password1"];

        // Check if passwords match
        if ($password !== $confirmPassword) {
            echo '<script>alert("Passwords do not match");
             window.location.href = "index.html";
</script>';
        } else {
            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insert data into the log1 table
            $sqlSignup = "INSERT INTO log1 (email, password, password1) VALUES ('$email', '$hashedPassword', '$confirmPassword')";

            if ($conn->query($sqlSignup) === TRUE) {
                // Set session variable after successful signup
                $_SESSION["email"] = $email;

                echo '<script>alert("Signup successful");
                    window.location.href = "index.html";
                    </script>';
            } else {
                echo "Error: " . $sqlSignup . "<br>" . $conn->error;
            }
        }
    } elseif (isset($_POST["login"])) {
        // Login logic
        // Retrieve user data from the log1 table
        $sqlLogin = "SELECT * FROM log1 WHERE email = '$email'";
        $result = $conn->query($sqlLogin);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $dbPassword = $row["password"];

            // Verify the password
            if (password_verify($password, $dbPassword)) {
                // Set session variable and redirect to home1.php
                $_SESSION["email"] = $email;
                header("Location: home1.php");
                exit();
            } else {
                echo '<script>alert("Incorrect password");
                
                window.location.href = "index.html";</script>';
            }
        } else {
            echo '<script>alert("User name not found or Sign-up");
            window.location.href = "index.html";</script>';
        }
    }

    $conn->close();
}
?>
