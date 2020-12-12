<?php

session_start();

   if ($_SERVER["REQUEST_METHOD"] == "POST") 

   {
        if (isset($_POST['Logout'])) 

        {
            session_destroy();

            header('Location:../View/LoginO.php',true,303);
            exit;

        }

 
    }                 
?>