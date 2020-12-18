<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/20e901a9e1.js" crossorigin="anonymous"></script>
    <script src="../asset/javaScript/XloginValidation.js"></script>
    <link rel="stylesheet" href="../asset/css/Xstyle.css">
    <title>User Login</title>
</head>
<body>
    <div class="bodyBG">
        <div class="container">
            <header class="header">
                <?php  include('Xheader.php');  ?>
            </header>
            <main>
                <div class="mainDiv1">
                    <p class="mainDiv1P">User Login</p>
                    <?php
                        require('../controller/XloginVerification.php');
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" method="post" class="mainDivForm">
                        <label for="id" class="mainDivFormLabel">User Id</label>
                        <br>
                        <div class="iconDiv">
                            <i class="fas fa-user icon"></i>
                            <input type="text" name="id" id="id" placeholder="User Id" value="<?php echo $id?>" class="mainDivFormInputLogin">
                        </div>
                        <br>
                        <label for="idErr" id="idErr" class="mainDivFormLabelError"><?php echo $idErr;?></label>
                        <br>
                        <label for="password" class="mainDivFormLabel">Password</label>
                        <br>
                        <div class="iconDiv">
                            <i class="fas fa-lock icon"></i>
                            <input type="password" name="password" id="password" placeholder="Password" value="<?php echo $password?>" class="mainDivFormInputLogin">
                        </div>
                        <br>
                        <label for="passwordErr" id="passwordErr" class="mainDivFormLabelError"><?php echo $passwordErr;?></label>
                        <label for="loginErr" class="mainDivFormLabelError"><?php echo $loginErr;?></label>
                        <br>
                        <input type="checkbox" id="rm" name="rm" checked class="">
                        <label for="rm"class="mainDivFormRememerMe">Remember me</label>
                        <br>
                        <br>
                        <a href="XforgotPassword.php"class="mainDivFormAForgotPass">Forgot Password?</a>
                        
                        <input type="submit" value="Login" name="login" id="login" class="mainDivFormButton">
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