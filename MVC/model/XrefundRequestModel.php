<?php
    require('../model/Xdb.php');
    function getRefundNumber(){
        $val="1";
        $sql = "SELECT COUNT(*) FROM ticket WHERE status='".$val."' ";
        $result = connectionOpen()->query($sql);

        if ($result->num_rows > 0) {
            $ret = $result->fetch_assoc();
            connectionOpen()->close();
            return $ret["COUNT(*)"];
        } 
        else {
            connectionOpen()->close();
            return 0; 
        }  
    }

    function refundRequest(){
        $val1="1";
        $val0="0";
        $sql = "UPDATE ticket SET status='".$val0."' WHERE status='".$val1."'";

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