<html>
<?php
require  'testses.php';

 $pas = $_REQUEST['pas'];
 
?>


	<head>
		<title>validation</title>
	</head>
	<body>
		<?php
		if($pas == "123"){
			?>
			Valida user
			<?php
		}
		else {
			?>
			Invalid user
			<?php
		}
		?>
		
		<p><?php print($_SESSION['CSRF_token']) ?></p>
	</body>
</html>