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
  .button{
  		margin: 50px;
  		margin-left: 100px;
  		background-color: rgb(103, 130, 255);
  border: 1px solid rgb(103, 169, 255);
  font-size: 30px;
  font-weight: bold;
  
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;}
  
  input{
    width: 150px;
    padding: 10px;
background-color: #123456;
    font-family: sans-serif;
    font-size: 20px;
    font-weight: bold;
    color: white;
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
<body >

 
  <header>
  
 <center>
    <img src="image/printbanner.png" alt="banner file" style="width:100%"></a>
 </center>
</header>
<nav>
<ul>

            <li><a href="custmenu.html" >MENU</a></li>
                    <li><a href="viewcustprofile.html" >VIEW PROFILE</a></li>

            <li><a href="adddoc.html" >ADD DOCUMENT</a></li>
        <li><a href="viewstatus.html" >VIEW STATUS</a></li>
         <li><a href="custpay1.html" >PAYMENT</a></li>

      
		
</ul>

</nav>
<section>
	   <article style="background-color: white;">
    <center><h2 style="font-size: 40px;">ORDER STATUS</h2></center>
    <form>
     <center> 
<img src="image/view-status.png" width="8%" >
       <form action="">
</center>
         <table style="width: 50%;text-align: left;margin-left: 530px;margin-top: 60px;"  cellpadding="5" cellspacing="10">
           <tr>
        <td  align = "left"><b style="font-size: 25px;color:black;">FILE ID</b></td>
                <td colspan="5" align = "left">
             <input style="margin-right:400px"size="15" type="text" id="file" name="file" required style="padding: 10px;" disabled value="1"></td>
            </tr>


           <tr>
        <td  align = "left"><b style="font-size: 25px;color:black;">STATUS</b></td>
                <td colspan="5" align = "left">
             <input style="margin-right:400px"size="15" type="text" id="status" name="status" required style="padding: 10px;" value="READY TO PICKUP" disabled></td>
            </tr>

</table>
</form> 
	</article>
</section>


</br></br></br></br>
</br></br>
</br></br>

<footer>
<h5>copyright &copy;EZPrint Store</h5>
</footer>
</body>