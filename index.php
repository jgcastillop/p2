<!DOCTYPE html>
<html>
			<head>

						<title>xkcd Password Generator</title>
						<meta charset='utf-8'>

						<meta name='viewport' content='width=device-width, initial-scale=1'>

						<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel = "stylesheet">

						<link href='css\styles.css' rel = "stylesheet">

						<link href='css\main.css' rel = "stylesheet">

						<?php require "logic.php"; ?>

		</head>
		<body>

			<div class="container">
	<h1>xkcd Password Generator</h1>
	<br>
	<img src="http://imgs.xkcd.com/comics/password_strength.png" alt="comic" height="450" width="550">
	<h3><p class='password'><b>Your password:</b><br> <?php echo $password ?></p></h3>
		<div class='error'><i><?php echo $errorMessage ?></i></div>
		<br>
	<form action="index.php" method="GET">
		<div class='form-group'>
			<label>
			Quantity of words to use (between 4 and 8):
					<input maxlength=1 type="text" name="quantity_of_words" value='<?php echo $qtyWords ?>'>
				</label>
			</div>
			<div class='form-group'>
				<label>
					<input type="checkbox" name="add_number" value="1" <?php if(isset($_GET['add_number'])) { echo 'checked'; } ?>>
					Use numbers?
				</label>
				<br>
				<label>
					<input type="checkbox" name="add_symbol" value="1" <?php if(isset($_GET['add_symbol'])) { echo 'checked'; } ?>>
					Use symbols?
				</label>
				<br>
				<label>
					<input type="checkbox" name="upper_case" value="1" <?php if(isset($_GET['upper_case'])) { echo 'checked'; } ?>>
					Use uppercase?
				</label>
				<br>
			</div>
			<button type='submit' class='btn btn-default'>Generate new password</button>

		</form>
</div>
</body>
</html>
