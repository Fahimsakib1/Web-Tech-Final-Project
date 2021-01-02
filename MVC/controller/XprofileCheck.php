<?php

    require('../model/XprofileModel.php');
    $name = $userName = $email = $mobileNumber = "";
    session_start();
    $userName = $_SESSION['id'];
    $reply=loadProfile($userName);
    $name = $reply["name"];
    $email = $reply["email"];
    $mobileNumber = $reply["phone"];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        header('Location: http://'.$_SERVER['HTTP_HOST'].'/Web-Tech-Final-Project/MVC/view/XprofileUpdate.php',true,303);
        exit;
    }
?>