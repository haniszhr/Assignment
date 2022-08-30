<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZPrint</title>
    <link rel="stylesheet" type="text/css" href="layout.css">
  <style type=text/css>
 
 
td,th{
 text-align:center;
  font-family: sans-serif;
}

.button:hover {
    border:1px solid rgb(30, 108, 211);
  background-color: rgb(30, 108, 211);
  color: black;
}
  .button{
      margin: 0px;
      margin-left: 10px;
     
  border: 1px solid  #123456;
  font-size: 30px;
  font-weight: bold;
  background-color: #123456;
  color:white;
  padding: 15px 32px;
  text-align: left;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  }
  .flex-container {
    color:black;

    margin:1px;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    background-color: lightgrey;
    flex-wrap: wrap-reverse; /*change the order of the content*/
}
.flex-container > div {
    background-color: white;
    width: 95%;
    margin: 5px;
    text-align: center;
    line-height: 10px;
    font-size: 12px;
    border-style: vertical;
padding: 17px;}
th{
  padding: 8px;
  background-color:rgb(64, 85, 97);
  color:white;

}
input[type=text] {

  padding: 10px;
  border: 1px solid;
  width:400px;

  font-size: 17px;
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
    color:darkcyan;}nav{
    
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
<section>
	<article>
    <center><h2 style="font-size: 40px;font-family: sans-serif;">UPDATE ORDER STATUS</h2></center>
<center>
           <form action="searchcust2.php" method="post">
           <input type="text" name="search" placeholder="Enter Customer Name...">
<input type="submit" name="submit" value="Search" class="button"></center>
</form>


<?php 
session_start();
include('inc/connect.php');
$sql= "SELECT CustID,Cust_Name FROM Customer ";

$result = $conn->query($sql);


echo "<table align='center' border='4' width='1000px'>";
echo" <tr align='center'>
<th> CustID</th>
<th> Name </th>
</tr>";


if($result->num_rows > 0) {
    //output data each row

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['CustID']."</td>";
        echo "<td>".$row['Cust_Name']."</td>";
       echo" </tr>";}}
      
      else{
        echo"<td>No result found!</td>";
      }
      echo"</table>";
?>



<footer style="margin-top:20px">
<h5>copyright &copy;EZPrint Store</h5>
</footer>