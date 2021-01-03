<?php
    require('../model/XsalaryModel.php');
    $adminSalary = $accountantSalary = $officerSalary = "";
    $adminBonus = $accountantBonus = $officerBonus = "";
    $SOA = $month = $err = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['salary'])) {
            if(!empty($_POST['month'])){
                $month=$_POST['month'];
                $adminSalary = 150000;
                $accountantSalary = 50000;
                $officerSalary = 80000;
                if(loadPrevSalary($month)){
                    $err = "Salary for this month already added";
                }
                else{
                    $bonus=0;
                    addSalary($bonus,$adminSalary,$month);
                    addSalary($bonus,$accountantSalary,$month);
                    addSalary($bonus,$officerSalary,$month);
                }
            }
            else{
                $err = "The Month name is Empty";
            }
        }
        if (isset($_POST['bonus'])) {
            $month=$_POST['month'];
            if(!empty($_POST['month']) && loadPrevSalary($month)){
                $month=$_POST['month'];
                $adminSalary = 150000;
                $accountantSalary = 50000;
                $officerSalary = 80000;
                $adminBonus = 15000;
                $accountantBonus = 5000;
                $officerBonus = 8000;
                if(loadPrevBonus($month)){
                    $err = "Bonus for this month already added";
                }
                else{
                    addBonus($adminBonus,$month,$adminSalary);
                    addBonus($accountantBonus,$month,$accountantSalary);
                    addBonus($officerBonus,$month,$officerSalary);
                }
            }
            else{
                $month="";
                $err = "Invalid month or empty";
            }   
        }
        if (isset($_POST['SOA'])) {
            if(!empty($_POST['month'])){
                if(sentToAdmin()){
                    $SOA = "Sent to Admin";
                }
            }
            else{
                $err = "The Month name is Empty";
            }
        }
        
    }

?>