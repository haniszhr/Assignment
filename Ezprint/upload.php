<?php
 include('custid.php');
 $conn=mysqli_connect('localhost','root','','ezprint');



 if (isset($_SESSION['id']))
  
    $color=$_POST['typecolor'];
    $order=$_POST['ordertype'];


 if(isset($_POST['submit'])){
   $fileName=$_FILES['myfile']['name'];
   $fileTmpName=$_FILES['myfile']['tmp_name'];
   $path="upload/".$fileName;
   $query="insert into files(File_Name,Color,Service_Type,Date,CustID) VALUES ('$fileName','$color','$order',CURDATE(),'{$_SESSION['id']}')";
   $run=mysqli_query($conn,$query);
   if($run){
move_uploaded_file($fileTmpName,$path);

   }
   else{
     echo"error".mysqli_Error($conn);
   }
   }
 ?>