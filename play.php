<?php

//writing new txt file that's starting the counter at 1 and scores for both players
//at 0
    $file = fopen('scores.txt', 'w');
	fwrite($file, "counter:1\n");
    fwrite($file, "player1:0\n");
    fwrite($file, "player2:0");
    fclose($file);

$game = include 'template.php';