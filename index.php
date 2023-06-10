<?php

error_reporting(E_ALL);
include 'inc/autoloader.inc.php' 

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

            <h3>Sign In</h3>
            
            <form method="post" action="login.inc.php">

                <div>
                <label for="eml">Email</label>
                <input type="text" name="eml" size="15" require><br>
                <label for="pwd">Password</label>
                <input type="password" name="pwd" size="15" require><br><br>
                </div>
                <button type="submit">Login</button>

            </form>
 
        </div>
        <div id="signup">
			
			<a href="signup.php">Sign Up</a>

		</div>
    </section>
    <footer><p>&copy;Yuri Alcântara</p></footer>
    <script src="script.js"></script>
</body>
</html>