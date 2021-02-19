<?php
    $servername = "localhost";
    $username = "root";

    $conn = new mysqli($servername, $username,"",'bank');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
        echo "Connected successfully";
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('avinash', 'avinash@gmail.com','3400')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
        
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('Jana', 'jana@gmail.com','5500')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
        
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('Ajay', 'ajay@gmail.com','11800')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
        
        $sql = "INSERT INTO users(name, email, balance)
        VALUES 'Kalyani', 'kalyani@gmail.com','22000')';
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
        
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('Ashish', 'ashish@gmail.com','55750')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
        
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('Venkat', 'venkat@gmail.com','15000')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
        
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('Mskprasad', 'mskprasad@example.com','67500')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
        
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('sachin', 'sachin@gmail.com','22000')";       
        if ($conn->query($sql) === TRUE) {
           echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
         }
  
  $conn->close();


?>