<!DOCTYPE HTML>
<html>
	<head>
		<title>Registration Page</title>
		<style>

        <style>
   	
   body
   {

   	background-color: #9020E7;
   }

   input

   {

   	width: 80%;
   	height: 5%;
   	border: 1px;
   	border-radius: 15px;
   	padding: 8px 15px 8px 15px;
   	margin: 10px 0px 15px 0px;
   	box-shadow: 1px 1px 2px 1px grey; 

   }

	.error {color: #FF0000;}

	</style>

	</head>
	<body>  

		<?Php 


		require('../Controller/RegistrationController.php');


		?>

        <center> 

		<div style="max-width:1000px; margin-left: auto; margin-right:auto">
			<table style="width: 1000px; border: 2px solid #000; border-collapse: collapse;">
				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'Header1.php';?>
					</td>
				</tr>
				<tr>
					<td style="text-align: center;">
						<div style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left;">

							<h2 style="color:green; font-size:25px; text-align: center; font-weight: bold">Sign Up Form</h2>

							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

							 
								Name: <input type="text" name="name">
								<span class="error">* <?php echo $nameErr;?></span>
								<br><br>


								E-mail: <input type="text" name="email">
								<span class="error">* <?php echo $emailErr;?></span>
								<br><br>


								User Name: <input type="text" name="username">
								<span class="error">* <?php echo $usernameErr;?></span>
								<br><br>


								Password:<input type="Password" name="pwdN">
								<span class="error">* <?php echo $pwdNErr;?></span>
								<br><br>


								Confirm Password: </font><input type="Password" name="pwdR">
								<span class="error">* <?php echo $pwdRErr;?></span>
								<br><br>


								 <!-- Gender:
								<input type="radio" name="gender" value="Male">Male
								<input type="radio" name="gender" value="Female">Female
								<input type="radio" name="gender" value="Other">Other
								<span class="error">* <?php echo $genderErr;?></span>
								<br><br> -->


								</b>Date of Birth: <input type="date" name="dob">
								<span class="error">* <?php echo $dobErr;?></span>
								<br><br>


								<input style="color:green; font-size:20px; font-weight: bold" type="submit" name="submit1" value="Submit">
								<br><br>
								

							</form>

							<?php

								/*echo "<h2>Inputs:</h2>";
								echo "<b>Name:</b> ".$name;
								echo "<br>";
								echo "<b>E-mail:</b> ".$email;
								echo "<br>";
								echo "<b>User Name:</b> ".$username;
								echo "<br>";
								echo "<b>Password:</b> ".$pwdN;
								echo "<br>";
								echo "<b>Confirm Password:</b> ".$pwdR;
								echo "<br>";
								echo "<b>Gender:</b> ".$gender;
								echo "<br>";
								echo "<b>Date of Birth:</b> ".$dob;
								echo "<br>";
								*/
								 
							?>

						</div>
				</tr>
				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'Footer.php';?>
					</td>
			</table>
		<div>

			</center>
	</body>
</html>
