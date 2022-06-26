<?php
include 'conct.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>vega</title>
        <link rel='stylesheet' href="bootstrap/css/bootstrap.min.css">
        <script src='bootstrap/js/bootstrao.min.js'></script>
        <script src='bootstrap/jquery-3.6.0.min.js'></script>
        <style>
          
           
        </style>
    </head>
    <body>
         <form class='container' action='l.php' method='POST'>
 <label for='email'>email:</label><br>
<input type='text' id='email' name='email' value='abc@gmail.com' required="required"><br> 
<label for='password'>password:</label><br>
<input type='password' id='password' name='password' required="required"><br>
<button type='submit'name="submit" value='submit'>submit</button>
</form>
    </body>
</html>