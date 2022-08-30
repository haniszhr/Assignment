
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZPrint</title>
    <link rel="stylesheet" type="text/css" href="layout.css">
  <style type=text/css>

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}
footer{
    margin-top:30px;
}
.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
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


/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
  </style>
  
 </head>
<body>

 
  <header>
  
 <center>
    <img src="image/printbanner.png" alt="banner file" style="width:100%"></a>
 </center>
</header>
<nav><ul>

            
<li><a href="custmenu.php" >MENU</a></li>
                    <li><a href="viewcustprofile.php" >VIEW PROFILE</a></li>

      <li><a href="adddoc.php" >ADD DOCUMENT</a></li>
        <li><a href="viewstatus.php" >VIEW STATUS</a></li>
         <li><a href="custpay1.php" >PAYMENT</a></li>
            
    
</ul>

</nav>
<section>
  <article>
    <center><h2 style="font-size: 40px;font-family: sans-serif;">PAYMENT </h2></center>
     <center>
   
   <table style="width: 40%;text-align: center;border:2px solid black";  cellpadding="0" cellspacing="5">
 
<?php 
include('custid.php');
include('inc/connect.php');
 
if (isset($_SESSION['cid']))
$id=$_POST['File_ID'];
$cardname=$_POST['cardname'];
$Creditcard=$_POST['Credit_Card'];
$cvv=$_POST['cvv'];
$expmonth=$_POST['expmonth'];
$expyear=$_POST['expyear'];


  


$sql="UPDATE customer inner join files on customer.CustID=files.CustID set files.Payment_Status='Paid',customer.name_card='".$cardname."',customer.Credit_Card='".$Creditcard."',customer.cvv='".$cvv."',customer.expmonth='".$expmonth."',customer.expyear='".$expyear."' where files.FileID='".$id."' AND files.CustID='{$_SESSION['cid']}'";

$result=$conn->query($sql);
if($conn->query($sql)===TRUE)
{
   echo"<tr ><td text-align:'center' style='font-size:30px; border:0px'>You have successfully paid the bill.Thank You!</td></tr><p></p>";
 

    }
  

else{
    echo"<tr><td>" .$sql."<br>".$conn->error;
    echo"</td></tr>";
}

$conn->close();
 ?>
 </table>
 </article></section>
</body>
<footer>
<h4>copyright &copy;EZPrint Store</h4>
</footer>

</html>