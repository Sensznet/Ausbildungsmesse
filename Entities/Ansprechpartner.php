<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Teilnahme
 *
 * @author 14senszst1201
 */
class Ansprechpartner {
    private $id;
    private $betrieb;
    private $email;
    private $fax;
    private $telefon;
    private $name;
    private $vorname;


    public function __construct($betrieb, $email, $fax, $telefon, $name, $vorname, $id = NULL){
        $this->id = $id;
        $this->betrieb = $betrieb;
        $this->email = $email;
        $this->fax = $fax;
        $this->telefon = $telefon;
        $this->name = $name;
        $this->vorname = $vorname;
    }

    public function getID() {
        return $this->id;
    }

    /** @return Betrieb */
    public function getBetrieb() {
        return $this->betrieb;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFax() {
        return $this->fax;
    }

    public function getTelefon() {
        return $this->telefon;
    }

    public function getName() {
        return $this->name;
    }
    
    public function getVorname() {
        return $this->vorname;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setFax($fax) {
        $this->fax = $fax;
    }

    public function setTelefon($telefon) {
        $this->telefon = $telefon;
    }

    public function setName($name) {
        $this->name = $name;
    }
    
    public function setVorname($vorname) {
        $this->vorname = $vorname;
    }
}
