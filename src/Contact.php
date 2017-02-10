<?php
    class contact
    {
        private $contact_name;
        private $contact_phone;
        private $contact_street;
        private $contact_city;
        private $contact_state;
        private $contact_zipcode;

        function __construct($contact_name, $contact_phone, $contact_street, $contact_city, $contact_state, $contact_zipcode)
        {
            $this->contact_name = $contact_name;
            $this->contact_phone = $contact_phone;
            $this->contact_street = $contact_street;
            $this->contact_city = $contact_city;
            $this->contact_state = $contact_state;
            $this->contact_zipcode = $contact_zipcode;

        }


    }
?>
