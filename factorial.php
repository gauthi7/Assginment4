<?php
$msg = '';
$num = '';
	if(isset($_POST['form_submit'])) {
		$num = $_POST['num'];
		$msg = factorial_of_a_number($num);

	}
function factorial_of_a_number($n)
{
	if($n >= 0)
	{
		if($n == 0)
	    {
		   return 1;
	    }
	  	else 
	    {	
		   return $n * factorial_of_a_number($n-1);
	    }
	}
	else
	{
		return 'Invalid!! Insert Positive Ineteger';
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<div class="w3-container  w3-margin-top">
		<center><h2>Factorial</h2></center>
		<form class="w3-container w3-card-4" method="POST">
			<br>
			<br>
			<input  class="w3-input" type="w3-input" name="num" placeholder="Enter number">
			<br>
			<br>
			<input class="w3-button w3-blue w3-right" type="submit" name="form_submit">
			<br>
			<br>
		</form>
	</div>
	<h1><?php echo 'Factorial of <b> '. $num . '</b> is <b>' . $msg;  ?></h1>
</body>
</html>