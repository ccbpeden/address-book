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

    $app->post("/delete_contacts", function() use ($app) {
        Contact::deleteAll();
        return $app['twig']->render('deleted.html.twig', array('contacts' => Contact::getAll()));
    });

    return $app;
?>
