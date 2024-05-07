<?php  include('server1.php'); ?>


<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
<h1>Sign Up</h1>
<form action="" method="post"> <!-- Corrected action attribute -->
    <div>
        <label>Name:</label>
        <input type="text" id="name" name="name" >
    </div>
    <div>
        <label>Email:</label>
        <input type="email" id="email" name="email" >
    </div>
    <div>
        <label>Password:</label>
        <input type="password" id="password" name="password">
    </div>
    <div>
        <label>Repeat Password:</label>
        <input type="password" id="password_con" name="password_con" >
    </div>
    <input type="submit" name="create" value="Sign Up">
</form>
</body>
</html>
