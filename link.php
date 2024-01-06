
<?php
session_start();
$username = $_SESSION["email"];
if (!isset($_SESSION["email"])) {
   
    echo '<script>alert("You are not logged in.");
    window.location.href = "index.html";</script>';

    exit();
}

?><!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Your Website</title>
</head>
<body>
    <header>
        <button id="openSidebar">Open Sidebar</button>
    </header>
    
    <nav id="sidebar">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="service.php">Service</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="email.php">Email</a></li>
        </ul>
    </nav>

    <div class="content">
        <!-- Your page content goes here -->
    </div>

    <script src="script.js"></script>
</body>
</html>
<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: right;
}

#openSidebar {
    background-color: transparent;
    border: none;
    color: #fff;
    cursor: pointer;
}

#sidebar {
    position: fixed;
    top: 0;
    right: -250px; /* Initially hidden */
    width: 250px;
    height: 100%;
    background-color: #333;
    padding: 10px;
    transition: right 0.3s;
}

#sidebar ul {
    list-style: none;
    padding: 0;
}

#sidebar li {
    margin: 10px 0;
}

#sidebar a {
    text-decoration: none;
    color: #fff;
}

#closeSidebar {
    background-color: transparent;
    border: none;
    color: #fff;
    cursor: pointer;
}

.content {
    margin-right: 0;
    padding: 20px;
    transition: margin-right 0.3s;
}

#closeSidebar {
    background-color: transparent;
    border: none;
    color: #fff;
    cursor: pointer;
    display: none; /* Initially hidden */
}

</style>
<script>

document.getElementById("openSidebar").addEventListener("click", function() {
    var sidebar = document.getElementById("sidebar");
    var content = document.querySelector(".content");
    var closeSidebarButton = document.getElementById("closeSidebar");

    if (sidebar.style.right === "-250px") {
        sidebar.style.right = "0";
        content.style.marginRight = "250px";
        closeSidebarButton.style.display = "block"; // Show the close button
    }
});

document.getElementById("closeSidebar").addEventListener("click", function() {
    var sidebar = document.getElementById("sidebar");
    var content = document.querySelector(".content");
    var closeSidebarButton = document.getElementById("closeSidebar");

    sidebar.style.right = "-250px";
    content.style.marginRight = "0";
    closeSidebarButton.style.display = "none"; // Hide the close button
});


</script>
