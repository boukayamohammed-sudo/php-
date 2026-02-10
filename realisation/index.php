<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Quiz PHP</title>
</head>
<body>

<h2>Petit Quiz PHP</h2>

<form method="POST" action="realisation.php">

    <p>1 Quelle est la capitale du Maroc ?</p>
    <input type="radio" name="q1" value="Rabat"> Rabat<br>
    <input type="radio" name="q1" value="Casablanca"> Casablanca<br>
    <input type="radio" name="q1" value="Marrakech"> Marrakech<br><br>

    <p>2 5 + 3 = ?</p>
    <input type="text" name="q2"><br><br>

    <p>3 PHP est un langage de :</p>
    <select name="q3">
        <option value="">--Choisir--</option>
        <option value="Frontend">Frontend</option>
        <option value="Backend">Backend</option>
        <option value="Base de données">Base de données</option>
    </select><br><br>

    <input type="submit" value="Envoyer">
</form>

</body>
</html>
