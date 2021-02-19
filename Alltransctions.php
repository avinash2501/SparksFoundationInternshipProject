<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    a{
    background-color: black;
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: block;
    }
    h1 {
    color: green;
    padding: 15px 20px;
    text-align: left;
    margin-top:16px;
    margin-right: 180px;
    margin-left:480px;
    }
    .bg{
    width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.6;
    }
  </style>
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";

    $conn = new mysqli($servername, $username,"",'bank');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $sender = $_POST['sender'];
    $receiver = $_POST['receiver'];
    $amount = $_POST["amount"];
    $tsql="insert into transactions(sender,receiver,amount) values (?, ?, ? )";
    $stm=$conn->prepare($tsql);
    $stm->bind_param('sss',$sender, $receiver, $amount);
    $stm->execute();
    $result=$stm->get_result();

    $ssql="select balance from users where name=?";
    $sstm=$conn->prepare($ssql);
    $sstm->bind_param('s',$sender);
    $sstm->execute();
    $result=$sstm->get_result();
    if ($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
      $ups= $row["balance"]-$amount;
    }
    }

    $susql="update users set balance=? where name=?";
    $sustm=$conn->prepare($susql);
    $sustm->bind_param('ss',$ups,$sender);
    $sustm->execute();
    $resultsu=$sustm->get_result();

    $rsql="select balance from users where name=?";
    $rstm=$conn->prepare($ssql);
    $rstm->bind_param('s',$receiver);
    $rstm->execute();
    $resultr=$rstm->get_result();
    if ($resultr->num_rows > 0){
    while($row=$resultr->fetch_assoc()){
      $upr= $row["balance"]+$amount;
    }
    }

    $rusql="update users set balance=? where name=?";
    $rustm=$conn->prepare($rusql);
    $rustm->bind_param('ss',$upr,$receiver);
    $rustm->execute();
    $resultru=$rustm->get_result();
?>
<img class="bg" src="bg.jpeg" alt="AP_TOURISM">
<div align="right">
<a href="UserList.php">USER'S DETAILS</a>
<a href="Transaction_history.php">TRANSACTIONS LIST</a> 
</div>
<h1>Hola!Your Recent transaction is success:) Check Your Recent Transactions List!Thank You..! PEOPLE'S BANK.</h1>
</body>
</html>