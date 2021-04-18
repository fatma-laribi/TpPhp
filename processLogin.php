<?php
session_start();
include_once "gestionBdUsers.php";

/*
 * 1- Récupérer les identifiants
 * Tester si le login et le mot de passe correspondent
 * Si oui
 *  Redirige vers la page d'accueil
 * Si non
 *  Redirgie vers la page login avec un message d'erreur
 * */

//1
$username = $_POST['username'];
$pwd = $_POST['pwd'];

if (isset($username)&&isset($pwd)) {
    foreach($users as $user){
        if(($_POST['username']==$user->login)&&($_POST['pwd']==$user->password)){
        header('location:home.php');}
    } else {
        $_SESSION['errorMessage']="Veuillez vérifier vos credenitals";
        header('location:login.php');
    }
} else {
    $_SESSION['errorMessage']="Veuillez vérifier vos credenitals";
    header('location:login.php');
}

