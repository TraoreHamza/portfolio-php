<?php
/** 
* Le routeur est chargé d'écouter 
* les requêtes HTTP provenent du client web
* puis d'y répondre avec le contenu approprié
*/

//  if($_SERVER['REQUEST_URI'] === "/") {
//     header("Location : https://google.fr");
//  };

switch ($_SERVER['REQUEST_URI']) {
   case '/':
      echo "Page d'accueil";
      break;
   case '/about':
      echo "Page de presentation";
      break;
   case '/skills':
      echo "Page de compétences";
      break;
   case '/projects':
      echo "Page de projects";
      break;
   case '/contact':
      include './templates/contact.php';
      break;
   
   default:
      echo 'Page 404, introuvable';
      break;
}