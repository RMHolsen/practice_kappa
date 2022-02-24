<?php 
// now without the HTML bit because it's easier to see what's going on here
// for this form there is one field submitted with the name 'url'
$validation_error = "";
$user_url = "";
$form_message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_url = $_POST["url"]; 
    if (filter_var($user_url, FILTER_VALIDATE_URL)) {
        $form_message = "Thank you for your submission.";
    } else {
        $validation_error = "This is an invalid URL.";
        $form_message = "Please retry and submit your form again.";
    }
}

// for this form there is one field submitted with the name 'email'

$validation_error = "";
$user_email = "";
$form_message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_email = $_POST["email"];
    if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        $form_message = "Thank you for signing up.";
    } else {
        $validation_error = "This is not a valid email address.";
        $form_message = "Please re-enter your email and submit your form again.";
    }
}

function validateAdult ($age) {
    $options = ["options" => ["min_range" => 18, "max_range" => 124]];
    if (filter_var($age, FILTER_VALIDATE_INT, $options)) {
        echo "You are $age years old.";
    } else {
        echo "That is not a valid age.";
    }
}

// something else I forget what was supposed to go in here
$message = "";
$month_error = "";
$day_error = "";
$year_error = "";


// now with added Regex

$feedback = "";
$success_message = "Thank you for your donation!";
$error_message = "* There was an error with your card. Please try again.";

$card_type = "";
$card_num = "";
$donation_amount = "";
$vi_regex = "/4[0-9]{12}([0-9]{3})?([0-9]{3})?/";
$mc_regex = "/5[1-5][0-9]{14}/";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card_type = $_POST["credit"];
    $card_num = $_POST["card-num"];
    $donation_amount = $_POST["amount"];
    if (strlen($card_num) < 100) {
      if ($card_type === "mastercard") {
        if (preg_match($mc_regex, $card_num) === 1) {
          $feedback = $success_message;
        } else {
          $feedback = $error_message;
        }
      } elseif ($card_type === "visa") {
        if (preg_match($vi_regex, $card_num) === 1) {
          $feedback = $success_message;
        } else {
          $feedback = $error_message;
        }
      }
    } else {
      $feedback = $error_message;
    }
}

// validating against back-end data 
// in this case a database of phone numbers, and writing to that database, etc.
$contacts = ["Susan" => "5551236666", "Alex" => "7779991717", "Lily" => "8181117777"];  
$message = "";
$validation_error = "* Please enter a 10-digit North American phone number.";
$name = "";
$number = "";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = $_POST["name"];
   $number  = $_POST["number"];
   // Write your code here:
   if (strlen($number) < 30) {
     $new_number = preg_replace("/[^0-9]/", "", $number);
     if (strlen($new_number) === 10) {
       $contacts[$name] = $new_number;
       $message = "Thanks ${name}, we'll be in touch.";
     } else {
       $message = $validation_error;
     }
   } else {
     $message = $validation_error;
   }
 }

 // and once more with routing

 $validation_error = "";
$username = "";
$users = ["coolBro123" => "password123!", "coderKid" => "pa55w0rd*", "dogWalker" => "ais1eofdog$"];

 if ($_SERVER["REQUEST_METHOD"] === "POST") {
   $username = $_POST["username"];
   $password  = $_POST["password"];
   if (isset($users[$username]) && $users[$username] === $password){
     header("Location: success.html");
     exit;
   } else {
     $validation_error = "* Incorrect username or password.";
   }
 }
