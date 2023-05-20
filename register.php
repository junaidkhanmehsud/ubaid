<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
<form method="post">

<table>

<tr>
<td>Name</td>
<td><input type="text" name="txtname" placeholder="Enter Name Here" required ></td>
</tr>


<tr>
<td>Password</td>
<td><input type="text" name="txtpass" placeholder="Enter Password Here" required ></td>
</tr>


<tr>
<td><input type="submit" name="btnreg" value="Register User" ></td>
<td><a href="login.php">Click Here For Login</a></td>
</tr>

</table>





</form>

<?php

if(isset($_POST['btnreg']))
{
    $con = mysqli_connect("localhost","root","","abc");


    $name = $_POST['txtname'];
    $pass = $_POST['txtpass'];

    $qu=mysqli_query($con,"insert into users values('','$name','$pass')");
    if($qu)
    {

        echo'<script>alert("Register Users");</script>';

    }
    else{

        echo'<script>alert("Register Not Users");</script>';
    }

}

?>

</body>
</html>