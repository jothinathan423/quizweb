


<?php
session_start();
$username = $_SESSION["email"];
if (!isset($_SESSION["email"])) {
   
    echo '<script>alert("You are not logged in.");
    window.location.href = "index.html";</script>';

    exit();
}



?><!DOCTYPE html>
<html>
<head>
    <title>Certfication</title>
    <style>
      
        body {
            font-family: 'Arial', sans-serif;
            background-image: url("img/istockphoto12.jpg");
            background-repeat: no-repeat;
            background-image: fixed;
        }

        .main {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            text-align: center;
            background: transparent;
        }

        h1 {
            color: #333;
        }

        input {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
        }

        button {
            background-color: rgb(83, 68, 239);
            color: #fff;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        button:hover {
            background-color: rgb(244, 58, 58);
        }

        canvas {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 20px;
        }

        #downloadLink {
            color: oklab(lightness a b);
            text-decoration: none;
            margin-top: 10px;
            display: none; /* Initially hide the download link */
        }

        #downloadLink:hover {
            text-decoration: underline;
            color: darkgoldenrod;
        }
        .out{
           
            
           

            position:absolute;
           font-size: 20px;
           font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
           top: 1rem;
            right: 1px;
            border: 2px black solid ;
            background-color: red;
            a:hover{
                background-color: white;
                color:red;
                text-decoration: none;
            }
            a{
                text-decoration: none;
            }
        }
    </style>
    </style>
</head>
<body>
    <center>
        <div class="main">
    <h1>Webdevelopment Certfication</h1>
    <h1>ENTER YOUR NAME TO DOWNLOAD CERTIFICATE</h1>
    <input type="text" id="nameInput" placeholder="Enter Name">
    <br><br><br>
    
    <button onclick="insertName()">Download Certificate</button>
    <br>
    <canvas id="canvas" style="display: none;"></canvas>
    <a id="downloadLink"  download=".jpg"
    style="color: rgb(30, 255, 0); font-size: larger; text-decoration: none; margin-top: 10px; display: none;">Download Certificate </a>
    <br></div>
    <div style="visibility: hidden;"> 
    <img id="image" src="wepik-gradient-professional-employee-appreciation-certificate-20231123021055W8cK.jpg" alt="Template Image">
</div>
</center>
<div class="out">

<a href="session.php" >Log Out!</a>
</div>
    <script src="script.js"></script>
</body>
</html>
