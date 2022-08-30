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
 
background-color: #123456;
 
    color: white;
}
  a.button{
  	
  		background-color: rgb(103, 130, 255);
  border: 1px solid rgb(103, 169, 255);
  font-size: 30px;
  font-weight: bold;
  
  color: white;
  padding: 1px 1px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  }
  
  input{
    width: 300px;
    padding: 10px;
background-color: #123456;
    font-family: sans-serif;
    font-size: 20px;
    font-weight: bold;
    color: white;
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
table{
  margin-top:20px;
  margin-bottom:20px;
}
input [type="radio"]{

  font-size:25px;
}
tr,td,th{
  margin:10px;
  width:300px;
}
  </style>
	
</head>
<body ><header>
  <center>
    <img src="image/printbanner.png" alt="banner file" style="width:100%"></a>
 </center>
</header>
<nav>
<ul>
<li><a href="staffmenu.php" >MENU</a></li>
<li><a href="viewstaffprofile.php" >VIEW PROFILE</a></li>
<li><a href="download.php" >VIEW ORDER</a></li>
			<li><a href="updatepaymentstaff.php" >CALCULATION</a></li>
        <li><a href="searchfile.php" >UPDATE ORDER</a></li>
        <li><a href="searchcust.php" >SEARCH CUSTOMER</a></li>	
</ul>

</nav><section>
	   <article style="background-color: white;">
  
      

<?php session_start();

include('inc/connect.php');

$id=$_REQUEST['id'];

$sql = "SELECT files.FileID,files.File_Name,files.Payment_Status,files.Status_Order,customer.Cust_Name,files.Price FROM files inner join customer on customer.CustID=files.CustID where files.FileID='".$id."'";
$result=$conn->query($sql);
echo"<center><h2 style='font-size: 40px;'>UPDATE STATUS FOR FILE ID: $id</h2></center>";
    
echo"<center>";
echo"<img src='image/add-document.png' width='8%' >";
  
echo"</center>";
if($result->num_rows>0){
while($row = $result ->fetch_assoc()) {

    echo "<form method ='post' action='updatestatusfinal.php'>";
    echo "<table align='center' border ='1' width = 50% >";
    echo "<tr><th>Customer Name: </th><td><input type='text' name='custname' readonly value='".$row['Cust_Name']."'</td></tr>";
   
    echo "<tr><th>ID: </th><td><input type='text' name='uid' readonly value='".$row['FileID']."'</td></tr>";
   
    echo "<tr><th>File Name: </th><td><input type='text' name='File_Name' readonly value='".$row['File_Name']."'</td></tr>";
    echo "<tr><th>Total Price: </th><td><input type='text' name='Price' readonly value='".$row['Price']."'</td></tr>";
    if($row['Payment_Status'] == "Unpaid"){
        echo "<tr><th>Payment Status: </th><td><input type='radio' name='Payment_Status' value='Unpaid' checked>Unpaid
        <input type='radio' name='Payment_Status' value='Paid'>Paid</td></tr>";}
        else{
            echo "<tr><th>Payment Status: </th><td><input type='radio' name='Payment_Status' value='Unpaid'>Unpaid
            <input type='radio' name='Payment_Status' value='Paid' checked>Paid</td></tr>";}
        
        if($row['Status_Order'] == "In progress"){
            echo "<tr><th>Status Order: </th><td><input type='radio' name='Status_Order' value='In progress' checked>In progress
            <input type='radio' name='Status_Order' value='Ready to pickup'>Ready to pickup
         <input type='radio' name='Status_Order' value='On delivery'>On delivery
            <input type='radio' name='Status_Order' value='Completed'>Completed</td></tr>";}
           else if($row['Status_Order'] == "Ready to pickup"){
                echo "<tr><th>Status Order: </th><td><input type='radio' name='Status_Order' value='In progress'>In progress
                 <input type='radio' name='Status_Order' value='Ready to pickup' checked>Ready to pickup
                <input type='radio' name='Status_Order' value='On delivery'>On delivery
               <input type='radio' name='Status_Order' value='Completed'>Completed</td></tr>";}

                else if($row['Status_Order'] == "On delivery"){
                    echo "<tr><th>Status Order: </th><td><input type='radio' name='Status_Order' value='In progress'>In progress
                 <input type='radio' name='Status_Order' value='Ready to pickup' >Ready to pickup
                 <input type='radio' name='Status_Order' value='On delivery' checked>On delivery
                    <input type='radio' name='Status_Order' value='Completed'>Completed</td></tr>";}

                
    echo"</br><center><input type='submit' align:'center' class='button' name='submit' value='UPDATE'></center>";
                } 


            }
else{
    echo"<tr><td>result 0</td></tr>";
}


echo "</table></form>";
$conn->close();

 ?>
 </body><footer style="margin-top:10px">
<h4>copyright &copy;EZPrint Store</h4>
</footer>
