/*PASSWORD VALITATION*/
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("password_contain").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("password_contain").style.display = "none";
}

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
        length.classList.remove("invalid");
        length.classList.add("valid");
    } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
    }
}
var oe = document.getElementById("open-eye");
var ce = document.getElementById("close-eye");
var input = document.getElementById("c_psw");
oe.style.display = "none";
function pw(){
    if(input.type === "password")
    {
        input.type = "text";
        oe.style.display = "block";
        ce.style.display = "none";
    }
    else
    {
        input.type = "password";
        oe.style.display = "none";
        ce.style.display = "block";
    }
}

var oe1 = document.getElementById("open-eye1");
var ce1 = document.getElementById("close-eye1");
var input1 = document.getElementById("psw");
oe1.style.display = "none";
function pw1(){
    if(input1.type === "password")
    {
        input1.type = "text";
        oe1.style.display = "block";
        ce1.style.display = "none";
    }
    else
    {
        input1.type = "password";
        oe1.style.display = "none";
        ce1.style.display = "block";
    }
}