<?php include_once('navbar.php'); ?>

<main>

<section class="case-vid">
      
<article>    
<div class="container">
  <div class="row">

  <div class="col-md-6" style="margin-right: 100px; text-align: center">
      <h3>INFLĀCIJA</h3>
      <p>Inflācija apzīmē cenu pieauguma procesu. 
Inflāciju mēra kā cenu vidējā līmeņa izmaiņu procentuālā izteiksmē
noteiktā laika posmā - mēnesī, ceturksnī, gadā u.c.</p>
    </div>
    <div class="col-md-4">
      <div class="image-container">
        <img src="inflacija1.png" alt="Sample Image" class="img-fluid">
      </div>
    </div>

  </div>
</div>

<article>
      <!-- Other articles -->
</section>

<section class="case-vid">
      
      <article>    
      <div class="container" style="margin-top: 100px">
        <div class="row">
      
        
          <div class="col-md-4" style="margin-right: 100px">
            <div class="image-container">
            <iframe width="500" height="280" src="https://www.youtube.com/embed/ZfPxojh0Dyc?si=wIGCeQIVbpYXui20" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-md-6" style="text-align: center; padding-right: 0px margin-right: 0px">
            <br>
            <p>Inflācija apzīmē cenu pieauguma procesu. 
Inflāciju mēra kā cenu vidējā līmeņa izmaiņu procentuālā izteiksmē
noteiktā laika posmā - mēnesī, ceturksnī, gadā u.c.</p>
          </div>
      
        </div>
      </div>
      
      <article>
            <!-- Other articles -->
          </section>   
  









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

<script src="quiz.js"></script>
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

quizGame(questions);

</script>