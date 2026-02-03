<?php
function testlocale() {
    $message = "salut";
    echo $message;
}
testlocale();
echo $message;
//===============================//

$site = "MonSite";

function afficherSite() {
    global $site; 
    echo $site;
}

afficherSite(); 

//======================================//
function incrementer() {
    static $compteur = 0; 
    $compteur++;
    echo $compteur;
}

incrementer(); 
incrementer(); 
incrementer(); 
?>