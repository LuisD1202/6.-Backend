<?php
  include "operaciones.php";
  include "vista/tablero.php";

  $num1 = 10;
  $num2 = 5;
  $a = new visuaizador("La suma de A ".$num1." + B ".$num2. " es: ".sumar($num1,$num2));
  $a->mostrarTitulo();

  $a->mostrarNormal();
?>
