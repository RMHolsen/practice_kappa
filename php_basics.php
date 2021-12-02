<?php 
// this is a comment in php
echo "Hello, World!";
echo "\nAll lines must end in a semi-colon";
echo "\nUse backslash-n to create a new line and backslashes to escape the double quotes.";
echo "\nThis code will appear in the terminal.";

// concatenation!
echo "\nThis " . "is " . "concat" . "enation" . ", but remember, you don't get the spaces outside of the quotes. So write wisely.";
// there is actually a concatenation operator, .=
// so if you want to add something onto an existing variable, say $name from below
// you can do $name .= ", also known as Crash Override."

$var = "variable";

echo "This is a ${var} declaration: dollar-sign(sigil), variable name, equals sign as the assignment operator, variable value.";

$name = "Zero Cool";
echo "My name used to be $name.";
$old_name = $name;
$name = "Crash Override";
echo " But now my name is $name.";
echo "\n(Apparently lines evaluate consecutively. The name variable has been reassigned.)";
echo "\nBut I am still held accountable for the crimes of $old_name";

/* 
=& is the assign-by-reference operator
e.g. 
$very_bad_unclear_name = "15 chicken wings";
$order =& $very_bad_unclear_name;

$order .= " and 6 large sodas";

echo "\nYour order is: $very_bad_unclear_name.";
will output "Your order is 15 chicken wings and 6 large sodas."
so you can add code with clearer variables without finding and replacing every instance of the old variable. */