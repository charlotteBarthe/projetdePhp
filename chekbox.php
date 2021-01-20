<?php



$case=$_POST['chekboxValue'];

foreach ($case as $resultat){
echo "table du " .$resultat;
for ($i=0; $i<=10;$i++){
    echo $i * $resultat;
}
}






