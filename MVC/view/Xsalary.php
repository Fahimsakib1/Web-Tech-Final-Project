<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/Xstyle.css">
    <link rel="stylesheet" href="../asset/css/Xsalary.css">
    <script src="../asset/javaScript/XsalaryValidation.js"></script>
    <title>Salary</title>
</head>
<body>
    <div class="bodyBG">
        <div class="container">
        <header class="header">
            <?php  include('Xheader.php');  ?>
        </header>
        <main>
            <div class="">
                <p class="mainDiv1P">Salary</p>
                <?php
                    require('../controller/XsalaryVerification.php');
                ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  onsubmit="return validateForm()" method="post"  class="salaryMainDivForm">
                    <input type="submit" value="Generate Salary" name="salary" class="salaryMainDivFormButton">
                    <input type="submit" value="Generate Bonus" name="bonus" class="salaryMainDivFormButton">
                    <input type="submit" value="Sent to Admin" name="SOA" class="salaryMainDivFormButton">
                    <br>
                    <label for="" class="MainDivTableCol mainDivTableHeader">Enter Month Name</label>
                    <input type="text" id="month" name="month" placeholder="Enter Month Name">
                    <label for="" id="monthErr" class="mainDivFormLabelError"><?php echo $err; ?></label>
                    <br>
                    <table class="MainDivTable ">
                        <tr class="MainDivTableRow">
                            <th class="MainDivTableCol mainDivTableHeader">Designation</th>
                            <th class="MainDivTableCol mainDivTableHeader">Month</th>
                            <th class="MainDivTableCol mainDivTableHeader">Salary</th>
                            <th class="MainDivTableCol mainDivTableHeader">Bonus</th>
                        </tr>
                        <tr class="MainDivTableRow">
                            <td class="MainDivTableCol">Admin</td>
                            <td class="MainDivTableCol"><?php echo $month; ?></td>
                            <td class="MainDivTableCol"><?php echo $adminSalary; ?></td>
                            <td class="MainDivTableCol"><?php echo $adminBonus; ?></td>
                        </tr>
                        <tr class="MainDivTableRow">
                            <td class="MainDivTableCol">Accountant</td>
                            <td class="MainDivTableCol"><?php echo $month; ?></td>
                            <td class="MainDivTableCol"><?php echo $accountantSalary; ?></td>
                            <td class="MainDivTableCol"><?php echo $accountantBonus; ?></td>
                        </tr>
                        <tr class="MainDivTableRow">
                            <td class="MainDivTableCol">Officer</td>
                            <td class="MainDivTableCol"><?php echo $month; ?></td>
                            <td class="MainDivTableCol"><?php echo $officerSalary; ?></td>
                            <td class="MainDivTableCol"><?php echo $officerBonus; ?></td>
                        </tr>
                    </table>
                </form>
                    <label for="SOA" class="mainDivFormLabelOk"><?php echo $SOA;?></label>
                    <br>
                    <br>
                    <br>
                    <div class="backBtn backBtmergin">
                        <a href="Xhome.php" class="backBtnA">Back</a>
                    </div>
            </div>
        
        </main>
        <footer class="footer">
            <?php  include('Xfooter.php');  ?>
        </footer>
        </div>
    </div>
</body>
</html>