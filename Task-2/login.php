<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username == "admin" && $password == "1234")
    {
        $_SESSION["username"] = $username;

        header("location: dashboard.php");
    }
    else
    {
        echo "Invalid Username or Password";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

<h2>Login Page</h2>

<form method="post">

    Username:
    <input type="text" name="username">
    
    <br><br>

    Password:
    <input type="password" name="password">

    <br><br>

    <input type="submit" value="Login">

</form>

</body>
</html>