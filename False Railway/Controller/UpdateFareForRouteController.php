<?php


$StartingStation = $ArrivalStation ='';
$StartingStationErr = $ArrivalStationErr = '';



if ($_SERVER["REQUEST_METHOD"] == "POST") 


{
    

    if (empty($_POST["StartingStation"])) 

    {
        $StartingStationErr = "Starting Station Name is required";
    } 

    else 

    {
        $StartingStation = test_input($_POST["StartingStation"]);

        
    }



    if (empty($_POST["ArrivalStation"])) 

    {
        $ArrivalStationErr = "Arrival Station Name is required";
    } 

    else 

    {
        $ArrivalStation = test_input($_POST["ArrivalStation"]);

        
    }

}


function test_input($data)

{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


        if( !empty($_POST["StartingStation"]) &&  !empty($_POST["ArrivalStation"]))

           {
                        if ( $StartingStation == "Dhaka" && $ArrivalStation == "Joydebpur" )

                        {
                           

                             /* 
                             echo "<br>";

                             echo " AC Seat --> 127 Taka";
                             echo "<br>";

                             echo " AC Berth --> 150 Taka";
                             echo "<br>";

                             */
                              

                               //echo " Current Fare : ";

                              //header('Location: ../View/DhakaToJoydebpurFare.php');
                              //echo "<br>";
                              //echo " Current Fare : ";


                              header('Location: ../View/UpdatedDhakaToJoydebpurFare.php');
                              exit;



                        }

                        else if ($StartingStation == "Dhaka" && $ArrivalStation == "Narsingdi")

                             {
                            

                             /* echo " Snighdha --> 133 Taka";
                             echo "<br>";

                             echo " AC Seat --> 156 Taka";
                             echo "<br>";

                             echo " AC Berth --> 236 Taka";
                             echo "<br>";
                             */

                             header('Location: ../View/UpdatedDhakaToNarsingdiFare.php');

  

                             }

                      

                         else

                             {

                             

                             header('Location: UpdateInvalidFare.php');


                             }


                        
           }



?>