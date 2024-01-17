<?php
class Vehiculo {
    public static $Kms_totales = 0;
    public static $VehiculosCreados = 0;
    private $km_recorridos;

    public function __construct() {
        self::$VehiculosCreados++;
        $this->km_recorridos = 0;
    }

    public static function getVehiculosCreados() {
        return self::$VehiculosCreados;
    }

    public static function getKmTotales() {
        return self::$Kms_totales;
    }

    public function getKmRecorridos() {
        return $this->km_recorridos;
    }

    public function recorre($km) {
        $this->km_recorridos += $km;
        self::$Kms_totales += $km;
    }
}
?>