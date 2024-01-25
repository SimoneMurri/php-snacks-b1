Create una nuova classe che rappresenti un Pokemon e che abbia almeno cinque proprieta, tre metodi ed il costruttore.
Microbonus: creo un'altra classe che aggiungo al pokemon per composizione che configuri il tipo di pokemon (aria, terra, ecc.)

<?php 

class Pokemon {
    public $specie;
    public $tipo;
    public $statistica;
    public $mossa;
    public $livello;

    public function getSpecie() {
        return $this->specie;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getLivello() {
        return $this->livello;
    }

    public function __construct($_specie, $_tipo, $_statistica, $_mossa, $_livello) {
        $this->specie = $_specie;
        $this->tipo = $_tipo;
        $this->statistica = $_statistica;
        $this->mossa = $_mossa;
        $this->livello = $_livello;
    }
}