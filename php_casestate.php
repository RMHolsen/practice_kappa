<?php 
// if statements, case statements, ternary operators, all those wonderful boolean things

// if statements
// formatted largely like javascript, right down to the === being absolute 

if ($condition == TRUE) {
    print "Something happens here"
} elseif ($condition == FALSE) {
    print "Something else happens here"
} else {
    print "The default goes here"
}

// case statements
switch ($variable) {
    case "first case":
        print "This is the first case";
        break;
    case "second case"
        print "this is the second case";
        break;
    case "third case"
        print "this is the third case";
        break;
    case "fourth case"
        print "this is the fourth case";
        break;
    case "just in case"
        print "This is the just in case";
        break;
    case "sixth case"
        print "There is nooooooooooooooooooooo \nrule six.";
        break;
    default: 
        print "This is the default";
        break;
}

/* if you don't put the break at the end of each case statement result 
 the code in all the subsequent cases will run, in that order, until it reaches a break statement
 this is called 'fall through'
 and apparently sometimes you want it */

 // with fall through 

 function returnSeason($month) {
    switch($month) {
      case "December":
      case "January":
      case "February":
        return "winter";
        break;
      case "March":
      case "April":
      case "May":
        return "spring";
        break;
      case "June":
      case "July":
      case "August":
        return "summer";
        break;
      case "September":
      case "October":
      case "November":
        return "fall";
        break;
    }
  }

  // ternary operators also look the same
  // condition ? true : false 

  // An example from CodeAcademy
  $gryffindor = 0;
$hufflepuff = 0;
$ravenclaw = 0;
$slytherin = 0;

//$answer1, $answer2, $answer3;

echo  "================\nThe Sorting Hat!\n================\n\n";


  // ~~~~~~~~~~ Question 1 ~~~~~~~~~~

  echo "Q1) When I'm dead, I want people to remember me as:\n\n  1) The Good\n  2) The Great\n  3) The Wise\n  4) The Bold\n\nEnter your answer (1-4): ";
  
  

  $answer1 = readline(">>");

  if ($answer1 === "1")
    $hufflepuff++;
  elseif ($answer1 === "2")
    $slytherin++;
  elseif ($answer1 === "3")
    $ravenclaw++;
  elseif ($answer1 === "4")
    $gryffindor++;

  // ~~~~~~~~~~ Question 2 ~~~~~~~~~~

  echo "\nQ2) Dawn or Dusk?\n\n  1) Dawn\n  2) Dusk\n\nEnter your answer (1-2): ";

  $answer2 = readline(">>");

  if ($answer2 === "1") 
  {
    
    $gryffindor++;
    $ravenclaw++;
  
  } 
  elseif ($answer2 === "2") 
  {

    $hufflepuff++;
    $slytherin++;

  }
  else 
  {

    echo "Invalid input\n";

  }

  // ~~~~~~~~~~ Question 3 ~~~~~~~~~~

  echo "\nQ3) Which kind of instrument most pleases your ear?\n\n  1) The violin\n  2) The trumpet\n  3) The piano\n  4) The drum\n\nEnter your answer (1-4): ";

  $answer3 = readline(">>");

  if ($answer3 === "1")
    $slytherin++;
  elseif ($answer3 === "2")
    $hufflepuff++;
  elseif ($answer3 === "3")
    $ravenclaw++;
  elseif ($answer3 === "4")
    $gryffindor++;

  // ~~~~~~~~~~ Question 4 ~~~~~~~~~~

  echo "\nQ4) Which road tempts you the most?\n\n  1) The wide, sunny grassy lane\n  2) The narrow, dark, lantern-lit alley\n  3) The twisting, leaf-strewn path through woods\n  4) The cobbled street lined (ancient buildings)\n\nEnter your answer (1-4): ";

  $answer4 = readline(">>");

  if ($answer4 === "1")
    $hufflepuff++;
  elseif ($answer4 === "2")
    $slytherin++;
  elseif ($answer4 === "3")
    $gryffindor++;
  elseif ($answer4 === "4")
    $ravenclaw++;
  
  // ========== Sorting ==========

  echo "Congrats on being sorted into... ";

  $max = 0;
  $house = "";

  if ($gryffindor > $max) 
  {

    $max = $gryffindor;
    $house = "Gryffindor";
    
  }

  if ($hufflepuff > $max) 
  {

    $max = $hufflepuff;
    $house = "Hufflepuff";

  }
  
  if ($ravenclaw > $max) 
  {

    $max = $ravenclaw;
    $house = "Ravenclaw";

  }
  
  if ($slytherin > $max) 
  {

    $max = $slytherin;
    $house = "Slytherin";

  }
  
  echo $house . "!\n";


