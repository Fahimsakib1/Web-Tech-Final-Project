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

            $sql = "SELECT COUNT(*) FROM ticket WHERE status='".$val."' ";
            $result = connectionOpen()->query($sql);

            if($result->num_rows > 0) {
                $ret = $result->fetch_assoc();
                connectionOpen()->close();
                echo  $ret["COUNT(*)"];

            }
            else{
                echo  "0";
            }

            $conn -> close();

?>