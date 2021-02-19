<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    a{
    background-color: black;
    color: green;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    }
    h1 {
    color: red;
    padding: 15px 20px;
    text-align: left;
    margin-top:16px;
    margin-right: 180px;
    }
    table {
    border-collapse: collapse;
    width: 100%;
    }
    .bg{
    width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.9;
    }
    th, td {
    text-align: center;
    padding: 16px;
    }
    tr:hover {background-color: #f5f5f5;}
    tr:nth-child(even) {background-color: #f2f2f2;}
    </style>
</head>
<body>
<h1 align="left" style="color:Blue">Your recent transactions!!</h1>
<img class="bg" src="bg.jpeg" alt="AP_TOURISM">
<div align="right">
<a href="UserList.php">User List</a>
<a href="Transaction_history.php">Recent Transactions</a> 
</div>
<h1>User Details</h1> 

<table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $conn = new mysqli($servername, $username,"",'bank');
            $sq="select * from transactions";
            $stm=$conn->prepare($sq);
            $stm->execute();
            $results=$stm->get_result();
            if ($results->num_rows > 0){
            while($row=$results->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['sender']?></td>
                    <td><?php echo $row['receiver']?></td>
                    <td><?php echo $row['amount']?></td>
                </tr>
    
            <?php
            }}
            ?>
        </tbody>
</table>
</body>
</html>