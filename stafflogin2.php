<?php 
session_start();
if(!isset($_SESSION['s_email']))
{
    $_SESSION['s_email']=$_POST['s_email'];
    $_SESSION['s_psw']=$_POST['s_psw'];
    $username=$_SESSION['s_email'];
  

}
include('inc/connect.php');
$sql="SELECT * FROM staff WHERE Staff_Email='".$_SESSION['s_email']."' AND Staff_Password='".$_SESSION['s_psw']."'";
$result=$conn->query($sql);


if($result->num_rows==0){
    echo "<script>alert('login failed')</script>";
    session_unset();
    echo"<meta http-equiv=\"refresh\"content=\"0;URL=home.html\">";
}
else{
    while($row=$result->fetch_assoc()){
switch($row['role']){
    case 'admin':   header('location:adminmenu.php');exit();
    case 'Staff':   header('location:staffmenu.php');
    default:echo"Wrong Password or email";

}
    }
}
$conn->close();
?>

