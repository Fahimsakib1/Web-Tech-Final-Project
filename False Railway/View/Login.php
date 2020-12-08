<!DOCTYPE HTML>

<html>
	<head>
		<title>login Page</title>
		<style>

			.error {color: #FF0000;}

		</style>

		<link rel="stylesheet" href="../asset/css/style.css">

		
	</head>

	<body>  
		

		<?php
          

          require('../Controller/LoginController.php');


		?>



    <div style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left;">
			<table style="width: auto; border: 2px solid #000; border-collapse: collapse;">
				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'Header1.php'?>
					</td>
				</tr>
				<tr>
					<td>
						<div style="max-width:fit-content; margin-left: auto; margin-right:auto">
							<h2 style = "font-size:35px; font-style: bold ; color:black;text-align: center;">LOGIN</h2>

							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

								<p style = "font-size:28px; font-weight: : bold ; color:blue"> User Name: </p> <input style = "font-size:20px" type="text" name="name">
								<span class="error">* <?php echo $nameErr;?></span>
								<br><br>  

								<p style = "font-size:28px; font-weight: : bold ; color:blue"> Password: </p> <input class = "mainDivFormLabel" type="Password" name="pwd">
								<span class="error">* <?php echo $pwdErr;?></span>
								<br><br>

								<input class = " mainDivFormButton" type="submit" name="submit1" value="Submit" action = "Dashboard.php">
								&nbsp

								</a>
								&nbsp  

								<a href="ForgotPassword.php"> Forgot Password?</a>
								 

							</form>
							<br><br>

							<?php
								/*echo "<h2>Inputs:</h2>";
								echo "<b>User Name:</b> ".$name;
								echo "<br><br>";
								echo "<b>Password:</b> ".$pwd;
								echo "<br><br>";*/
							?>

						</div>	
					</td>
				</tr>

				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'Footer.php'?>
					</td>
			</table>



		<div>


	</body>
</html>
