<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/Xstyle.css">
    <link rel="stylesheet" href="../asset/css/Xhome.css">
    <title>Home</title>
</head>
<body>
    <div class="bodyBG">
        <div class="container">
            <header class="header">
                <?php  include('Xheader.php');  ?>
            </header>
            <main>
                <div class="mainDiv1">
                    <div class="mainDiv2">
     
                        <?php
                            require('../controller/XlogoutVerification.php');
                        ?>
                        <div class="mainDiv1Px">
                            <p class="">Welcome, <span><?php echo $_SESSION['id'] ?></span></p>
                        </div>
                        <div class="mainDiv4">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                <input type="submit" value="Logout" name="logout" class="homeMainDivCardLogout">  
                            </form>
                        </div>   
                    </div>
                    <div class="cardDiv">
                        <div class="card">
                            <div class="container">
                                <h3><b>Profile</b></h3> 
                                <a href="Xprofile.php" class="homeMainDivCardA">Click here to Go →</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="">
                                <h3><b>Change Password</b></h3> 
                                <a href="XchangePassword.php" class="homeMainDivCardA">Click here to Go →</a>
                            </div>    
                        </div>
                        <div class="card">
                            <div class="">
                                <h3><b>Refund Requests</b></h3> 
                                <a href="XrefundRequest.php" class="homeMainDivCardA">Click here to Go →</a>
                            </div>    
                        </div>
                        <div class="card">
                            <div class="container">
                                <h3><b>Discount</b></h3> 
                                <a href="Xdiscount.php" class="homeMainDivCardA">Click here to Go →</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="container">
                                <h3><b>Salary</b></h3> 
                                <a href="Xsalary.php" class="homeMainDivCardA">Click here to Go →</a>
                            </div>    
                        </div>
                        <div class="card">
                            <div class="">
                                <h3><b>Budget/Expense</b></h3> 
                                <a href="XbudgetExpense.php" class="homeMainDivCardA">Click here to Go →</a>
                            </div>    
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer">
                <?php  include('Xfooter.php');  ?>
            </footer>
        </div>
    </div>
</body>
</html>