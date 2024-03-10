

<?php

include 'dbh.php';

if (isset($_POST['submit'])) {
//ievietošana datubāzē
$vards = $_POST['fname'];
$uzvards = $_POST['lname'];
$telefons = $_POST['telefons'];
$email = $_POST['email'];
$radio = $_POST['radio'];

$selected = $_POST['selected'];
$selected2 = $_POST['selected2'];
$comments = $_POST['comments'];

    if ($radio == "Front-end"){
        $selectedFinal = $selected;
    } else{
        $selectedFinal = $selected2;
    }
    $cena = "";
    $cenas = array("200", "300", "350", "400");

    switch ($selectedFinal) {
        case "React":
            $cena = $cenas[0];
            break;
        case "Vue.js":
            $cena = $cenas[1];
            break;
        case "Wordpress":
            $cena = $cenas[2];
            break;
        case "Wordpress":
            $cena = $cenas[2];
        case "Magento":
            $cena = $cenas[3];
            break;
    }



    $dayTime = date("dmy");
    $hours  = date("H") +1;
    $combined = $dayTime . $hours . date("i");
    $first_letter = substr($vards,0,1);
    $phone_str = strval($telefons);
    $number_last = substr($phone_str,4,8);
    $IDnumurs = $first_letter . $number_last . $combined;

    

    $sql = "INSERT INTO anketa (kods, vards, uzvards, telefons, epasts, selected, tehnologija, cena, komentari)  VALUES ('$IDnumurs', '$vards', '$uzvards', '$telefons', '$email', '$radio', '$selectedFinal','$cena', '$comments')";
    $result = mysqli_query($conn, $sql);

  header("Location: ../index.php?task=success&idnumurs=$IDnumurs&cena=$cena");
  exit();
}else{
    header("Location:anketa.php?task=notsuccesful");
    
}


