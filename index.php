<?php
/**
 * Created by PhpStorm.
 * User: www
 * Date: 16.07.2018
 * Time: 13:06
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<div class="all">
    <input checked type="radio" name="respond" id="desktop">
    <article id="slider">
        <input type="radio" name="slider" id="switch1">
        <input type="radio" name="slider" id="switch2">
        <input type="radio" name="slider" id="switch3">
        <input type="radio" name="slider" id="switch4">

        <div id="slides">
            <div id="overflow">
                <div class="image">
                    <article><img src="img/1.jpg"></article>
                    <article><img src="img/2.jpg"></article>
                    <article><img src="img/3.jpg"></article>
                    <article><img src="img/4.jpg"></article>
                </div>
            </div>
        </div>
        <div id="controls">
            <label for="switch1"></label>
            <label for="switch2"></label>
            <label for="switch3"></label>
            <label for="switch4"></label>
        </div>
        <div id="active">
            <label for="switch1"></label>
            <label for="switch2"></label>
            <label for="switch3"></label>
            <label for="switch4"></label>
        </div>
    </article>
</div>

</body>
</html>
