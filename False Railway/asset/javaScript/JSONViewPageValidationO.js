function validateForm() {
				
				var name = document.getElementById('name').value;
				var address = document.getElementById('address').value;
				var mobile = document.getElementById('mobile').value;
				var university = document.getElementById('university').value;
				var department= document.getElementById('department').value;
				var semester = document.getElementById('semester').value;
				

				var flag1=true;
				var flag2=true;
				var flag3=true;
				var flag4=true;
				var flag5=true;
				var flag6=true;
				
             
				//console.log(name);
				
				if(name == "") 
				{
					document.getElementById('errorMsgname').innerHTML = "Name is empty";
					document.getElementById('errorMsgname').style.color = "red";
					//return false;
					flag1 = false;	
				}

				else if(address == "") 
				{
					document.getElementById('errorMsgaddress').innerHTML = "Address is empty";
					document.getElementById('errorMsgaddress').style.color = "red";
					//return false;	
					flag2 = false;
				}

				else if(mobile == "") 
				{
					document.getElementById('errorMsgmobile').innerHTML = "Give Your Mobile Number";
					document.getElementById('errorMsgmobile').style.color = "red";
					//return false;
					flag3 = false;	
				}


				else if(university == "") 
				{
					document.getElementById('errorMsguniversity').innerHTML = "Fill The University Name";
					document.getElementById('errorMsguniversity').style.color = "red";
					//return false;	
					flag4 = false;
				}


				else if(department == "") 
				{
					document.getElementById('errorMsgdepartment').innerHTML = "Department is Empty";
					document.getElementById('errorMsgdepartment').style.color = "red";
					//return false;	
					flag5 = false;
				}


				else if(semester == "") 
				{
					document.getElementById('errorMsgsemester').innerHTML = "Semester is Empty";
					document.getElementById('errorMsgNewdestination').style.color = "red";
					//return false;	
					flag6 = false;
				}

				
				if(flag1==true && flag2==true && flag3==true && flag4==true && flag5==true && flag6==true){
					return true;
				}
				else{
					return false;
				}
				
				
			}