<?php
$title = "PHP Fundamentals ";

// if Title is empty
if (!isset($title)) {
    $title = "";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PHP Fundamentals:
        <?= $title; ?>
    </title>

    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/php-fundamentals.css" rel="stylesheet" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>PHP Fundamentals :-</strong>
                <?= $title; ?>
            </a>
        </div>
    </nav>