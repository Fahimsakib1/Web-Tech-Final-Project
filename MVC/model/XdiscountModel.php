<?php

    require('../model/Xdb.php');

    function loadPrevDiscount(){
        $val=0;
        $sql = "SELECT discount FROM ticket WHERE discount<> '".$val."' ";
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


    function addDiscount($amount){
        $sql = "UPDATE ticket SET discount='".$amount."' ";

        if (connectionOpen()->query($sql) === TRUE) {
            connectionOpen()->close();
            return true;
        } 
        else {
            echo "Error updating record: " . connectionOpen()->error;
            connectionOpen()->close();
            return false;
        }
       
    }

    function removeDiscount(){
        $val=0;
        $sql = "UPDATE ticket SET discount='".$val."' ";

        if (connectionOpen()->query($sql) === TRUE) {
            connectionOpen()->close();
            return true;
        } 
        else {
            echo "Error updating record: " . connectionOpen()->error;
            connectionOpen()->close();
            return false;
        }
       
    }