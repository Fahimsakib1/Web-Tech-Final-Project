<!DOCTYPE HTML>
<html>
	<head>
		<title>Forgot Password</title>
		<style>
			.error {color: #FF0000;}

			input

           {

            width: 75%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 15px 10px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px grey; 

           }

		</style>

		<link rel="stylesheet" href="../asset/css/styleO.css">
		
	</head>
	<body>  

		
             <?php
          


    

          require('../Controller/ForgotPasswordControllerO.php');




		?>







		<div style="max-width:fit-content; margin-left: auto; margin-right:auto">
			<table style="width: fit-content; border: 2px solid #000; border-collapse: collapse;">
				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'Header1O.php';?>
					</td>
				</tr>
				<tr>
					<td>
						<div style="max-width:fit-content; margin-left: auto; margin-right:auto">
							<h2>FORGOT PASSWORD</h2>

							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 


								E-mail: <input type="text" name="email">
								<span class="error">* <?php echo $emailErr;?></span>
								<br><br> 

								Password:<input type="Password" name="pwdN">
								<span class="error">* <?php echo $pwdNErr;?></span>
								<br><br>


								Confirm Password: </font><input type="Password" name="pwdR">
								<span class="error">* <?php echo $pwdRErr;?></span>
								<br><br> 


								<input class = "mainDivFormButton" type="submit" name="submit1" value="Submit">

							</form>

							<br><br>




							<?php

								/*echo "<h2>Inputs:</h2>";
								echo "<b>E-mail:</b> ".$email;
								echo "<br>";
								echo "<b>Password:</b> ".$pwdN;
								echo "<br>";
								echo "<b>Confirm Password:</b> ".$pwdR;
								echo "<br>";
								*/
								
							?>

						</div>
					</td>
				</tr>
				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'NewFooterO.php';?>
					</td>
			</table>


		<div>
	</body>
</html>