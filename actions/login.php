<?php
$email = $_POST['email'];
$password = $_POST['password'];
include('connection.php');
$query = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'";
var_dump($query);
$result = mysqli_query($connection, $query) or die("QUERY Can't be executed".mysqli_error($connection));
$row = mysqli_num_rows($result);

if($row >= 1){
    // fetch the data from database
    $data  = mysqli_fetch_array($result);
    $status= $data['status'];
    session_start();
    $_SESSION['name'] = $data['name'];
    $_SESSION['email'] = $$data['email'];
    $_SESSION['id'] = $data['id'];
    $_SESSION['status'] = $data['status'];
    if($status == 1){
        header('Location:../seeker/index.php');
    }
    else{
        header('Location:../provider/index.php');
    }
}
else{
    $error = "Invalid Email or Password";
    echo header("location:../login.php?error=$error");
}
?>