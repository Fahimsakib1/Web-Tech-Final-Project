<?php
    require('../model/XdiscountModel.php');
    $addDiscount = '';
    $addDiscountErr = "";
    $addDiscountSuccessful = "";
    $removeDiscount = '';
    $removeDiscountErr = "";
    $removeDiscountSuccessful ="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['addDiscountButton'])) {
            if (empty($_POST["discount"])) {
                $addDiscountErr = "An amount is required";
            }
            else{
                $number=$_POST['discount'];
                $pattern = "/^[0-9]+$/";
                if(!preg_match($pattern, $number)){
                    $addDiscountErr = "Only Numbers are allowed";
                }
                else if ($number<=0 || $number>100) {
                    $addDiscountErr = "Enter an amount between 1 to 100";
                }
                else{
                    $addDiscount=$_POST["discount"];
                    if(loadPrevDiscount()){
                        $addDiscountErr = "There is already a Discount. Please Remove it First"; 
                    }
                    else{
                        if(addDiscount($addDiscount)){
                            $addDiscountSuccessful = "Discount added Successfully";
                        }
                        else{
                            $addDiscountErr = "Failed To add Discount"; 
                        }
                    } 
                }    
            }
        }
        if (isset($_POST['removeDiscount'])) {
            if(!loadPrevDiscount()){
                $removeDiscountErr = "No previous discount is found. Please add first";
            }
            else{
                if(removeDiscount()){
                    $removeDiscountSuccessful = "Discount Removed Successfully";               
                }
                else{
                    $removeDiscountErr = "Failed to Remove Discount";
                }
            }                  
        }
    }
?>

