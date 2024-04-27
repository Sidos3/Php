<?php
/* ====================
 *
 * ===== Exercice 1 =====
 *
 * ==================== */
// $index = 10;
// for ($i = $index; $i >= 1; $i--) {
//     echo " $i <br>";
// }
// Needed Output
// 10
// 9
// 8
// 7
// 6
// 5
// 4
// 3
// 2
// 1

/* ====================
 *
 * ===== Exercice 2 =====
 *
 * ==================== */

// 1 => for

$index = 0;
// for ($i = $index; $i <= 20; $i++) {
//     if ($i <> 0) {
//         if ($i % 2 == 0 ) {
//             echo " $i <br>";
//         }
//     }
// }
// 2 => While
// while ($index <= 20) {
//     if ($index % 2 == 0 && $index <> 0) {
//         echo " $index <br>";
//     }
//     $index++;
// }

// 2 => Do While
// do {
//     if ($index % 2 == 0 && $index <> 0) {
//         echo " $index <br>";
//     }
//     $index++;
// } while ($index <= 20);
// Needed Output
// 2
// 4
// 6
// 8
// 10
// 12
// 14
// 16
// 18
// 20

/* ====================
 *
 * ===== Exercice 3 =====
 *
 * ==================== */
// $num = 2;
// while ($num < 520) {
//     echo "$num <br>";
//     $num *= 2;
// }

// Needed Output
// 1
// 4
// 10
// 22
// 46
// 94
// 190
// 382
// $start = 10;
// $end = 0;
// $stop = 3;

// for ($i = $start; $i >= $stop; $i--) {
//     if ($i == $start) {
//         echo " $i <br>";
//     } else {
//         echo "$end$i<br>";
//     }
// }
// Needed Output
// 10
// 09
// 08
// 07
// 06
// 05
// 04
// 03
// ta7adiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii
// $start = 0;
// $mix = [1, 2, 3, "A", "B", "C", 4];

// for (; $start < count($mix); $start++) {

// if ($start == 0 || $start==1) {
//     continue;
// }

//     echo "$start<br>";
//     if ($start == 4) {
//         break;
//     }
// }
// Output
// 2
// 3
// 4

// $money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
// foreach ($money as $name => $number) {
//     echo "The Name Is $name And I Need $number Pound From Him <br/>";
// }
// Output
// "The Name Is Ahmed And I Need 100 Pound From Him"
// "The Name Is Sayed And I Need 150 Pound From Him"
// "The Name Is Osama And I Need 100 Pound From Him"
// "The Name Is Maher And I Need 250 Pound From Him"
// $mix = [1, 2, "A", "B", "C", 3, 4];
// foreach ($mix as $value) {
//     if ($value == "A" || $value == "B" || $value == "C") {
//         continue;
//     }

//     echo "$value<br/>";

// }
// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"
// $nums = [1, 13, 12, 20, 51, 17, 30];
// foreach ($nums as $num_paire) {
//     if ($num_paire % 2 == 0) {
//         echo $num_paire / 2 . "<br/>";
//     }
// }
// Output
// 6
// 10
// 15
// $help_num = 3;
// $nums = [4, 5, 6, 1, 2, 3];
// $names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
// print_r($names[1]);
// echo"<BR>";
// print_r($names[2]);




 // Output
 // "Sayed"
 // "Osama" 

        $help_num = 4;
        $nums = [2, 4, 5, 6, 10];
        foreach($nums as $num){
        echo "$num+" . $nums[$num];


}

// Output
// "2 + 10 = 12"
// "4 + 6 = 10"
// "5 + 5 = 10"
// "6 + 4 = 10"    
// "10 + 2 = 12"