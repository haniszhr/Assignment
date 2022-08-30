<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZPrint</title>
    <link rel="stylesheet" type="text/css" href="layout.css">
  <style type=text/css>
   
.button:hover {
    border:1px solid rgb(30, 108, 211);
  background-color: rgb(92, 146, 177);
  color: black;
}
  .button{
  		margin: 50px;
  		margin-left: 150px;
          background-color:#123456;
  color:white;
  font-size: 30px;
  font-weight: bold;
  
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
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

<body class="bglogin">

 
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

</nav>


</style>
	
</head>

<section>
	<article>
    <center><h2 style="font-size: 40px;font-family: sans-serif; color:white;">MY PROFILE</h2></center>
		 <center>
         
            
     <?php
session_start();

include('inc/connect.php');

$email=$_SESSION['c_email'];
$psw=$_SESSION['c_psw'];

$sql="SELECT * FROM customer where Cust_Email='$email' and Cust_Password='$psw'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc()){
     
        echo" <table style='width: 50%;text-align: left';  cellpadding='5' cellspacing='10'>";
        echo "<form method ='post' action='updatecustprofile.php'>";

        echo"<tr><td align = 'left'><b style='font-size: 25px;color:white;'>ID:</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'>".$row['CustID']."</td></tr>";
        echo" <tr><td  align = 'left'><b style='font-size: 25px;color:white;'>NAME</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'><input type='text' style='border:none;font-size:22px;font-weight:light bold' name='uname' value='".$row['Cust_Name']."'</td></tr>";
        echo"  <tr><td  align = 'left'><b style='font-size: 25px;color:white;'>EMAIL</td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'>".$row['Cust_Email']."</td></tr>";
        echo"  <tr><td align = 'left'><b style='font-size: 25px; color:white;'>PASSWORD</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'>".$row['Cust_Password']."</td></tr>";
        echo "<tr><td align = 'left'><b style='font-size: 25px; color:white;'>PHONE</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'><input type='text' style='border:none;font-size:22px;font-weight:light bold' name='uphone' value='".$row['Cust_Phone']."'</td></tr>";
        echo "<tr><td align = 'left'><b style='font-size: 25px; color:white;'>ADDRESS</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'><input type='text' name='uaddress' style='border:none;font-size:22px;font-weight:light bold' value='".$row['Cust_Address']."'</td></tr>";
     
        echo"</tr>";
        echo"<center><tr><td colspan='2'><input type='submit' name='submit' value='UPDATE' class='button'>";
        echo"<input type='reset' name='reset' value='RESET' class='button'></td></center>";
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
<h4>copyright &copy;EZPrint Store</h4>
</footer>
</body>