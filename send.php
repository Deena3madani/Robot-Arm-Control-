<?php

include_once('connection.php');


$r1=(int) $_POST['r1'];
$r2=(int) $_POST['r2'];
$r3= (int)$_POST['r3'];
$r4=(int) $_POST['r4'];
$r5=(int) $_POST['r5'];
$r6=(int) $_POST['r6'];


$sql="UPDATE Arm_motor SET motor_degree = $r1 WHERE motor_no= 1 ";
($conn->query($sql));
$sql="UPDATE Arm_motor SET motor_degree = $r2 WHERE motor_no= 2 ";
($conn->query($sql));
$sql="UPDATE Arm_motor SET motor_degree = $r3 WHERE motor_no= 3 ";
($conn->query($sql));
$sql="UPDATE Arm_motor SET motor_degree = $r4 WHERE motor_no= 4 ";
($conn->query($sql));
$sql="UPDATE Arm_motor SET motor_degree = $r5 WHERE motor_no= 5 ";
($conn->query($sql));
$sql="UPDATE Arm_motor SET motor_degree = $r6 WHERE motor_no= 6 ";

($conn->query($sql));
echo '<script>alert("data has been saved !")</script>';

 include "armControl.html";

?>