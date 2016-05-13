<?php 
try 
{
    	$bdd = new PDO('mysql:host=localhost;dbname=spectasonic','root','');
    	foreach($bdd->query('SELECT * from statistiques') as $row)
    	{
        //print_r($row);
    	} 	
} 

catch (PDOException $e) 
{
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$rep = $bdd->query('SELECT Temperature from statistiques');

$donnees = $rep->fetch();
echo "Première donnée Temperature :" . '<br />';
echo $donnees['Temperature'] . '<br />'; 
$donnees = $rep->fetch();
echo "Deuxième donnée Temperature :" . '<br />';
echo $donnees['Temperature'];
$rep->closeCursor();
?> 