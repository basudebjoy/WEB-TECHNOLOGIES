<?php

include("db.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users(name, email, password)
            VALUES('$name', '$email', '$password')";

    mysqli_query($conn, $sql);

    echo "Registration Successful";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>Registration Page</h2>

<form method="post">

    Name:
    <input type="text" name="name">

    <br><br>

    Email:
    <input type="email" name="email">

    <br><br>

    Password:
    <input type="password" name="password">

    <br><br>

    <input type="submit" value="Register">

</form>

<br>

<a href="login.php">Go to Login</a>

</body>
</html>