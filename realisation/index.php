<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mini Quiz PHP</title>
</head>
<body>

<h2>Mini Quiz PHP</h2>
<form method="post" action="result.php">
    <p>1) Combien font 2 + 2 ?</p>
    <input type="radio" name="q1" value="3"> 3<br>
    <input type="radio" name="q1" value="4"> 4<br>
    <input type="radio" name="q1" value="5"> 5<br>

    <p>2) Quelle est la capitale du Maroc ?</p>
    <input type="radio" name="q2" value="Casablanca"> Casablanca<br>
    <input type="radio" name="q2" value="Rabat"> Rabat<br>
    <input type="radio" name="q2" value="Marrakech"> Marrakech<br>

    <p>3) PHP est un :</p>
    <input type="radio" name="q3" value="Langage"> Langage de programmation<br>
    <input type="radio" name="q3" value="Navigateur"> Navigateur<br>
    <input type="radio" name="q3" value="Système"> Système d'exploitation<br>

    <br>
    <input type="submit" value="Valider">
</form>
</body>
</html>
