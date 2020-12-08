<!DOCTYPE html>
<html>
	<body>
		<table width="1000px" align="center">
			<tr>
				
				<td align="left">


					<img width="350" height="200" src="\WEB TECH CODES PHP\MID TERM\Railway\View\Rail Pic.jpg" alt="Image of Railway Management">

					<img width="350" height="200" src="\WEB TECH CODES PHP\MID TERM\Railway\View\Rail Logo.jpg" alt="Logo of Railway Management">


				</td>

				<td align="middle">

				   <!-- Logged in as <a href="PersonalProfile.php"><?php echo $_SESSION['name'] ?> </a> | -->

				    <!-- Logged in as <a href="PersonalProfile.php">Fahim </a> or  -->



                     <!-- <a href="Login.php"> Logout </a> -->

                         <?php

                         require('../Controller/LogoutController.php');

                         ?>


				          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

				          	Logged in as <a href="PersonalProfile.php"> <?php echo $_SESSION['name'] ?> </a> or 

                               <!--  <input type="submit" value="Logout" name="Logout" >  -->
                                <input class = "homeMainDivCardLogout" type="submit" value="Logout" name="Logout" >

                            </form>

				   
				  







				</td>

				
			</tr>
		</table>
	</body>
</html>