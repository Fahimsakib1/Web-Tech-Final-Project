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
        

        
        $myfile = fopen("../Data/AddTrain.txt", "r") or die("Unable to open file!");


        $counter=0;

          while ($line = fgets($myfile)) 

          {
              $words = explode(",",$line);

              if($Tid==$words[0])

              {
                $row_number = $counter;
                break;
              }

              else

              {
                $counter++;
              }
          }


          fclose($myfile);


          $file_out = file("data.txt");
          unset($file_out[$row_number]);

          file_put_contents("../Data/AddTrain.txt", implode("", $file_out));

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

                        

                             <font color = "green" : align = left> <h1>Remove Train</h1> </font>
                      
                      
                             <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">


                             <label for="">Enter Train ID To Remove Train</label>
                             <br><br>


                             <input type="text" name="Tid" value="<?php echo $Tid; ?>">
                             <br><br>


                             <input type="submit" name="Remove" value="Remove Train">
                             


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