<html>
<head>
<title>My Form</title>
<style >
	.error {
    color: red;
}
</style>
</head>

<body>
  <?php echo validation_errors('<p class="error">'); ?>



<form action="" method="post">

Username: <input type="text" name="username" value="" size="50" />
<br><br>
Password: <input type="text" name="password" value="" size="50" />
<br><br>
Password Confirm: <input type="text" name="passconf" value="" size="50" />
<br><br>
Email Address: <input type="text" name="email" value="" size="50" />
<br><br>
<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>