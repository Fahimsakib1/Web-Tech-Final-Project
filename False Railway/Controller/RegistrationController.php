<?php

			$nameErr= $emailErr= $usernameErr= $pwdNErr= $pwdRErr= $genderErr= $dobErr=  "";
			$month = $day = $year ="";
			$name= $email= $username= $pwdN= $pwdR= $gender= $dob=  "";
			$signup_status = "";



			if ($_SERVER["REQUEST_METHOD"] == "POST") 
			{
				  
				  $counter = 0;

					  if (isset($_POST["name"]) & !empty($_POST["name"])) 

					  {
					    $name = test_input($_POST["name"]);
					  }

					  else 
					  {
					    $nameErr = "Invalid Name.. Name is Required ";
					    $counter = $counter + 1;
					  }


					  if (isset($_POST["email"]) & !empty($_POST["email"])) 

						  {
						    $email = test_input($_POST["email"]);
						  }

						  else 
						  {
						    $emailErr = "Invalid email... Email is Required";
						    $counter = $counter + 1;
						  }


						  if (isset($_POST["username"]) & !empty($_POST["username"])) 

						  {
						    $username = test_input($_POST["username"]);
						  }

						  else 
						  {
						    $usernameErr = "Invalid username.. User Name is Required";
						    $counter = $counter + 1;
						  }


						  if (isset($_POST["pwdN"]) & !empty($_POST["pwdN"])) 

						  {
						    $pwdN = test_input($_POST["pwdN"]);
						  }

						  else 
						  {
						    $pwdNErr = "Invalid Password... Password is Required";
						    $counter = $counter + 1;
						  }


						  if (isset($_POST["pwdR"]) & !empty($_POST["pwdR"])) 

						  {   

						  	$pwdR = test_input($_POST["pwdR"]); 
						    
                               if ( !empty($_POST["pwdN"]))

                               {
                                     

                                            $val=strcmp($pwdN,$pwdR);

				                            if($val==0)

				                            {
				                                $pwdR = test_input($_POST["pwdR"]); 
				                            }

				                            else

				                            {
				                                
                                                $pwdR = "";
                                                $counter = $counter + 1;
				                                $pwdRErr = "Password do not match, Please Re-enter "; 
				                                   
				                            } 

                                     

                               }



						    //$pwdR = test_input($_POST["pwdR"]);
						  }



						  else 
						  {
						    $pwdRErr = "Invalid Re-Password.... Repeat Password is Required";
						    $counter = $counter + 1;
						  }


						  if (isset($_POST["gender"]) & !empty($_POST["gender"])) 

						  {
						    $gender = test_input($_POST["gender"]);
						  }

						  else 
						  {
						    $genderErr = "Invalid Gender..... Gender is Required";
						    $counter = $counter + 1;
						  }


						  if (isset($_POST["dob"]) & !empty($_POST["dob"])) 

						  {
						    $dob = test_input($_POST["dob"]);
						  }

						  else 
						  {
						    $dobErr = "Invalid Date Of Birth... Date-of-Birth is Required";
						    $counter = $counter + 1;
						  }



                       if($counter == 0) 

						  {
						    $signup_status = "Sign Up Successful";

                             


						    $user = fopen("../Data/LoginData.txt", "w") or die("Unable to open file!");
						    fwrite($user,$name."," .$email.",".$username.",".$pwdN.", ".$pwdR.",".$gender.",".$dob.",");
						    fwrite($user, "\n");
						    fclose($user);


						    header('Location: ../View/AfterRegistration.php');
                             exit;
						  }


						  else

						   {


						    $signup_status = "Sign Up Failed";

						    
                            

						    $counter = 0;
						  }
						}



						else

						{
							$signup_status = "Sign Up Failed";
						}


						  

						function test_input($data) 

						{
						  $data = trim($data);
						  $data = stripslashes($data);
						  $data = htmlspecialchars($data);
						  return $data;
						}






				 /*if (empty($_POST["name"])) 
			  	{
			  		$nameErr = "Name is required";
			  	}

			  	else
			  	{
			  		$name = test_input($_POST["name"]);

			  		if (str_word_count($name)<2)
			  		{
			  			$nameErr = "Must contain at least two words";
			  			$name = "";
			  		}

			  		else
			  		{
			  			if (!preg_match("/^[a-zA-Z]/",$name)) 
			  			{
	      					$nameErr = "Must start with a letter";
	      					$name = "";
	    				}
	    				

			  		}

                }

          
				
				if (empty($_POST["email"])) 
			  	{
			  		$emailErr = "E-mail is required";
			  	}
			  	else
			  	{
			  		$email = test_input($_POST["email"]);
			  		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
			  		{
	  					$emailErr = "Invalid email format";
	  					$email = "";
	  				}
	  			}



	  			if (empty($_POST["username"])) 
			  	{
			  		$usernameErr = "Name is required";
			  	}
			  	else
			  	{
			  		$username = test_input($_POST["username"]);


			  		if (strlen($name)<3) 

			  		{
	      				$nameErr = "Name Must be greater then 3 Letters";
	      				$pwd = "";
	    			}
			  		
			  	}



			  	if (empty($_POST["pwdN"])) 
			  	{
			  		$pwdNErr = "Password is required";
			  	}
			  	else
			  	{
			  		$pwdN = test_input($_POST["pwdN"]);	
			  		if (strlen($pwdN)<8) 
			  		{
	      				$pwdNErr = "Must not be less than eight (8) characters";
	      				$pwdN = "";
	    			}

	    			elseif(strpos($_POST["pwdN"], "$") == false && strpos($_POST["pwdN"], "@") == false && strpos($_POST["pwdN"], "%") == false &&strpos($_POST["pwdN"], "#") == false)
	    			{
	    				$pwdNErr = "Must contain at least one of the special characters (@, #, $, %)";
	    				$pwdN = "";
			  		}
			  	}



			  	if (empty($_POST["pwdR"])) 
			  	{
			  		$pwdRErr = "Please retype Password";
			  		$pwdN = "";
			  	}
			  	else
			  	{
			  		$pwdR = test_input($_POST["pwdR"]);	
			  		if ($pwdN != $pwdR) 
			  		{
	      				$pwdRErr = "Password Is Not Matching ";
	      				$pwdR = "";
	      				$pwdN = "";
	    			}
			  	}



	  			if (empty($_POST["gender"])) 
			  	{
			  		$genderErr = "Gender is required";
			  	}
			  	else
			  	{
			  		$gender = test_input($_POST["gender"]);
			  	}



	  			if (empty($_POST["dob"])) 
			  	{
			  		$dobErr = "Date of Birth is required";
			  	}
			  	else
			  	{
			  		$dob = test_input($_POST["dob"]);
			  		$month = date('m', strtotime($dob));
			  		$day = date('d', strtotime($dob));
			  		$year = date('Y', strtotime($dob));

			  		if (($day>=1 && $day<=31) && ($month>=1 && $month<=12) && ($year>=1980 && $year<=2020)) 
			  		{
			  			$dob = test_input($_POST["dob"]);
			  		}
			  		else
			  		{
			  			$dobErr = "Invalid Date (Year must be between 1980-2020)";
			  			$dob = "";
			  		}
	  			}
			}


				function test_input($data) 
			{
	 			$data = trim($data);
	 			$data = stripslashes($data);
	  			$data = htmlspecialchars($data);
	  			return $data;
			}



			if( !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["username"]) && !empty($_POST["pwdN"])  && !empty($_POST["pwdR"]) && !empty($_POST["gender"]) && !empty($_POST["dob"]) )

           {
                        

                         if ( $pwdN = $pwdR)

                        {
                            header('Location: AfterRegistration.php');
                           exit;

                        }

                        
           }  */


		?>