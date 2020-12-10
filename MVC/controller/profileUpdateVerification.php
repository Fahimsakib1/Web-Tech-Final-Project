<?php
     $mobile = '';
     $mobileErr = $mobileOk = "";
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
                $user = fopen("../asset/data/mobileNumber.txt", "w") or die("Unable to open file!");
                fwrite($user, $mobile);
                fwrite($user, "\n");
                fclose($user);
                $mobileOk = "Update Successful";
            }
        }
    }
?>