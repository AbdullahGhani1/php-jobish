 <?php
//  this variable  is getting name from Form ...
 $name =$_POST['name'];
//  email ...
$email =$_POST["email"];
//  password ...
$password = $_POST["password"];
$cpassword = $_POST["confirm_password"];
$status = $_POST['status'];
// Connecting my software (jobish.com) with database (jobish) ..
if($password == $cpassword)
{
    include('connection.php'); // this is connection.php file
    // Query
    $q = "SELECT * FROM `users` WHERE email='$email'";
    $result = mysqli_query($connection,$q) or die("Can't Run Query".mysqli_error($connection));
    $row = mysqli_num_rows($result);
    if($row >= 1){
        $error = 'Email Already Exist'; 
        header('location:../register.php?error='.$error);
    }
    else{
        $query = "INSERT INTO `users`(name,email, password) VALUES ('$name','$email','$password')";
        mysqli_query($connection,$query) or die("Can't Run Query".mysqli_error($connection));
       header('Location:../login.php');
    }
    // echo $name;
}
else{
    $error = 'Password and Confirm Password not match'; 
    header('location:../register.php?error='.$error);
}
 ?>
