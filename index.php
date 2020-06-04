<?php
$name = 'Dupont';

$lastname = 'Doe';
$firstname = 'John';
$age = 18;

$km = 1;
$km = 3;
$km = 125;

/*


echo '<h2>Exercice 3</h2>';
$km = 1;
echo $km . ' ';
$km = 3;
echo $km . ' ';
$km = 125 . ' ';
echo $km;

echo '<h2>Exercice 4</h2>';
$string = 'Je suis une string';
$int = 27;
$float = 72.45;
$bool = true;
echo $string . ' ' . $int . ' ' . $float . ' ' . $bool;

echo '<h2>Exercice 5</h2>';
$int2 = null;
echo $int2;
$int2 = 12;
echo $int2;

echo '<h2>Exercice 6</h2>';
$name = 'Jane';
echo 'Bonjour ' . $name . ', comment vas-tu ?';

echo '<h2>Exercice 7</h2>';
$lastname = 'Madson';
$firstname = 'Gabriel';
$age = 26;
echo 'Bonjour ' . $lastname . ' ' . $firstname . ', tu as ' . $age . ' ans.';

echo '<h2>Exercice 8</h2>';
*/
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP</title>
</head>

<body>

    <h1>Exercices PHP</h1>

    <h2>Exercice 1</h2>
    <p><?php echo $name; ?></p>

    <h2>Exercice 2</h2>
    <p><?= $lastname . ' ' . $firstname . ' ' . $age; ?></p>

    <h2>Exercice 3</h2>
    <p><?= $km; ?></p>


</body>
</html>