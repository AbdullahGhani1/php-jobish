<?php
$email = $_POST['email'];
$password = $_POST['password'];
include('connection.php');
$query = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'";
// var_dump($query);
$result = mysqli_query($connection, $query) or die("QUERY Can't be executed".mysqli_error($connection));
$row = mysqli_num_rows($result);

if($row >= 1){
    // fetch the data from database
    $data  = mysqli_fetch_array($result);
    $status= $data['status'];
    session_start(); // starting the session ..
    $_SESSION['name'] = $data['name'];
    $_SESSION['status'] = $data['status'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['id'] = $data['id'];
    // checking if statu sis job seeker or provider ..
    if($status == 1)
    {
        // redirect to job seeker
        header('Location:../seeker/index.php');
    }
    else{
        // redirect to job provider
        header('Location:../provider/index.php');
    }
}
else{
    $error = "Invalid Email or Password";
    echo header("location:../login.php?error=$error");
}
?>
