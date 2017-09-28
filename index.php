<!DOCTYPE html>
<html>
			<head>

						<title>xkcd Password Generator</title>
						<meta charset='utf-8'>

						<meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <style>
            body {
                background-color:FFF;
            }

            .container {
            	width:100%;
            	min-width:200px;
            	margin-bottom:50px;
            	text-align:center;
            }

            .error {
            	color:red;
            }

            img {
              max-width: 100%;
              height: auto;
              width: auto;
            }
            </style>

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

						<?php require "logic.php"; ?>

		</head>
		<body>

			<div class="container">
	<h1>xkcd Password Generator</h1>
	<br>
	<img src="http://imgs.xkcd.com/comics/password_strength.png" alt="comic">
	<h3><p class='password'><b>Your password:</b><br><i> <?php echo $password ?></i></p></h3>
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
			<button type='submit' class='btn btn-default' >Generate new password</button>

		</form>
</div>
</body>
</html>
