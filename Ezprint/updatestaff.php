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
<body class="bglogin">

 
  <header>
  
 <center>
    <img src="image/printbanner.png" alt="banner file" style="width:100%"></a>
 </center>
</header>
<nav>
<ul>
<li><a href="adminmenu.php" >MENU</a></li>
           <li> <a href="viewadminprofile.php">VIEW PROFILE</a></li>
      <li><a href="viewstaff.php" >VIEW STAFF</a></li>
        <li><a href="deletecust.html" >DELETE CUSTOMER</a></li>
        
            
      
    
</ul>

</nav>
<section>
  <article>
<div>
<?php
session_start();

include('inc/connect.php');
$id=$_REQUEST['id'];
$sql = "SELECT * FROM staff where StaffID='".$id."'";

$result=$conn->query($sql);

  $result=$conn->query($sql);
  if($result->num_rows>0)
  {
      while($row=$result->fetch_assoc()){
       echo" <center><h2 style='color:white; font-size: 40px;'>UPDATE"; echo $id;
       
       echo"PROFILE</h2></center>";
          echo"<center> <table style='width: 50%;text-align: center';  cellpadding='5' cellspacing='10'></center>";
        
          echo "<form method ='post' action='updatestafffinal.php'>";
          echo"<tr><td align = 'left'><b style='font-size: 25px;color:white;'>ID:</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'><input type='text' name='uid' readonly value='".$row['StaffID']."'</td></tr>";
          echo" <tr><td  align = 'left'><b style='font-size: 25px;color:white;'>NAME</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'>".$row['Staff_Name']."</td></tr>";
          echo"  <tr><td  align = 'left'><b style='font-size: 25px;color:white;'>EMAIL</td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'><input type='text' style='border:none;font-size:22px;font-weight:light bold' name='uEmail' value='".$row['Staff_Email']."'</td></tr>";
          echo"  <tr><td align = 'left'><b style='font-size: 25px; color:white;'>PASSWORD</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'><input type='text' style='border:none;font-size:22px;font-weight:light bold' name='uPsw' value='".$row['Staff_Password']."'</td></tr>";
          echo "<tr><td align = 'left'><b style='font-size: 25px; color:white;'>PHONE</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'>".$row['Staff_Phone']."</td></tr>";
          echo "<tr><td align = 'left'><b style='font-size: 25px; color:white;'>ADDRESS</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'>".$row['Staff_Address']."</td></tr>";
          if($row['Status'] == "Active"){
            echo "<tr><td align = 'left'><b style='font-size: 25px;color:white;'>STATUS: </td><td><input type='radio' style='border:none;font-size:35px;font-weight:light bold' name='ustatus' value=active checked>Active
                                           <input type='radio' name='ustatus' style='border:none;font-size:22px;font-weight:light bold' value=resigned>Resigned</td></tr>";
            } 
            else{
                echo "<tr><td align = 'left'><b style='font-size: 25px;color:white;'>STATUS: </td><td><input type='radio'style='border:none;font-size:22px;font-weight:light bold' name='ustatus' value=resigned checked>Resigned
                                           <input type='radio' name='ustatus style='border:none;font-size:22px;font-weight:light bold'' value=active>Active</td></tr>";
            }
          echo"</tr>";
          echo"<tr><td colspan='2'><input type='submit' class='button' name='submit' value='UPDATE'>";
          echo"<input type='reset' name='reset' class='button' value='RESET'></td>";
      }
      echo"</table>";
   
  }

  

else{
    echo"<p style='text-align:center'>Error:" .$sql."<br>".$conn->error;
   
}
$conn->close();
include('footer.php');
?>
</div> 
</article></section>             
</body>
<br><br>
<hr style="width: 100%; height: 0px;">
</html>