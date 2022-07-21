<?php
      session_start();

      include('inc/connect.php');
      
      $email=$_SESSION['c_email'];
      $psw=$_SESSION['c_psw'];
      
$sql="SELECT CustID FROM customer where Cust_Email='$email' and Cust_Password='$psw'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
 while($row=$result->fetch_assoc()){



      //Store the name in the session
      $_SESSION['cid'] = $row['CustID'];
    
}
}

   else {
      echo "Error in Customer details";
   }
?>