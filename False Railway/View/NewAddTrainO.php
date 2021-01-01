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
  <script src="../asset/javaScript/NewAddTrainValidationO.js"></script>
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

                        

                             <font color = "blue" : align = middle> <h2>Add Train</h2> </font>
                      

                             <form class="" action="../Model/DataBaseForAddTrainO.php" method="post" onsubmit="return validateForm()">


                              <label for="Tid">Train ID  :</label>
                              <br>
                              <input type="text" placeholder="Enter Train ID" text-align="center" id="Tid" name="Tid">
                              <span class="error" id = "errorMsgTid" ></span>
                              <br>


                              <label for="Tname">Train Name : </label>        <br>                    
                               <input type="text" placeholder="Enter Train Name" id="Tname" name="Tname">
                               <span class="error" id = "errorMsgTname" ></span>
                              <br>



                              <label for="StartingStation">Starting Station :</label>
                              <br>
                              <input type="text" placeholder="Enter Starting Station" id="StartingStation" name="StartingStation">
                              <span class="error" id = "errorMsgStartingStation" ></span>
                              <br>


                              <label for="ArrivalStation">Arrival Station :</label>
                              <br>
                              <input type="text" placeholder="Enter Arrival Station"  id="ArrivalStation" name="ArrivalStation">
                              <span class="error" id = "errorMsgArrivalStation" ></span>
                              <br>


                              <input class = "mainDivFormButton" type="submit" name="Add" value="Add Train">
                              <br><br>
                         

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