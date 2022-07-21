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
  		background-color: rgb(103, 169, 255);
  border: 1px solid rgb(103, 169, 255);
  font-size: 30px;
  font-weight: bold;
  
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  }
  footer{
      margin-top:30px;
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

include('inc/connect.php');
$id=$_POST['FileID'];
$service=$_POST['Service_Type'];
$Color=$_POST['Color'];
$page=$_POST['Page'];
$area=$_POST['Area_Delivery'];
$a=0.10;$b=0.2;
$sum=$a*$page;
$sum2=$b*$page;


$kb=2.0;
$myk=3.0;
$bkt=2.5;
if($service=='delivery'){
if($Color=='bw'&& $area=='Klebang'){
    $Price=$sum+$kb;
}
else if($Color=='bw'&& $area=='Tanjong'){
  $Price=$sum+$kb;
}
else if($Color=='bw'&& $area=='Minyak'){
  $Price=$sum+$myk;
}
else if($Color=='bw'&& $area=='Bukit'){
  $Price=$sum+$bkt;
}

if($Color=='color'&& $area=='Klebang'){
  $Price=$sum2+$kb;
}
else if($Color=='color'&& $area=='Tanjong'){
$Price=$sum2+$kb;
}
else if($Color=='color'&& $area=='Minyak'){
$Price=$sum2+$myk;
}
else if($Color=='color'&& $area=='Bukit'){
$Price=$sum2+$bkt;
}}
else if($service=='pickup'){
if($Color=='bw'){
  $Price=$sum;
}
else if($Color=='color'){
  $Price=$sum2;
}

}
$sql="UPDATE files set Price='".$Price."'where FileID='".$id."'";
$result=$conn->query($sql);
if($conn->query($sql)===TRUE){
    echo "<table align='center' border='4' width='1000px'>";
echo" <tr align='center'>
<th> RESULT</th></tr>";
echo"<tr><th style='margin-left:70px' align:'center' text-align:'center'>File ID: $id Had been Update Successfully</th></tr></br></article></section>";


}else{
   echo" <th> RESULT</th></tr>";

   echo"<p style='text-align:center'>Error:" .$sql."<br>".$conn->error;
}
echo"</table>";
$conn->close();

echo"<footer>
<h5>copyright &copy;EZPrint Store</h5>
</footer>
</body>";
 ?>