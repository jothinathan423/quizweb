

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
            background-color: antiquewhite;
          }
         
      
          .header {align-items: center;
            grid-column: 1 / span 2;
            text-align: center;
            padding: 10px;
            background-color: rgba(180, 176, 129, 0.747)
                      }
      
         
      
         
      
          
          .top-right {
    position: absolute;
    top: 10px;
    right: 10px;
    padding: 5px;
  }
  button:hover{color:white;
    background-color: coral;

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
            background-color: rgb(218, 166, 98);
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
            color: black;
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
            color:black;
            background-color: #ffffff;
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
            <h1>HTML</h1>
            
          </div>
          <div class="flex-item"><i class="fa-regular fa-hand-point-right fa-fade fa-xl" style="color: rgb(255, 145, 0);"></i></i>  HTML (HyperText Markup Language) is the code that is used to structure a web page and its content. For example, content could be structured within a set of paragraphs, a list of bulleted points, or using images and data tables
            Web development.<br> <br><i class="fa-regular fa-hand-point-right fa-xl " style="color: rgb(255, 145, 0);"></i>Developers use HTML code to design how a browser displays web page elements, such as text, hyperlinks, and media files. <br><br><i class="fa-regular fa-hand-point-right fa-xl " style="color: rgb(255, 145, 0);"></i>
Internet navigation. Users can easily navigate and insert links between related pages and websites as HTML is heavily used to embed hyperlinks. 
Web documentation. HTML makes it possible to organize and format documents, similarly to Microsoft Word.
          </div>
          <div class="flex-item"><img src="img/html1.jpg" text-align="" ></div>
          <div class="flex-item"><i class="fa-regular fa-hand-point-right fa-xl" style="color: rgb(255, 145, 0) ;"></i>HTML is a markup language that defines the structure of your content.<br><br><i class="fa-regular fa-hand-point-right fa-xl " style="color:  rgb(255, 145, 0);"></i> HTML consists of a series of elements, which you use to enclose, or wrap, different parts of the content to make it appear a certain way, or act a certain way.<br><br> <i class="fa-regular fa-hand-point-right fa-xl " style="color:  rgb(255, 145, 0);"></i>The enclosing tags can make a word or image hyperlink to somewhere else, can italicize words, can make the font bigger or smaller, and so on.<br><br> <i class="fa-regular fa-hand-point-right fa-xl " style="color:  rgb(255, 145, 0);"></i>For example, take the following line of content:</div>
          <div class="flex-item">As a markup language, tags are used in HTML to define the overall structure and layout of a webpage, as well as the content elements within it.<br><br> <i class="fa-regular fa-hand-point-right  fa-xl" style="color:  rgb(255, 145, 0)"></i>At its most fundamental level — before extra styling and dynamic elements are applied — HTML tags tell your web browser what to display on the screen and in what order.<br><br></div>
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
      window.location.href = "home1.php"; // Replace with your previous page URL
    }

    function goToNext() {
      // Implement logic to navigate to the next page
      window.location.href = "python2.php"; // Replace with your next page URL
    }
  </script>
    
</body>
</html>