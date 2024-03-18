function quizGame(questions) {
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
    
    
    function resetQuiz() {
      currentQuestionIndex = 0;
      correctAnswers = 0;
      progressBar.style.width = '0%';
      showQuestion();
    }
    
    // Start the quiz
    showQuestion();
    }