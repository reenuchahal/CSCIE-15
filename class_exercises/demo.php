<!DOCTYPE HTML>
<html>

<head>
	<?php
	require_once('logic.php');
	?>
	<link type="text/css" rel="stylesheet" href="style.css" />
	
	
	
	
	
</head>

<body class="<?=$class;?>">
	Liz is a <?=$contestants["Liz"];?><br/>
	It is <?=$message;?>
	<br>
	
	Today's date is <?=$myTimeTwo?><br/>
	
	<?php
	foreach($contestants as $key => $value){
	echo $key." is a ".$value."! <br/>";
	}
	?>
	<pre>$contestants = <?php
	print_r($contestants);
	?>
	</pre>
	<br/>
	<pre>
	$shopping_list = <?php print_r($shopping_list); ?>
	</pre>
	*************
	<br/>
	<h1> Shopping List</h1>
	<?php foreach($shopping_list[Supermarket] as $key => $value): ?>
	<?=$key?> is a <?=$value?>. <br/>
	<?php endforeach; ?>
	
	****************
	<br/>
	<?php
	foreach($shopping_list[Supermarket] as $key => $value){
	echo $key." is a ".$value.". <br/>";
	}
	?>
	
	<br/>
	************
	<br/>
	
	1.shopping_list count <?=$result;?><br/>
	2.food count <?=$result2;?>
	</br/>
	********
	<br/>
	<?php
	foreach($food['Fruits'] as $key => $value){
	echo "food['Fruits'][" . $key . "] = " . $value . "<br/>";
	}
	?>
	<br/>
	********
	<br/>
	<?php
	print_r($result3);
	?>
	
	<?php if($new_user): ?>
	<h2>Welcome New User!</h2>
    <form>
        <label for='first_name'>First Name 
        <input type='text' name='first_name' id='first_name'><br>

        <label for='email'>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type='text' name='email' id='email'><br/>

        <input type='submit'>
    </form>
	
	<?php endif; ?>
	
	<br/>
	
	<?=$boxes?>
	<?=$boxesTwo?>
	
	<br/>
</body>
</html>