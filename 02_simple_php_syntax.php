<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Activity 2</title>
</head>

<body>
  
// VARIABLES

<?php 
$name = "Sidney John";
$age = 21;
$address = "Highview Hills Apalit, Pampanga";
$hobbies = "Sports, Singing, Music"; 
$pet_peeve = "Slow Internet, Overspraying Perfume, Backstabber"; 

echo $name . "\n";
echo $age . "\n";
echo $address . "\n";
echo $hobbies . "\n";
echo $pet_peeve . "\n";

// SINGLE-LINE COMMENT

$name = "Your Name";
$age = 25;
$address = "Highview Hills Apalit, Pampanga";
// $hobbies = "Sports, Singing, Music";
// $pet_peeve = "Slow Internet, Overspraying Perfume, Backstabber";

echo $name . "\n";
echo $age . "\n";
echo $address . "\n";

// CONSTANTS

define("NAME", "Sidney John");
define("AGE", 21); 
define("ADDRESS", "Highview Hills Apalit, Pampanga"); 
define("HOBBIES", "Sports, Singing, Music"); 
define("PET_PEEVE", "Slow Internet, Overspraying Perfume, Backstabber"); 

echo NAME . "\n";
echo AGE . "\n";
echo ADDRESS . "\n";
echo HOBBIES . "\n";
echo PET_PEEVE . "\n"; 

// VAR_DUMP

var_dump(NAME);
var_dump(AGE);
var_dump(ADDRESS);
var_dump(HOBBIES);
var_dump(PET_PEEVE);
?>

// MULTI-LINE COMMENT

/*
* Slow Internet frustrates me when doing online activities because it causes a delay in a work.
* Overspraying Perfume annoys me because for me less is more when it comes to perfume.
* Backstabber irritates me because it creates a sense of untrustworthiness and betrayal to the person that he/she is talking about.
*/

</body>
</html>
