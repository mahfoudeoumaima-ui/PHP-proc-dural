<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculatrice</title>
   <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    padding-top: 50px;
}
h1 {
    color: #333;
    text-align: center;
    margin-bottom: 20px;
    font-size: 2em;
}
form {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    width: 300px;
}
input, select {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
button {
    width: 100%;
    padding: 10px;
    background-color: pink; /* لون الزر */
    color: white;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
button:hover {
    background-color: #ff66b2; /* hover effect */
}
p {
    text-align: center;
    font-weight: bold;
    margin-top: 15px;
}
p.resultat {
    color: green;
}
p.error {
    color: red;
}
</style>
</head>
<body>
    <h1>calculatrice</h1>
   
    <form action="" method="post">
        <input id="nm1" name="nm1" type="number" placeholder="entre le 1er nombre" required>
        <input id="nm2" name="nm2" type="number" placeholder="entre le 2eme nombre" required>
        <select name="operation" id="operation">
            <option value="">choise le signe</option>
            <option value="+">addition (+)</option>
            <option value="-">sustraction (-)</option>
            <option value="/"> divistion (/)</option>
            <option value="*">multiblication (*)</option>
        </select>
        <button type="submit">calculer</button>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nm1 = $_POST["nm1"];
    $nm2 = $_POST["nm2"];
    $operation = $_POST["operation"];  

$errors = [];
if($nm1 === "" || $nm2 === "" || $operation === "") {
    echo "tous les champs sont obligatoires.";
    exit;
}
if (!is_numeric($nm1) || !is_numeric($nm2)) {
   echo "les nombres doivent etre numériques.";
   exit;
}
if ($operation === "/" && $nm2 == 0){
    echo "division par zéro impossible !";
    exit;
}
function calcul ($n,$m, $cal){
    switch($cal) {
        case "+" : return $n + $m;
        case "-" : return $n - $m;
        case "*" : return $n * $m;
        case "/" : return $n / $m;
    }
}
 $resultat = calcul($nm1, $nm2, $operation);
    echo "Résultat : $resultat";
}
?>
</body>
</html>