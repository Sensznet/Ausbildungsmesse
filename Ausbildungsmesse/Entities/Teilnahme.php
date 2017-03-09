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
class Teilnahme {
    private $id;
    private $betrieb;
    private $teilnahme;
    private $flaeche;
    private $raum;
    private $strom;
    private $bemerkung;
    
    public function __construct(Betrieb $betrieb, $teilnahme, $flaeche, $raum, $strom, $bemerkung, $id = null) {
        $this->betrieb = $betrieb;
        $this->teilnahme = $teilnahme;
        $this->flaeche = $flaeche;
        $this->raum = $raum;
        $this->strom = $strom;
        $this->bemerkung = $bemerkung;
        $this->id = $id;
    }
    
    public function getID() {
        return $this->id;
    }
    
    /**
     * @return Betrieb
     */
    public function getBetrieb() {
        return $this->betrieb;
    }
    
    public function getTeilnahme() {
        return $this->teilnahme;
    }
    
    public function getFlaeche() {
        return $this->flaeche;
    }
    
    public function getRaum() {
        return $this->raum;
    }
    
    public function getStrom() {
        return $this->strom;
    }
    
    public function getBemerkung() {
        return $this->Bemerkung;
    }
    
    public function setTeilnahme($teilnahme) {
        $this->teilnahme = $teilnahme;
    }
    
    public function setFlaeche($flaeche) {
        $this->flaeche = $flaeche;
    }
    
    public function setRaum($raum) {
        $this->raum = $raum;
    }
    
    public function setStrom($strom) {
        $this->strom = $strom;
    }
    
    public function setBemerkung($bemerkung) {
        $this->bemerkung = $bemerkung;
    }
}
