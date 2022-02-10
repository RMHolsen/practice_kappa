<?php 
// Describe Current Location
function lookAround() {
    // Declare Global Variables 
    global $location, $knife_sheathed;

    switch ($location) {
        case "cave":
            echo "You are in a cave. ";
            break;
    }

    if ($knife_sheathed) {
        echo "Your knife is in its sheath on your belt.\n";
    } else {
        echo "Your knife is out and ready. It looks sharp!\n";
    }
}