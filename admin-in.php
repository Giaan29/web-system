<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $host= "localhost";
    $user= "root";
    $pass="";
    $db = "login";
    $conn= new mysqli($host,$user,$pass,$db);

    if ($conn->connect_error)
    {
        die ("connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1 )
    {
        header("Location: view_account.php");
        exit();
    }
    else {
        header("Location: error.php");
        exit();
    }

    $conn->close();
}
?>
