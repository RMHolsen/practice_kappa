<?php 
// FizzBuzz exercise!
$counter = 1;
// While Loop 
while ($counter < 101) { // or ($counter <= 100)
    if ($counter % 15 === 0) { // i.e. is divisible by 5 and 3
        echo "FizzBuzz\n";
    } elseif ($counter % 3 === 0) {
        echo "Fizz\n";
    } elseif ($counter % 5 === 0) {
        echo "Buzz\n";
    } else {
        echo "$counter\n";
    }
    // you can also put an 'echo "\n"; here instead of appending \n to the above print statements
    $counter++;
}

// For Loop and ForEach Loop
$output = [];
for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 === 0) {
        array_push($output, "FizzBuzz");
    } elseif ($i % 5 === 0) {
        array_push($output, "Buzz");
    } elseif ($i % 3 === 0) {
        array_push($output, "Fizz");
    } else {
        array_push($output, $i);
    }
}

foreach ($output as $value) {
    echo $value . "\n";
}

// The for loop creates an array of FizzBuzz by iterating through the for conditions, the foreach loop displays it in a nice format.