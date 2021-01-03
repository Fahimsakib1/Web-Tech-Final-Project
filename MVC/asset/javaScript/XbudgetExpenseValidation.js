
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


    function loadRemainingAmount() {
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
          document.getElementById("remainingAmount").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "../model/XrmModel.php", true);
        xhttp.send();
      }