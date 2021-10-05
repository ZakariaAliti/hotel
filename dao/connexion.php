 <?php

// préparation des informations nécessaires 

define("DSN","mysql:host=localhost;dbname=hotel"); 
define("USER","root");
define("MDP","MYSQ");

 // création d'un objet PDO et connexion 
try {
$conn=new PDO(DSN,USER,MDP);
} catch (Exception $erreur) {
echo "Erreur : "; 
exit();
}
?> 
