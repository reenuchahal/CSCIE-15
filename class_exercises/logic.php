<?php
date_default_timezone_set('US/Eastern');
$myTimeTwo = date('g:i a');
$myTime = date('G:i');



if($myTime >= 7.00 && $myTime <= 19.00) {
	$class = "day";
    $message = "time to say Good Morning!!!";
  }
else {
 $class = "night";
$message = "time to say Good Night!!! Sweet Dreams.";
}

$boxes = "";

for ($i=1; $i < 10; $i++ ){
$boxes = $boxes."<div class='box'>".$i."</div>";
$boxes = $boxes."<div class='box2'>".$i."</div>";
}

$boxesTwo = "";
$i = 0;
while ($i < 24){
$boxes = $boxes."<div class='box3'>".$i."</div>";
$i++;
}

$contestants["Sam"] = "loser";
$contestants["Eliot"] = "loser";
$contestants["Liz"] = "winner";
$contestants["Max"] = "loser";

//
//$shopping_list[0] = "Apple";
//$shopping_list[1] = "Mango";
//$shopping_list[2] = "Chocolate";
//$shopping_list[3] = "Milk";

//$shopping_list = array('Milk', 'Oranges', 'Bread', 'Cake');
$shopping_list['Supermarket'] = array ('Pillow','wipes','Soap','Shampoo');
$shopping_list['Hardware_Store'] = array ('CD','Hammer','Nails','Paints');
$shopping_list['Pharmacy'] = array ('Bandaids','Tylenol','Cough Syrup');

$result = count($shopping_list, COUNT_RECURSIVE);

// $food = array('fruits' => array('orange', 'banana', 'apple'),
 //              'veggie' => array('carrot', 'collard', 'pea'));
              
 $food['Fruits'] = array('orange', 'banana', 'apple');
 $food['Veggie'] = array('carrot', 'collard', 'pea');   
   sort($food['Fruits']);
   $result3 = array_merge($food['Fruits'], $food['Veggie']);      
 $result2 = count($food, COUNT_RECURSIVE);              
?>