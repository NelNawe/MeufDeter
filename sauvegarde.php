<?php



// Cette condition est mise pour le remplissage de tous les champs

if(isset($_POST['Nom']) and isset($_POST['Adresse_mail']) and isset($_POST['Message']) and isset($_POST['Activité']) and $_POST['Nom'] != "" and $_POST['Adresse_mail'] != "" and $_POST['Message'] != "" and $_POST['Activité'] != "")



{



//Nous recupérons les champs

$Nom = htmlspecialchars($_POST['Nom']);

$Adresse_mail = htmlspecialchars($_POST['Adresse_mail']);

$Message = htmlspecialchars($_POST['Message']);

$Activité = htmlspecialchars($_POST['Activité']);



//connexion avec la base

include "bdd.php";



//ligne de code pour inserer dans la base les champs

$sauveg = $bdd->prepare('INSERT INTO contact(Nom, Adresse_mail, Message, `Activité`) VALUES (?,?,?,?)');

$sauveg->execute(array($Nom,$Adresse_mail,$Message,$Activité));

header('Location: Accueil.html');



} else

{

//renvoi en cas d'erreur à la page d'inscription

header('Location: Accueil.html?erreur=1');

}