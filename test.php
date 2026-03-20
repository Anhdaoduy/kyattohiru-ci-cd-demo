<?php
include 'math.php';

echo "Démarrage des tests unitaires...\n";

$testValue = multiplier(2, 3);
$expected = 6;

if ($testValue === $expected) {
    echo "TEST RÉUSSI : 2 * 3 est bien égal à $expected\n";
    exit(0); // Succès
} else {
    echo "TEST ÉCHOUÉ : Attendu $expected, obtenu $testValue\n";
    exit(1); // Erreur ! GitHub Actions arrêtera le job ici.
}
?>
