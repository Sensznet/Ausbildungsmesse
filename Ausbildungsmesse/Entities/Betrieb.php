<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Betrieb
 *
 * @author 14senszst1201
 */
class Betrieb {
    private $id;
    private $nr;
    private $name;
    private $straße;
    private $ort;
    private $homepage;
    private $teilnahme;
    
    public function getID() {
        return $this->id;
    }
    
    /**
     * 
     * @param type $nr
     * @param type $name
     * @param type $telefon
     * @param type $fax
     * @param type $email
     * @param Teilnahme|null $teilnahme
     * @param int|null $id
     */
    public function __construct($nr, $name, $straße, $ort, $homepage,$teilnahme = NULL, $id = NULL) {
        $this->nr = $nr;
        $this->id = $id;
        $this->name = $name;
        $this->straße = $straße;
        $this->ort = $ort;
        $this->homepage = $homepage;
        $this->teilnahme = $teilnahme;
    }
    
    public function getNr() {
        return $this->nr;
    }
    
    public function getStraße() {
        return $this->straße;
    }
    
    public function getOrt() {
        return $this->ort;
    }
    
    public function getHomepage() {
        return $this->homepage;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getTeilnahme() {
        return $this->teilname;
    }
    
    public function setStraße($straße) {
        $this->straße = $straße;
    }
    
    public function setOrt($ort) {
        $this->ort = $ort;
    } 
    
    public function setHomepage($homepage) {
        $this->homepage = $homepage;
    } 
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function setTeilnahme(Teilnahme $teilnahme) {
        $this->teilnahme = $teilnahme;
    } 
}

