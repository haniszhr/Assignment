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
  		margin: 5px;
  		margin-left: 0px;
  		background-color: #123456;
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
th{
  padding: 5px;
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
<ul>
            <li><a href="staffmenu.php" >MENU</a></li>
			<li><a href="viewstaffprofile.php" >VIEW PROFILE</a></li>
        <li><a href="vieworderstaff.php" >VIEW ORDER</a></li>
        <li><a href="searchfile.php" >SEARCH FILE</a></li>
            
		
</ul>

</nav>
<section>
	<article>
    <center><h2 style="font-size: 40px;font-family: sans-serif;">VIEW ORDER</h2></center>
		 <center>
         
         <form action="/action_page.php" method="post">
          <div class="flex-container">
          <div> 
    <table align="center" border="1" width="1200px" cellpadding="0" cellspacing="0" >
    <tr align="center">
        <th> Customer Name</th>
        <th> File Name </th>
        <th> Service Type</th>
        <th> Status Order</th>
        <th> Payment Status</th>
        <th> Color</th>
        <th> Date Upload </th>
        <th> Action</th>
    <th colspan="2"></th>
     
      </tr>
<?php 

$conn=mysqli_connect('localhost','root','','ezprint');

$query="SELECT customer.Cust_Name,files.File_Name,files.Service_Type,files.Status_Order,files.Payment_Status,files.Color,files.Date FROM files INNER JOIN customer ON files.CustID=customer.CustID";
$run2=mysqli_query($conn,$query);

while($rows = mysqli_fetch_assoc($run2)) {?>
 
<?php 
   echo"   <tr align='center'>
        <td>".$row['Cust_Name']."</td>";
      echo"  <td>" .$row['File_Name']."</td>";
      echo"  <td>" .$row['Service_Type']."</td>";
        echo"<td>" .$row['Status_Order']."</td>";
     echo"   <td>" .$row['Payment_Status']."</td>";
      echo"  <td>" .$row['Color'].  "</td>";
    echo"    <td>".$row['Date']."</td>";?>
    <td colspan="2"><a href="download.php?file=<?php echo $rows['File_Name'] ?>">DOWNLOAD</a></td>
     <?php  } ?>
      </tr>

         
    </table></div> 
        </div> 
  </form>
</br></br>
	</article>
</section>



<footer>
<h5>copyright &copy;EZPrint Store</h5>
</footer>
</body>