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
  		margin: 4px;
  		
  		background-color: rgb(103, 169, 255);
  border: 1px solid rgb(103, 169, 255);
  font-size: 30px;
  font-weight: bold;
  
  color: white;
  padding: 20px 40px;
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
    width: 87%;
    margin: 5px;
    text-align: center;
    line-height: 10px;
    font-size: 12px;
    border-style: vertical;
padding: 17px;}

input[type="text"]{
  width: 270px;
}

table,th,td,tr{
  border: 1px solid black;
  font-size: 16px;
  padding: 6px;
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
            <li><a href="staffmenu.html" >MENU</a></li>
      <li><a href="viewstaffprofile.html" >VIEW PROFILE</a></li>
        <li><a href="vieworderstaff.html" >VIEW ORDER</a></li>
        <li><a href="searchfile.html" >SEARCH FILE</a></li>
            
    
</ul>

</nav>
<section>
	<article>
    <center><h2 style="font-size: 40px;font-family: sans-serif;">STATUS ORDER</h2></center>
		 <center>
         
         <form action="updatestatusorder.html" method="post">
          <div class="flex-container"><div>
            <center>
      <table style="width: 40%;text-align: left";  cellpadding="0" cellspacing="5">

        <tr>
          <th colspan="2">Click button on status which you wish to update</th>
        </tr>
          <tr>
        <td><b>FILE ID:</b></td>
        <td><input type="text" name="fileID" value="File ID" required disabled></td>
        </tr>
        <tr>
        <td><b>FILE NAME:</b></td>
        <td><input type="text" name="filename" value="File Name" required disabled></td>
        </tr>
        <tr>
        <td><b>CUSTOMER NAME:</b></td>
        <td><input type="text" name="custname" value="custname" required disabled></td>
        </tr>
        <tr>
        <td><b>DATE UPLOAD:</b></td>
        <td><input type="text" name="date" value="date" required disabled></td>
        </tr>
         <tr>
        <td><b>CUSTOMER ADDRESS:</b></td>
        <td><input type="text" name="address" value="address" required disabled></td>
        </tr>
        <tr>
        <td><b>STATUS ORDER:</b></td>
        <td><input type="text" name="statusordered" value="Self-Pickup" required ></td>
        </tr>
      <tr>
        <td><b>STATUS PAYMENT:</b></td>
        <td><input type="text" name="statusordered" value="Unpaid" required></td>
        </tr>
      

        
    </table></center></div></div>
     </br>
       <input type="submit" class="button" value="UPDATE"></a>

    </form></br></br></center>
	</article>
</section>

</body>


<footer>
<h5>copyright &copy;EZPrint Store</h5>
</footer>

