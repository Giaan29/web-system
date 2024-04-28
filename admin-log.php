<?php 
    if(isset($_POST['login'])) 
    {
        session_start();
        include ('connect.php');

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($conn,"SELECT * FROM admin where username = '$username' && password = '$password'");

        if (mysqli_num_rows($query)==0) 
        {
            $_SESSION['message'] = "login failed. user not found!";
            header('location: admin.php');
        }

        else {
            $row=mysqli_fetch_array($query);

            if (isset($_POST['remember']))
            {
                setcookie("user", $row['username'], time () + (86400 * 30));
                setcookie("pass", $row['password'], time () + (86400 * 30));

            }

            $_SESSION['id']=$row['id'];
            header('location: success.php');

        }


    }
?>