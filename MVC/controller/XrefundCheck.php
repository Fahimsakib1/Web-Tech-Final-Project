<?php
    require('../model/XrefundRequestModel.php');
    $refundRequest = "";
    $refundErr= "";
    $refundSuccessful= "";

    $value=getRefundNumber();
    if($value>0){
        $refundRequest = $value;
    }
    else{
        $refundRequest = "No refund is requested ";
    }

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $value=getRefundNumber();
        if($value>0){
            if(refundRequest()){
                $refundSuccessful = "Refunded Successfully";
                $value=getRefundNumber();
                $refundRequest = $value;
            }
            else{
                $refundErr= "Failed to Refund";
            }  
            
        }
        else{
            $refundRequest = "No refund is requested ";
        }

    }


?>