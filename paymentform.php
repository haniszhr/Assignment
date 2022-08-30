
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

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.button:hover {
    border:1px solid rgb(30, 108, 211);
  background-color: rgb(30, 108, 211);
  color: black;
}
  .button{
    background-color:#123456;
  color:white;
  font-size: 30px;
  font-weight: bold;
  
  color: white;
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
    <center><h2 style="font-size: 40px;font-family: sans-serif;">PAYMENT FORM</h2></center>
     <center>
   
   <table style="width: 40%;text-align: left";  cellpadding="0" cellspacing="5">
  

   <h3>Payment</h3>
   <img src="image/card.jfif" width="7%" height="7%"> 
   <form action="paymentupdate.php" name="paymentForm" id="paymentForm" method="post" onsubmit="return validatePaymentForm();">

<?php


include('custid.php');
$id=$_REQUEST['id'];
$sql="SELECT files.FileID,customer.CustID,customer.name_card,customer.expmonth,customer.expyear,customer.Credit_Card,customer.cvv,files.Price from files inner join customer on files.CustID=customer.CustID where files.FileID='".$id."'";
$result=$conn->query($sql);
if($result->num_rows>0){
  while($row = $result ->fetch_assoc()) {

    echo"<tr><td>
          <label style='font-size: 25px;color:black;' for='fileid' >FileID:</label>
 <input type='text' id='File_ID' name='File_ID' readonly value='".$row['FileID']."'</td></tr>";
 echo"<tr><td>
          <label style='font-size: 25px;color:black;' for='price' >Price:</label>
 <input type='text' id='Price' name='Price' readonly value='".$row['Price']."'</td></tr>";}}
 ?>
    
   <tr><td>
          <label style='font-size: 25px;color:black;' for='namecard' >Name on Card:</label>
 <input type='text' id='cardname' name='cardname' ></td></tr>
<tr><td>
 <label style='font-size: 25px;color:black;' for='ccnum1' >Credit Card Number:</label>
<input type='text' id='Credit_Card' name='Credit_Card' placeholder='1111-2222-3333-4444' ></td></tr>
<tr><td>
<label style='font-size: 25px;color:black;' for='cvvlabel' >CVV:</label>
<input type='text' id='cvv' name='cvv' placeholder='352' ></td></tr>
<tr><td>
<label style='font-size: 25px;color:black;' for='cvvlabel' >Exp Month:</label>
<input type='text' id='expmonth' name='expmonth' placeholder='September'></td></tr>

<tr><td>
<label style='font-size: 25px;color:black;' for='cvvlabel' >Exp Year:</label>
<input type='text' id='expyear' name='expyear' placeholder='2016'></td></tr>

<tr><td colspan='2'><input type='submit' name='submit' value='MAKE PAYMENT' class="button">
<input type='reset' name='reset' value='RESET' class="button"></td>
  </table>
</form>



  
    

  </article>
</section>
<script>
    function validatePaymentForm() {

      var cardname = document.forms["paymentForm"]["cardname"].value;
      var Credit_card = document.forms["paymentForm"]["Credit_Card"].value;
      var expmonth = document.forms["paymentForm"]["expmonth"].value;
      var expyear = document.forms["paymentForm"]["expyear"].value;
      var cvv = document.forms["paymentForm"]["cvv"].value;

      if (cardname == ""|| Credit_Card == ""|| expmonth == ""|| expyear == ""|| cvv == "") {
        alert("You have not filled out the form completely. Please try again");
        return false;
      }

    

      if (!/^[a-zA-Z]*$/g.test(cardname)) {
    
        document.paymentForm.cardname.focus();
        return false;
      }

      if (!/^[a-zA-Z]*$/g.test(expmonth)) {

        document.paymentForm.expmonth.focus();
        return false;
      }
      if (/\D/.test(Credit_card)) {

        document.paymentForm.Credit_card.focus();
        return false;
      }

      if (/\D/.test(expyear)) {
  
        document.paymentForm.expyear.focus();
        return false;
      }

      if (/\D/.test(cvv)) {
      
        document.paymentForm.cvv.focus();
        return false;
      }
      else{
      header("Location: paymentupdate.php");}
    } 
</script>
</body>
<footer style="margin-top:20px">
<h4>copyright &copy;EZPrint Store</h4>
</footer>

</html>