<?php
/* 
    
    AUTOR DE PROGRAMACIÓN PHP: 
    JHON ALVARADO ACHATA
    
*/


class estudiante {

    private $firstName;
    private $lastName;
    private $dni;
    private $contact_point;
    private $email;
    private $yearStudent;
    private $country;
    private $city;
    private $institution;
    private $qr;

    function __construct($firstName, $lastName, $dni, $contact_point, $email, $yearStudent, $country, $city, $institution, $qr) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dni = $dni;
        $this->contact_point = $contact_point;
        $this->email = $email;
        $this->yearStudent = $yearStudent;
        $this->country = $country;
        $this->city = $city;
        $this->institution = $institution;
        $this->qr = $qr;
    }

    
    function getFirstName() {
        return $this->firstName;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getDni() {
        return $this->dni;
    }

    function getContact_point() {
        return $this->contact_point;
    }

    function getEmail() {
        return $this->email;
    }

    function getYearStudent() {
        return $this->yearStudent;
    }

    function getCountry() {
        return $this->country;
    }

    function getCity() {
        return $this->city;
    }

    function getInstitution() {
        return $this->institution;
    }

    function getQr() {
        return $this->qr;
    }

    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setContact_point($contact_point) {
        $this->contact_point = $contact_point;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setYearStudent($yearStudent) {
        $this->yearStudent = $yearStudent;
    }

    function setCountry($country) {
        $this->country = $country;
    }

    function setCity($city) {
        $this->city = $city;
    }

    function setInstitution($institution) {
        $this->institution = $institution;
    }

    function setQr($qr) {
        $this->qr = $qr;
    }


}