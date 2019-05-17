<?php 
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=refrigepeche;charset=utf8', 'root', '');

}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM BASE');

$donnees = $reponse->fetch();
while($donnees = $reponse->fetch()){
echo $donnees['NCODE'];
$bdd->exec('UPDATE BASE SET stock = '.RAND(10,35).' WHERE NCODE = '.$donnees['NCODE'].'');
echo"<br />";
}

