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
$hobbies = "Sports"; 
$pet_peeve = "Slow internet, Overspraying perfume"; 

echo $name . "\n";
echo $age . "\n";
echo $address . "\n";
echo $hobbies . "\n";
echo $pet_peeve . "\n";

// SINGLE-LINE COMMENT

$name = "Your Name";
$age = 25;
$address = "Highview Hills Apalit, Pampanga";
// $hobbies = "Sports";
// $pet_peeve = "Slow internet, Overspraying perfume";

echo $name . "\n";
echo $age . "\n";
echo $address . "\n";

// CONSTANTS

define("NAME", "Sidney John");
define("AGE", 21); 
define("ADDRESS", "Highview Hills Apalit, Pampanga"); 
define("HOBBIES", "Sports"); 
define("PET_PEEVE", "Slow internet, Overspraying perfume,Backstaber"); 

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

*/

</body>
</html>