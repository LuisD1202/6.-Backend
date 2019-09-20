<?php
  /**
   *
   */
  class Auto
  {
    protected $cilindrajes;
    private $modelo;
    public static $peso;
    const RUEDAS = 4;

    /*public __construct($cilindrajes,$modelo,$peso)
    {
      $this->$cilindrajes = $cilindraje;
      $this->$modelo = $modelo;
      $this->$peso = $peso;
    }*/
    public function arrancar($velocidad)
    {
      echo "<p> El auto ha arrancado a una velocidad de: ".$velocidad." Km/H<p>";
    }
  }
  //$a = new Auto(1300,'2010',215);
  $a = new Auto();
  echo $a->arrancar(50);
  echo "Ruedas ". Auto::RUEDAS;
  echo "<br>Peso  ". Auto::$peso;
?>
