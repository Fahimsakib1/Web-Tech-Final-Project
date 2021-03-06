<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/Xstyle.css">
    <link rel="stylesheet" href="../asset/css/Xprofile.css">
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
                    <p class="mainDiv1P">Profile</p>
                    <?php
                        require('../controller/XprofileCheck.php');
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="mainDivForm">
                        <label for="name" class="mainDivFormLabel">Name</label>
                        <br>
                        <br>
                        <label for="name" class="mainDivFormLabelValue"><?php  echo $name?></label>
                        <br>
                        <br>
                        <label for="userName" class="mainDivFormLabel">User Name</label>
                        <br>
                        <br>
                        <label for="userName" class="mainDivFormLabelValue"><?php  echo $userName?></label>
                        <br>
                        <br>
                        <label for="email" class="mainDivFormLabel">Email</label>
                        <br>
                        <br>
                        <label for="email" class="mainDivFormLabelValue"><?php  echo $email?></label>
                        <br>
                        <br>
                        <label for="mobile" class="mainDivFormLabel">Mobile No</label>
                        <br>
                        <br>
                        <label for="mobile" class="mainDivFormLabelValue"><?php echo $mobileNumber;?></label>
                        <br>
                        <br>
                        <input type="submit" value="Update" name="update" class="mainDivFormButton">
                        <div class="backBtn backBtmergin">
                            <a href="Xhome.php" class="backBtnA">Back</a>
                        </div>
                    </form>
                    <!-- <label for="" id="loadProfile">.</label>
                        <br>
                        <button onclick="loadProfile()">Ajax Button</button> -->
                </div>
            
            </main>
            <footer class="footer">
                <?php  include('Xfooter.php');  ?>
            </footer>
        </div>
    </div>
    <script>

            function loadProfile() {
                    var xhttp;
                    xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        console.log("hello");
                        document.getElementById("loadProfile").innerHTML = this.responseText;
                    }
                    };
                    xhttp.open("GET", "XrmModel.php", true);
                    xhttp.send();
                }
    
    

    </script>
</body>
</html>