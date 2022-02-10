<?php 
// This is the PHP for the Choose Your Own Adventure Game!
// Global Variable Declarations go here
$inventory = ["a battered diary", "a small knife", "a knife sheath"];
$rounds_left = 25;
// we're starting with inventory and rounds left because those are pretty prototypical things to have in a rpg
$location = "cave";
$knife_sheathed = TRUE;

// include each of the component files in here
// it looks like
// include "componentFile.php";
include "gameRound.php";
include "printStatus.php";
include "printHelp.php";
include "lookAround.php";

// Display Intro Text
echo "Shall we play a game?\n";
echo "You are in a dark, slightly damp cave with very little light. You have no memory of how you got here or why.\n";
echo "You may type \"status\" for your character's current status or \"help\" to see a list of commands at any time.\n";


// game rounds go here
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();

gameRound();
gameRound();
gameRound();
gameRound();
gameRound();

gameRound();
gameRound();
gameRound();
gameRound();
gameRound();

gameRound();
gameRound();
gameRound();
gameRound();
gameRound();

gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
// Game is Over

echo "You have won the game! No, not that one.\n";