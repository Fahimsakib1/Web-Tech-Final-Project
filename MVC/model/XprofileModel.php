<?php
    require('../model/Xdb.php');
    function loadProfile($userName){

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

    function updatePhone($userName,$phone){

        $sql = "UPDATE userinfo SET phone='".$phone."' WHERE userName='".$userName."'";

        if (connectionOpen()->query($sql) === TRUE) {
            connectionOpen()->close();
            return true;
        } 
        else {
            connectionOpen()->close();
            echo "Error updating record: " . connectionOpen()->error;
            return false;
        }
    }