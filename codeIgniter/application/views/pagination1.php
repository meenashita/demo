<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>Pagination with CodeIgniter</title>
</head>
<body>
<div id="container">
  
  <table width="400" border="1" align="center">
    <tr>
      <td width="100" bgcolor="#CCCCCC"><p>First Name</p></td>
      <td width="300" bgcolor="#CCCCCC">Last Name</td>
      <td width="300" bgcolor="#CCCCCC">Email</td>
       <td width="300" bgcolor="#CCCCCC">Password</td>
    </tr>
    <h1 style="text-align:center">Users</h1>
      <div id="body">
 
    <?php
    foreach($results as $result) {
    ?>
    <tr>
      <td><?php echo $result->firstname ?></td>
      <td><?php echo $result->lastname ?></td>
      <td><?php echo $result->email ?></td>
       <td><?php echo $result->password ?></td>
    </tr>
    <?php
    }
    ?>
  </table>
 
  <div style="text-align:center"><?php echo $links; ?></div>
  
</div>
</div>
</body>
</html> 