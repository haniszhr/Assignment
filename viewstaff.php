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
  		background-color: #123456;
  border: 1px solid #123456;
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
  		margin-left: 10px;
  		background-color: #123456;
  border: 1px solid #123456;
  font-size: 30px;
  font-weight: bold;
  
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  }nav{
    
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
<body>

 
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

<?php
session_start();
include('inc/connect.php');

$sql= "SELECT * FROM staff";

$result = $conn->query($sql);
echo "<section> <article> <center><h2 style='font-size: 40px;font-family: sans-serif;'>LIST OF STAFF</h2></center>";
?><center>
  <a href="addstaff.php">
     <input type="submit" class="button" value="ADD STAFF"/></a></center>
<?php
echo "<table align='center' border='4' width='1000px'>";
echo" <tr align='center'>
<th> StaffID</th>
<th> Name </th>
<th> Email </th>
<th> Phone </th> 
<th> Address </th>
<th> Position </th>
<th colspan='2'>Action </th>
</tr>";


if($result->num_rows > 0) {
    //output data each row

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['StaffID']."</td>";
        echo "<td>".$row['Staff_Name']."</td>";
        echo "<td>".$row['Staff_Email']."</td>";
  
        echo "<td>".$row['Staff_Phone']."</td>";
        echo "<td>".$row['Staff_Address']."</td>";
        echo "<td>".$row['role']."</td>";
        ?>
        
       
        <td align="center"><a class="button" href="editrole.php?id=<?php echo $row["StaffID"]; ?> ">Edit Detail</a></td>

        <?php
        echo "</tr>";
        }
       

}else {

  echo "<table align='center' border='4' width='1000px'>";
  echo" <tr align='center'>";
    echo "<td>0 results</td>";
    echo"</tr>";
}

echo "</table>";
$conn->close();
?>




	
        
           
    </table>
</br></br></br>
	</article>
</section>



<footer>
<h5>copyright &copy;EZPrint Store</h5>
</footer>
</body>