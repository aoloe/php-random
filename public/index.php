<?php declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// create a password with unique chars with a specific length and
// a given number of uppercases, numbers, and special (safe) chars

// TODO: if we want also longer passwords, we can str_repeat() the letters (and the numbers) until they are more than the count of chars needed.
$letters = str_shuffle('abcdefghijklmnopqrstuvwxyz');
$numbers = str_shuffle('0123456789');

$special_safe = str_shuffle('-+=&%!?$');
$special = $special_safe . str_shuffle('_#^*()_{}|:<>');

$length = 12;
$upppercase_count = 2;
$numbers_count = 2;
$special_count = 2;
$special_save_only = false;
$letters_count = $length - $numbers_count - $special_count;

$password = substr($letters, 0, $letters_count);
$password = str_shuffle(
    strtoupper(substr($password, 0, $upppercase_count)) . substr($password, $upppercase_count) .
    substr($numbers, 0, $numbers_count) .
    substr($special, 0, $special_count)
);
?>

<!DOCTYPE html>
<html>
<body>
<p><?= $password ?></p>
</body>
</html>
