
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/connexion.css">
</head>
<body>
    <?php
     include("header/headerco.php");
     include('dao.php')
    ?>

    <div class="overlay">
        <form method="POST">
            <div class="con">
                <header class="head-form">
                    <h2>Log-In</h2>
                    <p>Connectez-vous ici en utilisant votre nom d'utilisateur et votre mot de passe</p>
                </header>
                <br>
                <div class="field-set">
                    <span class="input-item">
                        <i class="fa fa-user-circle"></i>
                    </span>
                    <input class="form-input" id="txt-input" type="text" name="pseudo" placeholder="Username or email" required>
                    <br>
                    <span class="input-item">
                        <i class="fa fa-key"></i>
                    </span>

                    <input class="form-input" type="password" name="motdepasse" placeholder="Password" id="pwd"  name="password" required>

                    <span>
                        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
                    </span>
                    <br>
                    <button class="log-in" name="login">Login</button>
                </div>

                <div class="other">
                <button class="btn submits frgt-pass" name="forgot">Forgot Password</button>
                <button class="btn submits sign-up" name="signup">Sign Up
                <i class="fa fa-user-plus" aria-hidden="true"></i>
                </button>
                </div>
                <?php if (isset($message)) { echo "<p class='error'>$message</p>"; } ?>
            </div>
        </form>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
