<?php 
// Display Help Text
function printHelp() {
    $commands = ["help", "status", "look around", "go", "sheath knife", "unsheath knife"];
    echo "\n**********WELCOME***********\nWelcome to the adventure! You have 25 total rounds before the game ends. On each round you can type one of the following commands:\n* " ;
    echo implode ("\n* ", $commands);
    echo "\nThese commands have to be entered precisely, with no extra spaces. The \"help\" command will re-print this message.\n";
}