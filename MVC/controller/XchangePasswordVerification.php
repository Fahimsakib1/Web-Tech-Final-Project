<?php
                    require('../model/XchangePasswordModel.php');
                    $currentPassword = $newPassword = $confirmPassword = $updatePassword = '';
                    $currentPasswordErr = $newPasswordErr = $confirmPasswordErr = "";
                    session_start();
                    $userName = $_SESSION['id'];
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["currentPassword"])) {
                        $currentPasswordErr = "Current Password is required";
                    }
                    else{
                        $currentPassword=$_POST["currentPassword"];
                    }
                    if (empty($_POST["newPassword"])) {
                        $newPasswordErr = "New Password is required";
                    }
                    else{
                        $newPassword=$_POST["newPassword"];
                    }
                    if (empty($_POST["confirmPassword"])) {
                        $confirmPasswordErr = "Confirm Password is required";
                    }
                    else{
                        $confirmPassword=$_POST["confirmPassword"];
                        if (!empty($_POST["newPassword"])) {
                            $val=strcmp($newPassword,$confirmPassword);
                            if($val==0){
                                $confirmPassword=$_POST["confirmPassword"]; 
                            }
                            else{
                                $confirmPasswordErr = "Password do not match, Please Re-enter"; 
                                $confirmPassword='';      
                            }  
                        }
                        else{
                            $confirmPassword=$_POST["confirmPassword"];   
                        }
                                          
                    }
                    

                    if(loginCheck($userName, $currentPassword)) {
                        if(updatePassword($userName,$newPassword)){
                            $updatePassword = "Password Updated Successfully";
                        }
                        else{
                            $confirmPasswordErr = "Failed";
                        }
                       
                    }
                    else{
                        $currentPasswordErr="Current Password does not match ";   
                    }           
                }
?>