<?php
$ticketID = '';
$ticketIDErr = '';



if ($_SERVER["REQUEST_METHOD"] == "POST") 


{
    

    if (empty($_POST["ticketID"])) 

    {
        $ticketIDErr = "Ticket ID is required";
    } 

    else 

    {
        $ticketID = test_input($_POST["ticketID"]);

        
    }

}


function test_input($data)

{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


        if( !empty($_POST["ticketID"])  )

           {
                        if ( $ticketID == 1)

                        {
                            header('Location: Passenger1O.php');
                             exit;

                        }

                        else if ( $ticketID == 2)

                        {
                            header('Location: Passenger2O.php');
                             exit;

                        }

                        else
                        {
                        	header('Location: InvalidTicketIDO.php');
                             exit;
                        }
           }

?>