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


  </style>
	
</head>
<body class="bglogin">

 
  <header>
  
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

</nav>
<section>
	<article>
    <center><h2 style="font-size: 40px;font-family: sans-serif; color:white;">MY PROFILE</h2></center>
		 <center>
         
            
     <?php
session_start();

include('inc/connect.php');

$email=$_SESSION['s_email'];
$psw=$_SESSION['s_psw'];

$sql="SELECT * FROM staff where Staff_Email='$email' and Staff_Password='$psw'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc()){
     
        echo" <table style='width: 50%;text-align: left';  cellpadding='5' cellspacing='10'>";
        echo "<form method ='post' action='updatestaffprofile.php'>";

        echo"<tr><td align = 'left'><b style='font-size: 25px;color:white;'>ID:</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'>".$row['StaffID']."</td></tr>";
        echo" <tr><td  align = 'left'><b style='font-size: 25px;color:white;'>NAME</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'><input type='text' style='border:none;font-size:22px;font-weight:light bold' name='uname' value='".$row['Staff_Name']."'</td></tr>";
        echo"  <tr><td  align = 'left'><b style='font-size: 25px;color:white;'>EMAIL</td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'>".$row['Staff_Email']."</td></tr>";
        echo"  <tr><td align = 'left'><b style='font-size: 25px; color:white;'>PASSWORD</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'>".$row['Staff_Password']."</td></tr>";
        echo "<tr><td align = 'left'><b style='font-size: 25px; color:white;'>PHONE</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'><input type='text' style='border:none;font-size:22px;font-weight:light bold' name='uphone' value='".$row['Staff_Phone']."'</td></tr>";
        echo "<tr><td align = 'left'><b style='font-size: 25px; color:white;'>ADDRESS</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'><input type='text' name='uaddress' style='border:none;font-size:22px;font-weight:light bold' value='".$row['Staff_Address']."'</td></tr>";
     
        echo"</tr>";
        echo"<tr><td colspan='2'><input type='submit' name='submit' value='UPDATE' class='button'>";
        echo"<input type='reset' name='reset' value='RESET' class='button'></td>";
    }
    echo"</table>";
    echo"</form>";
}
else{
    echo"0 results";
}
$conn->close();

?>
            
	</article>
</section>



<footer>
<h5>copyright &copy;EZPrint Store</h5>
</footer>
</body>