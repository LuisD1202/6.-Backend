<?php
  class Asignatura {
    private $name;
    private $nota1;
    private $nota2;
    private $nota3;

    function __construct($name,$nota1,$nota2,$nota3)  {
      $this->name = $name;
      $this->nota1 = $nota1;
      $this->nota2 = $nota2;
      $this->nota3 = $nota3;
    }

    public function getName(){
      return $this->name;
    }
    public function getNota1(){
      return $this->nota1;
    }
    public function getNota2(){
      return $this->nota2;
    }
    public function getNota3(){
      return $this->nota3;
    }

    public function setName($Name){
      return $this->name = $Name;
    }
    public function setNota1($newNota){
      return $this->$nota1 = $newNota;
    }
    public function setNota2($newNota){
      return $this->$nota2 = $newNota;
    }
    public function setNota3($newNota){
      return $this->$nota3 = $newNota;
    }

    public function calcularPromedio(){
      return($this->nota1 + $this->nota2 + $this->nota3)/3;
    }
  }
  class Estudiante {

    private $nombre;
    private $curso;
    private $asignaturas = array();

    function __construct($nombre,$curso)  {
      $this->nombre = $nombre;
      $this->curso = $curso;
    }

    public function getName(){
      return $this->nombre;
    }
    public function getCurso(){
      return $this->curso;
    }
    public function getAsignaturas(){
      return $this->asignaturas;
    }

    public function setName($Name){
      return $this->name = $Name;
    }
    public function setCurso($newCurso){
      return $this->curso = $newCurso;
    }
    public function AddAsignatura(Asignatura $a){
      array_push($this->asignaturas,$a);
    }
  }
  class profesor {

    private $nombre;
    private $estudiantes = array();

    function __construct($nombre){
      $this->nombre = $nombre;
    }

    public function getName(){
      return $this->nombre;
    }
    public function getEstudiantes(){
      return $this->estudiantes;
    }

    public function setName($newName){
      return $this->name = $newName;
    }
    public function addEstudiante(Estudiante $a){
      array_push($this->estudiantes,$a);
    }
  }
  class Padre{
    private $nombre;
    private $hijos = array();

    function __construct($nombre)  {
      $this->nombre = $nombre;
    }

    public function getNombre(){
      return $this->nombre;
    }
    public function getHijos(){
      return $this->hijos;
    }

    public function setNombre($newNombre){
      $this->nombre = $newNombre;
    }
    public function addHijo(Estudiante $a){
      array_push($this->hijos,$a);
    }
  }
?>
