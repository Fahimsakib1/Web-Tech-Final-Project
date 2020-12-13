<!DOCTYPE HTML>




<html>
<style>
    .error {color: #FF0000;}
</style>

<head>
    <title>Dashboard</title>

</head>

<body>


        <?php
          

         //header('Location: ../View/DhakaToJoydebpurFare.php');
         
    

          require('../Controller/UpdateFareForRouteControllerO.php');

          


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
                                <font color = "red" : align = left> <h2>Update Fare For Rutes</h2> </font>
                            </td>
                        </tr>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                        <tr>
                            <td style="width: fit-content;">

                                <p align="margin-middle">
  
                                    Starting Station : <br>
                                    <br>

                                    Arrival Station : <br>
                                    <br>
                                
                                </p>

                            </td>


                            <td style="width: fit-content;">

                                <p align="margin-middle">


                                   <input type="text" name="StartingStation"><span class="error">* <?php echo $StartingStationErr; ?></span>
                                    <br><br>

                                    <input type="text" name="ArrivalStation"><span class="error">* <?php echo $ArrivalStationErr; ?></span>
                                    <br><br>


                                    <input type="submit" name="Update" value="Update">
                                    <br><br>


                                </p>
                            </td>


                            <td align="left">


                    
                    <font color = "green" : align = left> <h2>To Check Updated Fare Details</h2> </font><a href="\project\Web-Tech-Final-Project\False Railway\asset\image\Train Fare.png"><h3> <font color = "blue" > Click Image</h3></a>  </font>
                    


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