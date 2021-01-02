<!DOCTYPE html>
<html>
<head>

	 <style> 
	 	body
        {
            
                
            background-color: #C5C4C1  ;
          
        }

        #pagetitle
       {

       	   background-color: #C303C5  ;
		   font-size: 20px;
		   text-align: center;          
       }
        
      </style>
	<title> AJAX Example</title>
</head>
<body>

	<div id = "pagetitle"> 

	<h2> AJAX </h2>

   </div>

	<p id = "t1"> </p>
	<button onclick = "createAjaxRequest()">Click</button>

	<script>

		function createAjaxRequest() 

	{
		
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status ==200)
			{
				console.log("Fahim");

				document.getElementById('t1').innerHTML = xhttp.responseText;
			}
		}

		xhttp.open("GET", "DataBaseForAJAXExampleO.php", true);
		xhttp.send();

	}
	</script>

</body>
</html>