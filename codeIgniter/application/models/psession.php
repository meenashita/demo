<!-- <?php -->
session_start();

if(isset($_SESSION['login_user']))
{

	header("location: home.php");
} 
 


else{
	if(isset($_POST['submit'])) 
	{
		$userName = $_POST['username'];
		$password = $_POST['password'];
		$conn = new mysqli('localhost', 'root', 'anjubaby', 'Users');
		if ($conn->connect_error) 
		{
		    die("Connection failed: " . $conn->connect_error);
		}
		$sql = 'SELECT userid from user_details WHERE firstname="'.$firstname.'" and password="'.$password.'"';
		$retval = $conn->query($sql);
		$row = $retval->fetch_assoc();
		$user_Id = $row['userid'];
		
		if (!$row)
		{
			echo "Error:user is invalid " ."<br>" . $conn->error1			
				
		}
	
	else
		{
		
				$_SESSION['login_user'] = $user_Id;
			
				header("location: home.php");

	    }
		
	
	}
}
<!-- ?> -->
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<h2>Login Form</h2>
<form action="" method="post">
<label>Email:</label>
<input id="name" name="email" placeholder="email" type="text"><br><br>
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"><br><br>
<input name="submit" type="submit" value=" Login ">     
</form>
</body>
</html>