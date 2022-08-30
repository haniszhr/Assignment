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
  		margin: 10px;
 ;
  		background-color:  #123456;
  border: 1px solid  #123456;
  font-size: 30px;
  font-weight: bold;
  
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  }
  .flex-container {
    color:black;

    margin:1px;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    background-color: lightgrey;
    flex-wrap: wrap-reverse; /*change the order of the content*/
}
.flex-container > div {
    background-color: white;
    width: 95%;
    margin: 5px;
    text-align: center;
    line-height: 10px;
    font-size: 12px;
    border-style: vertical;
padding: 17px;}
th{
  padding: 5px;
}

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
            <li><a href="adminmenu.html" >MENU</a></li>
           <li> <a href="viewadminprofile.html">VIEW PROFILE</a></li>
      <li><a href="viewstaff.html" >VIEW STAFF</a></li>
        <li><a href="deletecust.html" >DELETE CUSTOMER</a></li>
        
            
		
</ul>

</nav>
<section>
	<article>
    <center><h2 style="font-size: 40px;font-family: sans-serif;">DELETE CUSTOMER</h2></center>
		 <center>
         
         <form action="/action_page.php" method="post">
 

           <br>
           <div class="flex-container">
            <div>
    <table align="center" border="6" width="90%" style="font-size: 16px;padding: 5px;">
      <tr align="center" >
        <th> CustomerID</th>
        <th> Name </th>
        <th> Email </th>
        <th> Address </th>
          <th> Phone </th>
            <th> Registration Date </th>
              <th> Total File Upload </th>
     </tr>
              
        <br>
        <tr style="text-align: center;">
        
             
         </tr>


    </table>
  </div></div>
</br></br>
	</article>
</section>



<footer>
<h5>copyright &copy;EZPrint Store</h5>
</footer>
</body>