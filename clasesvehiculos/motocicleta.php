<?php
require_once __DIR__. '/vehiculo.php';

class Motocicleta extends Vehiculo {
 private $cilindrada;
 public function __construct($marca, $modelo, $año, $cilindrada) {
 parent::__construct($marca, $modelo, $año);
 $this->cilindrada = $cilindrada;
 }
 public function obtenerInformacion() {
 $infoBase = parent::obtenerInformacion();
return "$infoBase - Motocicleta de {$this->cilindrada}cc\n";
 }
 public function hacerCaballito() {
 if ($this->encendido) {
 echo "¡Haciendo un caballito!\n";
 } else {
 echo "No se puede hacer un caballito con la moto apagada\n";
 }
 }
}


?>