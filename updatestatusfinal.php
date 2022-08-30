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
.button{
 
background-color: #123456;
 
    color: white;
}
  a.button{
  	
  		background-color: #123456;
  border: 1px solid #123456;
  font-size: 30px;
  font-weight: bold;
  
  color: white;
  padding: 1px 1px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  }
  
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
  margin-top:20px;
  margin-bottom:20px;
}
  </style>
	
</head>
<body ><header>
  <center>
    <img src="image/printbanner.png" alt="banner file" style="width:100%"></a>
 </center>
</header>
<nav>
<ul>
<li><a href="staffmenu.php" >MENU</a></li>
<li><a href="viewstaffprofile.php" >VIEW PROFILE</a></li>
<li><a href="download.php" >VIEW ORDER</a></li>
			<li><a href="updatepaymentstaff.php" >CALCULATION</a></li>
        <li><a href="searchfile.php" >UPDATE ORDER</a></li>
        <li><a href="searchcust.php" >SEARCH CUSTOMER</a></li>		
</ul>

</nav><section>
	   <article style="background-color: white;">
       <center><h2 style="font-size: 40px;">DETAILS FILE</h2></center>
 
      
<?php session_start();

include('inc/connect.php');

$id=$_REQUEST['uid'];
$page=$_POST['Payment_Status'];
$filename=$_POST['Status_Order'];


$sql="UPDATE files set Payment_Status='".$page."',Status_Order='".$filename."' where FileID='".$id."'";
$result=$conn->query($sql);
if($conn->query($sql)===TRUE)
{
    $sql1="SELECT files.FileID,files.File_Name,customer.Cust_Name,files.Payment_Status,files.Status_Order from files inner join customer 
    on files.CustID=customer.CustID where files.FileID='".$id."'";
    $result2=$conn->query($sql1);
    if($result2->num_rows > 0)
    {
      
        while($row = $result2 ->fetch_assoc()) {

          
            echo "<table align='center' border ='1' width = 50% >";
            echo "<tr><th>Customer Name: </th><td><input type='text' name='custname' readonly value='".$row['Cust_Name']."'</td></tr>";
           
            echo "<tr><th>ID: </th><td><input type='text' name='uid' readonly value='".$row['FileID']."'</td></tr>";
           
            echo "<tr><th>File Name: </th><td><input type='text' name='File_Name' readonly value='".$row['File_Name']."'</td></tr>";
            echo "<tr><th>Status Payment: </th><td><input type='text' name='Payment' readonly value='".$row['Payment_Status']."'</td></tr>";
            echo "<tr><th>Status Order: </th><td><input type='text' name='Order' readonly value='".$row['Status_Order']."'</td></tr>";
  
    }
}else{
    echo"<tr><td colspan='2'>No result found</td></tr>";
}}

else{
    echo"<p style='text-align:center'>Error:" .$sql."<br>".$conn->error;
}
echo"</table>";

$conn->close();

 ?>
</body><footer style="margin-top:10px">
<h4>copyright &copy;EZPrint Store</h4>
</footer>