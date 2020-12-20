<!DOCTYPE HTML>

<html>

<style>
    .error {color: #FF0000;}

   

    
</style>



<head>

    <title>Dashboard</title>
    <script src="../asset/javaScript/EditProfileValidationO.js"></script>
    <link rel="stylesheet" href="../asset/css/styleO.css">
    

</head>

<body>



  <?php

       require('../Controller/EditProfileControllerO.php');

  ?>



    <div style="max-width: fit-content; margin-left: auto; margin-right:auto">
        <table style="width: fit-content; border: 2px solid #000; border-collapse: collapse;">
            <tr>
                <td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">
                    <?php include 'Header2O.php'; ?>
                </td>
            </tr>
            <tr>
                <td style="border: 2px solid #000; border-collapse: collapse; " width="20%">
                    <?php include 'NavigationbarO.php'; ?>
                </td>
                <td>
                    <table width="75%">
                        <tr>
                            <td colspan="3">
                                <h2>EDIT YOUR PROFILE</h2>
                            </td>
                        </tr>

                        <!--  <form method="post" action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" > -->

                        <form method="post" action="../Model/DataBaseForEditProfileO.php" onsubmit="return validateForm()" > 

                        <tr>
                            

                            <td style="width: fit-content;">

                                <p align="margin-left">


                                    Name: <input type="text" id = "name" name="name">
                                    <span class="error" >* <?php echo $nameErr; ?> </span>
                                    <p id = "errorMsgName"></p>
                                    <br><br>


                                    E-mail : <input type="text" id = "email" name="email">
                                    <span class="error" id ="errorMsgEmail">* <?php echo $emailErr; ?> </span>
                                    <br><br>


                                     Gender :
                                    <input type="radio" id = "male" name="gender" value="Male" required="">Male
                                    <input type="radio" id = "female" name="gender" value="Female">Female
                                    <input type="radio" id = "other" name="gender" value="Other">Other
                                    <span class="error" id ="errorMsgGender">* <?php echo $genderErr; ?></span>
                                    <br><br> 


                                    <!-- Gender:
                                    <input type="radio" name="gender" value="Male">Male
                                    <input type="radio" name="gender" value="Female">Female
                                    <input type="radio" name="gender" value="Other">Other
                                    <span class="error" id ="errorMsgGender">* <?phpecho $genderErr; ?></span>
                                    <br><br> -->


                                Date of Birth :<input type="date" id = "dob" name="dob">
                                <span class="error" id ="errorMsgDOB">* <?php echo $dobErr; ?></span>
                                    <br><br>

                                    Address :<input type="text" id = "address" name="address">
                                    <span class="error" id ="errorMsgAddress">* <?php echo $addressErr; ?></span>
                                    <br><br>



                                    <input type="submit" name="submit1" value="Submit">
                                    <br><br>


                                </p>
                            </td>


                        </tr>

                        
                        </form>


                        <tr>
                            <td colspan="3">

                                <?php

								//echo "<h2>Inputs:</h2>";
								//echo "<b>Name:</b> ".$name;
								//echo "<br><br>";
								//echo "<b>E-mail:</b> ".$email;
								//echo "<br><br>";
								//echo "<b>Gender:</b> ".$gender;
								//echo "<br><br>";
								//echo "<b>Date of Birth:</b> ".$dob;
								//echo "<br><br>";
                                //echo "<b>Address:</b> ".$address;
                                //echo "<br><br>";

							    ?>

                            </td>
                        </tr>


                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">
                    <?php include 'NewFooterO.php'; ?>

                </td>
            </tr>

        </table>
        <div>
</body>

</html>