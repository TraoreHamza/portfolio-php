<?php
/** 
* Le routeur est chargé d'écouter 
* les requêtes HTTP provenent du client web
* puis d'y répondre avec le contenu approprié
*/

//  if($_SERVER['REQUEST_URI'] === "/") {
//     header("Location : https://google.fr");
//  };

$path = $_SERVER['REQUEST_URI'];

$cleanPath = preg_replace('/\?.*/', '', $path);

switch ($cleanPath) {
   case '/':
      echo "Page d'accueil";
      break;
   case '/about':
      echo "Page de presentation";
      break;
   case '/skills':
      include './templates/skills.php';
      break;
   case '/project':
      echo './templates/project.php';
      break;
   case '/contact':
      include './templates/contact.php';
      break;
   
   default:
      echo 'Page 404, introuvable';
      break;
}