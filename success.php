<?php 
    session_start();

    if (!isset($_SESSION['id'])|| (trim($_SESSION['id'])== ''))
    {
        header('admin.php');
        exit();
    }

    include('connect.php');
    $query=mysqli_query($conn, "SELECT * FROM admin where id='" .$_SESSION['id']."'");
    $row=mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <h2>login success</h2>
    <?php 
        echo $row['username'];?>
        <br>
        <a href="logout.php">Logout</a>
   
</body>
</html>