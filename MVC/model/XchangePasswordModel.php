<?php

    require('../model/Xdb.php');
    function updatePassword($userName,$password){

        $sql = "UPDATE userinfo SET password='".$password."' WHERE userName='".$userName."'";

        if (connectionOpen()->query($sql) === TRUE) {
            return true;
        } 
        else {
        echo "Error updating record: " . connectionOpen()->error;
            return false;
        }
        connectionOpen()->close();
    }
    function loginCheck($userName, $password){

        $sql = "SELECT id FROM userinfo WHERE userName='".$userName."'AND password= '".$password."' ";
        $result = connectionOpen()->query($sql);

        if ($result->num_rows > 0) {
            connectionOpen()->close();
            return true;
        } 
        else {
            connectionOpen()->close();
            return false; 
        }
    }