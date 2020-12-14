<!DOCTYPE HTML>
<html>
	<head>
		<style>
			.error {color: #FF0000;}

			input

           {

            width: 25%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px green; 

           }

		</style>

		<link rel="stylesheet" href="../asset/css/styleO.css">
	

		

	</head>
	<body>  

		<?php
                   


                   require('../Controller/ChangePasswordControllerO.php');
		?>




		<div style="max-width: 1000px; margin-left: auto; margin-right:auto">
			<table style="width: 1000px; border: 2px solid #000; border-collapse: collapse;">
				<tr>
					<td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'Header2O.php';?>
					</td>
				</tr>
				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse; " width="20%">
						<?php include 'NavigationbarO.php';?>
					</td>
					<td>
						<div style="max-width:790px; margin-left: auto; margin-right:auto">
							<h2> CHANGE PASSWORD</h2>
							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

								Current Password: <input type="Password" name="pwd">
								<span class="error">* <?php echo $pwdErr;?></span>
								<br>

								<font color="green">New Password: </font><input type="Password" name="pwdN">
								<span class="error">* <?php echo $pwdNErr;?></span>
								<br>

								<font color="red">Retype New Password: </font><input type="Password" name="pwdR">
								<span class="error">* <?php echo $pwdRErr;?></span>
								<br>

								<input class = "mainDivFormButton"  type="submit" name="submit" value="Submit">  
							</form>

							
						</div>
					</td>
				</tr>

               <tr>
                     

					<td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">

						<?php include 'NewFooterO.php';?>
					</td>

				</tr>


			</table>
		<div>
	</body>
</html>
