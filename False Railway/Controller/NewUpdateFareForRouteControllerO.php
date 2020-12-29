<?php


$startingstation = $arrivalstation = $shovonchair = $acchair = $acberth = $nonacberth ='';
$startingstationErr =$arrivalstationErr =$shovonchairErr =$acchairErr =$acberthErr = $nonacberthErr ='';



if ($_SERVER["REQUEST_METHOD"] == "POST") 


{
    

    if (empty($_POST["startingstation"])) 

    {
        $startingstationErr = "Add Starting Station";
    } 

    else 

    {
        $startingstation = test_input($_POST["startingstation"]);

        
    }



    if (empty($_POST["arrivalstation"])) 

    {
        $arrivalstationErr = "Add Arrival Station ";
    } 

    else 

    {
        $arrivalstation = test_input($_POST["arrivalstation"]);

        
    }


    if (empty($_POST["shovonchair"])) 

    {
        $shovonchairErr = "Add Fare For Shovon Chair";
    } 

    else 

    {
        $shovonchair = test_input($_POST["shovonchair"]);

        
    }


    if (empty($_POST["acchair"])) 

    {
        $acchairErr = "Add Fare For AC Chair ";
    } 

    else 

    {
        $acchair = test_input($_POST["acchair"]);

        
    }



    if (empty($_POST["acberth"])) 

    {
        $acberthErr = "Add Fare For AC Berth ";
    } 

    else 

    {
        $acberth = test_input($_POST["acberth"]);

        
    }




    if (empty($_POST["nonacberth"])) 

    {
        $nonacberthErr = "Add Fare For Non AC Berth ";
    } 

    else 

    {
        $nonacberth = test_input($_POST["nonacberth"]);

        
    }

}


function test_input($data)

{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


        if( !empty($_POST["startingstation"]) &&  !empty($_POST["arrivalstation"])  && !empty($_POST["shovonchair"]) && !empty($_POST["acchair"]) && !empty($_POST["acberth"]) && !empty($_POST["nonacberth"]) )

           {
                        

                        header('Location: ../View/AfterNewUpdateFareForRouteO.php');
                        exit;

                        
           }



?>