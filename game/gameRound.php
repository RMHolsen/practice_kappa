<?php 
// Function for one round of the game
function gameRound() {
    // set global variables
    global $inventory, $rounds_left, $location, $knife_sheathed;

    // skip turn if it's been used up
    if ($rounds_left <= 0) {
        return;
    }

    // maybe remove this later if we're going to make that its own separate thing
    // printStatus();
    // print the status. this is in its own separate file
    // we don't need to import this here because when gameRound is called in the index file
    // we've imported printStatus into the index file, so we can call the function here

    // read command and respond
    $cmd = readline ("> ");
    $cmd = strtolower($cmd);
    // something to eliminate following whitespace here would be good
    echo "\n";
    // new line for legibility

    // and here goes the switch statement for handling all the command cases
    switch ($cmd) {
        case "status":
            printStatus();
            break;
        case "help":
            printHelp();
            break;
        case "sheath knife":
            $knife_sheathed = TRUE;
            echo "You put your knife away.\n";
            break;
        case "take out knife":
            $knife_sheathed = FALSE;
            echo "You take out your knife! You are ready for action!\n";
            break;
        case "look around":
            lookAround();
            break;
        case "read diary":
            readDiary();
            break;
        default: 
            echo "I'm sorry, I'm afraid you can't do that. Please use one of the valid commands. You can see the list of valid commands by entering 'help.'\n";
    } // end of command switch

    // changing this to an if statement: help calls or status calls shouldn't use up a round
    if ($cmd === "status" || $cmd === "help") {
        return;
    } else {
        $rounds_left = $rounds_left - 1;
        echo "\nYou now have $rounds_left rounds left.\n\n";
    }
}