<?php 
session_start();
if(!isset($_SESSION['email']))
{
    $_SESSION['email']=$_POST['email'];
    $_SESSION['psw']=$_POST['psw'];
    $name=$_SESSION['email'];
}
include('inc/connect.php');
$sql="SELECT * FROM admin WHERE Admin_Email='".$_SESSION['email']."' AND Admin_Password='".$_SESSION['psw']."'";
$result=$conn->query($sql);

if($result->num_rows==0){
    echo "<script>alert('login failed')</script>";
    session_unset();
    echo"<meta http-equiv=\"refresh\"content=\"3;URL=home.html\">";
}
else{
    include("adminmenu.php");
}
$conn->close();
?>

