<?php

$num_to_guess = 42;

if(!isset($_POST['guess'])){
	$message = "welcome to guess machine";
}elseif(!is_numeric($_POST['guess'])){
	$message = "I don't understand that response";
}elseif($_POST['guess'] == $num_to_guess){
	$message = "Well Done! You Win";
}elseif($_POST['guess'] > $num_to_guess){
	$message = $_POST['guess']." is too big! Try a smaller number";
}elseif($_POST['guess'] < $num_to_guess){
	$message = $_POST['guess']." is too small! Try a larger number";
}else{
	$message = "I am terribly confused.";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Guess Machine</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper">
<h1><?php echo $message; ?></h1>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<p><label for="guess">Guess Number Here:</label><br><br>
	<input type="text" name="guess" id="guess">
	</p>
		<button type="submit" name="submit" value="submit" id="submit">Submit</button>
	</form><br>
	<hr>
	<h3>Here is some tips for you:</h3>
	<ul>
		<li>The number is an Integer</li>
		<li>The number has only two digits</li>
		<li>Try between 10 to 70</li>
	</ul>
</div>
</body>
</html>