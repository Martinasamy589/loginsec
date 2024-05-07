<?php include('logins.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
<h1>login</h1>
<form action="" method="post">
    <div>
        <label>name:</label>
        <input type="text" id="name" name="name" >
    </div>
    <div>
        <label>Password:</label>
        <input type="password" id="password" name="password" >
    </div>
    
    <input type="submit" name="login" value="login">
    <p> not yet a member ?<a href="index.php">sign up</a></p>
</form>
</body>
</html>