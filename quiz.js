const questions = [
    {
        question: "1. Abbreviation of HTML?",
        choices: ["Hyper Text Makeup Language","Hyper Text Markup Language", "High Text Manipulate Language"],
        correctAnswer: 1
    },
    {
        question: "2. HTML is used for?",
        choices: ["Translate Language", "Image Processing", "Web Development"],
        correctAnswer: 3
    },
    {
        question: "3. HTML used in the Layer of?",
        choices: ["Structure Layer", "Presentation Layer", "Responsive Layer" ],
        correctAnswer: 1
    },
    {
        question: "4. HTML defines?",
        choices: ["Structure of the Webpage", "Design of the webpage", "Response of the Webpage" ],
        correctAnswer: 1
    },
    {
        question: "5. What does CSS stand for?",
        choices: ["Cascading Style Sheets", "Computer Style Sheets", "Creative Style Sheets" ],
        correctAnswer: 1
    },
    {
        question: "6. Which property is used to change the background color in CSS?",
        choices: ["color", "background-color", "bgcolor" ],
        correctAnswer: 2
    },
    {
        question: "7. What does the 'box-sizing' property in CSS do?",
        choices: ["Controls the size of the box", "Specifies the content box model", "Defines the position of the box" ],
        correctAnswer: 1
    },
    {
        question: "8. Which property is used to control the font size in CSS?",
        choices: ["font-size", "text-size", "bgcolor" ],
        correctAnswer: 2
    },
    {
        question: "9. What does DOM stand for?",
        choices: ["Document Object Model", "Data Object Model", "Document Oriented Model" ],
        correctAnswer: 1
    },
    {
        question: "10. What keyword is used to declare variables in JavaScript?",
        choices: ["var", "let","variable" ],
        correctAnswer: 2
    },
    {
        question: "11. Which operator is used for strict equality in JavaScript?",
        choices: ["==", "===", "=" ],
        correctAnswer: 2
    },
    {
        question: "12. What function is used to print to the console in JavaScript?",
        choices: ["print()", "log()", "console.log()" ],
        correctAnswer: 3
    }
];

let currentQuestion = 0;
let score = 0;

function displayQuestion() {
    const questionElement = document.getElementById("question");
    const choicesElement = document.getElementById("choices");
    const currentQ = questions[currentQuestion];

    questionElement.textContent = currentQ.question;
    choicesElement.innerHTML = "";

    currentQ.choices.forEach((choice, index) => {
        const choiceButton = document.createElement("button");
        choiceButton.textContent = choice;
        choiceButton.addEventListener("click", () => checkAnswer(index));
        choicesElement.appendChild(choiceButton);
    });
}

function checkAnswer(selectedIndex) {
    const currentQ = questions[currentQuestion];
    if (selectedIndex === currentQ.correctAnswer - 1) {
        score++;
    }

    currentQuestion++;

    if (currentQuestion < questions.length) {
        displayQuestion();
    } else {
        showResult();
    }
}

function showResult() {
    const quizContainer = document.querySelector(".quiz-container");
    quizContainer.innerHTML = `
        <h1>Quiz Completed!</h1>
        <p style="background-color:red; width:fit-content;"</style>Your Score: ${score} out of ${questions.length}</p>
        <a href= "certifcate.php" style="text-decoration: none; background: whitesmoke; ">GET certificate</a>
        
    `;
}

function restartQuiz() {
    currentQuestion = 0;
    score = 0;
    displayQuestion();
}

displayQuestion();

