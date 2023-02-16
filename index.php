<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Form PHP</title>
    </head>
    <body>
        <form  action="thanks.php" >
            <div>
                <label  for="nom">Nom :</label>
                <input  type="text"  id="nom"  name="user_name">
            </div>
            <div>
                <label  for="prenom">Prenom :</label>
                <input  type="text"  id="prenom"  name="user_prename">
            </div>
            <div>
                <label  for="courriel">Courriel :</label>
                <input  type="email"  id="courriel"  name="user_email">
            </div>
            <div>
                <label for="phone">Téléphone:</label>
                <input type="tel" id="phone" name="phone">
            </div>
            <div>
                <label for="subjects">Choisissez une option: </label>
                <select id="subjects" name="subjects">
                    <option value="subOne">Sujet 1</option>
                    <option value="subTwo">Sujet 2</option>
                    <option value="subThree">Sujet 3</option>
                    <option value="subFour">Sujet 4</option>
                </select>
            </div>
            <div>
                <label  for="message">Message :</label>
                <textarea  id="message"  name="user_message"></textarea>
            </div>
            <div  class="button">
                <button  type="submit">Envoyer votre message</button>
            </div>
        </form>

    </body>
</html>

<?php

$errors = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // nettoyage et validation des données soumises via le formulaire 
        if(!isset($_POST['user_name']) || trim($_POST['user_name']) === '') 
            $errors[] = "Le nom est obligatoire";
        if(!isset($_POST['user_prename']) || trim($_POST['user_prename']) === '') 
            $errors[] = "Le prénom est obligatoire";
        if(!isset($_POST['user_email']) || trim($_POST['user_email']) === '') 
            $errors[] = "L'adresse mail est obligatoire";
        if(!isset($_POST['phone']) || trim($_POST['phone']) === '') 
            $errors[] = "Le téléphone est obligatoire";
        if(!isset($_POST['subjects']) || trim($_POST['subjects']) === '') 
            $errors[] = "Le sujet est obligatoire";
        if(!isset($_POST['user_message']) || trim($_POST['user_message']) === '') 
            $errors[] = "Le message est obligatoire";
        if(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL))
            $errors[] = "Votre email n'est pas valide";



        if(empty($errors)) {
            // traitement du formulaire
            // puis redirection
            header('Location: thanks.php');
        }
    };
// if(isset($_POST['submit'])){
//     $userName = $_POST['user_name'];
//     $userPrename = $_POST['user_prename'];
//     $userEmail = $_POST['user_email'];
//     $phone = $_POST['phone'];
//     $subjects = $_POST['subjects'];
//     $userMessage = $_POST['user_message'];
//   }
//var_dump( $_POST);
// var_dump($_GET);
// echo  $_GET['user_name'];
?>