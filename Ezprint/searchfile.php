<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZPrint</title>
    <link rel="stylesheet" type="text/css" href="layout.css">
  <style type=text/css>
 
td,th{
  colspan="9";
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
      background-color: white;
  border: 1px solid rgb(103, 169, 255);
  font-size: 30px;
  font-weight: bold;
  
  color:rgb(64, 85, 97);
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
table,th,td{
  padding: 8px;
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
table,th,td{
  background-color:rgb(64, 85, 97);
  color:white;
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

           <form action="updatestatus.php" method="post">
<center>
  <div class="flex-container"><div>
    <table align="center" border="4" width="1200px" cellpadding="0" cellspacing="0" style="font-size: 16px;" >
      <p style="font-size:20px">Below is a details for customer that do not make any payment or the files haven't being pickup,delivered or not completed yet.</p>
      <tr align="center">
        <th> File ID</th>
        <th> File Name</th>
        <th> Customer Name </th>
        <th> Status Payment</th>
        <th> Service Type</th>
        <th>Status Order</th>
        <th>Update Status</th>
     
      </tr>
      <?php 
      session_start();
      include('inc/connect.php');
    
      $sql= "SELECT files.FileID,files.File_Name,customer.Cust_Name,files.Payment_Status,files.Status_Order,files.Service_Type FROM files inner join customer on files.CustID=customer.CustID where  not( files.Status_Order='Completed' AND files.Payment_Status='Paid' ) ";

$result = $conn->query($sql);
if($result->num_rows > 0) {
    //output data each row

    while($row = $result->fetch_assoc()) {
     echo" <tr align='center'>";
      echo"<td>".$row['FileID']."</td>";
        echo"<td>".$row['File_Name']."</td>";
       echo"<td>".$row['Cust_Name']."</td>";
       echo" <td>".$row['Payment_Status']."</td>";
       echo" <td>".$row['Service_Type']."</td>";
       echo" <td>".$row['Status_Order']."</td>";
       ?>
<td align="center"><a href="updatestatus.php?id=<?php echo $row["FileID"]; ?>" class="button">Update</a></td>
       <?php
     echo" </tr>";}}else{
       echo"<td>0 result found!</td>";

      }?>
    </table></div></div>
 </center>
</form>
	</article>
</section>



<footer>
<h5>copyright &copy;EZPrint Store</h5>
</footer>
</body>