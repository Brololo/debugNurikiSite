<?php

if(!isset($_POST["new_email"])) {
    redirect("../index.php");
}

echo $_POST["new_email"];

$dest = $_POST["new_email"];
$sujet = "Changement d'Email";
$corp = "Bonjour, veuillez cliquer sur ce lien pour changer votre adresse Email";
$headers = "De : nuriki.metin2@gmail.com";
// mail($dest, $sujet, $corp, $headers);

if (mail($dest, $sujet, $corp, $headers)) {
    echo "Email envoyé avec succès à $dest ...";
  } else {
    echo "Échec de l'envoi de l'email...";
  }

// header("Location: index.php");

?>