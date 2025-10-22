<?php
include 'db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM pizza WHERE id=$id");
header("Location: viewpizza.php");
?>