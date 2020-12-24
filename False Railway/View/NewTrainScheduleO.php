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
  <!-- <script src="../asset/javaScript/NewAddTrainValidationO.js"></script> -->
  <script src="../asset/javaScript/NewTrainScheduleValidationO.js"></script> 
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

                       <font color = "green" > <h2> For Full Train Schedule, Visit: <a href="https://www.bproperty.com/blog/bangladesh-railway-map-train-line-route-pdf/"> Train Schedule</a> </h2> </font>


                        

                             <font color = "green" : align = middle> <h2> Make Train Schedule</h2> </font>
                      
                      
                            <form method="post" class="" action="../Model/DataBaseForNewTrainScheduleO.php" onsubmit="return validateForm()">


                              <label for="id">Ticket ID :</label>
                              <br>
                              <input type="text" text-align="center" id="id" name="id">
                              <span class="error" id = "errorMsgID" >*</span>
                              <br>


                              <label for="name">Train Name: </label>     <br>                       
                               <input type="text" id="name" name="name">
                               <span class="error" id = "errorMsgName" >*</span>
                              <br>
                              


                              <label for="startingstation">Starting Station :</label>
                              <br>
                              <input type="text" id="startingstation" name="startingstation">
                              <span class="error" id = "errorMsgStartingstation" >*</span>
                              <br>



                              <label for="departuretime">Departure Time :</label>
                              <br>
                              <input type="text" id="departuretime" name="departuretime">
                              <span class="error" id = "errorMsgDeparturetime" >*</span>
                              <br>



                              <label for="arrivalstation">Arrival Station :</label>
                              <br>
                              <input type="text" id="arrivalstation" name="arrivalstation">
                              <span class="error" id = "errorMsgArrivalstation" >*</span>
                              <br>



                              <label for="arrivaltime">Arrival Time:</label>
                              <br>
                              <input type="text" id="arrivaltime" name="arrivaltime">
                              <span class="error" id = "errorMsgArrivaltime" >*</span>
                              <br>


                              <label for="offday">Off Day:</label>
                              <br>
                              <input type="text" id="offday" name="offday">
                              <span class="error" id = "errorMsgOffday" >*</span>
                              <br>



                              <!--<input style="color: blue" class = "mainDivFormButton" type="submit" name="Add" value="Add"> -->



                              <input class = "mainDivFormButton" type="submit" name="Add" value="Add">
                              

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