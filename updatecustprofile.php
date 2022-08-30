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
 
</head>

<body class="bglogin">

<section>
  <article>
<div>
<?php
session_start();

include('inc/connect.php');

$name=$_POST['uname'];

$phone=$_POST['uphone'];
$address=$_POST['uaddress'];

$cemail=$_SESSION['c_email'];
$cpsw=$_SESSION['c_psw'];

$sql="UPDATE customer set Cust_Name='".$name."',  Cust_phone='".$phone."', Cust_Address='".$address."'where Cust_Email='$cemail' and Cust_Password='$cpsw'";
$result=$conn->query($sql);
if($conn->query($sql)===TRUE)
{

  $sql="SELECT * FROM customer where Cust_Email='$cemail' and Cust_Password='$cpsw'";
  $result=$conn->query($sql);
  if($result->num_rows>0)
  {
      while($row=$result->fetch_assoc()){
       echo" <center><h2 style='color:white; font-size: 40px;'>UPDATE PROFILE</h2></center>";
          echo"<center> <table style='width: 50%;text-align: center';  cellpadding='5' cellspacing='10'></center>";
        
  
          echo"<tr><td align = 'left'><b style='font-size: 25px;color:white;'>ID:</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'>".$row['CustID']."</td></tr>";
          echo" <tr><td  align = 'left'><b style='font-size: 25px;color:white;'>NAME</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'>".$row['Cust_Name']."</td></tr>";
          echo"  <tr><td  align = 'left'><b style='font-size: 25px;color:white;'>EMAIL</td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'>".$row['Cust_Email']."</td></tr>";
          echo"  <tr><td align = 'left'><b style='font-size: 25px; color:white;'>PASSWORD</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'>".$row['Cust_Password']."</td></tr>";
          echo "<tr><td align = 'left'><b style='font-size: 25px; color:white;'>PHONE</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'>".$row['Cust_Phone']."</td></tr>";
          echo "<tr><td align = 'left'><b style='font-size: 25px; color:white;'>ADDRESS</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'>".$row['Cust_Address']."</td></tr>";
       
          echo"</tr>";
          
      }
      echo"</table>";
   
  }


    }
  

else{
    echo"<p style='text-align:center'>Error:" .$sql."<br>".$conn->error;
   
}
$conn->close();

?>
</div> 
</article></section>             
</body>

<footer>
<h4>copyright &copy;EZPrint Store</h4>
</footer>
<br><br>
<hr style="width: 100%; height: 0px;">
</html>