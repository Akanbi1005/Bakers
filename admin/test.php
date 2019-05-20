<?php

/*/
echo time();
echo "<br>";
echo strtotime('last monday');
echo "<br>";
echo strtotime('next week monday');
echo "<br>";
$time = strftime("Todays Date is %d/%m/%y");
echo $time;/*/

// Defining a class 

class Display{
	function increment($i){
		
		for ($i=$i; $i <= 200; $i++) { 
			echo "$i"."<br>";
		}
		
		
	}
	function decrement(){
		$a = 2;
		$a = $a--;
		
	}
}

//Creating an Instance

$person = new Display();
$person1 = new Display();

//Using a Define Variable, a new person Intance to execute a method

$i = 180;
$person->increment($i);
?>