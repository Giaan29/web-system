<?php
include 'connect.php';

if (isset($_POST['signUp'])) {
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordHashed = md5($password);

    
    $checkEmailStmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $checkEmailStmt->bind_param("s", $email);
    $checkEmailStmt->execute();
    $result = $checkEmailStmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email address already exists!";
    } else {
       
        $insertStmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $insertStmt->bind_param("sss", $name, $email, $passwordHashed);
        if ($insertStmt->execute()) {
            header("location: homepage.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordHashed = md5($password);

   
    $selectStmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $selectStmt->bind_param("ss", $email, $passwordHashed);
    $selectStmt->execute();
    $result = $selectStmt->get_result();

    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: homepage.php");
        exit();
    } else {
        echo "Not found, Incorrect email or password";
    }
}
?>
