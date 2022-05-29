
var Directionscurrentstate = 2;
function ChangeDirectionState(pos){
    const Deployable1 = document.getElementById("Content-UserConfig-Item-Directions-Content-Create");
    const Deployable2 = document.getElementById("Content-UserConfig-Item-Directions-Content-Remove");
    if (pos == 1) {
        Deployable1.style.display = "flex";
        Deployable2.style.display = "none";
        Paymentcurrentstate = 1;
    } else if (pos == 2){
        Deployable2.style.display = "flex";
        Deployable1.style.display = "none";
        Paymentcurrentstate = 2;
    }

}
var Paymentcurrentstate = 1;
function ChangePaymentMethod(pos){
    const form1 = document.getElementById("Payment-CreditCard");
    const form2 = document.getElementById("Payment-Paypal");
    const form3 = document.getElementById("Payment-bank");
    if (pos == 1) {
        form1.style.display = "flex";
        form2.style.display = "none";
        form3.style.display = "none";
        Paymentcurrentstate = 1;
    } else if (pos == 2){
        form2.style.display = "flex";
        form1.style.display = "none";
        form3.style.display = "none";
        Paymentcurrentstate = 2;
    } else if (pos == 3){
        form3.style.display = "flex";
        form1.style.display = "none";
        form2.style.display = "none";
        Paymentcurrentstate = 3;
    }

}
