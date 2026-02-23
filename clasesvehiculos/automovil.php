<?php
require_once __DIR__. '/vehiculo.php';

class Automovil extends Vehiculo {
 private $puertas;
 private $tipo;
 public function __construct($marca, $modelo, $año, $puertas, $tipo) {
 // Llamar al constructor de la clase padre
 parent::__construct($marca, $modelo, $año);
 $this->puertas = $puertas;
 $this->tipo = $tipo;
 }
 public function obtenerInformacion() {
 // Sobrescribe el método de la clase padre
 $infoBase = parent::obtenerInformacion();
 return "$infoBase - Automóvil {$this->tipo} de {$this->puertas}
puertas ";
 }
 public function abrirMaletero() {
 echo "Maletero abierto\n";
 }
}

?>