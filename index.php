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

    <div id="window">
        <div id="darkener"></div>
        <header>
            <ul>
                <li><a href="https://www.instagram.com/semmelfoto/" target="_blank"><img src="img/instagram.svg" alt="Instagram"></a></li>
                <li><a href="https://github.com/semmelsamu" target="_blank"><img src="img/github.svg" alt="GitHub"></a></li>
                <li><a href="https://www.youtube.com/c/semmelsamu" target="_blank"><img src="img/youtube.svg" alt="YouTube"></a></li>
                <li><a href="mailto:samuel@kroiss.io" target="_blank"><img src="img/envelope-regular.svg" alt="E-Mail"></a></li>
            </ul>
        </header>
        <article>
            <?= $content ?>
        </article>
    </div>

</body>
</html>