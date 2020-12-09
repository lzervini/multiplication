<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="style.css">
        
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet"> 
</head>
<body>
<?php
    include 'nav.html';
?>
    <main>
        <div class="cadre">
        <h1>Table de multiplication de 3 :</h1>
        <?php
$table = 3;
$i = 0;   
$result = $i * $table;
while ($i < 11) {
    echo $i . ' x ' . $table . ' = ' . $i * $table . "<br>";
    $i++;
} 
?> 



</div>
    </main>
    </body>
</html>