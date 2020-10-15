<?php
    if (empty($_GET['number1']) || empty($_GET['number2']))
        die('Numbers cannot be empty');

    $result = $_GET['number1'] + $_GET['number2'];
    echo "Result: " . $result;
?>