<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $username = "Stitch";
        setcookie("uname", $username, time() + 3600);

        if (isset($_COOKIE['uname'])) {
            echo("Welcome " . $_COOKIE['uname'] . "!");
        } else {
            echo("Cookie uname is not set");
        }

?>
</body>
</html>