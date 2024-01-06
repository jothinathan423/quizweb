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
    <title>Front-End-Development</title>
    <style>

body{ 
    width:auto;
    background-color:black ;
    height:auto;
  

   }
   #wrapper{ 
   
   background-attachment: scroll;

    height:100%;
       
       width:100%;
       min-width :5rem;
       border:0.2rem solid red;
       border-width:thin medium medium thin ;
       border-color:blue rgba(255, 0, 0, 0.393) rgba(255, 255, 255, 0) green;
       box-shadow: 5rem 1rem 10rem 1rem red ;
       display:grid;
       }
   h1,p{ color: white;
       border:0.1rem solid red;
       padding:2rem 5rem;
       margin:0 auto;
       text-align: center ;
       
   }
   h2{color: white;}
   a{ text-decoration: none;
   color:black}
   a:hover{ color:white;
   background-color:black;}
   
   .link{
       background-color:chocolate;
       
       padding:1rem;
       width:100%;
       margin:0 auto;
       
       
       }
     
    
  
   .anch:hover{
      padding: 10px;
      color: orangered;
   }
 .link:active{
   color:#ffffff;
 }
   
.linkli ,.link{display:inline-block;

}

 


.sidebar{
background-color:rgb(0, 0, 0);
color: white;
padding-top: 2%;
padding-bottom: 2%;
top:0;
margin:0 auto;




}

header {
   width: 100%;

   
   color: white;
   padding-top: 2%;
padding-bottom: 2%;
top:0;
margin:0 auto;
 }
 

.linkli .anch{
   color: white;
   margin-right: 62px;
   border:3px solid rgba(226, 5, 5, 0.534);
}

.anch:hover{
   color:rgba(0, 0, 0, 0.907);
   background: rgb(237, 4, 4);
   padding-left: 10px;
}
.footer{
   background-color: #242626;
   padding:70px;
}
.list{
   list-style:none;
}
.footer-col{
   width:50%;
   padding:15px;
   margin:0;
   box-sizing: border-box;
}
#h4{
   font-size: 18px;
   color:#ffffff;
   text-transform:capitalize;
margin-bottom:30px;
font-weight:500;
position:relative;
}
#h4::before{
   content:" ";
   position:absolute;
   left:0;
   bottom:-10px;
   background-color:red;
   height:2px;
   box-sizing:border-box;
   width: 50px;
}



.list{
   font-size:20px;
   text-transform:capitalize;
   color:#ffffff;
   text-decoration: none;
   font-weight: 300;
   display:block;
   padding-bottom: 10px;
  
   
}
.list:hover{
   color:#ffffff;
   padding-left: 10px;
   

   
}
.sociallink{
   display: inline;
   padding:1%;
   height:40px;
   width:40px;
   background-color: rgba(255, 255, 255, 0.178);
   margin:0 10px 10px 0;
   line-height: 40px;
   border-radius: 50%;
   color:#ffffff;
   transition:all 0.5s ease;

   
}
.sociallink:hover{
   color:#242626;
   background-color: #ffffff;
}
*{
   margin:0;
   padding:0;
   box-sizing: border-box;
}
.row{
   display: flex;
   flex-wrap: wrap;
}
       

        /* Style for the button */
        .header-button {
            display: none; /* Hide the button by default */
            background-color: rgb(255, 14, 14); /* Green background */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            position: fixed;
            top: 5px;
            right: 10px;
        }

        .dynamic-menu {
            display: none; /* Hide the dynamic menu by default */
            position: fixed;
            top: 50px;
            right: 10px;
            background-color: #000000;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        .dynamic-menu a {
            display: block;
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #000000;
            text-decoration: none;
            color:white;
        }

        .dynamic-menu a:hover {
            background-color: rgb(18, 71, 227);
        }
        .close-button:hover{
    color:coral;
    background-color: #ffffff;
}

        .close-button {
            position: absolute;
            
            cursor: pointer;
            color: rgb(255, 0, 0);
            font-size: 24px;
           
        }


         
        .footer {
            background-color: #242626;
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
            color: #ffffff;
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
            background-color: #ffffff;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }
        #logout{
            position:absolute;
           font-size: 20px;
           font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
           top: 1rem;
            right: 1px;
            border: 2px black solid ;
            background-color: red;
            a{
                text-decoration: none;
            }
            

           
    }
    #username{
        position: absolute;
        right:1px;
        font-size: 20px;
    }
   
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script>
        function adjustHeader() {
            var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

            // Check if the width is below 725.6
            if (width < 725.6) {
                // Change the header to a button or perform any other modification
                document.querySelector('.link').style.display = 'none';
                document.querySelector('.header-button').style.display = 'block';
            } else {
                // Restore the original header
                document.querySelector('.link').style.display = 'block';
                document.querySelector('.header-button').style.display = 'none';
            }
        }

        function toggleMenu() {
            var dynamicMenu = document.querySelector('.dynamic-menu');

            // Toggle the dynamic menu visibility
            dynamicMenu.style.display = (dynamicMenu.style.display === 'none' || dynamicMenu.style.display === '') ? 'block' : 'none';
        }

        function closeMenu() {
            // Close the dynamic menu
            document.querySelector('.dynamic-menu').style.display = 'none';
        }

        // Call the function on page load and whenever the window is resized
        window.onload = adjustHeader;
        window.onresize = adjustHeader;
    </script>
</head>
<body>
    <div class="sidebar">
        <header>
            <ul class="link" id="wrap">
                <li class="linkli"><a class="anch" href="index.html">HOME</a></li>
                <li class="linkli"><a class="anch" href="python.php">CONTENT</a></li>
                <li class="linkli"><a class="anch" href="aboutus.php">ABOUT</a></li>
                <li class="linkli"><a class="anch" href="float.php">SERVICE</a></li>
                <li class="linkli"><a class="anch" href="gallary.php">GALLERY</a></li>
                <li class="linkli" id="logout"><a class="anc" href="session.php">Log Out!</a></li>
                <li class="linkli" id="username"><a class="anc" > Welcome      <?php echo $username; ?>

            </ul>

        </header>
        <!-- Button for smaller screens -->
        <button class="header-button" onclick="toggleMenu()">Menu</button>

        <!-- Dynamic menu -->
        <div class="dynamic-menu">
            <span class="close-button" size="" onclick="closeMenu()">&times;</span>
            <a href="index.html">HOME</a>
            <a href="python.php">CONTENT</a>
            <a href="aboutus.php">ABOUT</a>
            <a href="float.php">SERVICE</a>
            <a href="gallary.php">GALLERY</a>
            <a href="session.php" >Log Out</a>
        </div>
    </div>

    <div id="wrapper">
        <h1>WEB DEVELOPMENT</h1>
       
        <p> Web development is used for a wide range of purposes and applications due to the central role that the internet plays in modern life. Here are some of the primary reasons why web development is used:<br><br>

            Website Creation:   One of the most common uses of web development is for creating websites. Businesses, individuals, organizations, and institutions all use web development to establish their online presence and share information with a global audience.<br><br>
            
            E-Commerce: Web development is crucial for creating e-commerce websites and online stores where businesses sell products and services to customers over the internet.<br><br>
            
            Blogs and Content Management: Content management systems (CMS) and blogging platforms are built using web development technologies. These platforms allow individuals and companies to publish and manage content online.<br><br>
            
            Social Networking: Popular social media platforms like Facebook, Twitter, Instagram, and LinkedIn are created using web development. They provide users with the ability to connect, communicate, and share content online.<br><br>
            
            Web Applications: Web development is used to build a wide variety of web applications, such as email services, project management tools, customer relationship management (CRM) software, and more. These applications offer functionality and interactivity through a web browser.<br><br>
            
            E-Learning: Web development powers online learning platforms, making it possible for students to access courses, lessons, and educational resources over the internet.<br><br>
            
            Information Sharing: Websites and web applications are used to share information, news, research, and data. They serve as valuable resources for education, research, and public communication.<br><br>
            
            Entertainment: Streaming services, online gaming platforms, and multimedia websites use web development to deliver video, audio, and interactive entertainment content.<br><br>
            
            Business Operations: Companies use web development to build internal applications for various business operations, such as inventory management, human resources, and project tracking.<br><br>
            
            Government Services: Government agencies use web development to provide online services and information to citizens, such as tax filing, license applications, and official documents.<br><br>
            
            Search Engines: Web development is integral to search engines like Google and Bing, which index and retrieve information from the web.
            <br><br>
            Collaboration and Communication: Web development enables the creation of collaborative tools, project management platforms, and communication services, fostering productivity and teamwork.
            <br><br>
            Healthcare: Telemedicine and health information websites use web development to offer medical services and access to health-related information.<br><br>
            
            Travel and Tourism: The travel and tourism industry relies on web development for booking flights, hotels, and planning trips via travel agencies and online services.<br><br>
            
            Innovation: Web development supports emerging technologies such as artificial intelligence, blockchain, and the Internet of Things (IoT) through the creation of web-based applications and services.<br><br>
            
            Job Market: The technology sector, including web development, contributes to job creation and offers numerous employment opportunities.<br><br>
            
            Web development is a versatile field that plays a central role in the digital age, impacting various aspects of life, work, and communication. It enables the creation of websites and applications that connect people, share information, and offer services in a global and interconnected world.</p></div>
            
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

