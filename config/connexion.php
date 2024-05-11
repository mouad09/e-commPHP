<?php

// try {
// 		$access=new pdo("mysql:host=localhost;dbname=monshop;charset=utf8", "root", "");
		
// 		$access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

// } catch (Exception $e) 
// {
// 	$e->getMessage();
// }
    
// <?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "monshop";
$servername = "localhost";
$username = "root";
$password = ""; // Laissez le mot de passe vide si vous n'en avez pas défini
$dbname = "monshop";
$port = "3307"; // Port MySQL

try {
    $access = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    // Définir le mode d'erreur PDO à exception
    $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connexion à la base de données réussie";
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}



?>