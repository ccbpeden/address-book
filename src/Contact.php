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

        function getContactName()
        {
            return $this->contact_name;
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

        function setContactName($new_name)
        {
            this->contact_name = $new_name;
        }

        function setContactPhone($new_phone)
        {
            this->contact_phone = $new_phone;
        }

        function setContactStreet($new_street)
        {
            this->contact_street = $new_street;
        }

        function setContactCity($new_city)
        {
            this->contact_city = $new_city;
        }

        function setContactState($new_state)
        {
            this->contact_state = $new_state;
        }

        function setContactZipcode($new_zipcode)
        {
            this->contact_zipcode = $new_zipcode;
        }

        


    }
?>