<?php
$email = filter_input(INPUT_POST, 'email');
$pword = filter_input(INPUT_POST, 'pword');
?>

<html>
    <head>
        <title>Login Data</title>
    </head>
    <body>
        <h2>Text Inputs</h2>
        <div>
            Email: <?php echo $email; ?>
        </div>
        <div>
            Password: <?php echo $password; ?>
        </div>
    </body>
</html>