
<?php include 'data.php'; ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public/css/app.css">
    <title>php-quarto-esercizio</title>
  </head>

  <body>

    <?php foreach ($giocatori as $giocatore) { ?>

      <div class="card">
        <ul>
          <li>Code player: <?php echo $giocatore['giocatoreUnivoco'] ?></li>
          <li>Punti Fatti: <?php echo $giocatore['numeroPunti'] ?></li>
          <li>Rimbalzi: <?php echo $giocatore['numeroRimbalzi'] ?></li>
          <li>Falli: <?php echo $giocatore['falli'] ?></li>
          <li>Punti  da 2 punti: <?php echo $giocatore['percentuale2punti'] ?></li>
          <li>Punti da 3 punti: <?php echo $giocatore['percentuale3punti'] ?></li>
        </ul>
      </div>

    <?php } ?>

  </body>
</html>
