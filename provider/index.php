<?php
include_once '../template/header.php';
session_start();
if(empty($_SESSION['name']) && empty($_SESSION['status'])&& $_SESSION['status'] != 2)
{
    header('location:../login.php');
}
else {
    $status = $_SESSION['status'];
    if ($status != 2) {
        header('location:../login.php');
    }
}

?>
<div class="container mt-2">
    <div class="card-header">Welcome to job Provider panel,
        <b><?php echo $_SESSION['name']; ?></b>
    </div>
</div>
<?php include '../template/footer.php'; ?>
