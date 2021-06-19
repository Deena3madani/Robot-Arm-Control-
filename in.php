<?php 

include_once('connection.php'); 
$sql="select * from Arm_motor"; 
$result = $conn->query($sql);
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="2"><h2>Arm control</h2></th> 
		</tr> 
			  <th> Motor_no </th> 
			  <th> Motor_degree </th> 

			  
		</tr> 
		
		<?php while($row = $result->fetch_assoc()) 
		{ 
		?> 
		<tr> <td><center><?php echo $row['motor_NO']; ?></center></td> 
		<td><center><?php echo $row['motor_degree']; ?></center></td> 
	
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>