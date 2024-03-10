

// if(document.getElementByName('group1').checked == true) {   
//     window.alert("izvelets");   
// } else {  
//     document.write("Summer radio button is not selected");   
// } 

function validateForm() {
    let fname = document.forms["forma"]["fname"].value;
    let lname = document.forms["forma"]["lname"].value;
    let email = document.forms["forma"]["email"].value;

    let telefons = document.forms["forma"]["telefons"].value;


    let comments = document.forms["forma"]["comments"].value;
    var validRegex = /^[a-zA-Z]*$/;
    var validRegexEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

   
    if (fname == "" || !fname.match(validRegex)) {
      alert("Name must be filled out correctly");
      return false;
    }

   

    if (lname == "" || !lname.match(validRegex)) {
        alert("Last namne must be filled out correctly");
        return false;
      }

      if (telefons == "" || !telefons.match(/^\d+$/)) {
        alert("Phone must be filled out correctly");
        return false;
      }
      if (telefons.length != 8) {
        alert("Number should consist of 8 numbers");
        return false;
      }

      if (email == "" || !email.match(validRegexEmail)) {
        alert("Email must be filled out correctly");
        return false;
      }


      if (comments.length > 3000) {
        alert("Comments written incorectly");
        return false;
      }

  }
function validate_1(){
  var element1 = document.getElementById("drop1");
  var element2 = document.getElementById("drop2");
  
  
  if (element2.style.display === "none") {
    element2.style.display = "block";
    element1.style.display = "none";
  } else {
    element2.style.display = "none";
    element1.style.display = "block";
  }
}
