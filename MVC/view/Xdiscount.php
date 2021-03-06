<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../asset/javaScript/XdiscountValidation.js"></script>
    <link rel="stylesheet" href="../asset/css/Xstyle.css">
    <link rel="stylesheet" href="../asset/css/Xdiscount.css">
    <title>Discount</title>
</head>
<body>
    <div class="bodyBG">
        <div class="container">
            <header class="header">
                <?php  include('Xheader.php');  ?>
            </header>
            <main>
                <div class="mainDiv1">
                    <p class="mainDiv1P">Discount</p>
                    <?php
                        require('../controller/XdiscountVerification.php');
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" method="post" class="mainDivForm">
                        <label for="discount" class="mainDivFormLabel">Enter Percentage</label>
                        <br>
                        <input type="text" name="discount" id="discount" placeholder="Enter discount Percentage - Only numbers" value="<?php echo $addDiscount?>" class="mainDivFormInput">
                        <br>
                        <label for="discountErr" id="discountErr" class="mainDivFormLabelError"><?php echo $addDiscountErr;?></label>
                        <label for="addDiscountSuccessful" class="mainDivFormLabelOk"><?php echo $addDiscountSuccessful;?></label>
                        <br>
                        <input type="submit" value="Add Discount" name="addDiscountButton" class="mainDivFormAdd">
                        <br>
                    </form>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="mainDivFormDis">
                        <label for="removeDiscount" class="mainDivFormLabel">Remove Previous Discount?</label>
                        <br>
                        <label for="discountErr" class="mainDivFormLabelError"><?php echo $removeDiscountErr;?></label>
                        <label for="removeDiscountSuccessful" class="mainDivFormLabelOk"><?php echo $removeDiscountSuccessful;?></label>
                        <input type="submit" value="Remove Discount" name="removeDiscount" class="mainDivFormRemove">
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