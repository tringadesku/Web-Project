<?php
include_once '../repository/contactRepo.php';
include_once '../models/contact.php';

    if(isset($_POST['contactButton'])){
        if(!(empty($_POST['message'])) && !(empty($_POST['contactEmail']))){
            $message = $_POST['message'];
            $email = $_POST['contactEmail'];

            $contact  = new Contact($message,$email);
            $contactRepository = new contactRepo();

            $contactRepository->insertContact($contact);
        }
    }
?>