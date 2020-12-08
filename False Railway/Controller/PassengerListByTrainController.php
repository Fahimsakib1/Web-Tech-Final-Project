<?php


$trainID = $trainName ='';
$trainIDErr = $trainNameErr = '';



if ($_SERVER["REQUEST_METHOD"] == "POST") 


{
    

    if (empty($_POST["trainID"])) 

    {
        $trainIDErr = "Train ID is required";
    } 

    else 

    {
        $trainID = test_input($_POST["trainID"]);

        
    }



    if (empty($_POST["trainName"])) 

    {
        $trainNameErr = "Train Name is required";
    } 

    else 

    {
        $trainName = test_input($_POST["trainName"]);

        
    }

}


function test_input($data)

{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


        if( !empty($_POST["trainID"]) &&  !empty($_POST["trainName"]))

           {
                        if ( $trainID == 1 && $trainName == Train1 )

                        {
                            header('Location: Train1PassengerList.php');
                             exit;

                        }

                        else
                             {

                                header('Location: PassengerListByTrainInvalid.php');
                                

                             }

                        

                       if ( $trainID == 2 && $trainName == Train2 )

                        {
                            header('Location: Train2PassengerList.php');
                             exit;
                          

                        }

                         else
                             {

                                header('Location: PassengerListByTrainInvalid.php');
                                

                             }


                        
           }



?>