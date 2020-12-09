<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://use.fontawesome.com/5db87a63ea.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet"> 
    <title>Document</title>
</head>
<body>

<?php
    include 'nav.html';
    
?>
<main class="cadre">
<h1>Choisissez la table de multiplication</h1>
            <form method="post" action="" >
                <select name="tabdemu">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            <input type="submit" class="check" value="GO!" >
            </form>

            <?php
                if (empty($aleatoire)) {
                //Sélection d'un nombre aléatoire entre 0 et 10
                    $aleatoire = random_int(0, 10);
                }
                if (!empty($_POST['tabdemu'])) {
                    //On déclare la variable avec ce que l'on sélectionne en fonction du select
                    $chiffre = $_POST['tabdemu'];
                    //On prend le chiffre du select, il est multiplié à un nombre donné aléatoirement
                    $calcul = $chiffre.' × '.$aleatoire.' = <form method="post" action=" " > <input type="text" name="reponse"> <input type="submit" class ="verify" value="Vérifier"/></form><br />';
                    echo $calcul;
                    
                }
                // On ouvre la session pour retenir les infos
                session_start();
                
                if ((isset($chiffre)) && (isset($aleatoire))){
                    $_SESSION['numtable'] = $chiffre;
                    $_SESSION['numaleatoire'] = $aleatoire;
                }
            ?>
                <?php
                //On fait la vérification du calcul
                    if ((!empty($_SESSION['numtable'])) && (!empty($_SESSION['numaleatoire']))) {
                        $correction = $_SESSION['numaleatoire'] * $_SESSION['numtable'];
                //Si la répons est juste
                        if  (isset($_POST['reponse']) && ($_POST['reponse'] == $correction)) {
                            echo "Bravo ! ";
                //Sinon, elle est fausse
                        } elseif (isset($_POST['reponse']) && ($_POST['reponse'] != $correction)){
                            echo "Erreur ... Retente ta chance !";
                        }
                    }
                    

                ?>
        </main>

</body>
</html>