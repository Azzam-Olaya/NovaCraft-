<?php 

$title = 'contact';

require 'template/header.php';

$name = $email = $message = '';
$error = '';
$success = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    if(empty($name) || empty($email) || empty($message)){
        $error = 'Tous les champs sont obligatoires';
    } else {
        $to = "exemple@gmail.com";
        $subject = "Message contact";
        $body = "Nom : $name\nEmail : $email\nMessage : $message";
        
        if(mail($to, $subject, $body)){
            $success = 'Merci pour votre message';
            $name = $email = $message = '';
        } else {
            $error = "Erreur lors de l'envoi";
        }
    }
}

require 'views/contact_views.php';

require 'template/footer.php';

?>