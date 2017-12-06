<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Password</th>
	</tr>
	<tr>
		<?php foreach ($records as $key) {?>
		<td><?php echo $key->firstname;?></td>
		<td><?php echo $key->lastname;?></td>	
		<td><?php echo $key->email;?></td>
		<td><?php echo $key->password;?></td>
		<?php } ?>

	</tr>


</table>
</body>
</html>