<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculatrice</title>
</head>
<body>

<form method="POST" action="prototyp.php">
    <label>:nombre1</label><br>
    <input type="text" name="n1"><br><br>

    <label>nomber2</label><br>
    <input type="text" name="n2"><br><br>

    <label>:processus</label><br>
    <select name="op">
        <option value="+">+</option>
        <option value="-">_</option>
        <option value="*">x</option>
        <option value="/">/</option>
    </select><br><br>

    <button type="submit" name="submit">Calcule</button>
</form>

</body>
</html>
