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
    input[type=submit]{
    background-color: black;
    color: grey;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: block;
    }
    form{
        margin-top:25px;
        margin-left:240px;
    }
    select{
      display: block;
      font-size: 16px;
      font-family: sans-serif;
      padding: 12px 8px;
      align:"center"; 
      width: 50%;
      box-sizing: content-box;
      border: 3px solid red;
      box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
      appearance: none;
      background-color: grey;
      }
      input[type=text]{
        display: block;
        /* color:mediumseagreen; */
        font-size: 16px;
        font-family: sans-serif;
        padding: 12px 8px;
        align:"center"; 
        width: 50%;
        box-sizing: content-box;
        border: 3px solid red;
        box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
        appearance: none;
        background-color: grey;
      }
      h1{
          color:black;
      }
      h2{
          color:blue;
      }
    </style>
</head>
<body>
<h1 align="center" style="Color:Blue";> Bank of Hindustan welcomes you! please scroll down!</h1>
<img class="bg" src="bg.jpeg" alt="AP_TOURISM">
<div align="right">
<a href="UserList.php">User Details</a>
<a href="Transaction_history.php">Transactions</a> 
</div>
<h1>Transfer Money</h1>
    <div class="form">
    <form  method="POST" action="Alltransctions.php">
    <h2>Sender:</h2>
    <select name="sender" > 
            <option value=sender>Select sender</option>
            <option value="avinash">avinash</option>
            <option value="Jana">Jana</option>
            <option value="Ajay">Ajay</option> 
            <option value="Kalyani">Kalyani</option> 
            <option value="Ashish">Ashish</option> 
            <option value="Venkat">Venkat</option> 
            <option value="Mskprasad">Mskprasad</option> 
            <option value="sachin">sachin</option> 
            <option value="Jay">Jay</option> 
            <option value="Rahul">Rahul</option> 
    </select>
    <br>
    <h2>Receiver:</h2>
    <select name="receiver" > 
        <option value="receiver">Select receiver</option>
        <option value="avinash">avinash</option>
        <option value="Jana">Jana</option>
        <option value="Ajay">Ajay</option> 
        <option value="Kalyani">Kalyani</option> 
        <option value="Ashish">Ashish</option> 
        <option value="Venkat">Venkat</option> 
        <option value="Mskprasasd">Mskprasad</option> 
        <option value="sachin">sachin</option> 
        <option value="Jay">Jay</option> 
        <option value="Rahul">Rahul</option> 
    </select>
    <h2>Amount: </h2><input type="text" name="amount"><br>
    <input type="submit" value="Transfer">
    </form>
    </div>
</body>
</html>