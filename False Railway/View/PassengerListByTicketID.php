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
          


    

          require('../Controller/PassengerListByTicketIDController.php');




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
                                <h2> See Passenger List By Ticket ID</h2>
                            </td>
                        </tr>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                        <tr>
                            <td style="width: fit-content;">

                                <p align="margin-left">
  
                                    Ticket ID : <br>
                                    <br>
                                
                                </p>

                            </td>


                            <td style="width: fit-content;">

                                <p align="margin-left">


                                   <input type="text" name="ticketID"><span class="error">* <?php echo $ticketIDErr; ?></span>
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