
    function validateForm(){
        var budget = document.getElementById("budget").value;
        if(budget == "" ){
            document.getElementById("budgetErr").innerHTML="An amount is required";
            return false;
        }
        else{
            document.getElementById("budgetErr").innerHTML=""; 
            return true;
        }
    }

    function validateFormX(){
        var expense = document.getElementById("expense").value;
        document.getElementById("expenseSuccessful").innerHTML=""; 
        if(expense == "" ){
            document.getElementById("expenseErr").innerHTML="An amount is required";
            return false;
        }
        else{
            document.getElementById("expenseErr").innerHTML=""; 
            return true;
        }
    }