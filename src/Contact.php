<?php
    class Contact
    {
        private $contact_first_name;
        private $contact_last_name;
        private $contact_phone;
        private $contact_street;
        private $contact_city;
        private $contact_state;
        private $contact_zipcode;

        function __construct($contact_first_name, $contact_last_name, $contact_phone, $contact_street, $contact_city, $contact_state, $contact_zipcode)
        {
            $this->contact_first_name = $contact_first_name;
            $this->contact_last_name = $contact_last_name;
            $this->contact_phone = $contact_phone;
            $this->contact_street = $contact_street;
            $this->contact_city = $contact_city;
            $this->contact_state = $contact_state;
            $this->contact_zipcode = $contact_zipcode;

        }

        function getContactFirstName()
        {
            return $this->contact_first_name;
        }

        function getContactLastName()
        {
            return $this->contact_last_name;
        }

        function getContactPhone()
        {
            return $this->contact_phone;
        }

        function getContactStreet()
        {
            return $this->contact_street;
        }

        function getContactCity()
        {
            return $this->contact_city;
        }

        function getContactState()
        {
            return $this->contact_state;
        }

        function getContactZipcode()
        {
            return $this->contact_zipcode;
        }

        function setContactFirstName($new_first_name)
        {
            $this->contact_first_name = $new_first_name;
        }

        function setContactLastName($new_last_name)
        {
            $this->contact_last_name = $new_last_name;
        }

        function setContactPhone($new_phone)
        {
            $this->contact_phone = $new_phone;
        }

        function setContactStreet($new_street)
        {
            $this->contact_street = $new_street;
        }

        function setContactCity($new_city)
        {
            $this->contact_city = $new_city;
        }

        function setContactState($new_state)
        {
            $this->contact_state = $new_state;
        }

        function setContactZipcode($new_zipcode)
        {
            $this->contact_zipcode = $new_zipcode;
        }

        function saveContact()
        {
            array_push($_SESSION['list_of_contacts'], $this);
        }

        function saveCurrentContact()
        {
            array_push($_SESSION['current_contact'], $this);
        }

        function deleteCurrentContact()
        {
            $_SESSION['current_contact'] = array();
        }

        static function getCurrentContact()
        {
            return $_SESSION['current_contact'];
        }

        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_contacts'] = array();
        }

    }
    function validateInput()
    {
        if(($_POST['contact_first_name'])&&($_POST['contact_last_name'])&&($_POST['contact_phone'])&&($_POST['contact_street'])&&($_POST['contact_city'])&&($_POST['contact_state'])&&($_POST['contact_zipcode'])){
            return true;
        } else {
            return false;
        }
    }
?>
