<?php
/* 
    
    AUTOR DE PROGRAMACIÓN PHP: 
    JHON ALVARADO ACHATA
    
*/


class charlas {
    
    private $titleTalks;
    private $typeTalks;
    private $idTopics;
    private $idSpeakers;
    private $dateTalks;
    private $hourTalks;
    private $turnTalks;
    private $durationTalks;

    function __construct($titleTalks, $typeTalks, $idTopics, $idSpeakers, $dateTalks, $hourTalks, $turnTalks, $durationTalks) {
        $this->titleTalks = $titleTalks;
        $this->typeTalks = $typeTalks;
        $this->idTopics = $idTopics;
        $this->idSpeakers = $idSpeakers;
        $this->dateTalks = $dateTalks;
        $this->hourTalks = $hourTalks;
        $this->turnTalks = $turnTalks;
        $this->durationTalks = $durationTalks;
    }
    
    function getTitleTalks() {
        return $this->titleTalks;
    }

    function getTypeTalks() {
        return $this->typeTalks;
    }

    function getIdTopics() {
        return $this->idTopics;
    }

    function getIdSpeakers() {
        return $this->idSpeakers;
    }

    function getDateTalks() {
        return $this->dateTalks;
    }

    function getHourTalks() {
        return $this->hourTalks;
    }

    function getTurnTalks() {
        return $this->turnTalks;
    }

    function getDurationTalks() {
        return $this->durationTalks;
    }

    function setTitleTalks($titleTalks) {
        $this->titleTalks = $titleTalks;
    }

    function setTypeTalks($typeTalks) {
        $this->typeTalks = $typeTalks;
    }

    function setIdTopics($idTopics) {
        $this->idTopics = $idTopics;
    }

    function setIdSpeakers($idSpeakers) {
        $this->idSpeakers = $idSpeakers;
    }

    function setDateTalks($dateTalks) {
        $this->dateTalks = $dateTalks;
    }

    function setHourTalks($hourTalks) {
        $this->hourTalks = $hourTalks;
    }

    function setTurnTalks($turnTalks) {
        $this->turnTalks = $turnTalks;
    }

    function setDurationTalks($durationTalks) {
        $this->durationTalks = $durationTalks;
    }



}