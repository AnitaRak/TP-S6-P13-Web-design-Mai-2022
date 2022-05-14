<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="style.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Portal de Login</h1>
    </header>
    <main>
        <form id="login_form" class="form_class" action="authentification.php" method="post">
            <div class="form_div">
                <label>Email:</label>
                <input class="field_class" name="email" type="text"  autofocus>
                <label>Password:</label>
                <input id="pass" class="field_class" name="mdp" type="password">
                <button class="submit_class" type="submit">Se connecter</button>
            </div>
            <div class="info_div">
                <p>Mots de passe oublier ?<a href="register/reg-form.php">Recuperer!</a></p>
            </div>
        </form>
    </main>
</body>
</html>