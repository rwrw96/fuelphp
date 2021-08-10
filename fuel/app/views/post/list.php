<?php  

// debug_zval_dump($rows);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php foreach($rows as $row): ?>
		<div style="background-color: #999">
			<?php echo $row['title']; ?>
		</div>
		<div>
			<?php echo $row['summary']; ?>
		</div>
		<div>
			<?php echo $row['body']; ?>
		</div>
	<?php endforeach; ?>
</body>
</html>