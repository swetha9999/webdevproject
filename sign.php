<?php
include 'header.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>vega</title>
        <link rel='stylesheet' href="bootstrap/css/bootstrap.min.css">
        <script src='bootstrap/js/bootstrao.min.js'></script>
        <script src='bootstrap/jquery-3.6.0.min.js'></script>
        <style>
            
            .body{
                background:#eee;
            }
            #frm{
                border:solid graytext 1px;
                width:25%;
                border-radius:2px;
                margin:120px auto;
                background-color:white;
                padding:50px;
            }
           
        </style>
    </head>
    
<body>
    <form id="frm" action='welcome.php' method='POST'>
<label for='name'>name:</label><br>
<input type='text' id='name' name='name' value='john' required="required"><br>
 <label for='email'>email:</label><br>
<input type='email' id='email' name='email' value='abc@gmail.com' required="required"><br> 
<label for='password'>password:</label><br>
<input type='password' id='password' name='password' required="required"><br>
<button type='submit'name="submit" value='submit' class="btn btn-primary btn-block">submit</button>
<p>already a user  <a href="login.php">login</a></p>
    </form>
</body>
</html>