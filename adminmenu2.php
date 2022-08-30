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
        margin: 1px;
        margin-left: 10px;
        background-color:  #123456;
  border: 1px solid  #123456;
  font-size: 30px;
  font-weight: bold;
  
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  }

#result,#sentence{
  font-size: 16px;
  font-weight: bold;
  padding: 10px;
  text-align: left;
}
  nav ul li{
    padding: 10px;
    margin-left: 30px;
    padding-right: 90px;
  }
 table, th, td,tr {
          border:1px solid black;
            font-size: 16px;
  font-weight: bold;

        }
        .number{width: 295px;  font-size: 16px;
  font-weight: bold;
  padding: 10px;}
  
  select{ width: 320px;
      font-size: 16px;
  font-weight: bold;
  padding: 10px;}
  .flex-container {
    color:black;
    padding:00px;
    margin:10px;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    background-color: whitesmoke;
    flex-wrap: wrap-reverse; /*change the order of the content*/
}

.flex-container > div {
    background-color: lightgrey;
    width: auto;
    margin: 2px;
    text-align: center;
    line-height: 10px;
    font-size: 12px;
    border-style: vertical;
padding: 3px;} 
  </style>
    
    <script type= "text/JavaScript">
function calculateFunction() {
  num2=document.getElementById("colortype").value;
 
num1= document.getElementById("quantity").value;

num3=num1*num2;

let a=num3.toFixed(2);
console.log(a);
document.getElementById("sentence").innerHTML="Total Payment";
 document.getElementById("result").innerHTML = "RM "+a;
 

}


function showbutton(){
document.getElementById("payment").style.visibility="visible";
document.getElementById("show").style.visibility="visible";

}
function changebutton(){
  document.getElementById("calculate").style.visibility="hidden";

}


</script>
</head>
<body>

 
  <header>
  
 <center>
    <img src="image/printbanner.png" alt="banner file" style="width:100%"></a>
 </center>
</header>
<nav><ul>

           <li><a href="custmenu.html" >MENU</a></li>
            <li><a href="viewcustprofile.html" >VIEW PROFILE</a></li>

      <li><a href="adddoc.html" >ADD DOCUMENT</a></li>
        <li><a href="viewstatus.html" >VIEW STATUS</a></li>
         <li><a href="paymentcal.html" >PAYMENT</a></li>            
        
</ul>

</nav>
<section>
    <article>
    <center><h2 style="font-size: 40px;font-family: sans-serif;">CALCULATION PAYMENT</h2></center>
         
         
         <form action="" method="post">
          <center>
           
      <table style="width: 30%; text-align: left;">

     
<tr><td>Number of pages</td>
<td><input type="number" name="quantity" id="quantity" class="number"></td></tr>
  
<tr>
  <td>Color Type</td>
  <td>
  <select name="colortype" id="colortype">
  <option value="0.10">B&W</option>
  <option value="0.30">COLOR</option> </select>
</td></tr> 
       <tr style="visibility: hidden;" id="show">
           <td><p id="sentence"></p></td>
           <td ><p id="result"></p></td>
       </tr>
    
     
  </table>
</center>
   <center>
      </br>
      <center>
           <input type="button" id="calculate" onClick="calculateFunction();showbutton();changebutton();" value="CALCULATE" class="button" style="visibility: visible;"/></center>

  
<a href="paymentform.html">
  <input type="button" id="payment" value="PROCEED TO PAYMENT" style="visibility: hidden;"/ class="button"></a></br></br>

</center>
    
</br>
</form>
    </article>
</section>
<footer>
<h5>copyright &copy;EZPrint Store</h5>
</footer>

</body>

