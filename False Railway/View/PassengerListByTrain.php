<!DOCTYPE HTML>

<html>
<style>
    .error {color: #FF0000;}
</style>

<head>
    <title>Dashboard</title>

</head>






<?php
          


    

          require('../Controller/PassengerListByTrainController.php');




        ?>



        

<body>
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
                                <font color = "green" : align = left> <h2>Passenger List By Train</h2> </font>
                            </td>
                        </tr>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                        <tr>
                            <td style="width: fit-content;">

                                <p align="margin-left">
  
                                    Train ID : <br>
                                    <br>

                                    Train Name : <br>
                                    <br>
                                
                                </p>

                            </td>


                            <td style="width: fit-content;">

                                <p align="margin-left">


                                   <input type="text" name="trainID"><span class="error">* <?php echo $trainIDErr; ?></span>
                                    <br><br>

                                    <input type="text" name="trainName"><span class="error">* <?php echo $trainNameErr; ?></span>
                                    <br><br>


                                    <input type="submit" name="submit1" value="Submit">
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
                    <?php include 'Footer.php'; ?>
                </td>
            </tr>

        </table>
        <div>
</body>

</html>