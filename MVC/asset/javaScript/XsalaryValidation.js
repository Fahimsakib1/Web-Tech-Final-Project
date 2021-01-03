
    function validateFormX(){
        var month = document.getElementById("month").value;
        if(month == "" ){
            document.getElementById("monthErr").innerHTML="A Month is required";
            return false;
        }
        else{
            document.getElementById("monthErr").innerHTML=""; 
            return true;
        }
    }