<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZPrint</title>
    <link rel="stylesheet" type="text/css" href="layout.css">
  <style type=text/css>
   
.number{width: 295px;padding: 10px;}
  
  select{ width: 320px;
    padding: 10px;}

 .button:hover {
    border:1px solid rgb(30, 108, 211);
  background-color: rgb(30, 108, 211);
  color: black;
}
  .button{
  		margin: 1px;
  		margin-left: 10px;
  		background-color:  #123456;
  border: 1px solid  #123456;
  font-size: 30px;
  font-weight: bold;
  
  color: white;
  padding: 5px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  }

  </style>
	
    <script type= "text/JavaScript">
function calculateFunction() {
  num2=document.getElementById("colortype").value;
 
num1= document.getElementById("quantity").value;
  document.getElementById("result").innerHTML = "Total Payment=RM "+num1*num2+"<p>Proceed Payment by Clicking Button</p>"  ;
}
</script>
</head>
<body>

 
  <header>
  
 <center>
    <img src="printbanner.png" alt="banner file" style="width:100%"></a>
 </center>
</header>
<nav><ul>

            <li><a href="staffmenu.html" >MENU</a></li>
      <li><a href="viewstaffprofile.html" >VIEW PROFILE</a></li>
        <li><a href="vieworderstaff.html" >VIEW ORDER</a></li>
        <li><a href="searchfile.html" >SEARCH FILE</a></li>
            
		
</ul>

</nav>
<section>
	<article>
    <center><h2 style="font-size: 40px;font-family: sans-serif;">CALCULATION PAYMENT</h2></center>
		 <center>
         
         <form action="/action_page.php" method="post">
      <table style="width: 40%;text-align: left";  cellpadding="0" cellspacing="5">
<tr><td>
      
          <label style="font-size: 25px;color:black;" for="number" id="number">NUMBER OF PAGES:</label>
<input type="number" name="quantity" id="quantity" class="number"></td><br>
  </select>
<tr><td>
  <label  style="font-size: 25px;color:black;"  for="colortype">COLOR TYPE:</label>
  <select style="margin-left: 68px" name="colortype" id="colortype">
  <option value="0.10">B&W</option>
  <option value="0.30">COLOR</option> </select>
  <br><br>

        
    </table>
       
      <input type="button" onClick="calculateFunction()" value="CALCULATE"/>

<p id="result"></p>



	</article>
</section>

</body>

