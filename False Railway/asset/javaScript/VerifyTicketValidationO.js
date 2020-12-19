function validateForm() {
				
				var name = document.getElementById('name').value;
				var ticketID = document.getElementById('ticketID').value;
				var mobile = document.getElementById('mobile').value;
				
				// console.log(x);
				if(name == "") 
				{
					document.getElementById('errorMsgName').innerHTML = "User Name Field is empty";
					document.getElementById('errorMsgName').style.color = "red";
					return false;	
				}

				else if(ticketID == "") 
				{
					document.getElementById('errorMsgticketID').innerHTML = "New Password Field is empty";
					document.getElementById('errorMsgticketID').style.color = "red";
					return false;	
				}

				else if(mobile == "") 
				{
					document.getElementById('errorMsgMobile').innerHTML = "Retype New Password Field is empty";
					document.getElementById('errorMsgMobile').style.color = "red";
					return false;	
				}

				
				
				return true;
			}