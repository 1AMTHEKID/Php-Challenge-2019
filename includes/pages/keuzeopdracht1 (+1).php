<?php
/**
 * Created by PhpStorm.
 * User: pascu
 * Date: 26-3-2019
 * Time: 09:30
 */
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TEST 123</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link rel="stylesheet" href="../css/stylesheet8.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color: <?php echo $backgroundColor ?>;">

<div class="wrapper-keuze8" id="random">
    <div class="article1">
        <img class="images8" src="../img/huisje1.jpg">
    </div>
    <div class="article2">
        <img class="images8" src="../img/huisje2.jpg">
    </div>
    <div class="article3">
        <img class="images8" src="../img/huisje3.jpg">
    </div>
    <div class="article4">
        <img class="images8" src="../img/huisje4.jpg">
    </div>
    <div class="article5">
        <img class="images8" src="../img/huisje5.jpg">
    </div>
    <div class="article6">
        <img class="images8" src="../img/huisje6.jpg">
    </div>
    <div class="article7">
        <img class="images8" src="../img/huisje7.jpg">
    </div>
    <div class="article8">
        <img class="images8" src="../img/huisje8.jpg">
    </div>
    <div class="article9">
        <img class="images8" src="../img/huisje9.jpg">
    </div>
</div>
<script src="../js/JQuery.js"></script>
<script>
    $(function () {
        var parent = $("#random");
        var divs = parent.children();
        while (divs.length) {
            parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
        }
    });
</script>
</body>
</html>
