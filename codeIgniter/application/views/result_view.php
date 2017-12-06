<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php foreach ($query as $row): ?>

                   <?php echo $row->;?><br>
               <?php echo $row->answerB;?><br>
               <?php echo $row->answerC;?><br>
                   <?php echo $row->comment;?><br>
                   <?php echo $row->name; ?>

         <?php endforeach; ?>  
	
</form>
</body>
</html>