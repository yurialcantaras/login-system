<?php

    declare(strict_types = 1);
    error_reporting(E_ALL);
    include 'includes/autoloader.inc.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrative</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <h1>Administrative Panel</h1>
    </header>
    <section>
        <div id="formspace">

            <h3>Sign Up</h3>
            
            <form method="post" action="inc/login.inc.php">
				
			    <br><label for="name">Name</label>
                <input class="inputs" type="text" name="name" require><br>
            
				<label for="birth">Birth Date</label>
				<input class="inputs" type="date" name="birth" require><br><br>

				<label for="email">Email</label>
				<input class="inputs" type="text" name="email" require><br>

                <label for="pword">Password</label>
				<input class="inputs" type="password" name="pword" size="15" require><br>

                <label for="pword2">Repete password</label>
				<input class="inputs" type="password" name="pword2" size="15" require><br><br>

				<div id="button">
				<button type="submit" name="signup">Sing Up</button>
				</div>

			</form>
 
        </div>
        <div id="signup">
			
			<a href="index.php">Sign In</a>

		</div>
    </section>
    <footer><p>&copy;Yuri Alcântara</p></footer>
    <script src="script.js"></script>
</body>
</html>