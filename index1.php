<?php
require 'header.php';
require 'db_key.php';
?>
<head>
	<title>Login Page</title>
	<style>
	.header 
	{
		padding: 20px; 
    	text-align: center;
    	background-color: cyan;
    	color: red;
	}
	.footer
	{
 		padding: 20px; 
  		text-align: center; 
  		background-color: white;
	}
button 
	{   
       background-color: #FCF7DE;   
       width: 5%;  
        color: orange;   
        padding: 10px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
    }   
 	form 
 	{   
        border: 3px solid green;   
    }   
 	input[type=text], input[type=password] 
 	{   
        width: 15%;   
        margin: 8px 0;  
        padding: 1px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 	button:hover 
 	{   
        opacity: 0.7;   
    }   
  	.cancelbtn 
  	{   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 	.container 
 	{   
        padding: 25px;   
        background-color: white;  
    }   
	</style>
</head>
<script>  
function validateform(){  
var name=document.forms["myForm"]["username"].value;  
var password=document.forms["myForm"]["password"].value; 
debugger;
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  
</script>  
<body bgcolor="white" width=10000 height=1000>
<center><div class="header">
<a href="/About.html">About Us</a>|
<a href="/register.php">Register</a>|
<a href="/index1.php">Login</a>|
<a href="/TicketBooking.html">Book Tickets</a>|
<a href="/BookingHistory.html">View Booking History</a>|
<a href="/Modify.html">Modify Booking</a>|
<a href="/Contactus.html">Contact Us</a>
</div></center>
<center><h2>Login Page</h2></center>
 	<!-----------------form-------------->
<div class = 'container'>
<div>
<div><h3>Login to your account</h3></div>
</div>
<form method = 'POST' name="myForm" action = 'backend.php' onsubmit="return validateform()">
<div class="form-group">
<label>Username : </label>
<input class= 'form-control w-25' type="text" name="username">
<label>Password :</label>
<input class= 'form-control w-25' type="password" name="password" id="password" autocomplete="off">
</div>
<button class = 'btn btn-outline-info' type="submit" name="login" value= 'login' class="submit">Login</button>
</form>
<div id="footer-box">
<p>Not a member? <a href="/register.php" class="sign-up">Sign up now</a></p>
</div>
</div>

	<div class="footer">
  		&COPY:Copyright 2020 by Keerthana Kannan
	</div>
	
</body>
</html>