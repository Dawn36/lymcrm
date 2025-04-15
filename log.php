<?php
    $servername = "localhost";
    $username   = "lymcrmco_dawn";
    $password   = ".!!C+E]AU[mZ";
    $dbname   = "lymcrmco_property";
    

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO `cronHistory`(`rawData`) VALUES (".$_POST['logs'].")";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>