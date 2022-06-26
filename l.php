<?php
include 'conct.php';
if (isset($_POST['submit']))
{
    
    $email=$_POST['email'];
    $password=$_POST['password']; 
    $sql="SELECT id FROM names WHERE password='$password' and email='$email'";
    $res= mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
    $active=$row['active'];
    $count=mysqli_num_rows($res);
    if($count==1){
         header('location:index.php');        
    }
    else{
    echo 'error';
    
    }
     }?>