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
<h1>Choisissez une ou plusieurs table :</h1>
<form action="" method="post" class="table3" >
<div class="">
    <div class="number">
	<?php
$a = array();
if (isset($_POST["table1"])) {
    $a[1]=1;
}
        else { $a[1]=0;
    }

if (isset($_POST["table2"])) {
    $a[2]=2;
}
    else { $a[2]=0;
        }
        
if (isset($_POST["table3"])) {
    $a[3]=3;
}
    else { $a[3]=0;
        }
                
if (isset($_POST["table4"])) {
    $a[4]=4;
}
    else { $a[4]=0;
        for ($i=1;$i<11;$i++)
           {
           echo" <input type='checkbox' name='table".$i."' value=".$i." /> ";
          echo " ".$i." <br />";
          }
        }
                
if (isset($_POST["table5"])) {
    $a[5]=5;
}
    else { $a[5]=0;
        }
                
if (isset($_POST["table6"])) {
    $a[6]=6;
}
    else { $a[6]=0;
        }
                
if (isset($_POST["table7"])) {
    $a[7]=7;
}
    else { $a[7]=0;
        }
                
if (isset($_POST["table8"])) {
    $a[8]=8;
}
    else { $a[8]=0;
        }
                
if (isset($_POST["table9"])) {
    $a[9]=9;
}
    else { $a[9]=0;
        }
                
if (isset($_POST["table10"])) {
    $a[10]=10;
}
    else { $a[10]=0;
        }



 
 
for($x=1;$x<11;$x++)
 {
 if ($a[$x]!=0)
  {
  echo "</div><div>Table de : ".$a[$x]."</br>";

  for($i=1;$i<11;$i++)
		{
   $r=$a[$x]*$i;
   echo " </br> ".$a[$x]."  X  ".$i."  =  $r  " ;
		}
  echo "<br /></div>";
  }
 }

?>

    </div>
    <div>
    <input class ='submit' type="submit" value="Valider" />
    </div>
    </form>
</main>
</body>
</html>