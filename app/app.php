<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";

    session_start();

    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    if (empty($_SESSION['current_contact'])) {
        $_SESSION['current_contact'] = array();
    }


    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array('contacts' => Contact::getAll()));
    });

    $app->post("/create_contact", function() use ($app) {
        $new_contact = new Contact($_POST['contact_first_name'], $_POST['contact_last_name'], $_POST['contact_phone'], $_POST['contact_street'], $_POST['contact_city'], $_POST['contact_state'], $_POST['contact_zipcode']);
        $_SESSION['current_contact']=array();
        $new_contact->saveCurrentContact();
        return $app['twig']->render('contact.html.twig', array('contacts' => Contact::getCurrentContact()));
    });

    $app->post("/save_contact", function() use ($app) {
        $current_contact = Contact::getCurrentContact();
        $current_contact = $current_contact[0];
        $current_contact->saveContact();
        return $app['twig']->render('index.html.twig', array('contacts' => Contact::getAll()));
    });

    $app->post("/deleteCurrent", function() use ($app) {
        $_SESSION['current_contact']=array();
        return $app['twig']->render('index.html.twig', array('contacts' => Contact::getAll()));
    });

    $app->post("changeCurrent", function() use ($app) {
        return $app['twig']->render('change.html.twig', array('contacts' => Contact::getCurrentContact()));
    });

    $app->post("/changeDetails", function() use ($app) {
        $current_contact = Contact::getCurrentContact();
        $current_contact = $current_contact[0];
        if($_POST['contact_first_name']){
          $current_contact->setContactFirstName($_POST['contact_first_name']);
        };
        if($_POST['contact_last_name']){
          $current_contact->setContactLastName($_POST['contact_last_name']);
        };
        if($_POST['contact_phone']){
          $current_contact->setContactPhone($_POST['contact_Phone']);
        };
        if($_POST['contact_street']){
          $current_contact->setContactStreet($_POST['contact_street']);
        };
        if($_POST['contact_city']){
          $current_contact->setContactCity($_POST['contact_city']);
        };
        if($_POST['contact_state']){
          $current_contact->setContactState($_POST['contact_state']);
        };
        if($_POST['contact_zipcode']){
          $current_contact->setContactZipcode($_POST['contact_zipcode']);
        };
        $current_contact->saveContact();

        return $app['twig']->render('index.html.twig', array('contacts' => Contact::getCurrentContact()));
    });

    $app->post("/delete_contacts", function() use ($app) {
        Contact::deleteAll();
        return $app['twig']->render('deleted.html.twig', array('contacts' => Contact::getAll()));
    });

    return $app;
?>
