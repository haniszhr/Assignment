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
  		background-color:#123456;
  border: 1px solid #123456;
  font-size: 30px;
  font-weight: bold;
  width:200px;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  }
  .button{
  		margin: 10px;
  		margin-left: 10px;
 
  border: 1px solid  #123456;
  font-size: 30px;
  font-weight: bold;
  background-color: #123456;
  color:white;
    
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  }
  input{
    border:0px;
    padding:10px;
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

<?php
session_start();
include('inc/connect.php');

$sql= "SELECT customer.Cust_Name,files.FileID,files.File_Name,files.Payment_Status,files.Page,files.Date,files.Color,files.Price FROM files inner join customer where customer.CustID=files.CustID and files.Page>0";

$result = $conn->query($sql);
echo "<section> <article> <center><h2 style='font-size: 40px;font-family: sans-serif;'>LIST OF ORDER</h2></center>";
?><center>

<?php
 echo "<form method ='post' action='updatepaymentstafffinal.php'>";
echo "<table align='center' border='4' width='1000px'>";
echo" <tr align='center'>
<th> Cust Name</th>
<th> File Name </th>
<th>Status Payment </th>
<th> Total Pages/Document </th> 
<th> Date Upload </th> 

<th colspan='2'>Action </th>
</tr>";


if($result->num_rows > 0) {
    //output data each row

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td><input type='text' name='Cust_Name' value='".$row['Cust_Name']."'</td>";
        echo "<td><input type='text' name='File_Name' value='".$row['File_Name']."'</td>";
        echo "<td><input type='text' name='Payment_Status' value='".$row['Payment_Status']."'</td>";
        echo "<td><input type='text' name='Page' value='".$row['Page']."'</td>";
        echo "<td><input type='text' name='Date' value='".$row['Date']."'</td>";
     
      
        ?>
         <td align="center"><a href="updatepaymentstafffinal.php?id=<?php echo $row["FileID"]; ?> " class="button">UPDATE PAYMENT STATUS</a></td>

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