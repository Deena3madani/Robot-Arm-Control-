<?php
include_once('connection.php');

if (isset($_POST["start"])){
$sql="UPDATE Arm_status SET status = 'on' WHERE id= 1 ";
($conn->query($sql));
echo '<script>alert("on")</script>';
}

if (isset($_POST["stop"])){
$sql="UPDATE Arm_status SET status = 'off' WHERE id= 1 ";
($conn->query($sql));
echo '<script>alert("off")</script>';
}

include "armControl.html";
?>
