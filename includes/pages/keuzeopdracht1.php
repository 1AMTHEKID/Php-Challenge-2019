<?php
/**
 * Created by PhpStorm.
 * User: pascu
 * Date: 26-3-2019
 * Time: 09:09
 */
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Keuze opdracht 1</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="margin-text">
    <h1>Keuze opdracht 1:</h1>
    <form action="keuzeopdracht1%20(+1).php" method="post">
        <div class="form-group">
            <label for="CarList">Insert color:</label>
            <input type="color" class="col-sm-2 form-control input-box" name="path1" id="CarList" placeholder="...">
        </div>
        <a href="keuzeopdracht1%20(+1).php" class="btn btn-dark btn-md col-sm-2" role="button"
           type="submit">Verzenden</a>
    </form>
</div>

<?php

$color = 990000;
$backgroundColor = $_POST;
if ($_POST[$color] == "POST" && $_POST["path1"] == NULL) {
    $backgroundColor = 990000;
}
?>

?>
</body>
</html>
