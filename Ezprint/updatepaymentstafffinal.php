<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZPrint</title>
    <link rel="stylesheet" type="text/css" href="layout.css">
  <style type=text/css>
   
 .button:hover {
    border:1px solid rgb(30, 108, 211);
  background-color: rgb(30, 108, 211);
  color: black;
}
  a.button{
  		margin: 10px;
  		margin-left: 10px;
  		background-color: rgb(103, 169, 255);
  border: 1px solid rgb(103, 169, 255);
  font-size: 30px;
  font-weight: bold;
  
  color: white;
  padding: 3px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  }
  .button{
  		margin: 10px;
  		margin-left: 250px;
  	
  border: 1px solid rgb(103, 169, 255);
  font-size: 30px;
  font-weight: bold;
  background-color:white;
  color:rgb(64, 85, 97);
    
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  }
  nav{
    
    border: none;
    background-color: rgb(111, 127, 145);
    color: white;
    padding:20px;
font-size: 21px;
font-weight: bolder;
}
nav ul{
    list-style-type:none;

}
nav ul li{
    margin-left:35px;
    display: inline-block;
    padding: 6px;
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
table{
  background-color:rgb(64, 85, 97)
}
  </style>
	
</head>
<body>

 
  <header>
  
 <center>
    <img src="image/printbanner.png" alt="banner file" style="width:100%"></a>
 </center>
</header>
<nav>
<ul><li><a href="staffmenu.php" >MENU</a></li>
<li><a href="viewstaffprofile.php" >VIEW PROFILE</a></li>
<li><a href="download.php" >VIEW ORDER</a></li>
			<li><a href="updatepaymentstaff.php" >CALCULATION</a></li>
        <li><a href="searchfile.php" >UPDATE ORDER</a></li>
        <li><a href="searchcust.php" >SEARCH CUSTOMER</a></li>
	

            
		
</ul>

</nav>
<section> <article> <center><h2 style='font-size: 40px;font-family: sans-serif;'>FILE DETAIL</h2></center>";



<?php session_start();

$conn=mysqli_connect('localhost','root','','ezprint');

$id=$_REQUEST['id'];

$a=0.10;$b=0.2;


$sql="SELECT customer.Cust_Name,files.FileID,files.File_Name,files.File_Name,files.Payment_Status,files.Page,files.Date,files.Color,files.Price,files.Service_Type,customer.Area_Delivery FROM files inner join customer ON customer.CustID=files.CustID where files.FileID='".$id."'";


$result=$conn->query($sql);
if($result->num_rows>0){
    while($row = $result ->fetch_assoc()) {
       
    echo "<form method ='post' action='updatepaymentstafffinal2.php'>";
    echo "<table align='center' border ='1' width = 50% >";
    echo "<tr><th style = 'color:white'>File ID: </th><td><input type='text' name='FileID' readonly value='".$row['FileID']."'</td></tr>";
   
    echo "<tr><th style = 'color:white'>Customer Name: </th><td><input type='text' name='Cust_Name' readonly value='".$row['Cust_Name']."'</td></tr>";
   echo "<tr><th style = 'color:white'>File Name: </th><td><input type='text' name='File_Name' readonly value='".$row['File_Name']."'</td></tr>";
   echo "<tr><th style = 'color:white'>Page: </th><td><input type='text' name='Page' readonly value='".$row['Page']."'</td></tr>";
   
   echo "<tr><th style = 'color:white'>Color: </th><td><input type='text' name='Color' readonly value='".$row['Color']."'</td></tr>";
   echo "<tr><th style = 'color:white'>Service Type: </th><td><input type='text' name='Service_Type' readonly value='".$row['Service_Type']."'</td></tr>";
   echo "<tr><th style = 'color:white'>Delivery Location: </th><td><input type='text' name='Area_Delivery' readonly value='".$row['Area_Delivery']."'</td></tr>";
   echo "<tr><th style = 'color:white'>Price: </th><td><input type='text' name='Price' readonly value='".$row['Price']."'</td></tr>";
   
   echo"<tr><td colspan='2'><input type='submit' name='submit' value='CALCULATE TOTAL PRICE' class='button'>";
   
    
    }
    echo "</table>";
echo "</form>";} else{echo"<td>O result</td>";}

$conn->close();
 ?><p>
</section>
<footer>
<h5>copyright &copy;EZPrint Store</h5>
</footer>
</body>