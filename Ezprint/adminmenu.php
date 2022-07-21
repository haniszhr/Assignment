
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZPrint</title>
    <link rel="stylesheet" type="text/css" href="layout.css">
<style type="text/css">
.flex-container {
    color:black;
    padding:00px;
    margin:10px;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    background-color: lightgrey;
    flex-wrap: wrap-reverse; /*change the order of the content*/
}

.flex-container > div {
    background-color: white;
    width: auto;
    margin: 7px;
    text-align: center;
    line-height: 10px;
    font-size: 12px;
    border-style: vertical;
padding: 70px;}    

.img{

    width: 50%;
    height: 60%;
    display: flex;

    flex-wrap:nowrap;
    //adjust the proportion of the image as the original image
}

@media only screen and (max-width:500px) {
        /*for phone*/
        header, nav, section, article, footer {
            
            width: 100%; }
    
    .image {
        width: 100%; }}
        .fsize{
    font-size: 20px;
    font-weight: bold;
    
}
.button:hover {
    border:1px solid rgb(30, 108, 211);
  background-color: rgb(30, 108, 211);
  color: black;
}
  .button{
 
      background-color: rgb(103, 169, 255);
  border: 1px solid rgb(103, 169, 255);
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

<body>
<header>
    
    <img src="image/printbanner.png" alt="EZprint banner" style="width: 100%;">
</header>
<nav>
<ul>
            <li><a href="home.html" >HOME</a></li>
      <li><a href="logoutstaff.php" >LOGOUT</a></li>
            
    
</ul>

</nav>
<section>
    <center>
   <h2 style="font-size:40px;">WELCOME TO ADMIN HOMEPAGE</h2></center>
   <article class="contents">
   <div class="flex-container">
    <div> <center><img src="image/orangadmin2.png" class="img"></center></br></br><a href="viewadminprofile.php"><input type="button" value="VIEW PROFILE" class="button"></a></div>
        <div> <center><img src="image/orang2admin.png" class="img"></center></br></br><a href="viewstaff.php"><input type="button" value="VIEW STAFF" class="button"></a></div>
            <div> <center><img src="image/trashadmin.png" class="img"></center></br></br><a href="deletecust.php"><input type="button" value="DELETE CUSTOMER" class="button"></a></div>
    </div>

             </article>
</section>




<footer>
<h5>copyright &copy;EZPrint Store</h5>
</footer>

    </body>
</html>