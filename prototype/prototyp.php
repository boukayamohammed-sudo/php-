<?php

// function 
function calculer($a, $b, $op) {
    switch ($op) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b == 0) {
                return "9isma 3ela 0";
            } else {
                return $a / $b;
            }
        default:
            return "l3amaliya khatea";
    }
}
 
if (isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['op'])) {

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $op = $_POST['op'];

    if (is_numeric($n1) && is_numeric($n2)) {
        $resultat = calculer($n1, $n2, $op);
        echo "rèsultat " . $resultat;
    } else {
        echo "rir lar9am";
    }

} else {
    echo "3amar kolxi";
}

?>
