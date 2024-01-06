
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
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

</head>
<body>
   
    <div class="top-right">
        <button onclick="goToHome()" id="a">Home</button>
        <button onclick="goToPrevious()" id="a">Previous</button>
        <button onclick="goToNext()" id="a">Next</button>
      </div>
  
      <!DOCTYPE html>
      <html>
      <head>
        <style>
          body{
            background-color: rgba(255, 0, 0, 0.767);
          }
          .container {
            display: grid;
            grid-template-rows: auto 1fr 1fr;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            height: 100vh;
            justify-content: space-evenly;
          }
      
          .header {
            grid-column: 1 / span 2;
            text-align: center;
            padding: 10px;
            background-color: rgba(230, 89, 89, 0.747)
                      }
      
         
      
         
      
          .top-right {
    position: absolute;
    top: 10px;
    right: 10px;
    padding: 5px;
  }
  button:hover{color:black;
    background-color: yellow;

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
        .flex-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
         
        .footer {
            background-color: rgb(239, 19, 19);
            padding: 10px;
            top:0;
        }

        .footer-col {
            width: 50%;
            padding: 15px;
            margin: 0;
            box-sizing: border-box;
        }

        #h4 {
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 30px;
            font-weight: 500;
            position: relative;
        }

        #h4::before {
            content: " ";
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: red;
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }

        .list {
            font-size: 20px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            display: block;
            padding-bottom: 10px;
        }

        .list:hover {
            color: yellow;
            padding-left: 10px;
      
            
        }
       
        .sociallink {
            display: inline;
            padding: 1%;
            height: 40px;
            width: 40px;
            background-color: rgba(255, 255, 255, 0.178);
            margin: 0 10px 10px 0;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }

        .sociallink:hover {
            color: #242626;
            background-color: yellow;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }
        </style>
      </head>
      <body>
        <div class="flex-container">
          <div class="header">
            <h1>CSS</h1>
            
          </div>
          <div class="flex-item">    <i class="fa-regular fa-hand-point-right fa-fade fa-xl" style="color: yellow;"></i></i> CSS is a language that helps developers style websites.<br><br> <i class="fa-regular fa-hand-point-right fa-xl" style="color: yellow;"></i></i> It's used to add design elements like colors, font styles, and spacing.<br><br><i class="fa-regular fa-hand-point-right fa-xl" style="color: yellow;"></i></i> With CSS, the design is separate from the content, making it easier to change the design without affecting the content
          </div>
          <div class="flex-item"><img src="img/css.jpg" text-align="" ></div>
          <div class="flex-item">  <i class="fa-regular fa-hand-point-right  fa-xl" style="color: yellow;"></i></i> Cascading Style Sheets (CSS) is a stylesheet language used to describe the presentation of a document written in HTML or XML (including XML dialects such as SVG, MathML or XHTML). <br><br>  <i class="fa-regular fa-hand-point-right fa-xl" style="color: yellow;"></i></i> CSS describes how elements should be rendered on screen, on paper, in speech, or on other media.<br><br> <i class="fa-regular fa-hand-point-right  fa-xl" style="color: yellow;"></i></i> 

            CSS is among the core languages of the open web and is standardized across Web browsers according to W3C specifications. <br><br>  <i class="fa-regular fa-hand-point-right  fa-xl" style="color: yellow;"></i></i> Previously, the development of various parts of CSS specification was done synchronously, which allowed the versioning of the latest recommendations.<br><br>  <i class="fa-regular fa-hand-point-right fa-fade fa-xl" style="color: yellow;"></i></i>  You might have heard about CSS1, CSS2.1, or even CSS3. There will never be a CSS3 or a CSS4; rather, everything is now CSS without a version number.</div>
          <div class="flex-item"> 
            <i class="fa-regular fa-hand-point-right fa-xl" style="color: yellow;"></i></i>  CSS Introduction
If you're new to web development, be sure to read our CSS basics article to learn what CSS is and how to use it.<br><br> <i class="fa-regular fa-hand-point-right fa-xl" style="color: yellow;"></i></i> 

CSS Tutorials
Our CSS learning area contains a wealth of tutorials to take you from beginner level to proficiency, covering all the fundamentals.<br><br> <i class="fa-regular fa-hand-point-right fa-xl" style="color: yellow;"></i></i> 

CSS Reference
Our exhaustive CSS reference for seasoned Web developers describes every property and concept of CSS.
          </div>
        </div>
        <div class="footer">
          <div class="row">
              <div class="footer-col">
                  <h4 id="h4">Follow us</h4>
                  <div>
                      <a class="sociallink" href="#"><i class="fab fa-facebook"></i></a>
                      <a class="sociallink" href="#"><i class="fab fa-twitter"></i></a>
                      <a class="sociallink" href="#"><i class="fab fa-instagram"></i></a>
                      <a class="sociallink" href="#"><i class="fab fa-linkedin-in"></i></a>
                  </div>
              </div>
              <div class="footer-col">
                  <h4 id="h4">Help</h4>
                  <ul class="list">
                      <li class="list"><a class="list" href="mailto:gopisettu3011@gmail.com">E-mail</a></li>
                      <li class="list"><a class="list" href="mailto:gopisettu1130@gmail.com">Contact</a></li>
                      <li class="list"><a class="list" href="float.php">Our_Services</a></li>
                  </ul>
              </div>
          </div>
      </div>
      </body>
      </html>
      
<script>
    function goToHome() {
      // Implement logic to navigate to the home page
      window.location.href = "home1.php"; // Replace with your home page URL
    }

    function goToPrevious() {
      // Implement logic to navigate to the previous page
      window.location.href = "python.php"; // Replace with your previous page URL
    }

    function goToNext() {
      // Implement logic to navigate to the next page
      window.location.href = "python3.php"; // Replace with your next page URL
    }
  </script>
    
</body>
</html>