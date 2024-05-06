<?php include_once('navbar.php'); ?>

<main>

<section class="case-vid">
      
<article>    
<div class="container">
  <div class="row">

  <div class="col-md-6" style="margin-right: 100px; text-align: center">
      <h3>Monetārā politika</h3>
      <p>Monetārā politika līdz ar fiskālo politiku ir galvenie instrumenti, ar kuru palīdzību var ietekmēt tautsaimniecībā notiekošos procesus. 
        Monetāro politiku valstī veic tās centrālā banka, un tās darbībai jābūt vērstai uz ekonomikas stabilitātes nodrošināšanu. 
        Monetārā politika var būt aktivizējoša vai ierobežojoša.</p>
    </div>
    <div class="col-md-4">
      <div class="image-container">
        <img src="images/monet-polit.png" alt="Sample Image" class="img-fluid">
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
            <iframe width="560" height="285" src="https://www.youtube.com/embed/7jX4EBcmR9g?si=tzBdmSoIlg4wBnr6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-md-6" style="text-align: center; padding-right: 0px margin-right: 0px; margin-left: 20px">
            <br>
            <p>Aktivizējošas politikas rezultātā palielinās pieprasījums, jo samazinās procentu likmes un paaugstinās naudas piedāvājums, 
              bet ierobežojošas politikas rezultātā pieprasījums samazinās, jo pieaug procentu likmes un pazeminās naudas piedāvājums. Monetārās politikas trīs galvenie instrumenti ir:</p>
          </div>
      
        </div>
      </div>
      
      <article>   
          </section>   
  



     <section class="case-vid">
      
      <article>    
      <div class="container paragraph" style="margin-top: 50px; padding-right: 70px">
        
              <h1 style="font-size: 20px; color: #2A50BF">Operācijas atklātā tirgū</h1>
            <p>Centrālā banka veic valsts vērtspapīru pirkšanu un pārdošanu, 
              lai regulētu naudas masu apgrozībā un banku rezervju lielumu. Vērtspapīru pārdošana samazina naudas piedāvājumu, bet vērtspapīru uzpirkšana to palielina. Piemēram, 
              ja centrālā banka pārdod vērtspapīrus, pircēji norēķinās ar naudas līdzekļiem no saviem banku kontiem, 
              un banku rezerves samazinās. Savukārt, ja centrālā banka uzpērk vērstpapīrus, pārdevēju banku kontos ienāk līdzekļi, un banku rezerves palielinās. </p>
       
      
      </div>
      <article>   
          </section>   





<section class="case-vid">
      
      <article>    
      <div class="container paragraph" style="margin-top: 50px; padding-right: 100px">
        
              <h1 style="font-size: 20px; color: #2A50BF">Refinansēšanas likmes regulēšana</h1>
            <p>Refinansēšanas likme ir procenta likme, ko centrālā banka nosaka komercbanku aizņēmumiem centrālajā bankā. Šī likme izraisa komercbanku kredītu likmju izmaiņas. Ja šo procentu likmi samazina, 
              tad pieprasījums pēc centrālās bankas aizdevumiem kļūst lielāks, bet ja to paaugstina – mazāks. Līdz ar to, 
              banku kreditēšanas iespējas vai nu palielinās, vai arī samazinās. </p>
       
      
      </div>
      <article>   
          </section> 



 <section class="case-vid">
      
      <article>    
      <div class="container paragraph" style="margin-top: 50px; padding-right: 100px">
        
              <h1>Obligāto rezervju normas regulēšana</h1>
            <p>naudas summa, kuru banka neizsniedz kredītos, lai neveidotos situācija, 
              kad klients savu noguldījumu vēlas saņemt pirms termiņa, bet naudas, 
              ko izmaksāt nav. Obligāto rezervju palielināšana vai samazināšana ir spēcīgs monetārās politikas instruments. Piemēram, 
              ja centrālā banka vēlas paaugstināt ekonomisko aktivitāti, tā var samazināt obligāto rezervju normu, kas palielinās naudas 
              piedāvājumu un līdz ar to arī iespējas investēt.</p>
       
      
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
      question: "Kāds ir galvenais monetārās politikas mērķis?",
      options: ["Palielināt nodarbinātības līmeni", "Nodrošināt cenu stabilitāti", "Palielināt kopējo inflācijas līmeni", "Samazināt kopējo inflācijas līmeni"],
      answer: 1 // Index of the correct answer in options array
    },
    {
      question: "Kurš no šiem nav monetārās politikas instruments?",
      options: ["Valsts budžeta deficīta kontrole", "Banku obligāto rezervju izmaiņas", "Vērtspapīru operācijas tirgū", "Procentu likmju paaugstināšana"],
      answer: 0
    },
    {
      question: "Aktivizējošas monetārās politikas rezultātā:",
      options: ["palielinās procentu likmes", "samazinās naudas pieprasījums", "samazinās procentu likmes", "pieaug valsts parāds"],
      answer: 2
    }
  ];

quizGame(questions);

</script>