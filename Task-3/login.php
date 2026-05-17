<?php

session_start();

include("db.php");

$email_cookie = "";

if(isset($_COOKIE["user_email"]))
{
    $email_cookie = $_COOKIE["user_email"];
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users
            WHERE email='$email'
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1)
    {
        $row = mysqli_fetch_assoc($result);

        $_SESSION["username"] = $row["name"];

        setcookie("user_email", $email, time() + (86400 * 7));

        setcookie("last_login", date("Y-m-d h:i:s A"), time() + (86400 * 7));

        header("location: dashboard.php");
    }
    else
    {
        echo "Invalid Email or Password";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login Page</h2>

<form method="post">

    Email:
    <input type="email" name="email" value="<?php echo $email_cookie; ?>">

    <br><br>

    Password:
    <input type="password" name="password">

    <br><br>

    <input type="submit" value="Login">

</form>

<br>

<a href="register.php">Go to Register</a>

</body>
</html>