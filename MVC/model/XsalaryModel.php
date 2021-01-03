<?php

    require('../model/Xdb.php');

    function loadPrevSalary($month){
        $sql = "SELECT * FROM payroll WHERE month='".$month."' ";
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


    function addSalary($bonus,$salary,$month){
        $aid=0;
        $sql = "INSERT INTO payroll (bonus, salary, month, aid) VALUES ('$bonus', '$salary', '$month', '$aid')";

        if (connectionOpen()->query($sql) === TRUE) {
            connectionOpen()->close();
        } else {
            connectionOpen()->close();
        }

    }

    function loadPrevBonus($month){
        $val=0;
        $sql = "SELECT bonus FROM payroll WHERE month='".$month."' AND bonus<>'".$val."'  ";
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

    function addBonus($bonus,$month,$salary){
        $sql = "UPDATE payroll SET bonus='".$bonus."' WHERE month='".$month."' AND salary='".$salary."' ";

        if (connectionOpen()->query($sql) === TRUE) {
            connectionOpen()->close();
        } 
        else {
            connectionOpen()->close();
            echo "Error updating record: " . connectionOpen()->error;
        }

    }

    function sentToAdmin(){
        $val0=0;
        $val1=1;
        $sql = "UPDATE payroll SET aid='".$val1."'  WHERE  aid='".$val0."'";

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