<?php
  require('clases.php');

  $Matematicas = new Asignatura('Matematicas' , 5.0 , 4.2, 3.4);
  $Ciencias = new Asignatura('Ciencias' , 3.0 , 2.2, 5.4);
  $Biologia = new Asignatura('Biologia' , 5.0 , 2.2, 3.4);
  $Lenguaje = new Asignatura('Lenguaje' , 5.0 , 4.2, 3.4);
  $Deporte = new Asignatura('Deporte' , 5.0 , 5.0, 5.0);

  $Luis = new Estudiante ("Luis Dominguez" , 'Once' , '2020');
  $Luis->AddAsignatura($Matematicas);
  $Luis->AddAsignatura($Deporte);
  $Luis->AddAsignatura($Lenguaje);
  $Luis->AddAsignatura($Biologia);

  $JorgeE = new Estudiante ("Jorge Estevan" , 'Once' , '2020');
  $JorgeE->AddAsignatura($Matematicas);
  $JorgeE->AddAsignatura($Deporte);
  $JorgeE->AddAsignatura($Lenguaje);
  $JorgeE->AddAsignatura($Biologia);

  $JoseF = new Estudiante ('Jose Felipe' , 'Once' , '2020');
  $JoseF->AddAsignatura($Matematicas);
  $JoseF->AddAsignatura($Deporte);
  $JoseF->AddAsignatura($Biologia);

  $profesor = new Profesor('Jhon Freddy Erazo');
  $profesor->addEstudiante($Luis);
  $profesor->addEstudiante($JorgeE);
  $profesor->addEstudiante($JoseF);

  $Padre = new Padre('Gonzalo Dominguez');
  $Padre->addHijo($Luis);
  $Padre->addHijo($JoseF);
?>
