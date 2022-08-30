<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZPrint</title>
    <link rel="stylesheet" type="text/css" href="layout.css">
  <style type=text/css>
   
  select{ 
margin: 5px;
    width: 320px;
    padding: 10pX;}


 .button:hover {
    border:1px solid rgb(30, 108, 211);
  background-color: rgb(30, 108, 211);
  color: black;
}
  .button{
  		margin: 1px;
  		margin-left: 10px;
      background-color:#123456;
  color:white;
;
  font-size: 30px;
  font-weight: bold;
  padding: 7px 32px;
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
<body>

 
  <header>
  
 <center>
    <img src="image/printbanner.png" alt="banner file" style="width:100%"></a>
 </center>
</header>
<nav>
<ul>
            <li><a href="custmenu.php" >MENU</a></li>
                    <li><a href="viewcustprofile.php" >VIEW PROFILE</a></li>

			<li><a href="adddoc.php" >ADD DOCUMENT</a></li>
        <li><a href="viewstatus.php" >VIEW STATUS</a></li>
         <li><a href="custpay1.php" >PAYMENT</a></li>
            
		
</ul>

</nav>
<?php
include('custid.php');
  $conn=mysqli_connect('localhost','root','','ezprint');


 
  if (isset($_SESSION['cid']))
     


  if(isset($_POST['save'])){
   
  $color=$_POST['typecolor'];
  $order=$_POST['ordertype'];

   $fileName=$_FILES['myfile']['name'];
   $fileTmpName=$_FILES['myfile']['tmp_name'];
   $path="upload/".$fileName;
   $query="insert into files(File_Name,Color,Service_Type,Date,CustID) VALUES ('$fileName','$color','$order',CURDATE(),'{$_SESSION['cid']}')";
   $run=mysqli_query($conn,$query);
    if($run){
move_uploaded_file($fileTmpName,$path);
echo"<script>alert('Successfully uploaded the file!Thank you for using our services')</script>";
    }
    else{
      echo"error".mysqli_Error($conn);
    }
    }
  ?>
<section>
	<article>
    <center><h2 style="font-size: 40px;font-family: sans-serif;">ADD DOCUMENT</h2></center>
		 <center>
         
         <form action="adddoc.php" method="post" enctype="multipart/form-data">
      </br></br><table style="width: 40%;text-align: left";  cellpadding="0" cellspacing="5">

    
          <label style="font-size: 25px;color:black;" for="colortype">COLOR TYPE:</label>
  <select name="typecolor" id="typecolor" >
    <option value="bw">Black&White</option>
    <option value="color">Color</option>
   
  </select>
  <br><br>
  <label  style="font-size: 25px;color:black;"  for="ordertype">ORDER TYPE:</label>
  <select name="ordertype" id="ordertype">
  <option value="pickup">Self-Pickup</option>
  <option value="delivery">Delivery</option> </select>
  <br><br>

        
    </table>
       <input type="file" id="myfile" name="myfile" >
        <input type="submit" name="save" class="button">
</form>
	</article>
  
 
</section></center></br></br></br></br></br></br>
<footer>
<h5>copyright &copy;EZPrint Store</h5>
</footer>
</body>

