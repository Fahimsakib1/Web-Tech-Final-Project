<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../asset/javaScript/XprofileUpdateValidation.js"></script>
    <link rel="stylesheet" href="../asset/css/Xstyle.css">
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
                    <p class="mainDiv1P">Profile Update</p>
                    <?php
                        require('../controller/XprofileUpdateVerification.php');
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" method="post" class="mainDivForm">
                        <label for="mobile" class="mainDivFormLabel">Enter New Mobile No</label>
                        <br>
                        <br>
                        <input type="text" name="mobile" id="mobile" placeholder="Enter New Mobile No" value="<?php echo $mobile ?>" class="mainDivFormInput">
                        <br>
                        <label for="mobileErr" id="mobileErr" class="mainDivFormLabelError"><?php echo $mobileErr;?></label>
                        <label for="mobileOk" class="mainDivFormLabelOk"><?php echo $mobileOk;?></label>
                        <br>
                        <br>
                        <input type="submit" value="Submit" name="submit" class="mainDivFormButton">
                        <div class="backBtn backBtmergin">
                            <a href="Xprofile.php" class="backBtnA">Back</a>
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