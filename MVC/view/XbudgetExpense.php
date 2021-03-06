<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../asset/javaScript/XbudgetExpenseValidation.js"></script>
    <link rel="stylesheet" href="../asset/css/Xstyle.css">
    <link rel="stylesheet" href="../asset/css/XbudgetExpense.css">
    <link rel="stylesheet" href="../asset/css/Xdiscount.css">
    <title>Budget And Expenses</title>
</head>
<body>
    <div class="bodyBG">
        <div class="container">
            <header class="header">
                <?php  include('Xheader.php');  ?>
            </header>
            <main>
                <div class="mainDiv1">
                    <p class="mainDiv1P">Budget And Expenses</p>
                    <?php
                        require('../controller/XbudgetExpenseVerification.php');
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" method="post" class="mainDivForm">
                        <label for="budget" class="mainDivFormLabel">Enter Budget Amount</label>
                        <br>
                        <input type="text" name="budget" id="budget" placeholder="Enter Budget Amount - Only numbers" value="<?php echo $addBudget?>" class="mainDivFormInput">
                        <br>
                        <label for="budgetErr" id="budgetErr" class="mainDivFormLabelError"><?php echo $budgetErr;?></label>
                        <label for="budgetSuccessful" class="mainDivFormLabelOk"><?php echo $budgetSuccessful;?></label>
                        <br>
                        <input type="submit" value="Add Budget" name="addBudget" class="mainDivFormAdd">
                        <br>
                    </form>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateFormX()" method="post" class="mainDivFormDis">
                        <label for="remainingAmount" class="mainDivFormLabel">Remaining Amount</label>
                        <br>
                        <br>
                        <label for="remainingAmount" id="remainingAmount" class="mainDivFormLabelValue"><?php echo $remainingAmount;?></label>
                        <br>
                        <br>
                        <label for="expense" class="mainDivFormLabel">Enter Expense Amount</label>
                        <br>
                        <input type="text" name="expense" id="expense" placeholder="Enter Expense Amount - Only numbers" value="<?php echo $addExpense?>" class="mainDivFormInput">
                        <br>
                        <label for="expenseErr" id="expenseErr" class="mainDivFormLabelError"><?php echo $expenseErr;?></label>
                        <label for="expenseSuccessful" id="expenseSuccessful" class="mainDivFormLabelOk"><?php echo $expenseSuccessful;?></label>
                        <br>
                        <input type="submit" value="Add Expense" name="addExpense" class="mainDivFormAdd" >
                        <br>
                        <br>
                        <div class="backBtn backBtmergin">
                            <a href="Xhome.php" class="backBtnA">Back</a>
                        </div>
                        
                    </form>
                </div>
            
            </main>
            <footer class="footer">
                <?php  include('Xfooter.php');  ?>
            </footer>
        </div>
    </div>
</body>
</html>