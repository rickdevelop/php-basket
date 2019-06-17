<?php

  $giocatori = [];

  for($i = 1; $i <= 12; $i++) {

    $giocatore = [

      'giocatoreUnivoco'=> univoco(),
      'numeroPunti'=> rand(1, 50),
      'numeroRimbalzi'=> rand(1, 50),
      'falli'=> rand(1, 10),
      'percentuale2punti'=> rand(15, 90) . '%',
      'percentuale3punti'=> rand(15, 90) . '%'
    ];

    $giocatori[]=$giocatore;
  }

  function univoco() {
    $gUnivoco = '';
    $lettere = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeri = '0123456789';
    for($i = 0; $i < 3; $i++) {
      $gUnivoco .= $lettere[rand(0, strlen($lettere -1))];
    }
    for($i = 0; $i < 3; $i++) {
      $gUnivoco .= $numeri[rand(0, strlen($numeri -1))];
    }
   return $gUnivoco;
  }
?>
