<html>
<body>
<?php
require_once 'bootstrap.php';
?>
<div>
    <form action="/index.php" id="demo" method="post">
        <textarea rows="4" cols="50" name="text"></textarea>
        <input type="submit" value="Submit">
    </form>
</div>
<?php

if ($_POST && array_key_exists('text', $_POST['text'])) {
    $analyser = new \src\TextAnalyser();
    echo json_encode($analyser->analise($_POST['text']), JSON_THROW_ON_ERROR);
}

?>
