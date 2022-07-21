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
      background-color:rgb(64, 85, 97);
  color:white;
    
  border: 1px solid rgb(103, 169, 255);
  font-size: 30px;
  font-weight: bold;

  padding: 5px 32px;
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
th{
  background-color:rgb(64, 85, 97);
  color:white;
  padding: 8px;
}
input[type=text]{
    border:none;
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
   
<?php 


if (!empty($_POST)) {
$search_value=$_POST["search"];
$con=new mysqli("localhost","root","","ezprint");
if($con->connect_error){
    echo 'Connection Failed: '.$con->connect_error;
    }else{
        echo "<section> <article> <center><h2 style='font-size: 40px;font-family: sans-serif;'>List Of Files Uploaded By $search_value</h2></center>";

echo "<table align='center' border='4' width='1000px'>";
echo" <tr align='center'>
<th> FileID</th>
<th>File Name </th>
<th>Payment Status </th>
<th>Status Order </th>
<th>Date Upload </th>
<th>Total Price </th>

</tr>";
        $sql="select files.FileID,files.File_Name,files.Payment_Status,files.Status_Order,files.Date,files.Price from customer inner join files on files.CustID=customer.CustID where Cust_Name like '%$search_value%'";

        $res=$con->query($sql);

        if($res->num_rows > 0) {
        while($row=$res->fetch_assoc()){
            
            echo"<tr>";
            echo "<td><input type='text' name='FileID' readonly value='".$row['FileID']."'</td>";
            echo "<td><input type='text' name='File_Name' readonly value='".$row['File_Name']."'</td>";

       
            echo "<td><input type='text' name='Payment_Status' readonly value='".$row['Payment_Status']."'</td>";
            echo "<td><input type='text' name='Status_Order' readonly value='".$row['Status_Order']."'</td>";
            echo "<td><input type='text' name='Date' readonly value='".$row['Date']."'</td>";
            echo "<td><input type='text' name='Price' readonly value='".$row['Price']."'</td>";
            
            
            ?>
                          <?php }
}       
        else{
            echo"<tr>";
            echo "<center><td colspan='5'>No result found!</td></center>";
        }
        }}
?>