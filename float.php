
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
    <title>Document</title>
  
    <style>
        body{
            background-color:  aquamarine;
            
        }
        .service{
    
    width:"300";
     height:"250" ;

    
}
.head-serve{
    border: 2px solid black;
    background-color: aqua;
    display: grid;
  grid-template-rows: auto 1fr 1fr;
  grid-template-columns: 1fr 1fr;
  gap: 10px;
  height: 100vh;
  justify-content: space-evenly;
}
.head{
    background-color: aquamarine;
    text-align: center;
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
      #h1{
        text-decoration: none;
        color:red;
        
      }
      #h1:hover{
        transition: steps(1.1);
        color:aquamarine;;
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
            border: 3px solid black;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
          
        }
       
    </style>
</head>
<body>
    <div class="head">   <h1>
        Our Service
    </h1></div>
    
    <div class="btn">
        <button id="btn" onclick="toggleMenu()">Menu</button>
        <div id="menu">
            <span id="close" onclick="toggleMenu()">X</span>
            <button><a href="home1.php" id="li">Home</a></button>
           <button><a href="python.php" id="li">Content</a></button> 
           <button> <a href="aboutus.php" id="li">About</a></button>
      
            <button><a href="gallary.php" id="li">Gallary</a></button>
        </div>
    </div>
<div class="flex-container">
<div class="flex-item" >
    <div class="head"><h2> Service#1</h2></div>
    <img src="img/service2.jpg" width="270" height="180" >
    <h3>Support for Chrome browser: 24/7 . Billing inquiries only. Upgrade to get Technical Support. Technical Support in English available per the English row above.</h3>
</div>  
<div class="flex-item" >
    <div class="head"><h2>Service#2</h2></div>
    <img src= "img/service1.jpg" width="270" height="180" >
<p> Please visit the contact number 6381472125  or else visit  the help section to get further information to get access or else visit  the 
    next service box to get further in formation
    Please visit the contact number 6381472125  or else visit  the help section to get further information  <br>
 </p>
</div> 
<div class="flex-item" >
    <div class="head"> <h2>Service#3</h2></div>
    <img src="img/service4.jpg" width="270" height="180" >
<p> visit the link to get help or please mail the problem <a href="mailto:gopisettu3011@gmail.com">Email</a></p>
</div> 
<div class="flex-item">
    <div class="head"> <h2>Service#3</h2></div>

<h1 >For Further <a href="contactus.php" id="h1" >Contact Us</a></h1>

        
    
    

</div>
<script>
    function toggleMenu() {
        var menu = document.getElementById("menu");
        menu.style.display = (menu.style.display === "block") ? "none" : "block";
    }
</script>

</body>
</html>
