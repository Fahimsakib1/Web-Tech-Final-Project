<?php
$name = $mobile = $ticketID = '';
$nameErr =  $mobileErr = $ticketIDErr = '';



if ($_SERVER["REQUEST_METHOD"] == "POST") 


{
    if (empty($_POST["name"])) 

    {
        $nameErr = "Name is required";


    } 

    else 

    {
        $name = test_input($_POST["name"]);

         
            if (!preg_match("/^[a-zA-Z]/", $name)) 

            {
                $nameErr = "Must start with a letter";
                $name = "";
            } 
 
    }


    if (empty($_POST["ticketID"])) 

    {
        $ticketIDErr = "Ticket ID is required";
    } 

    else 

    {
        $ticketID = test_input($_POST["ticketID"]);

        
    }


    

    if (empty($_POST["mobile"])) 

    {
        $mobileErr = "Mobile Number is required";
    } 

    else

     {
        $mobile = test_input($_POST["mobile"]);
    }


}


function test_input($data)

{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


        if( !empty($_POST["name"]) && !empty($_POST["mobile"]) && !empty($_POST["ticketID"])  )

           {
                        if ( $name == Fahim && $ticketID == 123)

                        {
                            header('Location: AfterTicketVerifyRight.php');
                             exit;

                        }

                        else
                        {
                        	header('Location: AfterTicketVerifyWrong.php');
                             exit;
                        }
           }

?>