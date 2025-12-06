<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations PHP | TP6</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            background-color: #f4f4f9; 
            color: #333; 
            line-height: 1.6; 
            padding: 20px; 
        }
        
        .container { 
            max-width: 800px; 
            margin: 0 auto;
            background: white; 
            padding: 25px; 
            border-radius: 8px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        }
        
        h1 { 
            color: #3498db; 
            border-bottom: 2px solid #3498db; 
            padding-bottom: 10px; 
        }
        
        h2 { 
            color: #2ecc71; 
            margin-top: 30px; 
        }
        
        p { 
            margin-bottom: 8px; 
        }
        
        .code { 
            background-color: #eee; 
            padding: 2px 5px; 
            border-radius: 3px; 
            font-family: monospace; 
        }
        
        ul { 
            list-style: disc; 
            margin-left: 20px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Introduction au PHP : Affichage de Variables</h1>
        
        <h2>Variables de base</h2>
        <?php
            $etablissement = "Institut Supérieur de Technologie Appliquée (ISTA)";
            $module = "Développement Web Avancé (TP6)";
            $annee = "2025/2026";
            $message_bienvenue = "Ceci est la page d'introduction à PHP.";
            
            $nombre_a = 50;
            $nombre_b = 15;
            $annee_courante = 2025;

            echo "<p><strong>Nom de l'établissement :</strong> <span class='code'>" . $etablissement . "</span></p>";
            echo "<p><strong>Module :</strong> <span class='code'>" . $module . "</span></p>";
            echo "<p><strong>Année Académique :</strong> <span class='code'>" . $annee . "</span></p>";
            echo "<p><strong>Message :</strong> " . $message_bienvenue . "</p>";
        ?>
        
        <h2>Exemples de calculs PHP</h2>
        <?php
            $resultat_addition = $nombre_a + $nombre_b;
            $resultat_multiplication = $nombre_a * $nombre_b;
            $resultat_soustraction = $nombre_a - 20;
            $resultat_division = 100 / 4;
            
            echo "<p>Exemples de variables numériques :</p>";
            echo "<ul>";
            echo "<li>Nombre A initial : <span class='code'>$nombre_a</span></li>";
            echo "<li>Nombre B initial : <span class='code'>$nombre_b</span></li>";
            echo "<li>Année courante : <span class='code'>$annee_courante</span></li>";
            echo "</ul>";

            echo "<p><strong>Résultat de l'addition ($nombre_a + $nombre_b) :</strong> <span class='code'>" . $resultat_addition . "</span></p>";
            echo "<p><strong>Résultat de la multiplication ($nombre_a × $nombre_b) :</strong> <span class='code'>" . $resultat_multiplication . "</span></p>";
            echo "<p><strong>Résultat de la soustraction ($nombre_a - 20) :</strong> <span class='code'>" . $resultat_soustraction . "</span></p>";
            echo "<p><strong>Résultat de la division (100 / 4) :</strong> <span class='code'>" . $resultat_division . "</span></p>";
        ?>

        <p style="margin-top: 25px;"><a href="index.html">Retour à la Calculatrice (HTML/JS)</a></p>
    </div>
</body>
</html>