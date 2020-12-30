<!DOCTYPE HTML>
<html>
<style>
    .error {color: #FF0000;}

    input

           {

            width: 80%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px green; 

           }
</style>

<head>
    <script src="../asset/javaScript/NewUpdateFareForRouteValidationO.js"></script>
    <link rel="stylesheet" href="../asset/css/styleO.css">
    <title>Dashboard</title>

</head>

<body>


        <?php
          
         //header('Location: ../View/DhakaToJoydebpurFare.php');
 
          require('../Controller/NewUpdateFareForRouteControllerO.php');

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
                                <font color = "red" : align = left> <h2>Add Update Fare </h2> </font>
                            </td>
                        </tr>
                        <form method="post" action="../Model/DataBaseForNewUpdateFareForRouteO.php" onsubmit="return validateForm()"> 
                        <tr>
                            


                            <td style="width: fit-content;">

                                <p align="margin-middle">


                                   Starting Station: <br>
                                   <input type="text" id = "startingstation" name="startingstation"> <br>
                                   <span class="error" id="errorMsgstartingstation"> <?php echo $startingstationErr; ?></span>
                                    


                                    Arrival Station:<br>

                                     <input type="text" id ="arrivalstation" name="arrivalstation"> <br>
                                    <span class="error" id="errorMsgarrivalstation"> <?php echo $arrivalstationErr; ?></span>
                                    

                                    Shovon Chair:<br>
                                     <input type="text" placeholder="Add Updated Fare" id ="shovonchair" name="shovonchair"> <br> 
                                    <span class="error" id="errorMsgshovonchair"> <?php echo $shovonchairErr; ?></span>
                                    



                                    AC Chair: <br>
                                    <input type="text" placeholder="Add Updated Fare" id ="acchair" name="acchair">  <br>
                                    <span class="error" id="errorMsgacchair"> <?php echo $acchairErr; ?></span>
                                   


                                    AC Berth: <br>
                                    <input type="text" placeholder="Add Updated Fare" id ="acberth" name="acberth"> <br>
                                    <span class="error" id="errorMsgacberth"> <?php echo $acberthErr; ?></span>
                                    


                                    Non AC Berth:<br>
                                     <input type="text" placeholder="Add Updated Fare" id ="nonacberth" name="nonacberth"> <br> 
                                    <span class="error" id="errorMsgnonacberth"> <?php echo $nonacberthErr; ?></span>
                                    <br>


                                    <input class = "mainDivFormButton" type="submit" name="Update" value="Update">
                                    <br><br>


                                </p>
                            </td>


                            <td align="left">


                    
                    <font color = "#C808A5" : align = left> <h2>To Check Updated Fare Details</h2> </font><a href="\project\Web-Tech-Final-Project\False Railway\asset\image\Train Fare.png"><h3> <font color = "blue" > Click Image</h3></a>  </font>
                    


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