<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>

</head>
<body>
    <h1 align="center">Login Users</h1>

    
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
<td><input type="submit" name="btnlog" value="Login User" ></td>
<td><a href="register.php">Click Here For Register</a></td>
</tr>

</table>





</form>

<?php

if(isset($_POST['btnlog']))
{
    $con = mysqli_connect("localhost","root","","abc");


    $name = $_POST['txtname'];
    $pass = $_POST['txtpass'];

    $qu=mysqli_query($con,"select * from users where name='$name' and pass='$pass'");
    $chk= mysqli_num_rows($qu);
    $row = mysqli_fetch_array($qu);
    if($row>0)
    {

        echo'<script>alert("Login Done");</script>';

        header("location:welcome.php");

    }
    else{

        echo'<script>alert("Login Not Done");</script>';
    }

}

?>

</body>
</html>