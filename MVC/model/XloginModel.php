<?php
    require('../model/Xdb.php');
    function loginCheck($id, $password){

        $sql = "SELECT id FROM userinfo WHERE userName='".$id."'AND password= '".$password."' ";
        $result = connectionOpen()->query($sql);

        if ($result->num_rows > 0) {
            connectionOpen()->close();
            return true;
        } 
        else {
            connectionOpen()->close();
            echo "0 results";
            return false; 
        }
    }