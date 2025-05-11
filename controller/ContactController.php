<?php

namespace controller;

use core\Layout;
use view\ContactView;

class ContactController
{
    public function display(){

        $alerte = " ";
        $status = " ";


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = $_POST["nom"] ?? " ";
            $email = $_POST["email"] ?? " ";
            $message = $_POST["message"] ?? " ";

            if (empty($nom) || empty($email) || empty($message)) {
                $alerte = "Veuillez remplir tous les champs.";
                $status = "error";
            }
            else{
                $to = "#";
                $subject = "Formulaire de contact";
                $message = "Nom: " . $nom;
                $message .= "Email: " . $email;
                $message .= "Message: " . $message;
                $headers = "From: $email\r\n";

                $mail = mail($to, $subject, $message, $headers);

                if ($mail) {
                    $status = "success";
                    $alerte = "Votre message a été envoyé avec succès.";
                }
                else{
                    $status = "error";
                    $alerte = "Une erreur est survenue lors de l'envoi du message.";
                }

            }

        }


        $layout = new Layout("view/layout.html");
        $layout->setCurrentPage('contact');
        $viewHome = new ContactView($layout);
        $viewHome->display($alerte, $status);
    }


}