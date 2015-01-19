<?php
    $page = $_GET['name'];
    echo $page.".php";
    header("Location: $page.php");
?>