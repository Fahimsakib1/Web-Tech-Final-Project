
     function validateForm(){
        var id = document.getElementById("id").value;
        var mobileNumber = document.getElementById("mobileNumber").value;

        /* document.getElementById("idErr").innerHTML="";
        document.getElementById("mobileNumberErr").innerHTML=""; */

        var flag1 =false;
        var flag2 =false;

        if(id == "" ){
            document.getElementById("idErr").innerHTML="An Id is required";
        }
        else{
            document.getElementById("idErr").innerHTML="";
            flag1=true; 
        }
        if(mobileNumber == ""){
            document.getElementById("mobileNumberErr").innerHTML="A Mobile Number is required";
            console.log(mobileNumber);
        }
        else{
            var pattern = /[^0-9]/g;
            var result = mobileNumber.match(pattern);

            if(result!=null){
                document.getElementById("mobileNumberErr").innerHTML="Only Numbers are allowed";
            }
            else{
                if(mobileNumber.length!=11){
                    document.getElementById("mobileNumberErr").innerHTML="Mobile Number must have 11 Digits";
                }
                else{
                    document.getElementById("mobileNumberErr").innerHTML="";
                    flag2=true;
                }
            } 
        }

        if(flag1==true && flag2==true){
            return true;
        }
        else{
            return false;
        }

    }