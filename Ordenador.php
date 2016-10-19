<?php 
/**
 * Clase creada por Roberto Jesús Sánchez Camacho
 * clase ejemplo de definicion
 */
class Ordenador
{

  // Declaración de una propiedad
  public $marca = 'hp';
  public $ram = 4;


//Getters

  public function getMarca() {
      return $this->marca;
  }
  public function getRam() {
      return $this->ram;
  }

// Setters
  public function setMarca($setMarca){
    $this->marca = $setMarca;
  }
  public function setRam($setRam){
    $this->ram = $setRam;
  }


  }


 ?>