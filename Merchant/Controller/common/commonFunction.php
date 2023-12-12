
<?php

// This function is used for token
function gettoken($size = 128)
{
  $charcter = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklimnopurstuvwxyz";
  $randomString = "";
  for ($i = 0; $i < $size; $i++) {
    $index = rand(0, strlen($charcter) - 1);
    $randomString .= $charcter[$index];
  }
  return $randomString;
}


// Function to generate OTP
function generateNumericOTP($n =4)
{

  // Take a generator string which consist of
  // all numeric digits
  $generator = "1357902468";

  // Iterate for n-times and pick a single character
  // from generator and append it to $result

  // Login for generating a random character from generator
  //	 ---generate a random number
  //	 ---take modulus of same with length of generator (say i)
  //	 ---append the character at place (i) from generator to result

  $result = "";

  for ($i = 1; $i <= $n; $i++) {
    $result .= substr($generator, (rand() % (strlen($generator))), 1);
  }

  // Return result
  return $result;
}

// Main program
// $n = 6;
// print_r(generateNumericOTP($n));




?>