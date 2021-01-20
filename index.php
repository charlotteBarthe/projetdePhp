<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    



  
?>

<h1>afficher la table de 3</h1>
<a href="table-de-3.php">afficher la table de 3</a>

<form action="choix-table.php" method="post">
<label>choix de la table</label>
<select name="mutiple">
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
<input type="text"name="ecran"/>
<input type="text"name="age"/>
<input type="text"name="email"/>
<button type="submit">
valider
</button>

</form>

<?php

//contenue de la global p_POST

print_r($_POST);
?>

<form action="chekbox.php" method="post">
<p>1</p>
<input type="checkbox" name="chekboxValue[]" value="1"/>

<p>2</p>
<input type="checkbox" name="chekboxValue[]" value="2"/>

<p>3</p>
<input type="checkbox" name="chekboxValue[]" value="3"/>

<p>4</p>
<input type="checkbox" name="chekboxValue[]" value="4"/>

<p>5</p>
<input type="checkbox" name="chekboxValue[]" value="5"/>

<p>6</p>
<input type="checkbox" name="chekboxValue[]" value="6"/>

<p>7</p>
<input type="checkbox" name="chekboxValue[]" value="7"/>

<p>8</p>
<input type="checkbox" name="chekboxValue[]" value="8"/>

<p>9</p>
<input type="checkbox" name="chekboxValue[]" value="9"/>

<p>10</p>
<input type="checkbox" name="chekboxValue[]" value="10"/>





<input type="submit" name="envoie" Value="envoyer">
    

</form>

}

<form action="index.php" method="post">
<label>entrer un animal
</label>
<input type="text" name="chat"/>
<button type="submit">cliquer</button>

</form>

<?php

echo

$_POST['chat'];

?>


<?php

    $charlotte=3;
    for ($i=0;$i<11;$i++) {
        echo $i*charlotte;
        echo"<br>";
    

//verifie qu'il provient d'un formulaire/
//if ($_SERVER["REQUEST_METHOD"]) == "POST") {
   // $name = $_POST["name"];
    //$email = $_POST["email"];

    //if (!isset($name)){
        //die ("s'il vous plait entrer votre nom");

    //}

//$server = $_SERVER['REMOTE_ADDR'];
//echo $server;
//var_dump($server);
//$date = date("d-m-Y à h:i:s");

//echo "nous sommes le : " .$date;

//class simpleClass 
//{
    //déclaration d'une propriété
    //public $var = 'une valeur par défaut';

    //déclaration des méthodes
    //public function displayVar() {
    //    echo$this -> var;
  //  }
//}

//$txt = "hello world!";
//$x = 5;
//$y = 10.5;

//echo "<a href=\"page.php\">ici</a>";

//for ($i=0; $i < 10; $i ++)
//{
    //for ($j=0; $j < 10; $j++)
    //echo $i*$j;

//}

?>

    <?php
    $nom=$_POST['nom'];
    var_dump($nom);
    $age=$_POST['age'];
    var_dump($age);
    echo"coucou" .$nom. "tu as" .$age."ans";

    //$planetes = ['mercure', 'venus', 'terre', 'mars', 'saturne', 'uranus', 'neptune',];

    //echo $planetes[0]; 
    //cho $planetes [2];



    //tableau de questions

    //$tableau_de_questions = ["quelle langue est le client-serveur? , quel est le SGBDR le plus populaire?" ,
    //"de quelle couleur est la pomme?"];
    
?>
</body>
    </html>