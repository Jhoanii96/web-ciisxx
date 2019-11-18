<?php
/* 
    
    AUTOR DE PROGRAMACIÓN PHP: 
    LEANDRO ANDRÉ RAMOS VALDEZ
	
*/


class PreInscripcion {

    private $firstName;
    private $lastName;
    private $dni;
    private $cellphone;
    private $email;
    
    private $country;
    private $city;
    private $tipo;
    private $anio;
    private $institution;
    private $grade;
    private $voucher;

    function __construct($firstName, $lastName, $dni, $cellphone, $email,$country, $city,$tipo, $anio,  $institution, $grade,$voucher) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dni = $dni;
        $this->cellphone = $cellphone;
        $this->email = $email;
        $this->anio = $anio;
        $this->country = $country;
        $this->city = $city;
        $this->tipo=$tipo;
        $this->institution = $institution;
        $this->grade = $grade;
        $this->voucher=$voucher;
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

    function getCellphone() {
        return $this->cellphone;
    }

    function getEmail() {
        return $this->email;
    }

    function getAnio() {
        return $this->anio;
    }

    function getCountry() {
        return $this->country;
    }

    function getCity() {
        return $this->city;
    }

    // function getStudent()
    // {
    //     return $this->student;
    // }

    // function getProfess()
    // {
    //     return $this->profess;
    // }

    function getTipo() {
        return $this->tipo;
    }


    function getInstitution() {
        return $this->institution;
    }

    function getGrade() {
        return $this->grade;
    }
    
    function getVoucher() {
        return $this->voucher;
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