<?php
	
if ($_POST) {
	# Pick a winning number based on how many contestants we have
		$how_many_contestants = count($_POST);
		$winning_number = rand(1, $how_many_contestants);
		
	# loop through contestants, seeing if any won
		foreach($_POST as $key => $value){
		
		# Generate a random number for this contestant
			$random_number = rand(1, $how_many_contestants);
		
		# see if their generated random number matches the winning number and store the results in the $contestants array
		
			if ($value != "") {
				if ($random_number == $winning_number){
					$contestants[$value] = "Winner!";
				}
				else {
			
					$contestants[$value] = "Loser :(";
				}
			}
			else {
			   echo "Form field is empty. Please fill up the form.";
			}		
		}	
 }   
?>
