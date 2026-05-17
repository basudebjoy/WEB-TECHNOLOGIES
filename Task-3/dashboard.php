<?php

session_start();

if(!isset($_SESSION["username"]))
{
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Dashboard</h2>

<?php

echo "Welcome " . $_SESSION["username"];

?>

<br><br>

<?php

if(isset($_COOKIE["last_login"]))
{
    echo "Last Login Time: " . $_COOKIE["last_login"];
}

?>

<br><br>

<a href="logout.php">Logout</a>

</body>
</html>