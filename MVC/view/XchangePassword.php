<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../asset/javaScript/XchangePasswordValidation.js"></script>
    <link rel="stylesheet" href="../asset/css/Xstyle.css">
    <link rel="stylesheet" href="../asset/css/XchangePassword.css">
    <title>Change Password</title>
</head>
<body>
    <div class="bodyBG">
        <div class="container">
            <header class="header">
                <?php  include('Xheader.php');  ?>
            </header>
            <main>
                <div class="mainDiv1">
                    <p class="mainDiv1P">Change Passowrd</p>
                    <?php
                        require('../controller/XchangePasswordVerification.php');
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" method="post" class="mainDivForm">
                        <label for="currentPassword" class="mainDivFormLabel">Enter Current Password</label>
                        <br>
                        <input type="password" name="currentPassword" id="currentPassword" placeholder="Enter Current Password" value="<?php echo $currentPassword;?>" class="mainDivFormInput">
                        <br>
                        <label for="currentPasswordErr" id="currentPasswordErr" class="mainDivFormLabelError"><?php echo $currentPasswordErr;?></label>
                        <br>
                        <label for="newPassword" class="mainDivFormLabel">Enter New Password</label>
                        <br>
                        <input type="text" name="newPassword" id="newPassword" placeholder="Enter New Password" value="<?php echo $newPassword;?>" class="mainDivFormInput">
                        <br>
                        <label for="newPasswordErr" id="newPasswordErr" class="mainDivFormLabelError"><?php echo $newPasswordErr;?></label>
                        <br>
                        <label for="confirmPassword" class="mainDivFormLabel">Confirm Password</label>
                        <br>
                        <input type="text" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" value="<?php echo $confirmPassword;?>" class="mainDivFormInput">
                        <br>
                        <label for="confirmPasswordErr" id="confirmPasswordErr" class="mainDivFormLabelError"><?php echo $confirmPasswordErr;?></label>
                        <label for="mainDivFormLabelOk" id="updatePassword" class="mainDivFormLabelOk"><?php echo $updatePassword;?></label>
                        <br>
                        <input type="submit" value="Confirm" name="confirm" class="mainDivFormAdd">
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