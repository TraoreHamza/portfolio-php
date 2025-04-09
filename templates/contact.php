<?php 
/** 
 * Page contact
 * Traitement du formulaire de contact 
 * et envoi de l'email avec MailTrap
 */

$firstname = htmlspecialchars(
    $_POST['firstname'] ?? '',
    ENT_HTML5,
    // "UTF-8"
);
$lastname = htmlspecialchars($_POST['lastname'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$phone = htmlspecialchars($_POST['phone'] ?? '');
$message = htmlspecialchars($_POST['message'] ?? '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    var_dump($_POST);
    // TODO : Envoyer l'email avec MailTrap

}
?>

<h1 class="text-center text-5xl mt-5 mb-5">
    Me contacter
</h1>

<div class="text-teal-950 grid place-items-center w-max m-auto">
    <?php include 'templates/components/form.php'; ?>
</div>