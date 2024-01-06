

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

    <title>JAVA SCRIPT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

</head>
<body>
   
    <div class="top-right">
        <button onclick="goToHome()" id="a">Home</button>
        <button onclick="goToPrevious()" id="a">Previous</button>
        <button onclick="goToNext()" id="a">Quiz</button>
      </div>
  
      <!DOCTYPE html>
      <html>
      <head>
        <style>
          body{
            background-color: rgba(53, 68, 238, 0.636);
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
            background-color: rgba(52, 77, 167, 0.747)
                      }
      
         
      
         
      
          .item {
            border: 1px solid #000;
            padding: 40px;
            text-align: center;
          }
          .top-right {
    position: absolute;
    top: 4px;
    right: 10px;
    padding: 5px;
  }
  button:hover{color:white;
    background-color: red;

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
            background-color: rgba(53, 68, 238, 0.636);
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
            color: #00ff44;
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
            background-color: red;
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
            <h1>JAVA SCRIPT</h1>
            
          </div>
          <div class="flex-item"><i class="fa-regular fa-hand-point-right  fa-xl fa-fade" style="color: red;"></i></i>JavaScript is a scripting or programming language that allows you to implement complex features on web pages — every time a web page does more than just sit there and display static information for you to look at — displaying timely content updates, interactive maps, animated 2D/3D graphics, scrolling video jukeboxes, etc. <br><br>  <i class="fa-regular fa-hand-point-right fa-xl" style="color: red;"></i></i>you can bet that JavaScript is probably involved. It is the third layer of the layer cake of standard web technologies, two of which (HTML and CSS) we have covered in much more detail in other parts of the Learning Area
          </div>
          <div class="flex-item"><img src="img/js.jpg" text-align="" ></div>
          <div class="flex-item"> <i class="fa-regular fa-hand-point-right fa-xl" style="color: red;"></i></i>  HTML is the markup language that we use to structure and give meaning to our web content, for example defining paragraphs, headings, and data tables, or embedding images and videos in the page.<br><br><i class="fa-regular fa-hand-point-right fa-xl" style="color: red;"></i></i>
            CSS is a language of style rules that we use to apply styling to our HTML content, for example setting background colors and fonts, and laying out our content in multiple columns.
            <br><br><i class="fa-regular fa-hand-point-right fa-xl" style="color: red;"></i></i>JavaScript is a scripting language that enables you to create dynamically updating content, control multimedia, animate images, and pretty much everything else. (Okay, not everything, but it is amazing what you can achieve with a few lines of JavaScript code.)</div>
          <div class="flex-item">The DOM (Document Object Model) API allows you to manipulate HTML and CSS, creating, removing and changing HTML, dynamically applying new styles to your page, etc. <br><br><i class="fa-regular fa-hand-point-right fa-xl" style="color: red;"></i></i>Every time you see a popup window appear on a page, or some new content displayed (as we saw above in our simple demo) for example, that's the DOM in action.
            <br><br><i class="fa-regular fa-hand-point-right fa-xl" style="color:red;"></i></i>The Geolocation API retrieves geographical information. This is how Google Maps is able to find your location and plot it on a map.<br><br><i class="fa-regular fa-hand-point-right fa-xl" style="color:red;"></i></i>
            The Canvas and WebGL APIs allow you to create animated 2D and 3D graphics. People are doing some amazing things using these web technologies — see Chrome Experiments and webglsamples.</div>
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
      window.location.href = "python2.php"; // Replace with your previous page URL
    }

    function goToNext() {
      // Implement logic to navigate to the next page
      window.location.href = "cer.php"; // Replace with your next page URL
    }
  </script>
    
</body>
</html>