<html>
<meta charset="ISO-8859-1"> 
<head>
<link rel="stylesheet" type="text/css" href="complaintstyle.css">
<script type="text/javascript">

function validate(){

  var y= document.forms["main"]["patient_id"].value; 
    
  if(y.length!= 10||isNaN(y))  
        {  
      alert("enter  valid patient ID"); 
        document.main.patient_id.focus(); 
       return false;
       }

   var y= document.forms["main"]["name"].value; 
    
 

}
</script>
</head>
<body>

<?php
error_reporting(0);
$connect=mysqli_connect('localhost','root','','patient_detail');
 
if ($_POST)
{

$sqli="INSERT INTO data(name,login_id,age,sex)
    VALUES('".$_POST['name']."','".$_POST['login_id']."','".$_POST['age']."',
    '".$_POST['sex']."')";

if ($connect->query($sqli) == TRUE ) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sqli . "<br>" . $connect->error;

}
}

if(mysqli_connect_errno($connect))
{
        echo 'Failed to connect';
}


$query="SELECT name,login_id,age,sex FROM data";


?>

<h4><font color="purple"> <marquee behavior="scroll" direction="right">Enter the following details:</marquee></h4></font>

<form name="main"  action="register.php" method="POST">


<br><br>
Name:&nbsp
<input type="text" name="name" required><br><br>

Patient Login ID:&nbsp
<input type="text" name="login_id" required><br><br>

Age:&nbsp
<input type="text" name="age" required><br><br>

Sex:&nbsp
<input type="text" name="sex" required><br><br>



<input type="submit" value="Submit" onclick="validate();">

<br><br><br>
<A href="http://localhost/table.php">Click here to View Patient Details:</A>
</form>

</body>

</html>
