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
  		margin: 0px;
  		margin-left: 1px;
  		background-color: rgb(103, 169, 255);
  border: 1px solid rgb(103, 169, 255);
  font-size: 30px;
  font-weight: bold;
  
  color: white;
  padding: 5px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  }
  td,table{
    text-align:center;
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

$sql= "SELECT CUSTOMER.CustID,CUSTOMER.Cust_Name,CUSTOMER.Cust_Email,CUSTOMER.Registration_Date FROM CUSTOMER WHERE CustID NOT IN(SELECT CustID FROM files) ";

$result = $conn->query($sql);

echo "<section> <article> <center><h2 style='font-size: 40px;font-family: sans-serif;'>LIST CUSTOMER</h2></center>";
echo"<center><p>Below is a list of customer that do not upload any files since registered account</p></center>";
echo "<table align='center' border='4' width='1000px'>";
echo" <tr align='center'>
<th> Customer ID</th>
<th> Customer Name </th>
<th> Email </th>
<th> Registration Date </th> 

<th colspan='2'>Action </th>
</tr>";


if($result->num_rows > 0) {
    //output data each row

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['CustID']."</td>";
        echo "<td>".$row['Cust_Name']."</td>";
        echo "<td>".$row['Cust_Email']."</td>";
        echo "<td>".$row['Registration_Date']."</td>";
       
  

        ?>

        <td align="center"><a href="deletecust2.php?id=<?php echo $row["CustID"]; ?>" class="button">Delete</a></td>

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