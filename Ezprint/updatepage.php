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
  	
  		background-color: rgb(103, 130, 255);
  border: 1px solid rgb(103, 169, 255);
  font-size: 30px;
  font-weight: bold;
  
  color: white;
  padding: 1px 1px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  }
  
  input{
    width: 150px;
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
  
      

<?php session_start();

include('inc/connect.php');

$id=$_REQUEST['id'];

$sql = "SELECT FileID,File_Name,Page,Color,Service_Type FROM files where FileID='".$id."'";
$result=$conn->query($sql);
echo"<center><h2 style='font-size: 40px;'>UPDATE PAGE NUMBER FOR FILE $id</h2></center>";
    
echo"<center>";
echo"<img src='image/add-document.png' width='8%' >";
  
echo"</center>";
if($result->num_rows>0){
while($row = $result ->fetch_assoc()) {

    echo "<form method ='post' action='updatepagefinal.php'>";
    echo "<table align='center' border ='1' width = 50% >";
    echo "<tr><th>ID: </th><td><input type='text' name='uid' readonly value='".$row['FileID']."'</td></tr>";
   
    echo "<tr><th>File Name: </th><td><input type='text' readonly name='File_Name' value='".$row['File_Name']."'</td></tr>";
    echo "<tr><th>Page: </th><td><input type='text' name='Page' value='".$row['Page']."'</td></tr>";


 
    echo"</br><center><input type='submit' align:'center' class='button' name='submit' value='UPDATE'></center>";
   
}



}
else{
    echo"<tr><td>result 0</td></tr>";
}
echo "</table></form>";
$conn->close();

 ?>
 </body>
<footer style="margin-top:20px">
<h4>copyright &copy;EZPrint Store</h4>
</footer>

