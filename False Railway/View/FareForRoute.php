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
          


    

          require('../Controller/FareForRouteController.php');




        ?>



        
    <div style="max-width: fit-content; margin-left: auto; margin-right:auto">
        <table style="width: fit-content; border: 2px solid #000; border-collapse: collapse;">
            <tr>
                <td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">
                    <?php include 'Header2.php'; ?>
                </td>
            </tr>
            <tr>
                <td style="border: 2px solid #000; border-collapse: collapse; " width="20%">
                    <?php include 'Navigationbar.php'; ?>
                </td>
                <td>
                    <table width="75%">
                        <tr>
                            <td colspan="3">
                                <font color = "red" : align = left> <h2>Fare For Rutes</h2> </font>
                            </td>
                        </tr>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                        <tr>
                            <td style="width: fit-content;">

                                <p align="margin-left">
  
                                    Starting Station : <br>
                                    <br>

                                    Arrival Station : <br>
                                    <br>
                                
                                </p>

                            </td>


                            <td style="width: fit-content;">

                                <p align="margin-left">


                                   <input type="text" name="StartingStation"><span class="error">* <?php echo $StartingStationErr; ?></span>
                                    <br><br>

                                    <input type="text" name="ArrivalStation"><span class="error">* <?php echo $ArrivalStationErr; ?></span>
                                    <br><br>


                                    <input type="submit" name="submit1" value="Submit">
                                    <br><br>


                                </p>
                            </td>


                            <td align="left">


                    
                    <font color = "green" : align = left> <h2>Full Fare Details</h2> </font><a href="Train Fare.png"><h3> <font color = "blue" > Click Image</h3></a>  </font>
                    


                </td>



                        </tr>

                        
                        </form>

  

                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">
                    <?php include 'Footer.php'; ?>
                </td>
            </tr>

        </table>
        <div>
</body>

</html>