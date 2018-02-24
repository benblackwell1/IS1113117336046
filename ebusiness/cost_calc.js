/* global $ */
 
 var vat = .10 // global variable
 
 function calcSub(){
     
     var argSubTotal;
     var error;
     
     if(document.getElementById('salesForce').checked){
        argSubTotal = 100;
     }
     else if (document.getElementById('gmail').checked){
         argSubTotal = 275;
     }
     else if (document.getElementById('cloud9').checked){
         argSubTotal= 175;
     }
     else if (document.getElementById('aws').checked){
          argSubTotal = 300;
     }
     else{
         error = 0.00;
    }
     
     display(argSubTotal, vat);
     
    }
    
    
 function display(parm1, parm2){
     
     document.getElementById("subtotal").value = parm1;
     document.getElementById("vat").value = parm1 * parm2
     document.getElementById("total").value = parm1 + (parm1 * parm2);
      
      enablebtnProceed();
 }
 

 function enablebtnProceed(){
     $('#btnProceed').prop('disabled', false);
 }
 
 function disablebtnProceed(){
     $('#btnProceed').prop('disabled', true);
 } 