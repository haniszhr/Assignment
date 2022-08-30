<?php
      session_start();

      include('inc/connect.php');
 
      $username=$_SESSION['s_email'];
      $psw=$_SESSION['s_psw'];
      
$sql="SELECT StaffID FROM staff where Staff_Email='".$_SESSION['s_email']."' and Staff_Password='".$_SESSION['s_psw']."";
$result=$conn->query($sql);
if($result->num_rows>0)
{
 while($row=$result->fetch_assoc()){



      //Store the name in the session
      $_SESSION['sid'] = $row['StaffID'];
    
}
}

   else {
      echo "Error in Staff details";
   }
?>