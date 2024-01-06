<!DOCTYPE html>
<html>
<head>
    <title>Webdevelopment Quiz</title>
    <style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
    background-image: url("back.jpg")  ;
}

center {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.quiz-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: left;
    max-width: 500px;
    width: 100%;
    background-image: url("inner.jpg");
}

h1 {
    color:white;
    margin-right: 50px;
    
}

#question {
    font-size: 25px;
    margin-bottom: 20px;
   color:white;
   font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
}

.choices {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

button {
    background-color: black;
    
    color: #fff;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
    margin: 15px auto 0; /* Center the button horizontally with a gap at the top */
    display: block;
}

button:hover {
background-color: rgb(235, 176, 38);
}
body {
    font-family: 'Arial', sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
    background-image: url("img/back.jpg") ;
}

center {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.quiz-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: left;
    max-width: 500px;
    width: 100%;
    background-image: url("img/inner.jpg");
}

h1 {
    color:white;
    margin-right: 50px;
    
}

#question {
    font-size: 25px;
    margin-bottom: 20px;
   color:white;
   font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
}

.choices {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

button {
    background-color: black;
    
    color: #fff;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
    margin: 15px auto 0; /* Center the button horizontally with a gap at the top */
    display: block;
}

button:hover {
background-color: rgb(235, 176, 38);
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
   
</head>
<body>
    <center> 
        

        <div class="quiz-container">
            <h1 id="topic">Webdevelopment Quiz</h1>
            <p id="question"></p>
            <div id="choices" class="choices"></div>
            <button id="nextButton" onclick="checkAnswer()">Next</button>
        </div>
    </center>   
    <div class="out">

<a href="session.php" >Log Out!</a>
</div> 
    <script src="quiz.js"></script>
</body>
</html>
