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
            box-shadow: 1px 1px 2px 1px blue; 

           }

</style>

<head>
  <link rel="stylesheet" href="../asset/css/styleO.css">
  <!-- <script src="../asset/javaScript/NewSearchTrainByIDValidationO.js"></script> -->

 

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

                        

                             <font color = "green" : align = left> <h1>Search Train</h1> </font>
                      
                      
                             


                             <label for="">Enter Train ID To Search Train</label>
                             <br><br>

                             <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" > 


                             Train ID : <input type="text" id = "tid" name="tid" value="">
                             <br>
                             <span class="error" id ="errorMsgid"></span>
                              <br> 

                              <p id="mytext"> </p>


                             <input class = "mainDivFormButtonSearchTrain" type="submit" name="Search" value="Search ">

                             
                             


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