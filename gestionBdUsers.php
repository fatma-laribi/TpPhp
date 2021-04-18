<?php
include_once "ConnexionBdUsers.php";//faire autoload!!!
$_bdd=ConnexionBdUsers::getInstance();
$response=$_bdd->query("SELECT * FROM users");
$users=$response->fetchAll(PDO::FETCH_OBJ);

