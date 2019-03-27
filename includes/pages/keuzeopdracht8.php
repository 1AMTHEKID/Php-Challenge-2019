<?php
/**
 * Created by PhpStorm.
 * User: pascu
 * Date: 26-3-2019
 * Time: 12:42
 */
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Keuze Opdracht: 8</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link rel="stylesheet" href="../css/stylesheet8.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<!---- Navigation ---->
<div class="blue-bar8">
    <div class="navigation8">
        <div class="left-text8">
            <div class="navigation-text8">
                <div class="checker8">
                    <img src="../img/checkmark.png" class="checkmark">
                </div>
                <div class="checkertext8">
                    <h4 class="text-white">op plaatsnaam</h4>
                </div>
            </div>
        </div>
        <div class="middle-text8">
            <div class="navigation-text8">
                <div class="checker8">
                    <img src="../img/checkmark.png" class="checkmark">
                </div>
                <div class="checkertext8">
                    <h4 class="text-white">op aantal</h4>
                </div>
            </div>
        </div>
        <div class="right-text8">
            <div class="navigation-text8">
                <div class="checker8">
                    <img src="../img/checkmark.png" class="checkmark">
                </div>
                <div class="checkertext8">
                    <h4 class="text-white">op prijs</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<!---- Main ---->
<div class="wrapper8">
    <div class="header8"><h1>Populaire steden</h1></div>
    <div class="left8" id="random1">
        <div class="article1">
            <div class="information8">
                <div class="bigimage8">
                    <img class="images8" src="../img/huisje1.jpg">
                </div>
                <div class="text8">
                    <h3><b>Amsterdam</b></h3>
                    <p>420 woningen</p>
                    <p>Gemiddeld €1986</p>
                </div>
            </div>
        </div>
        <div class="article2">
            <div class="information8">
                <div class="bigimage8">
                    <img class="images8" src="../img/huisje2.jpg">
                </div>
                <div class="text8">
                    <h3><b>Lelystad</b></h3>
                    <p>434 woningen</p>
                    <p>Gemiddeld €1732</p>
                </div>
            </div>
        </div>
        <div class="article3">
            <div class="information8">
                <div class="bigimage8">
                    <img class="images8" src="../img/huisje3.jpg">
                </div>
                <div class="text8">
                    <h3><b>Den Haag</b></h3>
                    <p>305 woningen</p>
                    <p>Gemiddeld €1477</p>
                </div>
            </div>
        </div>
    </div>
    <div class="middle8" id="random2">
        <div class="article4">
            <div class="information8">
                <div class="bigimage8">
                    <img class="images8" src="../img/huisje4.jpg">
                </div>
                <div class="text8">
                    <h3><b>Tilburg</b></h3>
                    <p>108 woningen</p>
                    <p>Gemiddeld €767</p>
                </div>
            </div>
        </div>
        <div class="article5">
            <div class="information8">
                <div class="bigimage8">
                    <img class="images8" src="../img/huisje5.jpg">
                </div>
                <div class="text8">
                    <h3><b>Eindhoven</b></h3>
                    <p>245 woningen</p>
                    <p>Gemiddeld €1215</p>
                </div>
            </div>
        </div>
        <div class="article6">
            <div class="information8">
                <div class="bigimage8">
                    <img class="images8" src="../img/huisje6.jpg">
                </div>
                <div class="text8">
                    <h3><b>Utrecht</b></h3>
                    <p>307 woningen</p>
                    <p>Gemiddeld €1451</p>
                </div>
            </div>
        </div>
    </div>
    <div class="right8" id="random3">
        <div class="article7">
            <div class="information8">
                <div class="bigimage8">
                    <img class="images8" src="../img/huisje7.jpg">
                </div>
                <div class="text8">
                    <h3><b>Almere</b></h3>
                    <p>666 woningen</p>
                    <p>Gemiddeld €1337</p>
                </div>
            </div>
        </div>
        <div class="article8">
            <div class="information8">
                <div class="bigimage8">
                    <img class="images8" src="../img/huisje8.jpg">
                </div>
                <div class="text8">
                    <h3><b>Rotterdam</b></h3>
                    <p>2104 woningen</p>
                    <p>Gemiddeld €847</p>
                </div>
            </div>
        </div>
        <div class="article9">
            <div class="information8">
                <div class="bigimage8">
                    <img class="images8" src="../img/huisje9.jpg">
                </div>
                <div class="text8">
                    <h3><b>VOC</b></h3>
                    <p>2 woningen</p>
                    <p>Gemiddeld €5210</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!---- Scripts ---->
<script src="../js/jquery.pfg.js"></script>
<script>
    $(function () {
        var parent = $("#random1");
        var divs = parent.children();
        while (divs.length) {
            parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
        }
    });

    $(function () {
        var parent = $("#random2");
        var divs = parent.children();
        while (divs.length) {
            parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
        }
    });

    $(function () {
        var parent = $("#random3");
        var divs = parent.children();
        while (divs.length) {
            parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
        }
    });
</script>
</body>
</html>