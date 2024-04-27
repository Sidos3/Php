<?php
/* ====================.
 *
 * ===== Exercice 1 =====
 *
 * ==================== */
// $a = 100;
// $b = 200;
// $c = 100;

/*
  Check That:
  Variable "b" Larger Than Variable "a"
  Variable "a" Identical To Variable "c"
  Variable "a" Plus Variable "c" Identical To Variable "b"
*/
// if ($b > $a) {
//     if ($a == $c) {
//         if ($a + $c == $b) {
//             echo 'YES';
//         }
//     }
// }
echo '<br>';
/* ====================.
 *
 * ===== Exercice 2 =====
 *
 * ==================== */
// Test Case 1
// $a = 100;
// $b = 200;
// $c = 300;

// if ($a < $b && $a < $c) {
//     echo 'A Is Not Larger Than B Or C';
// }
// A Is Not Larger Than B Or C
// Test Case 2
// $a = 200;
// $b = 100;
// $c = 300;
// if ($a > $b || $a < $c) {
//     echo 'A Is Larger Than B';
// }
// A Is Larger Than B
// Test Case 3
// $a = 200;
// $b = 200;
// $c = 100;
// if ($a > $c || $a > $b) {
//     echo 'A Is Larger Than c';
// }
// A Is Larger Than c
/* ====================.
 *
 * ===== Exercice 3 =====
 *
 * ==================== */
// Input Name "Osama"

// Needed Output
// "The Request Method Is Post And Username Is Osama"
// "This Username Osama Is Admin"
// $admins = ['Osama', 'Ahmed', 'Sayed'];


// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     if ('user' == $admins) {
//         echo $_POST["The Request Method Is Post And Username Is ".$admins];
//         echo'<br>';
//         echo $_POST["This Username".$admins  ."Is Admin"];
//     }
// }

// $admins = ['Osama', 'Ahmed', 'Sayed'];

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//   $username = $_POST['user'];
//   if (in_array($username, $admins)) {
//     echo "The Request Method Is Post And Username Is $username <br>";
//     echo "This Username $username Is Admin";
//   } else {
//     echo "This Username $username Is Not Admin";
//   }
// }

// <!-- // <!DOCTYPE html>
// // <html lang="en">

// // <head>
// //   <meta charset="UTF-8">
// //   <meta name="viewport" content="width=device-width, initial-scale=1.0">
// //   <title>Document</title>
// // </head>

// // <body>
// //   <form action="" method="POST">
// //     <input type="text" name="user">
// //     <input type="submit" value="Send">
// //   </form>
// // </body>

// // </html> -->
/* ====================.
 *
 * ===== Exercice 4 =====
 *
 * ==================== */

$a = 30;
$b = 20;
$c = 10;

$result = $a + $b === $c ? "A + B = C" : ($a + $c === $b ? "A + C = B" : ($b + $c === $a ? "B + C = A" : "The End"));

echo $result;
// Output
// "B + C = A"
echo '<hr>';
/* ====================.
 *
 * ===== Exercice 5 =====
 *
 * ==================== */
$name = "Osama";
$age = 40;
$country = "Egypt";

// if ($age > 18) {
//   echo "The Age Is Good To Go<br>";
//   if (gettype($name) === "string") {
//     echo "The Name Is Good To Go<br>";
//     if ($country === "Egypt") {
//       echo "The Country Is Good To Go<br>";
//     }
//   }
// }

echo ($age > 18) ? "The Age Is Good To Go<br>" . ((gettype($name) === "string") ? "The Name Is Good To Go<br>" . (($country === "Egypt") ? "The Country Is Good To Go<br>" : "") : "") : "";

// Needed Output
// "The Age Is Good To Go"
// "The Name Is Good To Go"
// "The Country Is Good To Go"
echo '<hr>';
/* ====================.
 *
 * ===== Exercice 6 =====
 *
 * ==================== */
$genre = "RPG";

echo ($genre === "RPG") ? "I Recommend Ys Games" : ($genre === "Hack And Slash" ? "I Recommend Castlevania Games" : ($genre === "FPS" ? "I Recommend Uncharted Games" : ($genre === "Platform" ? "I Recommend Megaman Games" : "I Recommend Shadow Of Mordor And Shadow Of War")));

// } elseif ($genre === "Hack And Slash") {

//   echo "I Recommend Castlevania Games";

// } elseif ($genre === "FPS") {

//   echo "I Recommend Uncharted Games";

// } elseif ($genre === "Platform") {

//   echo "I Recommend Megaman Games";

// } elseif ($genre === "Puzzle") {

//   echo "I Recommend Megaman Games";

// } else {

//   echo "I Recommend Shadow Of Mordor And Shadow Of War";

// }

// // Needed Output
// "I Recommend Castlevania Games"

// $genre = "Hack And Slash";
// switch ($genre) {
//   case 'RPG':
//     echo "I Recommend Ys Games";
//     break;
//   case 'Hack And Slash':
//     echo "I Recommend Castlevania Games";
//     break;
//   case 'FPS':
//     echo "I Recommend Uncharted Games";
//     break;
//   case 'Platform':
//     echo "I Recommend Megaman Games";
//     break;
//   case 'Puzzle':
//     echo "I Recommend Megaman Games";
//     break;
//   default:
//     echo "I Recommend Shadow Of Mordor And Shadow Of War";
//     break;
// }
echo '<hr>';
/* ====================.
 *
 * ===== Exercice 7 =====
 *
 * ==================== */
$num_one = 23;
$num_two = 5;
$op = "*";
switch ($op) {
  case '+':
    echo $num_one + $num_two;
    break;
  case '-':
    echo $num_one - $num_two;
    break;
  case '*':
    echo $num_one * $num_two;
    break;
  case '/':
    echo (int) ($num_one / $num_two);
    echo '<br>';
    echo $num_one % $num_two;
    break;
  default:
    echo "Unknown Operation";
    break;
}
/* ====================.
 *
 * ===== Exercice 8 =====
 *
 * ==================== */
// $day = "Sat";

// switch($day) {
//   case "Sat":
//   case "Sun":
//   case "Mon":
//     echo "We Are Open All The Day";()
//     break;
//   case "Tue":
//   case "Wed":
//     echo "We Are Open From 08:12";
//     break;
//   case "Thu":
//   case "Fri":
//     echo "We Are Closed";
//     break;
//   default:
//     echo "Unknown Day";
// }
// with if else 
echo '<hr>';
$day = "Sat";
if ($day == "Sat" || $day == "Sun" || $day == "Mon") {
  echo "We Are Open All The Day";
} elseif ($day == "Tue" || $day == "Wed") {
  echo "We Are Open From 08:12";
} elseif ($day == "Thu" || $day == "Fri") {
  echo "We Are Closed";
} else {
  echo "Unknown Day";
}
