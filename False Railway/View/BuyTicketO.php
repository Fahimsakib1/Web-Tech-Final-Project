<!DOCTYPE HTML>
<html>
<style>
    .error {color: #FF0000;}

    input

           {

            width: 38%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px blue; 

           }


        </style>

<head>

    <script src="../asset/javaScript/BuyTicketValidationO.js"></script>
    <link rel="stylesheet" href="../asset/css/styleO.css">
    <title>Dashboard</title>

</head>

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

                        <font color = "blue" : align = middle> <h2> Buy Ticket</h2> </font>

                         <form method="post" action="../Model/DataBaseForBuyTicketO.php" onsubmit="return validateForm()" > 

                        <tr>
                            
                            <!-- action="../Model/DataBaseForPassengerDetailsO.php" 
                                action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" -->

                            <td style="width: fit-content;">

                                <p align="margin-left">


                                    User Name: <br>
                                    <input type="text" id="name" name="name">
                                    <span class="error" id ="errorMsgName"> </span>
                                    <br>


                                    Train Name: <br>
                                    <input type="text" id="trainname" name="trainname"> 
                                    <span class="error" id ="errorMsgTrainname"> </span>
                                    <br>


                                    Destination: <br>
                                    <input type="text" id="destination" name="destination">
                                    <span class="error" id ="errorMsgDestination"> </span>
                                    <br>

                                    

                                    Mobile: <br>
                                    <input type="text" id="mobile" name="mobile">
                                    <span class="error" id ="errorMsgMobile"> </span>
                                    <br>


                                    <input class = "mainDivFormButton" type="submit" name="submit" value="Buy">
                                    <br>


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