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
        <img src="images/inflacija1.png" alt="Sample Image" class="img-fluid">
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
          </section>   
  



     <section class="case-vid">
      
      <article>    
      <div class="container paragraph" style="margin-top: 50px; padding-right: 70px">
        
              <h1 style="font-size: 20px; color: #2A50BF">Pieprasījuma inflācija</h1>
            <p>Pieprasījuma inflācijas cēlonis ir tas, ka patērētājiem ir daudz naudas un daudz naudas "skrien pakaļ" nelielam preču daudzumam.
Pieprasījuma inflāciju var samazināt, ja samazina naudas daudzumu vai palielina preču daudzumu, vai īsteno abus pasākumus.</p>
       
      
      </div>
      <article>   
          </section>   





<section class="case-vid">
      
      <article>    
      <div class="container paragraph" style="margin-top: 50px; padding-right: 100px">
        
              <h1 style="font-size: 20px; color: #2A50BF">Piedāvājuma inflācija</h1>
            <p>Piedāvājuma inflācijas jeb izmaksu inflācijas cēlonis ir tas, ka ievērojami palielinās ražošanas izmaksas, 
              preces kļūst dārgākas un par to pašu naudu var iegādāties mazāku preču daudzumu. Nauda kļūst mazvērtīga, naudas pirktspēja samazinās.</p>
       
      
      </div>
      <article>   
          </section> 



 <section class="case-vid">
      
      <article>    
      <div class="container paragraph" style="margin-top: 50px; padding-right: 100px">
        
              <h1>CPI</h1>
            <p>CPI atspoguļo patēriņa groza vērtības izmaiņas pārskata periodā pret bāzes periodu - laiku, ar kuru salīdzina. Latvijā patēriņa grozā ietilps vairāk nekā 400 preču un pakalpojumu, kuru cenas ik mēnesi tiek novērtētas un reģistrētas 15 rajonos un pilsētās, apsekoti 1530 veikalu, ēdnīcas, tirgus, darbnīcas utt.
Šim cenu līmenim pieaugot, no mājsaimniecības viedokļa naudas vērtība samazinās.</p>
       
      
      </div>
      <article>   
          </section> 



<section class="case-vid">
        
      <div id="quiz-container" class="wrapper" style="margin-top:50px">
    <div id="question" style= "text-align: center"></div>

    <div class="progress">
      <div id="progress-bar" class="progress-bar"></div>
    </div>
    <div id="options" class="btn" style="display: block;"></div>
  </div>





<!-- Congratulations Popup -->
<div id="congratulations-popup" class="popup" style= "display: none">
    <div class="popup-content">

      <h2 style="text-align: center; margin: 50px 30px">Congratulations!<br>You have completed the quiz successfully.</h2>
     
    </div>
  </div>

     
 </section> 




  <!-- Quiz container -->
  


</main>

<?php include_once('footer.php'); ?>

<script src="quiz.js"></script>
<script>
  // Define quiz questions
  const questions = [
    {
      question: "Kas izraisa inflāciju?",
      options: ["Palielinājums naudas piedāvājumā", "Samazinājums naudas piedāvājumā", "Stabils naudas piedāvājums", "Mainīgas procentu likmes"],
      answer: 0 // Index of the correct answer in options array
    },
    {
      question: "Kāda ir vidējā procentu likme Eirozonā?",
      options: ["1%", "2%", "3%", "4%"],
      answer: 1
    },
    {
      question: "Kā inflācija tiek mērīta Eirozonā?",
      options: ["IKP", "CPI", "Bezdarba līmenis", "Darījumu balanss"],
      answer: 1
    }
  ];

quizGame(questions);

</script>