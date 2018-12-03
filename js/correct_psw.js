			
var myInput = document.getElementById("UserPassword");
var confirmInput = document.getElementById("pswrepeat");
var matchP = document.getElementById("matchP");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var lengthh = document.getElementById("length");

myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
};
confirmInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
};
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
};
confirmInput.onblur = function() {
    document.getElementById("message").style.display = "none";
};

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    lengthh.classList.remove("invalid");
    lengthh.classList.add("valid");
  } else {
    lengthh.classList.remove("valid");
    lengthh.classList.add("invalid");
  }
  
  //Matching passwords
  if (myInput.value === confirmInput.value){
  matchP.classList.remove("invalid");
    matchP.classList.add("valid");
  }else {
      matchP.classList.remove("valid");
    matchP.classList.add("invalid");
  }
};
