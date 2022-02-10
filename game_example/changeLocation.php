<?php
  // Change player location
function changeLocation(){	
  // Declare global variable $location
  global $location;
  
  // Prompt the user for a response and change it to lowercase
  echo "Where do you want to go?\n";
  $goto = readline(">> ");
  $goto = strtolower($goto);
  echo "\n";
  
  // If-then the potential responses
  // if ($location === some location && $goto === some other location)
  // and then reset the location
  if ($location === "kitchen" && $goto === "bathroom") {
    echo "You go to: $goto.\n";
    $location = $goto;
  } elseif ($location === "kitchen" && $goto === "woods") {
    echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.";
    $location = $goto;
  } elseif ($location === "bathroom" && $goto === "kitchen") {
    echo "You go to: $goto.\n";
    $location = $goto;
  } elseif ($location === "woods" && $goto === "kitchen") {
    echo "You go to: $goto.\n";
    $location = $goto;
  } elseif ($goto === "woods" || $goto === "kitchen" || $goto === "bathroom") {
    echo "You can't go directly to $goto. Try going somewhere else first.\n";
  } else {
    echo "That doesn't make sense. Are you confused? Try 'look around'.\n";
  }
  // end changeLocation function
}