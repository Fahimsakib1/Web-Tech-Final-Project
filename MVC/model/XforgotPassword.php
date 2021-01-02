<?php
    require('../model/Xdb.php');
    function Check($userName, $phone){

        $sql = "SELECT * FROM userinfo WHERE userName='".$userName."'AND phone= '".$phone."' ";
        $result = connectionOpen()->query($sql);

        if ($result->num_rows > 0) {
            $ret = $result->fetch_assoc();
            connectionOpen()->close();
             return true;
        } 
        else {
            connectionOpen()->close();
            return false; 
        }
    }
    function returnPassword($userName){

        $sql = "SELECT * FROM userinfo WHERE userName='".$userName."' ";
        $result = connectionOpen()->query($sql);

        if ($result->num_rows > 0) {
            $ret = $result->fetch_assoc();
            connectionOpen()->close();
             return $ret;
        } 
        else {
            connectionOpen()->close();
        }
    }