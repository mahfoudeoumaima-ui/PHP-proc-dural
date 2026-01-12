<?php
$score = 0;

if (isset($_POST['q1']) && $_POST['q1'] == "4") {
    $score++;
}
if (isset($_POST['q2']) && $_POST['q2'] == "Rabat") {
    $score++;
}
if (isset($_POST['q3']) && $_POST['q3'] == "Langage") {
    $score++;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat</title>
</head>
<body>

<h2>Résultat du Quiz</h2>

<p>Votre score est : <strong><?php echo $score; ?>/3</strong></p>

<?php
if ($score == 3) {
    echo "<p>Excellent </p>";
} elseif ($score == 2) {
    echo "<p>Bien </p>";
} else {
    echo "<p>Peut mieux faire </p>";
}
?>

<a href="index.php">Rejouer</a>

</body>
</html>
