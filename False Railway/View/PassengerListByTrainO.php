<!DOCTYPE HTML>

<html>
<style>
    .error {color: #FF0000;}

    input

           {

            width: 23%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 10px 7px 10px;
            margin: 10px 10px 15px 0px;
            box-shadow: 1px 1px 2px 1px green; 

           }
</style>

<head>
    <script src="../asset/javaScript/PassengerListByTrainValidationO.js"></script>
    <link rel="stylesheet" href="../asset/css/styleO.css">
    <title>Dashboard</title>

</head>



<?php
          


    

          require('../Controller/PassengerListByTrainControllerO.php');




        ?>



        

<body>
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
                                <font color = "blue" : align = middle> <h2>Passenger List By Train</h2> </font>
                            </td>
                        </tr>
                        <form method="post" action="../Model/DataBaseForPassengerListByTrainO.php" onsubmit="return validateForm()" > 
                        <tr>
                            


                            <td style="width: fit-content;">

                                <p align="margin-left">


                                   Train ID  : <input type="text" id = "trainID" name="trainID"><span class="error" id = "errorMsgtrainID"> <?php echo $trainIDErr; ?></span>
                                    <br><br>

                                    Train Name  : <input type="text" id = "trainName" name="trainName"><span class="error" id = "errorMsgtrainName"> <?php echo $trainNameErr; ?></span>
                                    <br><br>


                                    <input class = "mainDivFormButton" type="submit" name="submit1" value="Submit">
                                    <br><br>


                                </p>
                            </td>






                        </tr>

                        
                        </form>

  

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