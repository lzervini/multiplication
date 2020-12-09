<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
    <title>Table de multiplication</title>
</head>
<body>
<?php
    include 'nav.html';
?>
<main class=cadre>
    <h1>Choisissez une table de multiplication parmi les suivantes:</h1>

    
<form action="" method="post">
  <select name="tabdemu">
    <option value="1">Table de 1</option>
    <option value="2">Table de 2</option>
    <option value="3">Table de 3</option>
    <option value="4">Table de 4</option>
    <option value="5">Table de 5</option>
    <option value="6">Table de 6</option>
    <option value="7">Table de 7</option>
    <option value="8">Table de 8</option>
    <option value="9">Table de 9</option>
    <option value="10">Table de 10</option>
  </select>
  <div>
    <button type="submit" name="result" class="submit"> Valider </button>
  </div>
</form>
<?php

			if(isset($_POST['tabdemu'])){
				$tabdemu = $_POST['tabdemu'];
				for($i = 0; $i<11; $i++){
					echo $tabdemu. "x" .$i. "=" .$tabdemu * $i. "<br />";
				}
			}

?>



    </main>
</body>
</html>