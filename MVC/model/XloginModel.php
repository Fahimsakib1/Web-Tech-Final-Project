<?php
    require('../model/Xdb.php');
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