<?php include_once('navbar.php'); ?>

<main>

<section class="case-vid">
      
<article>    
<div class="container">
  <div class="row">

  <div class="col-md-6" style="margin-right: 100px; text-align: center">
      <h3>Saliktie procenti</h3>
      <p>Saliktie procenti ir procentuālās likmes, kas tiek aprēķinātas uz sākotnējās summas un uzkrājas laika gaitā. Šie procenti ir atkarīgi no periodiskuma, kā arī no procentu likmes un sākotnējās summas. Parasti saliktie procenti tiek piemēroti finanšu instrumentiem, kā arī uzkrāšanās un aizdevumu atmaksas aprēķinos.</p>
    </div>
    <div class="col-md-4">
      <div class="image-container" style="padding-top: 100px">
        <img src="images/saliktie_pr.png" alt="Sample Image" class="img-fluid">
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
            <iframe width="560" height="285" src="https://www.youtube.com/embed/jTW777ENc3c?si=h0Ph_B-44NyJ9C4U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-md-6" style="text-align: center; padding-right: 0px margin-right: 0px; margin-left: 20px">
            <br>
            <p>Salikto procentu aprēķināšanai tiek izmantota augstāk redzamā formula, kur:
              <br>A ir beigu summa (galējais rezultāts)
              <br>P ir sākotnējā summa (pamatinvestīcija vai pamata aizdevums)
              <br>r ir procentu likme izteikta decimālformātā (piemēram, 5% likme būtu 0.05)
              <br>n ir periods, uz kādu tiek aprēķināti procenti (parasti laiks gados).
            </p>
          </div>
      
        </div>
      </div>
      
      <article>   
          </section>   
  



     <section class="case-vid">
      
      <article>    
      <div class="container paragraph" style="margin-top: 50px; padding-right: 70px">
        
              <h1 style="font-size: 20px; color: #2A50BF">1. piemērs</h1>
            <p>Ja jūs ieguldat $1000 bankā ar 5% gadā procentiem, saliktie procenti nozīmēs, ka nākamajā gadā jūsu ieguldījums būs $1050 (sākotnējā summa $1000 + 5% no $1000). Nākamajā gadā procenti aprēķināsies jau par $1050, tātad jūsu nākamais 
              gada gals būs $1102.50 (sākotnējā summa $1050 + 5% no $1050), un tā tālāk.</p>
       
      
      </div>
      <article>   
          </section>   





<section class="case-vid">
      
      <article>    
      <div class="container paragraph" style="margin-top: 50px; padding-right: 100px">
        
              <h1 style="font-size: 20px; color: #2A50BF">2. piemērs</h1>
            <p>Hipotēkas kredīta atmaksas grafiks ir vēl viens piemērs saliktajiem procentiem. 
              Ja jūs aizņematies $200,000 uz 30 gadiem ar 4% gadā procentiem, katru mēnesi jūs
               maksāsiet noteiktu summu, kas ietver gan pamatsummu, gan procentu daļu. Katru mēnesi procenti tiks aprēķināti uz palikušo pamatsummu, 
              tādējādi radot saliktos procentus.</p>
       
      
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
      question: "Kā definē saliktos procentus?",
      options: ["Procentu likme, kas nemainās laika gaitā.", "Procentu likme, kas tiek piemērota tikai sākotnējai summai.", "Procentu likme, kas tiek piemērota sākotnējai summai un uzkrājas laika gaitā.", "Procentu likme, ko banka piedāvā"],
      answer: 2 // Index of the correct answer in options array
    },
    {
      question: "Kāda ir formula salikto procentu aprēķināšanai?",
      options: ["A=P*r*n", "A=P*(1+r)^n", "A=P+r+n", "A=P*(1+r)*n"],
      answer: 1
    },
    {
      question: "Kāda ir beigu summa pēc noteiktā perioda, ja sākotnējā summa ir $1000, procentu likme ir 5% un periods ir 3 gadi?",
      options: ["$150", "$1150", "$1157.63", "$1420.69"],
      answer: 2
    }
  ];

quizGame(questions);

</script>