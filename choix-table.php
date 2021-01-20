<?php

$multiple=$_POST["mutiple"];
echo "le nombre choisi" .$multiple;

for($charlotte=0;$charlotte<=10;$charlotte++){
    $resultat=$charlotte*$multiple;


    echo '<ul>
    <li>'.$resultat. '</li>
    </ul>';


}

$ordinateur=$_POST['ecran'];
echo"Bonjour" .$ordinateur;

$age=$_POST['age'];
echo"tu as" .$age. "ans";
<br>

$email=$_POST['email'];
echo"votre email" .$email;

