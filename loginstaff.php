<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZPrint</title>
    <link rel="stylesheet" type="text/css" href="layout.css">
  <style type=text/css>
.button:hover {
    border:2px solid rgb(149, 158, 168);
  background-color: rgb(217, 219, 223);
  color: black;
}
  .button{
        margin: 40px;
        margin-left: 190px;
        background-color: #123456;
  border: 2px solid #123456;
  font-size: 30px;
  font-weight: bold;
  
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  }


  </style>

	
</head>
<body class="bglogin">

 
<header>
 <center>
    <img src="image/printbanner.png" alt="banner file" style="width:100%"></a>
 </center>
</header>

<nav>
<ul>
            <li><a href="home.html">HOME</a></li>
			<li><a href="about.php">ABOUT</a></li>
		
</ul>

</nav>
<?php
session_start();
if(isset($_SESSION['s_email'])){
    $_SESSION=array();
    session_destroy();}?>
<section>
	<article>
        <center>
		<h1 style="color: white; font-size: 70px;">STAFF LOGIN</h1></center>

        <center>
         
         <form action="stafflogin2.php" method="post">
             <table style="width: 50%;text-align: left";  cellpadding="5" cellspacing="10">
            <tr>
                <td  align = "left"><b style="font-size: 25px;color:white;"">EMAIL</b></td>
                <td colspan="5" align = "left">
             <input size="50" type="email" placeholder="Enter Email" name="s_email" required style="padding: 10px;"></td>
            </tr>
            
            <tr>
            <td align = "left"><b style="font-size: 25px; color:white;">PASSWORD</b></td>
            <td  colspan="5"align = "left">
                <input size="50" type="password" placeholder="Enter Password" name="s_psw" required style="padding: 10px;"></td>
            </tr>
           
    </table>
    <p style="color:white">Don't have an account yet?<a href="Registerstaff.php" style="color:black">Click here</a></p>

</br>
 <button type="submit" class="button">LOGIN</button>
         </form>
        </center>
	</article>
</section>



<footer>
<h5>copyright &copy;EZPrint Store</h5>
</footer>
</body>