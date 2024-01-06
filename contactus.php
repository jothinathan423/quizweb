

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
    <title>Contact US</title>
    <style>
        
      .main{
        background-color: black;
      }
     
        #wrapper {
            float: left;
            width: 47%;
            height: 70%;
            border: 3px solid black;
            border-radius: 15px;
            background-color: black;
            margin: 0 auto;
           
        }

        p {
            color: rgb(225, 255, 0);
            padding: 10px;
        }

        #head {
            text-align: center;
        }

        #wrap {
            float: right;
            width: 50%;
            height: 70%;
            border: 3px solid rgb(0, 0, 0);
            border-radius: 15px;
            background-position: center;
            background-size: cover;
            background-image: url("img/service1.jpg");
        }

        h1 {
            color: black;
            text-align: center;
        }

        h2 {
            color: white;
            text-align: center;
        }

        #div {
            float: center;
            width: 99%;
            height: 70%;
            border: 3px solid black;
            border-radius: 15px;
            background-color: black;
        }

        #loginForm {
            text-align: center;
        }

        label {
            color: white;
        }

        input, textarea {
            width: 80%;
            padding: 8px;
            margin: 5px;
            box-sizing: border-box;
        }

        #loginButton {
            background-color: yellow;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #loginButton:hover {
            background-color: lightyellow;
        }

        #loginButton:active {
            color: red;
        }

        
.btn{
    position: absolute;
    top: 45px;
    right: 7px;
    padding: 5px;
   
  }
  .btn{
    background-color: rgb(255, 251, 0);
  }
 
  #btn:hover {
            transform: scale(1.1);
            background-color: rgb(251, 84, 84);
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
    color:rgb(255, 0, 0);
    background-color: #ffee04;
}

        .close-button {
            position: absolute;
            
            cursor: pointer;
            color: rgb(255, 222, 6);
            font-size: 24px;
           

        }
      .menu a:hover{
        background-color: rgb(14, 67, 226);
      }
      .out{
           position:absolute;
          font-size: 20px;
          font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
          top: 1rem;
           right: 1rem;
           border: 2px black solid ;
           background-color: yellow;
         
           a{
               text-decoration: none;
           }
           a:hover
           {
               background-color: red;
               color:black;
               text-decoration: none;
           }
       }
   </style>
    </style>
</head>
<body>
    <div class="main">
    <div id="container">
        <div id="wrapper">
            <form id="loginForm" action="contact.php" method="post">
                <p id="head">Contact US</p>
                    <div class="btn">
                        <button id="btn" onclick="back()">Back</button>
                    <button id="btn" onclick="toggleMenu()">Menu</button>
                   
                    <div id="menu">
                        <span id="close" onclick="toggleMenu()">X</span><br>
                        <button><a href="home1.php" id="li">Home</a></button><br>
                       <button><a href="python.php" id="li">Content</a></button><br> 
                       <button> <a href="aboutus.php" id="li">About</a></button><br>
                  
                        <button><a href="gallary.php" id="li">Gallary</a></button>
                    </div>
                </div>

                <label for="name">Name:</label><br>
                <input type="text" name="name" id="name" required><br><br>

                <label for="email">E-mail:</label><br>
                <input type="email" name="email" id="email" required><br><br>

                <label for="message">Message:</label><br>
                <textarea id="message" name="message" required></textarea><br><br>

                <button type="submit" id="loginButton">Submit</button>
            </form>
        </div>

        <div id="wrap">
            <br><h1 id="future"> <br> <br></h1><br><br><br><br><br><br><br><br><br><br><br><br>
            <h2 id="log"></h2>
        </div>

        <div class="out">

<a href="session.php" >Log Out!</a>
</div>

       
    </div>
</div>
<script>
    function toggleMenu() {
        var menu = document.getElementById("menu");
        menu.style.display = (menu.style.display === "block") ? "none" : "block";
    }
    function back(){
       
        window.location.href = "float.html";
    }
</script>
</body>
</html>
