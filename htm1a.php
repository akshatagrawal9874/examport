<html>
<head>
<link rel="stylesheet" type="text/css" href="c4.css">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
.i{
color:yellow;
display:inline;
padding: 6px;
text-shadow: 3px 3px 4px cyan;
}
button{
background-color:#007d80;
font-family:Comic Sans MS;
}
h2{
text-align:center;
color:blue;
font-family:Comic Sans MS;
}
h3{
text-align:center;
color:purple;
font-family:Comic Sans MS;
}
.one{
background-repeat:no-repeat;
background-size:cover;
}
div{

background-color: #f9ea8f;
background-image: linear-gradient(315deg, #f9ea8f 0%, #aff1da 74%);}
#h{
 font-family:Serif;
}
</style>
<body background="https://cdn.trendhunterstatic.com/thumbs/cool-backgrounds.jpeg" class="one">
<div><h1 id="h"><b><center>Online Exam Portal</b></h1></div><hr /><hr />
<?php
$sum=0;
$str=(isset($_GET["answer"]) ? $_GET["answer"] : ' ' );
 if($str=="programming")
{
$sum+=10;
echo "<center><h2>Your answer is correct .Your score is $sum</h2></center><br>";
}
else if($str=="general purpose programming language")
{
$sum+=10;
echo "<center><h2>Your answer is correct .Your score is $sum</h2></center><br>";
}
else if($str=="stdio")
{
$sum+=10;
echo "<center><h2>Your answer is correct .Your score is $sum</h2></center><br>";
}
else{
echo "<center><h2>Your answer is wrong .Your score is $sum</h2><center><br>";
}
echo "<center><h3>Thank You :-) from Akshat, Ayush, Kratika and Bhavesh</h3></center>";
?>
<center><h2>Contact us on :<br></h2>
<!-- Add font awesome icons -->
<h1 class ="i"><a href="https://www.facebook.com/" class="fa fa-facebook-square"> </a></h1>
<h1 class ="i"><a href="https://twitter.com/?lang=en" class="fa fa-twitter-square"> </a></h1>
<h1 class ="i"><a href="https://github.com/" class="fa fa-github"> </a></h1>
<h1 class ="i"><a href="https://www.linkedin.com/in/akshat-agrawal-183a88173/" class="fa fa-linkedin-square"> </a></h1>
<h1 class ="i"><a href="https://www.google.com/" class="fa fa-google"> </a></h1>
<h1 class ="i"><a href="https://www.instagram.com/" class="fa fa-instagram-square"> </a></h1></center><br>
<center><button onclick><h1 class ="i"><a href="2.php" class="fa fa-home"> </a></h1>Go to Homepage</button></center>
<nav><center><ul><li><b>Direct jump to subject:</b></li><li><a href="c.html">C</a></li>
	<li><a href="c++.html">C++</a></li>
<li><a href="htm.html">Java</a></li></ul></center></nav>
</body>
</html>