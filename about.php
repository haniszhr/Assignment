<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZPrint</title>
    <link rel="stylesheet" type="text/css" href="layout.css">
  <style type=text/css>
.flex-container {
    color:black;
    padding:0px;
    margin:50px;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    background-color: white;
    flex-wrap: wrap-reverse; /*change the order of the content*/
}

.flex-container > div {
    background-color: white;
 

    text-align: center;
    line-height: 10px;
    font-size: 12px;
    border-style: vertical;
padding: 10px;}    


.img{

    width: 50%;
    height: 60%;
    display: flex;

    flex-wrap:nowrap;
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
  p{font-size:20px;}
section{
  background-color:lightgrey;
}article{
  background-color:lightgrey;
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
            <li><a href="home.html">HOME</a></li>
			<li><a href="about.php">ABOUT</a></li>
		
</ul>

</nav>
<section>
    <center></br>
   <h2 style="font-size:40px;">ABOUT US</h2></center>
   <article style="background-color:lightgrey">
    <center>

    <div class="flex-container">
  <div>  <p>
  EZ Print Store is an all-time open print shop, that provides the best printing and photography services. </p>
<p>All services comes with loves and honesty from our hearts to our beloved customer. Honesty is the best policy!  </p>
</div></div></article> <footer>
<h5>copyright &copy;EZPrint Store</h5>
</footer>
  </section>

 
</body>
