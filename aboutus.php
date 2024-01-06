<?php
session_start();
$username = $_SESSION["email"];
if (!isset($_SESSION["email"])) {
   
    echo '<script>alert("You are not logged in.");
    window.location.href = "index.html";</script>';

    exit();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        p {
            line-height: 1.6;
            color: #666;
        }

        .btn {
            position: absolute;
            top: 35px;
            right: 7px;
            padding: 5px;
        }

      

        #btn:hover {
            transform: scale(1.1);
            background-color: rgb(255, 0, 0);
        }

        #menu {
            display: none;
            position: absolute;
            top: 35px;
            right: 8x;
            background-color: #333;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        #menu a {
            display: block;
            
            padding: 5px;
            text-decoration: none;

        }

        #close {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #fff;
            cursor: pointer;
        }

        .menu a {
            display: block;
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #000000;
            text-decoration: none;
            color:white;
            cursor: pointer;
        }

        .menu a:hover {
           
            background-color: rgb(14, 67, 226);
        }
        #close:hover{
    color:coral;
    background-color: #ffffff;
}

        .close-button {
            position: absolute;
            
            cursor: pointer;
            color: rgb(255, 0, 0);
            font-size: 24px;
           

        }
      .menu a:hover{
        background-color: rgb(14, 67, 226);
      }
        
      #main{
        color:coral;
      }
      #mess{
        text-decoration: none;
        border: 2px solid black;
        color: white; 
        background-color: #000000;}
      
      #mess:hover{
        
        background-color: yellow;
        color:red;
      }
      
    </style>
</head>

<body>

    <header>
        <h1>About Us</h1>
    </header>

    <div class="btn">
        <button id="btn" onclick="toggleMenu()"  id="main">Menu</button>
        <div id="menu">
            <span id="close" onclick="toggleMenu()">X</span>
            <button><a href="home1.php" id="li">Home</a></button>
           <button><a href="python.php" id="li">Content</a></button> 
          
            <button><a href="float.php" id="li">Service</a></button>
            <button><a href="gallary.php" id="li">Gallary</a></button>
        </div>
    </div>

    <section>
        <h2>Our Mission</h2>
        <p>At WebDevelopmentHub, our mission is to empower individuals and businesses with the knowledge and skills needed to thrive in the ever-evolving world of web development. We believe in making web development education accessible, practical, and enjoyable. Through our content and resources, we aim to inspire a passion for learning and a commitment to excellence in the digital space.</p>

        <h2>Who We Are</h2>
        <p>We are a dynamic team of web development enthusiasts who share a common goal – to demystify the complexities of web technologies and foster a community of continuous learners. Our diverse backgrounds and expertise converge to create a platform where beginners and seasoned developers alike can find valuable insights, tutorials, and inspiration. Whether you're just starting your coding journey or seeking advanced techniques, WebDevelopmentHub is your go-to resource for all things web development.</p>

        <h2>Contact Us</h2>
        <a href="contactus.php" id="mess" >Message-Us</a>
        <p>Email: gopisettu3011@gmail.com<br> Phone: 6381-47-2125</p>
    </section>

    <script>
        function toggleMenu() {
            var menu = document.getElementById("menu");
            menu.style.display = (menu.style.display === "block") ? "none" : "block";
        }
    </script>

</body>

</html>
