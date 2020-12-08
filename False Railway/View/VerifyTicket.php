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
          


    

          require('../Controller/VerifyTicketController.php');




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
                                <h2> Ticket Verification </h2>
                            </td>
                        </tr>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                        <tr>
                            <td style="width: fit-content;">

                                <p align="margin-left">

                                    Name : <br>
                                    <br>
                                    Ticket ID : <br>
                                    <br>
                                    Mobile : <br>
                                    <br>
                                   
                                </p>

                            </td>


                            <td style="width: fit-content;">

                                <p align="margin-left">


                                    <input type="text" name="name"><span class="error">* <?php echo $nameErr; ?></span>
                                    <br><br>


                                    <input type="text" name="ticketID"><span class="error">* <?php echo $ticketIDErr; ?></span>
                                    <br><br>


                                    <input type="text" name="mobile"><span class="error">* <?php echo $mobileErr; ?></span>
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