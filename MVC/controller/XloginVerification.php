<?php
        require('../model/XloginModel.php');
        $id = $password = '';
        $idErr = $passwordErr = $loginErr = "";
        $idF = $passwordF = false;
        if(isset($_COOKIE['id']) && isset($_COOKIE['pass'])){
            $id=$_COOKIE['id'];
            $password=$_COOKIE['pass'];
        } 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["id"])) {
                $idErr = "An Id is required";
            }
            else{
                $id=$_POST["id"];
                $idF=true;
            }
            if (empty($_POST["password"])) {
                $passwordErr = "A password is required";
            }
            else{
                $password=$_POST["password"];
                $passwordF=true;
            }
            if($idF==true && $passwordF==true){
                    
                $userFound=loginCheck($id, $password);
                
                if($userFound){
                    session_start();
                    $_SESSION['id']=$id;
                    if(isset($_POST['rm'])){
                        setcookie('id',$id,time()+86400);
                        setcookie('pass',$password,time()+86400);
                    }
                    else{
                        setcookie('id',$id,time()-1);
                        setcookie('pass',$password,time()-1);
                    }

                    header('Location: http://'.$_SERVER['HTTP_HOST'].'/Web-Tech-Final-Project/MVC/view/Xhome.php',true,303);
                    exit;
                }
                else{
                    $loginErr = "User Id or Passsword does not match";
                }
                
            }
        }
?>