<?php
class Vehiculo {
 protected $marca;
 protected $modelo;
 protected $año;
 protected $encendido = false;
 public function __construct($marca, $modelo, $año) {
 $this->marca = $marca;
 $this->modelo = $modelo;
 $this->año = $año;
 }
 public function encender() {
 $this->encendido = true;
 echo "El vehículo ha sido encendido\n";
 }
 public function apagar() {
 $this->encendido = false;
 echo "El vehículo ha sido apagado\n";
 }
 public function obtenerInformacion() {
     return "{$this->marca} {$this->modelo} ({$this->año})";
 }
}

 ?>