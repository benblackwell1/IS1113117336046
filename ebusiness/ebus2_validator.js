/* global $ */

function validateFullName(){
     
     var fullname
     
     fullname = document.getElementById("user_name").value;
     
     
     if (fullname == ""){
        alert("Please enter your PIN");
    }
    else if (String(fullname).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    else{
        validatePIN();
    }
}

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
        validateEmail();
    }
    
}

function validateEmail(){
    
    var email;
    
    email = document.getElementById("user_email").value;
    
    if (email == ""){
        alert("Please enter your Email Address")
    }
    else if (validateEmailLayout(email) == false){
        alert("Please enter a valid Email Address")
    }
    else {
        enablebtnPurchase()
    }
}



function validateEmailLayout(email){
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
    
function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}