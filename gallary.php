
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
    <title>Web Development Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .flex-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .flex-item {
            flex: 1 0 250px;
            margin: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
        }

        .flex-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        
        
.btn{
    position: absolute;
    top: 45px;
    right: 7px;
    padding: 5px;
   
  }
  .btn{
    background-color: coral;
  }
 
  #btn:hover {
            transform: scale(1.1);
            background-color: aqua;
        }
      
        #menu {
            display: none;
            position: absolute;
            top: 35px;
            right: 8px;
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
           
            background-color: rgb(6, 69, 255);
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
    </style>
</head>
<body>

    <h1>Web Development Gallery</h1>

    <div class="flex-container">
        <div class="flex-item"><img src="img/homeback.jpg" alt="HTML"></div>
        <div class="flex-item"><img src="img/html1.jpg" alt="CSS"></div>
        <div class="flex-item"><img src="img/service2.jpg" alt="JavaScript"></div>
        <div class="flex-item"><img src="img/touch.jpg" alt="HTML"></div>
        <div class="flex-item"><img src="img/js.jpg" alt="HTML"></div>
        <div class="flex-item"><img src="img/service1.jpg" alt="HTML"></div>
       
    </div>
    <div class="btn">
        <button id="btn" onclick="toggleMenu()">Menu</button>
        <div id="menu">
            <span id="close" onclick="toggleMenu()">X</span>
            <button><a href="home1.php" id="li">Home</a></button>
           <button><a href="python.php" id="li">Content</a></button> 
           <button> <a href="aboutus.php" id="li">About</a></button>
          
           <button> <a href="float.php"id="li" >Service</a></button>
        </div>
    </div>

    <script>
        function toggleMenu() {
            var menu = document.getElementById("menu");
            menu.style.display = (menu.style.display === "block") ? "none" : "block";
        }
    </script>
</body>
</html>
