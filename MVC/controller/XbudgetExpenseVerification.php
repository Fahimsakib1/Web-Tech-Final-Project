<?php
    require('../model/XbudgetExpenseModel.php');
    $remainingAmount = $addBudget = $budgetErr = $budgetSuccessful = "";
    $expense= $addExpense = $expenseErr = $expenseSuccessful = "";
    $remainingAmount=loadRemainingAmount();
    if($remainingAmount==0){
        $x=addBudget(0);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['addBudget'])) {
            if (empty($_POST["budget"])) {
                $budgetErr = "An amount is required";
            }
            else{
                $number=$_POST['budget'];
                $pattern = "/^[0-9]+$/";
                if(!preg_match($pattern, $number)){
                    $budgetErr = "Only Numbers are allowed";
                }
                else{
                    $addBudget=$_POST["budget"];

                    if(loadPrevBudgetExistance()){
                        $budgetErr = "There is already a Budget. You can not add twice"; 
                    }
                    else{
                        if(addBudget($addBudget)){
                            $val=addremaining($addBudget);
                            $remainingAmount=loadRemainingAmount();
                            $budgetSuccessful = "Budget added Successfully";
                        }   
                        else{
                            $budgetErr = "Failed to add Budget"; 
                        }
                    }
                }    
            }
        }
        if (isset($_POST['addExpense'])) {

            if (empty($_POST["expense"])) {
                $expenseErr = "An amount is required";
            }
            else{
                $number=$_POST['expense'];
                $pattern = "/^[0-9]+$/";
                if(!preg_match($pattern, $number)){
                    $expenseErr = "Only Numbers are allowed";
                }
                else{
                    $remainingAmount=loadRemainingAmount();
                    if($_POST['expense']>$remainingAmount){
                        $expenseErr = "Expense can not be greater than remaining amount";
                    }
                    else{
                        $expense=$_POST['expense'];
                        if(addExpense($expense) && addremaining($remainingAmount-$expense) ){
                            $expenseSuccessful = "Expense added Successfully";
                            $remainingAmount=loadRemainingAmount();  
                        }
                        else{
                            $expenseErr = "Failed to add Expense";
                        }    
                    }
                }
            }

        }
    }
?>

