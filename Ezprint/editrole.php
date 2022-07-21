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
    margin-left: 120px;
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
<li><a href="adminmenu.php" >MENU</a></li>
           <li> <a href="viewadminprofile.php">VIEW PROFILE</a></li>
      <li><a href="viewstaff.php" >VIEW STAFF</a></li>
        <li><a href="deletecust.php" >DELETE CUSTOMER</a></li>
        
        
            
            
      
    
</ul>

</nav>
<section>
  <article>
<div>   <center>  
     <?php
session_start();

include('inc/connect.php');
$id=$_REQUEST['id'];


$sql="SELECT * FROM staff where StaffID='".$id."'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc()){
      echo " <center><h2 style='font-size: 40px;font-family: sans-serif;'>STAFF DETAIL</h2></center>";
        echo" <table style='width: 50%;text-align: left';  cellpadding='5' cellspacing='10'>";
        echo "<form method ='post' action='editrolefinal.php'>";

        echo"<tr><td align = 'left'><b style='font-size: 25px;color:white;'>ID:</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'><input type='text' style='border:none;font-size:22px;font-weight:light bold' name='uid' readonly value='".$row['StaffID']."'</td></tr>";
        echo" <tr><td  align = 'left'><b style='font-size: 25px;color:white;'>NAME</b></td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'><input type='text' style='border:none;font-size:22px;font-weight:light bold' name='uname' value='".$row['Staff_Name']."'</td></tr>";
        echo"  <tr><td  align = 'left'><b style='font-size: 25px;color:white;'>EMAIL</td><td align='left' style='font-size: 25px;color:black;background-color:white;padding:10px'><input type='text' style='border:none;font-size:22px;font-weight:light bold' readonly name='uEmail' value='".$row['Staff_Email']."'</td></tr>";
     
    
        
        if($row['role'] == "Staff"){
            echo "<tr><td align = 'left'><b style='font-size: 25px;color:white;'>POSITION: </td><td><input type='radio' style='border:none;font-size:35px;font-weight:light bold' name='role' value=Staff checked><b style='font-size:25px'>Staff
                                         </b>  <input type='radio' name='role' style='border:none;font-size:22px;font-weight:light bold' value=admin><b style='font-size:25px'>Admin</td></tr>";
            } 
            else{
                echo "<tr><td align = 'left'><b style='font-size: 25px;color:white;'>POSITION: </td><td><input type='radio' style='border:none;font-size:35px;font-weight:light bold' name='role' value=admin checked><b style='font-size:25px'>Admin</b>
                <input type='radio' name='role' style='border:none;font-size:22px;font-weight:light bold' value=Staff><b style='font-size:25px'>Staff</b></td></tr>";
}
        echo"</tr>";
        echo"<tr><td colspan='2'><input type='submit' name='submit' value='UPDATE' class='button'>";
        echo"<input type='reset' name='reset' value='RESET' class='button'></td>";
    }
    echo"</table>";
    echo"</form>";
}
else{
    echo"<td>0 results</td>";
}
$conn->close();

?>
            
	</article>
</section>



<footer>
<h5>copyright &copy;EZPrint Store</h5>
</footer>
</body>