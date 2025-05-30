/**
 * @file faq.js
 * @description This is the main event listener file for the F.A.Q page
 * topic information page.
 * @author Owen Plimer
 * @contact 1761799@fife.ac.uk
 * @created 2025-05-24
 * @lastUpdated 2025-05-25
 * @version 1.0.1
*/


const answers = ["It just does, probably for aerodynamics or something", "While no concrete figure was ever released, based on information from the NASA administrator in 2009, the cost of an Ares 1 launch is roughly $1.6 billion (yes, billion, with a B) per launch. Luckily there was only a single launch, but still... that's a lot of money! To put it differently, that is $1600000000. So, if you and three of your other multi-millionare friends want a ride, you'll only pay a teeny tiny fee of $400 million each.", "As strange as it seems, the mirror was actually the wrong size! So when astronomers tried to make use of it to take pictures, they discovered that everything was entirely blurry"];

document.addEventListener("DOMContentLoaded", () => {
    // Wait until the document has fully loaded, then add the event listeners.
    const questionOneButton = document.getElementById("question-1-button");
    const questionTwoButton = document.getElementById("question-2-button");
    const questionThreeButton = document.getElementById("question-3-button");


    questionOneButton.addEventListener("click", () => {
        if (!questionIsOpen(1)) {
            showAnswer(1);
        } else {
            clearOpenAnswers();
        }
    })


    questionTwoButton.addEventListener("click", () => {
        if (!questionIsOpen(2)) {
            showAnswer(2);
        } else {
            clearOpenAnswers();
        }
    })


    questionThreeButton.addEventListener("click", () => {
        if (!questionIsOpen(3)) {
            showAnswer(3);
        } else {
            clearOpenAnswers();
        }
    })


    // Add the home button event listener
    const homeButton = document.getElementById("home-button");
    homeButton.addEventListener("click", () => {
        location.href = "https://fifecomptech.net/~s1761799/SpaceRelatedBusiness/";
    })
})


/**
 * Open the selected answer
 * @param {number} questionNumber The numeric ID for the question to show the answer of
 */
function showAnswer(questionNumber) {
    // Clear any currently open answers
    clearOpenAnswers();

    // Get the question from the list
    const question = document.getElementById(`question-${questionNumber}`);

    // Get the button, and change the text to hide answer
    question.getElementsByTagName("button")[0].textContent = "Hide Answer";

    // Now make a new answer element
    var answerElement =   document.createElement("answer");
    var answerText = document.createElement("p");
    var answerTextNode = document.createTextNode(answers[questionNumber - 1]);


    answerText.appendChild(answerTextNode);
    answerElement.appendChild(answerText);
    
    question.appendChild(answerElement);
}


/**
 * Clear any currently open answers
 */
function clearOpenAnswers() {
    // Get all elements with the tag name "answer"
    const questionContainer = document.getElementById("question-container");
    const answers = questionContainer.getElementsByTagName("answer");

    // Loop over all answers in the page
    for (let i = 0; i < answers.length; i++) {
        const answerButton = answers[i].parentNode.getElementsByTagName("button")[0];
        answerButton.textContent = "Reveal Answer"
        answers[i].parentNode.removeChild(answers[i]);
    }
}


/**
 * Checks if the specified question number is open.
 * @param {numer} questionNumber The ID of the question to check
 */
function questionIsOpen(questionNumber) {
    const question = document.getElementById(`question-${questionNumber}`);
    const numberOfAnswers = question.getElementsByTagName("answer").length;

    if (numberOfAnswers > 0) {
        return true
    } else {
        return false;
    }
}