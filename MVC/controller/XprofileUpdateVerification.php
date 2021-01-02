<?php
    require('../model/XprofileModel.php');
    $mobile = '';
    $mobileErr = $mobileOk = "";
    session_start();
    $userName = $_SESSION['id'];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["mobile"])) {
            $mobileErr = "A Mobile Number is required";
        }
        elseif (strlen($_POST['mobile'])!=11) {
            $mobileErr = "Mobile number must have 11 digits";
        }
        else{
            $number=$_POST['mobile'];
            $pattern = "/^[0-9]+$/";
            if(!preg_match($pattern, $number)){
                $mobileErr = "Only Numbers are allowed";
            }
            else{
                $mobile=$_POST["mobile"];
                if(updatePhone($userName,$mobile)){
                    $mobileOk = "Update Successful";
                }
                else{
                    $mobileErr = "Failed to Update";
                }
            }
        }
    }
?>