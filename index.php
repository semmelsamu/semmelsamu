<?php

include("Parsedown.php");

$Parsedown = new Parsedown();

$content = $Parsedown->text(file_get_contents("./README.md"));

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hi there</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

    <article>
        <?= $content ?>
    </article>

</body>
</html>