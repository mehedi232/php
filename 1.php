<?php
	echo "Twinkle, Twinkle little star.";

	
?>
<h2>exercise 2</h2>

<?php
	echo "<br>";
	$x=7;
	$y=10;
	$sum=$x+$y;
	$sub=$x-$y;
	$div=$x/$y;
	$mul=$x*$y;
	$rem=$x%$y;
	echo "$sum<br>";
	echo "$sub<br>";
	echo "$div<br>";
	echo "$mul<br>";
	echo "$rem<br>";
?>

<h2>exercise 3</h2>

<?php
	echo "<br>";
	$variable="variable";
	$x=strlen($variable);
	echo "value is now $x <br>";
	$add2=$x+2;
	echo "value is now $add2<br>";
	$sub4=$add2-4;
	echo "value is now $sub4<br>";
	$in=++$add2;
	echo "$in <br>";
	$dec=--$in;
	echo "value is now $dec";
?>

<h2>exercise 4</h2>
<?php   
 
   $name='Harry'; 
   $age=28;   
 
   var_dump($name); 
   echo "<br/>";   
 
   print($name); 
   echo "<br/>";   
 
   var_dump($age); 
   echo "<br/>";  
 
   $name=null; 
   var_dump($name);
 
?> 

<h2>exercise 5</h2>

<?php 

   $date = date('m-d-Y', time());

   echo "$date <br>";

   $month = date('F', time());
   echo "$month";

   if($month == "August"){

echo "<br />It's August, so it's really hot. :)";
   } else {
echo "<br /> Not August, so at least not in the peak of the heat.";
   }

?>


<h2>exercise 5</h2>
<?php 
$around="around";

echo "what goes ".$around .", comes ".$around.".";

?> 

<h2>exercise 6</h2>
<?php

for ($x = 1; $x <= 12; $x++) {
	$p=$x*$x;
    echo "The number is: $p <br>";
   }
?>

<h2>exercise 7</h2>
<?php
	for ($i=1; $i <=7 ; $i++) { 
		for ($j=1; $j <=7 ; $j++) { 
			$p=$i*$j;
			echo "$p ";
		}
		echo "<br>\n";
	}
?>

<h1>ARRAY</h1>
<?php
	$weather=array("rain", "sunshine", "clouds",
             "hail", "sleet", "snow", "wind");
	
	$length=count($weather);
	for ($i=0; $i <$length ; $i++) { 
		echo $weather[$i];
		

		echo "<br>\n";
		
	}

	$k = array_search('snow', $weather);

	echo "$k <br>";

	echo "We've seen all kinds of weather this month. At the beginning of the month, ";
    echo "we had $weather[5] and $weather[6]. Then came $weather[1] with a few $weather[2] ";
    echo "and some $weather[0]. At least we didn't get any $weather[3] or $weather[4].";
	
?>




