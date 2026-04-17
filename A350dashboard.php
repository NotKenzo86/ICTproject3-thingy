<?php
session_start();

if(!isset($_SESSION['Username'])){
    header("Location: login.php");
    exit();
}
?>

<h1>Dashboard</h1>

<p>Welcome to A350 Dealership, <?php echo $_SESSION['Username']; ?>!</p>
<h2> Worlds best A350 dealership </h2> 
