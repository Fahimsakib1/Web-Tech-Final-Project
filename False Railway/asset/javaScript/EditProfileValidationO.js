function validateForm() {
				
				var name = document.getElementById('name').value;
				var email = document.getElementById('email').value;
				var gender = document.getElementById('gender').value;
				var dob = document.getElementById('dob').value;
				var address = document.getElementById('address').value;
				
             
				console.log(name);
				
				if(a == "") 
				{
					document.getElementById('errorMsgName').innerHTML = "Name is empty";
					document.getElementById('errorMsgName').style.color = "red";
					return false;	
				}

				else if(b == "") 
				{
					document.getElementById('errorMsgEmail').innerHTML = "Email is empty";
					document.getElementById('errorMsgEmail').style.color = "red";
					return false;	
				}

				else if(gender == "") 
				{
					document.getElementById('errorMsgGender').innerHTML = "Gender is empty";
					document.getElementById('errorMsgGender').style.color = "red";
					return false;	
				}


				else if(dob == "") 
				{
					document.getElementById('errorMsgDOB').innerHTML = "Date-of-Birth is empty";
					document.getElementById('errorMsgDOB').style.color = "red";
					return false;	
				}

				else if(address == "") 
				{
					document.getElementById('errorMsgAddress').innerHTML = "Address is empty";
					document.getElementById('errorMsgAddress').style.color = "red";
					return false;	
				}

				
				
				
			}