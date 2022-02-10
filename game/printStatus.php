<?php 
// Print Current Status 
// Basically a long list of your current conditions.
function printStatus() {
    // global variables go here 
    global $location, $inventory, $rounds_left, $knife_sheathed;

    // location
    echo "You are in: $location.\n";

    // inventory
    echo "You have: ";
    echo implode(", ", $inventory);
    echo "\n";

    if ($knife_sheathed) {
        echo "Your knife is tucked away.\n";
    } else {
        echo "Your knife is out and ready.\n";
    }
 
    echo "You have $rounds_left rounds left.\n";
}