<!DOCTYPE HTML>




<html>
<style>
    .error {color: #FF0000;}

    input

           {

            width: 25%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 10px 7px 10px;
            margin: 10px 10px 15px 0px;
            box-shadow: 1px 1px 2px 1px green; 

           }

</style>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../asset/css/styleO.css">

</head>

<body>

           <?php
          


    

          require('../Controller/PassengerListByTicketIDControllerO.php');




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
                                <h2> See Passenger List By Ticket ID</h2>
                            </td>
                        </tr>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                        <tr>
                            


                            <td style="width: fit-content;">

                                <p align="margin-left">


                                   Ticket ID  :  <input type="text" name="ticketID"><span class="error">* <?php echo $ticketIDErr; ?></span>
                                    <br><br>


                                    <input  class = "mainDivFormButton" type="submit" name="submit1" value="Submit">
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