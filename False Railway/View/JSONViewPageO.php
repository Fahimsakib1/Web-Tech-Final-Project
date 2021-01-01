<!DOCTYPE HTML>
<html>
<style>
    .error {color: #FF0000;}

    input

           {

            width: 35%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px green; 

           }

           #university 
           {
            width: 39%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px green; 
           }

           #department
           {
            width: 39%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px green;
           }
       
</style>

<head>
    <script src="../asset/javaScript/JSONViewPageValidationO.js"> </script>
    <link rel="stylesheet" href="../asset/css/styleO.css">
    <title>Dashboard</title>

</head>

<body>


        <?php
          
         //header('Location: ../View/DhakaToJoydebpurFare.php');
 
          //require('../Controller/NewUpdateFareForRouteControllerO.php');

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
                                <font color = "red" : align = left> <h2> JSON </h2> </font>
                            </td>
                        </tr>
                        <form method="post" action="../Model/DataBaseForJSONExampleO.php" onsubmit="return validateForm()"> 
                        <tr>
                            


                            <td style="width: fit-content;">

                                <p align="margin-middle">


                                   Name: <br>
                                   <input type="text" placeholder="Add Name " id = "name" name="name"> <br>
                                   <span class="error" id="errorMsgsname"> <?//php echo $startingstationErr; ?></span>
                                    


                                    Address:<br>
                                    <input type="text" placeholder="Add Address " id ="address" name="address"> <br>
                                    <span class="error" id="errorMsgaddress"> <?//php echo $arrivalstationErr; ?></span>
                                    

                                    Mobile:<br>
                                     <input type="text" placeholder="Add Mobile Number " id ="mobile" name="mobile"> <br> 
                                    <span class="error" id="errorMsgmobile"> <?//php echo $shovonchairErr; ?></span>
                                    



                                    <!-- University: <br>
                                    <input type="text" placeholder="Add University" id ="university" name="university">  <br>
                                    <span class="error" id="errorMsguniversity"> <?//php echo $acchairErr; ?></span> -->
                                   
                                    

                                    <label for="university" >University:</label>
                                    <br>
                                    <select name="university" id="university" >
                                    <option value="Choose">Choose University</option>    
                                    <option value="AIUB">AIUB</option>
                                    <option value="NSU">NSU</option>
                                    <option value="BRAC">BRAC</option>
                                    <option value="IUB">IUB</option>
                                    <option value="UIU">UIU</option>
                                    <option value="ULAB">ULAB</option>
                                    <option value="WU">WU</option>
                                    <option value="UODA">UODA</option>
                                    <option value="DIU">DIU</option>
                                    <option value="SEU">SEU</option>
                                    <option value="APU">APU</option>
                                    </select> 
                                    <br>



                                    <label for="department" >Department:</label>
                                    <br>
                                    <select name="department" id="department" >
                                    <option value="choose">Choose Department</option>
                                    <option value="CSE">CSE</option>
                                    <option value="EEE">EEE</option>
                                    <option value="ME">ME</option>
                                    <option value="IPE">IPE</option>
                                    <option value="Architecture">Architecture</option>
                                    <option value="BBA">BBA</option>
                                    <option value="Textile">Textile</option>
                                    <option value="Civil">Civil</option>
                                    <option value="Pharmacy">Pharmacy</option>
                                    <option value="LLB">LLB</option>
                                    </select> 
                                    <br>



                                    <!-- Department: <br>
                                    <input type="text" placeholder="Add Department" id ="department" name="department"> <br>
                                    <span class="error" id="errorMsgdepartment"> <?//php echo $acberthErr; ?></span> -->


                                    


                                    Semester:<br>
                                    <input type="text" placeholder="Add Semester" id ="semester" name="semester"> <br> 
                                    <span class="error" id="errorMsgsemester"> <?//php echo $nonacberthErr; ?></span>
                                    <br>


                                    <input class = "mainDivFormButton" type="submit" name="Update" value="Done">
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