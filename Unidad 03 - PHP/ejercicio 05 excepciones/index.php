<?php
  include "excepciones.php";


  function dividir($num1 , $num2){
    if ($num2 == 0) {
      throw new RestrictionsCero();
    }
    if ($num1 < 0 || $num2 < 0) {
      throw new RestrictionNumNegative();
    }
    return $num1 / $num2;
  }

  try {
    echo "Division ".dividir(6,2);
  } catch (RestrictionsCero $ecero) {
    echo "Error !!!".$ecero->mesageErrorDiv0();
  }catch (RestrictionNumNegative $eNegative){
    echo "Error !!! ".$eNegative->mesageErrorNegativeNum();
  }finally{
    echo "<p>Se realizo una Division</p>";
  }

?>
