<!DOCTYPE HTML>
<html>
	<head>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body>  

		<?php
                   


                   require('../Controller/ChangePasswordController.php');
		?>




		<div style="max-width: 1000px; margin-left: auto; margin-right:auto">
			<table style="width: 1000px; border: 2px solid #000; border-collapse: collapse;">
				<tr>
					<td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'Header2.php';?>
					</td>
				</tr>
				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse; " width="20%">
						<?php include 'Navigationbar.php';?>
					</td>
					<td>
						<div style="max-width:790px; margin-left: auto; margin-right:auto">
							<h2> CHANGE PASSWORD</h2>
							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

								Current Password: <input type="Password" name="pwd">
								<span class="error">* <?php echo $pwdErr;?></span>
								<br><br>

								<font color="green">New Password: </font><input type="Password" name="pwdN">
								<span class="error">* <?php echo $pwdNErr;?></span>
								<br><br>

								<font color="red">Retype New Password: </font><input type="Password" name="pwdR">
								<span class="error">* <?php echo $pwdRErr;?></span>
								<br><br>

								<input type="submit" name="submit" value="Submit">  
							</form>

							
						</div>
					</td>
				</tr>

               <tr>
                     

					<td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">

						<?php include 'Footer.php';?>
					</td>

				</tr>


			</table>
		<div>
	</body>
</html>
