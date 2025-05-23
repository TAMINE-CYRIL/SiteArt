<?php

namespace controller;

use core\Layout;
use view\ContactView;
use core\Language;

class ContactController
{
    public function display(){
        $language = Language::getInstance();

        $alerte = " ";
        $status = " ";


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = $_POST["nom"] ?? " ";
            $email = $_POST["email"] ?? " ";
            $message = $_POST["message"] ?? " ";

            if (empty($nom) || empty($email) || empty($message)) {
                $alerte = $language->get('contact.required_fields');
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
                    $alerte = $language->get('contact.success');
                }
                else{
                    $status = "error";
                    $alerte = $language->get('contact.error');
                }

            }

        }


        $layout = new Layout("view/layout.html");
        $layout->setCurrentPage('contact');
        $viewHome = new ContactView($layout);
        $viewHome->display($alerte, $status);
    }


}