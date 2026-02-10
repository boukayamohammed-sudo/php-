<?php
// Initialisation du score
$score = 0;

// Vérification que toutes les réponses sont envoyées
if (isset($_POST['q1'], $_POST['q2'], $_POST['q3'])) {

    // Récupération des réponses
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];

    // Validation simple
    if ($q1 == "Rabat") $score++;
    if ($q2 == "8") $score++;
    if ($q3 == "Backend") $score++;

    echo "<h2>Résultat du Quiz</h2>";
    echo "Votre score est : $score / 3<br><br>";

    echo "<p>Réponses correctes :</p>";
    echo "1) Rabat<br>";
    echo "2) 8<br>";
    echo "3) Backend<br>";

} else {
    echo "Merci de répondre à toutes les questions !";
}
?>
