/* global $ */

function validatePIN(){
    
    var pin;
    
    pin = document.getElementById("user_pin").value;
     
    if (pin == ""){
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    else{
      validateName();
    }
}

function validateName(){
    
    var name;
    var regex;
    
    regex = /^[0-9]+$/; //if a number is in the name it will return invalid
    name = document.getElementById("user_name").value;
    
    if (name ==""){
        alert("Please enter your Name");
    }
    else if (name.match(regex)){
        alert("Name Cannot contain Numbers");
    }
    else{
        validateEmail();
    }
}

function validateEmail(){
    
    var email;
    var re;
    
    re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    email = document.getElementById("user_email").value;
    
    if (email == ""){
        alert("Please enter your Email");
    }
    else if (re.test(email) == false){
        alert("Please enter a valid Email");
    }
    else{
        enablebtnPurchase();
        alert("Your details have been verified, you may proceed with your purchase")
    }
}


    
function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}

