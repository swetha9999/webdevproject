<?php
include 'conct.php';
if (isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password']; 
    $sql="INSERT INTO names(name,email,password)VALUES('$name','$email','$password')";
    if(mysqli_query($conn, $sql)){
        echo 'you have logged in';
    }else{
    echo 'error:'.$sql.':-'.mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>  