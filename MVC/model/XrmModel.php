<?php 
            $servername = "localhost";
            $username = "root";
            $pass = "";
            $dbname = "project";
            $conn = new mysqli($servername, $username, $pass, $dbname);
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            return $conn;
            

            $sql = "SELECT * FROM userinfo WHERE userName='".$userName."' ";
            $result = connectionOpen()->query($sql);
            echo "working";
            if ($result->num_rows > 0) {
                echo "Hello";
                while($ret = $result -> fetch_assoc()){
                    echo $ret['name']." ".$ret['userName']." ".$ret['email']." ".$ret['phone'];
                }             
                
            } 
            else {
                echo "Error";
            }

            $conn -> close();

?>