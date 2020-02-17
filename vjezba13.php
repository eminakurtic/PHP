<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    # Definisanje podataka
      $ime_restorana = "Jedite kod Joa";
      $adresa_restorana = "Zmaj od Bosne 16, Sarajevo";
      $broj_telefona = "+3876111222";
      $koordinate_lang = "376.543";
      $koordinate_lat = "134.234";
      $ocjena = "4.5";
      $status = "Otvoren";

    ?>

    <!-- Ispis podataka -->
    <h1><?php echo $ime_restorana; ?></h1>
    <p>
        Adresa restorana:
        <a href="maps.google.com?q=<?php echo $adresa_restorana; ?>">
            <?php echo $adresa_restorana;?>
        </a>
    </p>

    <p>
        Broj telefona:
        <a href="tel:<?php echo $broj_telefona;?>">
            <?php echo $broj_telefona;?>

        </a>
    </p>

    <p>
        Status:
        <?php echo $status;?>
    </p>

    <p>
        Ocjena:
        <?php echo $ocjena;?>
    </p>

    
</body>
</html>