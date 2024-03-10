<?php include_once('navbar.php'); ?>
  <main>
    <div class="anketa"> 
      <h3>Nosūti mums ziņu!</h3>
    <form name = "forma"  onsubmit="return validateForm()" action="forma.php"  method="POST">
      
      <input type="text" placeholder = "Vārds" id="fname" name="fname"><br><br>
      
      <input type="text" placeholder = "Uzvārds" id="lname" name="lname"><br><br>

      <input type="text" placeholder = "Telefona numurs" id="telefons" name="telefons"><br><br>
      
      <input type="text" id="email"  placeholder = "E-pasts" name="email"><br><br>
      <h2 style="color: black; font-size: 20px">Kādu pakalpojumu vēlaties</h2><br><br>

             <label style="color: black; font-size: 20px">Front-end</label>
            
            <input type="radio" name="radio" style="width: 60px;"value="Front-end" id = "checked1" onclick="validate_1()" checked />
           
            <br>
            <label style="color: black; font-size: 20px">Back-end</label>
            <input type="radio" name="radio" id = "checked2" value="Back-end" style="width: 60px;" onclick="validate_1()"/>
            
            <div>
              <select id="drop1" name = "selected" style=" margin:30px auto;" class="display">
                <option>React</option>
                <option>Vue.js</option>
              </select>
              <select id="drop2"  name = "selected2" class="no-display" style="display:none;  margin:30px auto;">
                <option>Wordpress</option>
                <option>Magento</option>
              </select>
            </div>


      <textarea id="comments" placeholder = "Komentāri" name="comments" rows="4" cols="50"></textarea><br><br>
      
      <button type="submit" name="submit">Nosūtīt</button>

    </form>
    
  </div>


  </main>

  <?php include_once('footer.php'); ?>
