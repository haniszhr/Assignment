<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZPrint</title>
    <link rel="stylesheet" type="text/css" href="layout.css">
  <style type=text/css>
    
 .button:hover {
    border:1px solid  #123456;
  background-color: #123456;
  color: black;
}
  .button{
  		margin: 50px;
  		margin-left: 100px;
  		background-color:  #123456;
  border: 1px solid  #123456;
  font-size: 30px;
  font-weight: bold;
  
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;}
  
  input{
    width: 300px;
    padding: 10px;
background-color: #123456;
    font-family: sans-serif;
    font-size: 20px;
    font-weight: bold;
    color: white;
  }

  nav{
    
    border: none;
    background-color: rgb(111, 127, 145);
    color: white;
    padding: 10px;
font-size: 20px;
font-weight: bolder;
}
nav ul{
    list-style-type:none;

}
nav ul li{
    margin-left: 100px;
    display: inline-block;
    padding: 2px;
}
nav ul li a{
    text-decoration:none;
    padding:10px;
    border: 1px rgb(111, 127, 145);
}
nav ul li a:link{
    
    color: ghostwhite;}

nav ul li a:visited{
    
    color:rgb(0, 40, 87);}
nav ul li a:hover{
    background-color:whitesmoke;
    color:darkcyan;}

  </style>
	
</head>
<body >

 
  <header>
  
 <center>
    <img src="image/printbanner.png" alt="banner file" style="width:100%"></a>
 </center>
</header>
<nav>
<ul>

            <li><a href="custmenu.php" >MENU</a></li>
                    <li><a href="viewcustprofile.php" >VIEW PROFILE</a></li>

            <li><a href="adddoc.php" >ADD DOCUMENT</a></li>
        <li><a href="viewstatus.php" >VIEW STATUS</a></li>
         <li><a href="custpay1.php" >PAYMENT</a></li>

      
		
</ul>

</nav><section>
	   <article style="background-color: white;">
    <center><h2 style="font-size: 40px;">ORDER STATUS</h2></center>
    <form>
     <center> 
<img src="image/view-status.png" width="8%" >
       <form action="">
</center>
      



<?php 

$conn=mysqli_connect('localhost','root','','ezprint');
include('custid.php');
$id=$_REQUEST['id'];

$email=$_SESSION['c_email'];
$psw=$_SESSION['c_psw'];
if (isset($_SESSION['cid']))
     

$sql="SELECT files.FileID,files.File_Name,files.Service_Type,files.Status_Order,files.Payment_Status,files.Color FROM files INNER JOIN customer ON files.CustID=customer.CustID where files.CustID={$_SESSION['cid']} AND files.FIleID='".$id."'";

$result=$conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result ->fetch_assoc()) {
 
    echo "<form method ='post' action='updategolferfinal.php'>";
    echo "<table align='center' border ='1' width = 50% >";
    echo "<tr><th>FILE ID: </th><td><input type='text' name='FileID' readonly value='".$row['FileID']."'</td></tr>";
   
    echo "<tr><th>FILE NAME: </th><td><input type='text' name='File_Name' readonly value='".$row['File_Name']."'</td></tr>";
    echo "<tr><th>SERVICE TYPE: </th><td><input type='text' name='Service_Type' readonly value='".$row['Service_Type']."'</td></tr>";
    echo "<tr><th>STATUS ORDER: </th><td><input type='text' name='Status_Order' readonly value='".$row['Status_Order']."'</td></tr>";
    echo "<tr><th>PAYMENT STATUS: </th><td><input type='text' name='Payment_Status' readonly value='".$row['Payment_Status']."'</td></tr>";
    echo "<tr><th>COLOR: </th><td><input type='text' name='Color' readonly value='".$row['Color']."'</td></tr>";

    
}

echo "</form>";
}
else{
    echo"<td>result 0</td>";
}

echo "</table>";
$conn->close();?>
<footer style="margin-top:20px">
<h5>copyright &copy;EZPrint Store</h5>
</footer>
</body>