<?php
	$fonts="verdana";
	
	$fontcolor="white";
	$errname=$erremail=$errpass=$errgender="";
	$name=$email=$pass=$gender="";

		if ($_SERVER["REQUEST_METHOD"]=="POST") {
			if(empty(($_POST["name"]))){
				$errname="<p style='color:red'>name should required.</p>";
			}
			else{
				$name=validate($_POST["name"]);
			}
			if(empty(($_POST["email"]))){
				$erremail="<p style='color:red'>email should required.</p>";
			}
			else{
				$email=validate($_POST["email"]);
			}
			if(empty(($_POST["pass"]))){
				$errpass="<p style='color:red'>pass should required.</p>";
			}
			else{
				$pass=validate($_POST["pass"]);
			}
			if(empty(($_POST["pass"]))){
				$errgender="<p style='color:red'>gender should required.</p>";
			}
			else{
				$gender=validate($_POST["gender"]);

			}
			
			

			echo "name: ".$name."<br>";
			echo "email: ".$email."<br>";
			echo "pass: ".$pass."<br>";
			echo "gender: ".$gender."<br>";

		}
		function validate($data){
			$data=trim($data);
			$data=stripcslashes($data);
			$data=htmlspecialchars($data);
			return $data;
			
			
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/x-icon" href="p.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="j.css">
<style type="text/css">
.body{
	background-color: gray;
	height: auto;
	color: white;
}
</style>
</head>
<body>
	<section class="body">
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
	<table class="container text-center">
		<tr>
			<td class="btn pt-4">name: </td>
			<td class="btn pt-4"><input type="text" name="name" required=""><?php echo $errname;?></td>
		</tr>
		<tr>
			<td class="btn pt-4">email: </td>
			<td class="btn pt-4"><input type="email" name="email"required=""><?php echo $erremail;?></td>
		</tr>
		<tr>
			<td class="btn pt-4">pass: </td>
			<td class="btn pt-4"><input type="password" name="pass"required=""><?php echo $errpass;?></td>
		</tr>
		<tr>
			
			<td >
				<LABEL for="male">Male<?php echo $errgender;?></LABEL>
			<input type="radio" name="gender" id="male"required>
			<LABEL for="female">female<?php echo $errgender;?></LABEL>
			<input type="radio" name="gender" id="female"required>
			
			</td>
			
			

		</tr>
		<tr>
			<td class="btn pt-4"></td>
			<td class="btn pt-4"><input type="submit" name="submit"></td>
			
		</tr>
	</table>
	</form>
	<?php

		
	?>
	</section>

</body>
</html>