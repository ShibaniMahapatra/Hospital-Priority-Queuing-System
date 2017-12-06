<!DOCTYPE html>
<html>
<head>

<style>

a,h4 {


font-family: "Verdana";
margin: 150px 400px 150px 300px;
text-align: center;
color: white;
width: 320px;
    padding: 10px;
    
     
   
}
html { 
  background: url(blue.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
form  {
border: 6px solid white;
  background-color: #E0EEEE;
  width: 390px;
  margin-bottom: 0;
  color: #0276FD;
  
  text-shadow: 0 1px 0 #133d3e;
  
  
  
  cursor: pointer;
}
input[type=text] {
    padding:5px; 
    border:2px solid #ccc; 
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

input[type=text]:focus {
    border-color:#8DEEEE;
}

input[type=submit] {
    padding:5px 15px; 
    background:#0276FD;
    color: white; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
</style>
</head>
<head>
<?php
error_reporting(0);
$con=mysql_connect('localhost','root','') or die('error'.mysql_error);
?>
</head>

 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<img src="hosp.jpg" image-align="center" height="300" width="700"> 
<font color="white"><b> <marquee behavior="scroll" direction="right">Welcome!</marquee></b></font>


<A href="http://localhost/patient.php">Click here to Login:</A>

<br><br><br>
<A href="http://localhost/register.php">Click here to Register:</A>

<br><br><br>
<A href="http://localhost/table.php">Click here to View Patient Details:</A>
</body>
</html>
