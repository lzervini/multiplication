<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet"> 
    
    <title>Document</title>
</head>
<body>
<?php
    include 'nav.html';
?>
    <main class="cadre">
    <h1>Répondez à 5 multiplications tirées au hasard !</h1>
    <form action="" method="post">
                <?php
                for ($i = 1; $i <= 5; $i++)
                {
                    echo "<div class='separator'><h2>Question n° $i </h2><br>";
                //On crée deux variables aléatoire
                    $number1 = random_int(1,10);
                    $number2= random_int(1,10);
                    $resultat= $number1*$number2;
                    echo "$number1 x $number2 = <input type='text' name='reponse$i' class=''><input type='hidden' name='resultat$i' value='$resultat'></div>";
                    
                }
                echo "<br><input type='submit' class='submit' name='verify' value='Je valide !' class='afficher'>";
                    if(isset($_POST['verify'])){
                        $score=0;
                        for($i = 1; $i <= 5; $i++){
                            if ($_POST["reponse".$i]== $_POST['resultat'.$i]){
                                $score++;
                            }
                        
                        }
                        echo "<p>Tu as eu : <span> $score</span> /5</p>";
                    }
                ?>
         </form>    
</main>
</body>
</html>