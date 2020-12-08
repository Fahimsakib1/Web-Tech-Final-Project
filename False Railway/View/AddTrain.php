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


      $Tid = $Tname = $StartingStation = $ArrivalStation = "";

      
      if ($_SERVER["REQUEST_METHOD"] == "POST") 

      {


        $Tid= $_POST['Tid'];
        $Tname=$_POST['Tname'];
        $StartingStation=$_POST['StartingStation'];
        $ArrivalStation=$_POST['ArrivalStation'];

        //$user = fopen("AddTrain.txt", "a") or die("Unable to open file!");
        $user = fopen("../Data/AddTrain.txt", "a") or die("Unable to open file!");


        fwrite($user, $Tid. "," . $Tname. ",". $StartingStation. ",". $ArrivalStation);
        fwrite($user, "\n");
        fclose($user);

      }


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

                        

                             <font color = "green" : align = left> <h1>Add Train</h1> </font>
                      
                      
                             <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">


                              <label for="Tid">Train ID :</label>
                              <br>
                              <input type="text" name="Tid" value="<?php echo $Tid; ?>">
                              <br><br>


                              <label for="Tname">Train Name :</label>
                              <br>
                               <input type="text" name="Tname" value="<?php echo $Tname; ?>">
                              <br><br>



                              <label for="StartingStation">Starting Station :</label>
                              <br>
                              <input type="text" name="StartingStation" value="<?php echo $StartingStation; ?>">
                              <br><br>


                              <label for="ArrivalStation">Arrival Station :</label>
                              <br>
                              <input type="text" name="ArrivalStation" value="<?php echo $ArrivalStation; ?>">
                              <br><br>


                              <input type="submit" name="Add" value="Add Train">
                              <br><br>

                             


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