<?php
session_start();
include_once ("./function.php");
$game = generateCards(52);
echo "<pre>";
print_r($game);
echo "</pre>";










