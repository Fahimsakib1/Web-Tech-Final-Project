
    function validateForm(){
        var mobile = document.getElementById("mobile").value;

        if(mobile == "" ){
            document.getElementById("mobileErr").innerHTML="A Mobile Number is required";
            return false;
        }
        else if(mobile.length!=11){
            document.getElementById("mobileErr").innerHTML="Mobile number must have 11 digits";
            return false;
        }
        else{
            var pattern = /[^0-9]/g;
            var result = mobile.match(pattern);
            if(result==null){
                return true;
            }
            else{
                document.getElementById("mobileErr").innerHTML="Only Numbers are allowed";
                return false;
            }         
            
        }
    }