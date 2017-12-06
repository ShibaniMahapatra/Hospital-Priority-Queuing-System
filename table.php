<?php
error_reporting(0);
$connect=mysqli_connect('localhost','root','','patient_detail');
 
if ($_POST)
{
$sqli="INSERT INTO data(name,login_id,age,sex)
    VALUES('".$_POST['name']."','".$_POST['login_id']."','".$_POST['age']."',
    '".$_POST['sex']."')";

if ($connect->query($sqli) == TRUE) {
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

$response =@mysqli_query($connect,$query);

if($response)

{

            echo'<table align="left" cellspacing="5" cellpadding="8";

<tr>

            <td align="left"><b>Name</b></td>

            <td align="left"><b>Patient Login ID</b></td>

            <td align="left"><b>Age</b></td>

            <td align="left"><b>Sex</b></td>
    

            </tr>';

            while($row=mysqli_fetch_array($response))

            {

                                     

                        echo'<tr>

                        <td align="left">'.$row['name'],'</td>

                        <td align="left">'.$row['login_id'].'</td>

                        <td align="left">'.$row['age'],'</td>

                        <td align="left">'.$row['sex'],'</td>


                        </tr>';

            }

echo'</table>';

}
else
            echo "couldnt issue database query<br>"; 

?>
