<!DOCTYPE HTML>
<html>

<head>
	<?php
	require_once('logic3.php');
	?>
	<link type="text/css" rel="stylesheet" href="style.css" />
</head>

<body>
<form method="POST" action="demo3.php">
Enter the contestants <br/>
<input type="text" name="contestant1"> <br/>
<input type="text" name="contestant2"> <br/>
<input type="text" name="contestant3"> <br/>
<input type="text" name="contestant4"> <br/>
<input type="submit" value="Pick a winner!"><br/>
<form>
<?php print_r ($_POST); ?>
<?php if($_POST): ?>

    The Winning number is <?=$winning_number;?>.<br/><br/>
    
	<?php foreach($contestants as $key => $value): ?>
	                
	<?=$key?> is a <?=$value?>. <br/>
	<?php endforeach; ?>
<?php endif; ?>
</body>
</html>