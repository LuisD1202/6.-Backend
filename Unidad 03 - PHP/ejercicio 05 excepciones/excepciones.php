<?php
  /**
   *
   */
   class RestrictionsCero extends Exception
   {
     function mesageErrorDiv0(){
       return "No puedes dividir por CERO '0'";
     }
   }

   class RestrictionNumNegative extends Exception
   {
     function mesageErrorNegativeNum(){
       return "No puedes usar numeros negativos";
     }
   }


?>
