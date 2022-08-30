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
  	
  		background-color:  #123456;
  border: 1px solid  #123456;
  font-size: 30px;
  font-weight: bold;
  width:100px;
  color: white;
  padding: 10px 1px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;}
  
table{
  margin-top:10px;
  margin-bottom:20px;
}
button{
  background-color: #123456;
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
    td,th{
      padding:10px;
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
    <center><h2 style="font-size: 40px;">LIST OF ORDER</h2></center>
    
     <center> 
<img src="image/view-status.png" width="8%" >
       
</center>
      

<form action="updatepage.php" method="post">
    <table align='center' border ='1' width = 70% >

    <tr><th>File ID</th><th>File Name:</th><th>Service Type</th><th>Color</th><th>Page</th><th>Date Upload</th><th colspan="2">Action</th></tr>
    

<?php 
include('inc/connect.php');
$sql="SELECT File_Name,FileID,Service_Type,Color,Date,Page from files where Status_Order='In progress' ";
$result=mysqli_query($conn,$sql);?>

	
		
				<?php 
				while($row=mysqli_fetch_array($result)){
					?>
					<tr>
						
         <td align="center"><?php echo $row['FileID'];?></td>
         <td align="center"><?php echo $row['File_Name'];?></td><td align="center"><?php echo $row['Service_Type'];?></td><td align="center"> <?php echo $row['Color'];?></td><td align="center"> <?php echo $row['Page'];?></td><td align="center"> <?php echo $row['Date'];?></td><td align="center"><a href="upload/<?php echo $row['File_Name'];?>"download class="button">Download</a></td>
         <td align="center"><a href="updatepage.php?id=<?php echo $row["FileID"]; ?>" class="button">Edit</a></td>
   
      
         
        </tr><?php }
        echo"</form></table>";
    
        ?>

        
<footer>
<h5>copyright &copy;EZPrint Store</h5>
</footer>
           
 