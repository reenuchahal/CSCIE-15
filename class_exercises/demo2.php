<!DOCTYPE HTML>
<html>

<head>
	<?php
	require_once('logic2.php');
	?>
	<link type="text/css" rel="stylesheet" href="style.css" />
</head>

<body>
    The Winning number is <?=$winning_number;?>.<br/><br/>
    
	<?php foreach($contestants as $key => $value): ?>
	<?=$key?> is a <?=$value?>. <br/>
	<?php endforeach; ?>
	
</body>
</html>