<?php
$servername='localhost';
$username='root';
$password='';
$dbname='pro';
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die('could not connect mysql server:'.mysql_error());
}
else{
    echo "connected successfull";
}
?>