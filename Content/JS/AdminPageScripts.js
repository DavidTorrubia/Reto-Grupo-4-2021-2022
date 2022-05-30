function changeUserMode(sel) {
    var form1 = document.getElementById("Alter-User");
    var form2 = document.getElementById("Remove-User");
    var submit = document.getElementById("UserAlterSubmit");
    if (sel == 1){
        form1.style.display="flex";
        form2.style.display="none";
        submit.value ="Update User";
        submit.style.display="block";
    } else if (sel == 2){
        form2.style.display="flex";
        form1.style.display="none";
        submit.value ="Delete User";
        submit.style.display="block";
    }
}