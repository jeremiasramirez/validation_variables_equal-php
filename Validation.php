<?php


function Validation($num, $num2){

	if($num == $num2 and $num === $num2){
		 // tienen el mismo valor y son del mismo tipo
		return 1;
	}
	else if($num == $num2){
		 // tienen el mismo valor pero no son del mismo tipo
		return 0;
	}
	else{
		 // No tienen el mismo valor tampoco son del mismo tipo
		return -1;	
	}

}

print(Validation(2,2));




?>