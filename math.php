<?php
// La fonction à tester
function multiplier($a, $b) {
    return $a * $b;
}

$resultat = multiplier(2, 3);
?>
<!DOCTYPE html>
<html>
<head>
    <title>CI/CD Demo</title>
    <style>
        body { 
            background-color: #2ecc71; /* Un vert plus sympa */
            font-family: sans-serif;
            display: flex; justify-content: center; align-items: center; height: 100vh;
            margin: 0;
        }
        .card { background: white; padding: 30px; border-radius: 15px; box-shadow: 0 10px 20px rgba(0,0,0,0.2); text-align: center; }
        .success { color: #27ae60; font-weight: bold; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Version : 1.1.0</h1>
        <p>Résultat du calcul (2 x 3) : <strong><?php echo $resultat; ?></strong></p>
        <p class="success">✓ Test Unitaire Réussi & Déploiement Automatique OK !</p>
    </div>
</body>
</html>

