<?php
    require '../private/autoload.php';

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-divice-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="../src/style.css" rel="stylesheet">
        <title>Login and Registration Form With scurity</title>
    </head>
    <body>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form name="sgpform" action="../inc/signup.inc.php" method="POST">
                    <div class="error">
                        <?php
                            if(isset($error) && $error != "")
                            {
                                echo $error;
                            }
                        ?>
                    </div>
                    <h1>Create Account</h1>
                    <input type="text" name="username" placeholder="User Name" autocomplete="off"/>
                    <input type="password" name="password" id="user" placeholder="Password" autocomplete="off"/>
                    <input type="password" name="passwordrepeat" id="pass" placeholder="Password Repeat" autocomplete="off"/>
                    <input type="email" name="email" id="email"  placeholder="Email" autocomplete="off"/>
                    <button class="sgnupbtn" type="submit" name="submit">Sign Up</button>
                </form>
            </div>
            
            <div class="form-container sign-in-container">
                <form name="sgnform" action="../inc/login.inc.php" method="POST">
                    <div class="error">
                        <?php
                            if(isset($error) && $error != "")
                            {
                                echo $error;
                            }
                        ?>
                    </div>
                    <h1>Login</h1>
                    <input type="email" name="email" id="user" placeholder="Email" autocomplete="off"/>
                    <input type="password" name="password" id="pass" placeholder="Password" autocomplete="off"/>
                    <button class="sgninbtn" type="submit" name="submit">Login</button>
                </form>
            </div>

            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="sgninghost" id="signIn">Login</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hi<br>My Friend!</h1>
                        <p>Enter your personal info and start a journey with us</p>
                        <button class="sgnupghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="../src/app.js"></script>
    </body>
</html>