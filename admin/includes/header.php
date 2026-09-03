<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Panel</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

body{
    background:#f5f6fa;
}

.topbar{
    height:65px;
    background:#0d6efd;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:0 25px;
}

.topbar h4{
    margin:0;
}

</style>

</head>

<body>

<div class="topbar">

<h4>Modern Blinds Admin</h4>

<div>

Welcome,
<b><?php echo $_SESSION['admin']; ?></b>

<a href="logout.php" class="btn btn-danger btn-sm ms-3">
Logout
</a>

</div>

</div>