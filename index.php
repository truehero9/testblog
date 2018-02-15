<?php

$title = 'Test title';
$content = 'test content lorem....';
$created_at = time();

function e($data) {
    return htmlspecialchars($data);
}
?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= e($title) ?></title>
</head>
<body>
    <div class="content">
        <h1><?= e($title) ?></h1>

        <article><?= e($content) ?></article>

        <span class="pull-right"><?= e($created_at) ?></span>
    </div>
</body>
</html>
