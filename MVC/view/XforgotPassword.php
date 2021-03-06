<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../asset/javaScript/XforgotPasswordValidation.js"></script>
    <link rel="stylesheet" href="../asset/css/Xstyle.css">
    <link rel="stylesheet" href="../asset/css/XforgotPassword.css">
    <title>Document</title>
</head>
<body>
    <div class="bodyBG">
        <div class="container">
            <header class="header">
                <?php  include('Xheader.php');  ?>
            </header>
            <main>
                <div class="mainDiv1">
                    <p class="mainDiv1P">Forgot Password?</p>
                    <?php
                        require('../controller/XforgotPasswordVerfication.php');
                    ?>
                    <p class="mainDiv1P2"><?php echo $passwordText;?></p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" method="post" class="mainDivForm">
                        <label for="id" class="mainDivFormLabel">User Id</label>
                        <br>
                        <input type="text" name="id" id="id" placeholder="User Id" value="<?php echo $id?>" class="mainDivFormInput">
                        <br>
                        <label for="idErr"  id="idErr" class="mainDivFormLabelError"><?php echo $idErr;?></label>
                        <br>
                        <label for="mobileNumber" class="mainDivFormLabel">Mobile Number</label>
                        <br>
                        <input type="text" name="mobileNumber" id="mobileNumber" placeholder="Mobile Number" value="<?php echo $mobileNumber?>" class="mainDivFormInput">
                        <br>
                        <label for="mobileNumberErr" id="mobileNumberErr" class="mainDivFormLabelError"><?php echo $mobileNumberErr;?></label></label>
                        <br>
                        <input type="submit" value="Submit" class="mainDivFormButton">
                        <br>
                        <br>
                        <div class="backBtn backBtmergin">
                            <a href="Xlogin.php" class="backBtnA">Back</a>
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