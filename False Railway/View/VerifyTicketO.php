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
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px green; 

           }


        </style>

        <link rel="stylesheet" href="../asset/css/styleO.css">


<head>
    <title>Dashboard</title>

</head>

<body>


            <?php
          


    

          require('../Controller/VerifyTicketControllerO.php');




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
                                <h2> Ticket Verification </h2>
                            </td>
                        </tr>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                        <tr>
                            


                            <td style="width: fit-content;">

                                <p align="margin-left">


                                     Name: <input type="text" name="name"><span class="error">* <?php echo $nameErr; ?></span>
                                    <br><br>


                                    Ticket ID:<input type="text" name="ticketID"><span class="error">* <?php echo $ticketIDErr; ?></span>
                                    <br><br>


                                    Mobile:<input type="text" name="mobile"><span class="error">* <?php echo $mobileErr; ?></span>
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