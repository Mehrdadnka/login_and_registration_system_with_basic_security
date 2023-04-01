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
            <h1>
                <?php
                    echo 'Welcome ' . $_SESSION['username'];
                ?>
            </h1>
        </div>
    </body>
</html>