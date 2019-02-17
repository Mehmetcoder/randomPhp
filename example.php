<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php

require_once 'random.class.php';

$random = new Random();

echo 'Random things that can produce:<br><code>';

echo 'Random number: ' . $random->number();
echo '<br>';
echo 'Random float: ' . $random->comma();
echo '<br>';
$color = $random->color();
echo 'Random color: <span style="background-color:' . $color . ';">' . $color . '</span>';
echo '<br>';
echo 'Random date: ' . $random->date('Y-m-d H:i:d');
echo '<br>';
echo 'Random letter: ' . $random->letter();

echo '</code>';
?>