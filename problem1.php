<?php
/** ====================.
 *
 * ===== Exercice 1 =====
 *
 * ==================== */
echo (int) 15.2 + (int) 14.7 + (int) (10.5 + 10.5); // 50
echo '<br>';
echo gettype((int) 15.2 + (int) 14.7 + (int) (10.5 + 10.5)); // Integer
echo '<br>';

/** ====================.
 *
 * ===== Exercice 2 =====
 *
 * ==================== */
$var = 100;

// Method One
echo gettype($var);
// Method Two
echo '<br>';
var_dump($var);
// Method Three => Optional
echo is_int($var);
echo '<br>';
/* ====================
 *
 * ===== Exercice 3 =====
 *
 * ==================== */

echo 'Hello "Elzero" \\\\ """ We Love "$$PHP"';
echo '<br>';
// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"
/* ====================
 *
 * ===== Exercice 4 =====
 *
 * ==================== */
echo nl2br("We \n Love \n Elzero \n Web \n School");
echo '<br>';
// Needed Output
// We
// Love
// Elzero
// Web
// School
/* ====================
 *
 * ===== Exercice 5 =====
 *
 * ==================== */

// Needed Output
echo nl2br(<<<'now'
Hello "'Elzero'" We Love $Programming$
Languages Specially "PHP"
now);

echo '<br>';
/** ====================.
 *
 * ===== Exercice 6 =====
 *
 * ==================== */
$something = 'Programming';

echo <<<code
Hello \PHP\
We Love $something 
code;

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
// Hello \PHP\ We Love Programming
echo '<br>';
/* ====================
 *
 * ===== Exercice 7 =====
 *
 * ==================== */

echo (int) (bool) 'Hello PHP';
echo '<br>';
echo gettype((int) (bool) 'Hello PHP');

// Needed Output
// 1
// integer

echo '<br>';
/* ====================
 *
 * ===== Exercice 8 =====
 *
 * ==================== */
echo '<pre>';
print_r([
    'frontend' => [
        'htlm',
        'css',
        'js' => [
            'vuejs' => [
                2 => 'v2',
                3 => 'v3',
            ],
            'reactjs',
            'sevlet',
        ],
    ],
    'backend' => [
        'php',
        'mysql',
        'secruity',
    ],
    'git',
    'github',
    'testing' => [
        'unit testing',
        'end to end',
        'integration',
    ],
]);
echo '</pre>';
