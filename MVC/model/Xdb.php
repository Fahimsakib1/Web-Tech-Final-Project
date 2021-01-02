<?php
    function connectionOpen(){
      $servername = "localhost";
      $username = "root";
      $pass = "";
      $dbname = "project";
      $conn = new mysqli($servername, $username, $pass, $dbname);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      return $conn;
    }
?>