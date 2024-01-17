<?php
include_once 'Vehiculo.php';

class Bicicleta extends Vehiculo {
    private $numero_de_marchas;

    public function __construct($numero_de_marchas) {
        parent::__construct();
        $this->numero_de_marchas = $numero_de_marchas;
    }

    public function hazCaballito() {
        echo "Caballito...<br>";
    }
}
?>