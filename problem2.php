<?php $var = 'Elzero Courses';
/* ====================
 *
 * ===== Exercice 1 =====
 *
 * ==================== */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $var; ?>">
    <title>Welcome To
        <?php echo $var; ?>
    </title>
</head>

<body>
    <h1>
        <?php echo $var; ?>
    </h1>
    <p>Here In
        <?php echo $var; ?>We Provide Front-End And Back-End Courses
    </p>
    <hr>
    <div>
        <?php echo $var; ?> Is The What You Need.
    </div>
    <footer>All Right Reserved To
        <?php echo $var; ?>
    </footer>
</body>

</html>

<?php
/** ====================.
 *
 * ===== Exercice 2 =====
 *
 * ==================== */
echo '<hr>';
$name = 'elzero';
$$name = 'Web';
//  methode 1
echo ${$name};
echo '<br>';
// methode 2
echo $elzero;
echo '<br>';
// methode 3
echo $$name;
echo '<br>';
// methode 4
echo ${'elzero'};
echo '<br>';
// methode 5

/* ====================
 *
 * ===== Exercice 3 =====
 *
 * ==================== */
echo '<hr>';
$a = 200;
$b = &$a;
$a = 100;

echo $b; // 100

echo '<br>';
echo '<hr>';

/* ====================
 *
 * ===== Exercice 4 =====
 *
 * ==================== */

//  إستخدم ال Predefined Variables لتطبع القيم التالية
//
// السطر الثاني Server Name
// السطر الثالث System Root
// السطر الرابع Open SSL Configuration

echo $_SERVER['DOCUMENT_ROOT']; // "C:/xampp/htdocs" => Document Root
echo '<br>';
echo $_SERVER['SERVER_NAME']; // "localhost"
echo '<br>';
echo $_SERVER['WINDIR']; // "C:\WINDOWS"
echo '<br>';
echo $_SERVER['OPENSSL_CONF']; // "C:/xampp/apache/bin/openssl.cnf"

echo '<pre>';
print_r($_SERVER);
echo '</pre>';
echo '<br>';
echo '<hr>';
/* ====================
 *
 * ===== Exercice 5 =====
 *
 * ==================== */

/*
اكتب بداخله 10 كلمات من الكلمات المحجوزة في اللغة والتي لا يمكن إستخدمها في برمجياتك

  10 Words Here
  1 => while
   2 => if
    3 => else
     4 => echo
      5 => print
       6 => foreach
        7 => require
         8 => unset()
          9 => do
           10 => exit()
*/
/* ====================
 *
 * ===== Exercice 6 =====
 *
 * ==================== */

echo '<br>';
echo '<hr>';
echo __LINE__; // aficher les line 127
echo '<br>';
echo __FILE__; // "C:\xampp\htdocs\elzero\index.php"
echo '<br>';
echo __DIR__; // "C:\xampp\htdocs\elzero"
?>