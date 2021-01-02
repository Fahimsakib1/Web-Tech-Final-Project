<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../view/css/homepage.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="../view/js/midChange.js"></script>
</head>
<body>
<div class="grid-container">
  <div class="header">  
    <h2>
    	<img src="../view/image/rail_logo.png" alt="Railway" width="10%">
    	Welcome to Railway
    	<img src="../view/image/rail_logo2.png" alt="Railway" width="10%">
	</h2>
  </div>
  
  <div class="left" style="background-color:#aaa;">
  	<center>
		<button class="w3-btn w3-block w3-teal" onClick="location.href='http://localhost/rms/view/purchaseTicket.php'">Pruchase Ticket</button>
		<br>
		<button class="w3-btn w3-block w3-teal"  onclick="myFunction()">Return Ticket</button>
		<br>
		<button class="w3-btn w3-block w3-teal">Active Tickets</button>
		<br>
		<button class="w3-btn w3-block w3-teal">Purchase History</button>
		<br>
		<button class="w3-btn w3-block w3-teal">See Fare</button>
		<br>
		<button class="w3-btn w3-block w3-teal">Train Info</button>
		<br>
		<button class="w3-btn w3-block w3-teal">Search Train</button>
		<br>
		<button class="w3-btn w3-block w3-teal">Personal Profile</button>
		<br>
		<button class="w3-button w3-block w3-red">Logout</button>

		
	</center>
  </div>

  <div class="middle" id="mid" style="background-color:#bbb;">
  	<img src="../view/image/train1.jpg" width="100%" height="80%">
  	<p style="font-weight: bold; font-size: 20px; text-align: center;">
  		Welcome to Railway E-Ticketing Service.
  	</p>

  </div>  

  <div class="right" style="background-color:#ccc;">
  	<h4 style="background-color: red;">Notice</h4>
  	<div class="notice">
  		<p>
  		Welcome to Railway department!!! This notice board is under maintenance.
  		</p>
  	</div>  	
  </div>
  
  <div class="footer">
    <?php include 'footer.php';?>
  </div>
</div>

</body>
</html>

