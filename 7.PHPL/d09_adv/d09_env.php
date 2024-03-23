<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enviroments</title>
</head>
<body>
    <h2>Get enviroment variable</h2>
    <hr>
    <p>
    <?php 
    $viewer = getenv( "HTTP_USER_AGENT" );
    echo $viewer . "<br/>";

    echo basename($_SERVER['REQUEST_URI']); 
    ?>
    </p>
</body>
</html>