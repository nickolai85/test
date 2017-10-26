<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */
////////
for ($i=17; $i<=53; $i++){
	
	if((is_int($i/2))&& (is_int($i/5))){
		
			echo 'FooBar<br>';	
		
	}
	else{
		
		if(is_int($i/2))
		{
			echo 'Foo<br>';
			
		} else{
				if(is_int($i/5))
				{
					echo 'Bar<br>';
					
				} else{
					
						echo $i.'<br>';
				
					
				}
			
			
		}
	

	}
}



////

echo "============================= |Exercixe 2| ===================================";


 
/*
* Create an Array with rows and columns
*  Column 1 item name
*  Column 2 price
*  Column 3 type
*  -- if value is 1 it is inclusive 
*  -- if value is 0 it is exclusive 
*/
$products = array
  (
  array("Jaguar",100000,1),
  array("BMW",15000,0),
  array("Mercedes",5000,0),
  array("Audi",17000,1)
  );
// Create a variable with tax value
$tax=20;
// Create an array with the prices
//$prices=array();
//Loop through $products array
for ($i = 0; $i< count($products); $i++) {
  $row=$i+1;
  echo "Price list: <p> ";
   echo '<b>'.$row.'</b>';

 		echo $products[$i][0].'&nbsp;';

 		//Create variable with Price value
 		$Price=$products[$i][1];
 		//If value in column 3 is 1 counting inclusive price value 
 		if ( $products[$i][2]==1){

 			//calculation values of inclusive price 
				$inclusivePrice=(($Price/100)*$tax)+$Price;
			//displayng values of inclusive price  
				echo $inclusivePrice;
			//Adding values of inclusive price  in Array
				$prices[$i]=$inclusivePrice;
 		}
 		else{
 			//displayng values of exclusive price 
 				echo $Price;	
 			//Adding values of exclusive price  in Array
 				$prices[$i]=$Price;
 		}
 echo "</p>";
}

echo "<br> Total Sum:";

//calculation and displayng of total sum
echo array_sum($prices);
?>