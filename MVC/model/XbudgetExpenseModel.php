<?php

    require('../model/Xdb.php');

    function loadPrevBudgetExistance(){
        $val=0;
        $sql = "SELECT amount FROM budget WHERE amount<>'".$val."' ";
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


    function addBudget($amount){
        $sql = "UPDATE budget SET amount='".$amount."' ";

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

    function addremaining($remaining){
        $sql = "UPDATE expense SET remaining='".$remaining."' ";

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

    function loadRemainingAmount(){
        $val=1;
        $sql = "SELECT remaining FROM expense WHERE id='".$val."'";
        $result = connectionOpen()->query($sql);

        if ($result->num_rows > 0) {
            $ret = $result->fetch_assoc();
            connectionOpen()->close();
            return $ret["remaining"];
        } 
        else {
            connectionOpen()->close();
            return false; 
        }

    }

    function  addExpense($amount){
        $sql = "UPDATE expense SET amount='".$amount."' ";

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