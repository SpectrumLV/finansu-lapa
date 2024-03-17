<?php include_once('navbar.php'); ?>

<main>
  <div class="wrapper">
    <section class="case-vid">
      <h2>Inflācija</h2>
      <article>
        <h3>Vispārējs cenu kāpums</h3>
        <p>Tirgus ekonomikā preču un pakalpojumu cenas ik brīdi var mainīties. Dažas cenas pieaug, citas – samazinās. Par inflāciju runājam tad, kad vērojams vispārējs preču un pakalpojumu cenu kāpums, nevis pieaug tikai atsevišķu produktu cenas. Tas nozīmē, ka šodien par 1 euro var nopirkt mazāk nekā vakar. Citiem vārdiem runājot, inflācija laika gaitā samazina valūtas vērtību.</p>
      </article>
      <!-- Other articles -->
    </section>
  </div>

  <!-- Quiz container -->
  <div id="quiz-container" class="wrapper">
    <h2>Quiz</h2>
    <div id="question"></div>

    <div class="progress">
      <div id="progress-bar" class="progress-bar"></div>
    </div>
    <div id="options"></div>
  </div>

<!-- Congratulations Popup -->
<div id="congratulations-popup" class="popup" style= "display: none">
    <div class="popup-content">

      <h2>Congratulations!</h2>
      <p>You have completed the quiz successfully.</p>
    </div>
  </div>



</main>

<?php include_once('footer.php'); ?>

<script>
  // Define quiz questions
  const questions = [
    {
      question: "What causes inflation?",
      options: ["Increase in money supply", "Decrease in money supply", "Stable money supply", "Change in interest rates"],
      answer: 0 // Index of the correct answer in options array
    },
    {
      question: "What is the average inflation target in the eurozone?",
      options: ["1%", "2%", "3%", "4%"],
      answer: 1
    },
    {
      question: "How is inflation measured in the eurozone?",
      options: ["GDP", "CPI", "Unemployment rate", "Trade balance"],
      answer: 1
    }
  ];

  let currentQuestionIndex = 0;
  let correctAnswers = 0; // Variable to track correct answers
  const quizContainer = document.getElementById('quiz-container');
  const questionElement = document.getElementById('question');
  const optionsElement = document.getElementById('options');
  const progressBar = document.getElementById('progress-bar');
  const congratulationsPopup = document.getElementById('congratulations-popup');

  function showQuestion() {
    const currentQuestion = questions[currentQuestionIndex];
    questionElement.textContent = currentQuestion.question;
    optionsElement.innerHTML = '';
    currentQuestion.options.forEach((option, index) => {
      const button = document.createElement('button');
      button.textContent = option;
      button.addEventListener('click', () => checkAnswer(index));
      optionsElement.appendChild(button);
    });
    updateProgressBar();
  }

  function showCongratulationsPopupWithDelay() {
    setTimeout(() => {
        showCongratulationsPopup();
    }, 800); // Adjust the delay time as needed (in milliseconds)
}


  function checkAnswer(selectedIndex) {
    const currentQuestion = questions[currentQuestionIndex];
    if (selectedIndex === currentQuestion.answer) {
      correctAnswers++;
      updateProgressBar();
      currentQuestionIndex++;
    } else{
      resetQuiz();
    }
    
    if (currentQuestionIndex < questions.length) {
      showQuestion();
    } else {
      updateProgressBar();
      showCongratulationsPopupWithDelay()
    }
  }

  function updateProgressBar() {
    const percentage = (correctAnswers / questions.length) * 100;
    progressBar.style.width = `${percentage}%`;
  }

  function showCongratulationsPopup() {
    quizContainer.style.display = 'none';
    
    congratulationsPopup.style.display = 'block';

  }

  function closePopup() {
    congratulationsPopup.style.display = 'none';

    resetQuiz();
  }

  function resetQuiz() {
    currentQuestionIndex = 0;
    correctAnswers = 0;
    progressBar.style.width = '0%';
    showQuestion();
  }

  // Start the quiz
  showQuestion();
</script>