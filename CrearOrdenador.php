<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <!-- Objeto creado por Roberto -->

    <?php
      include 'Ordenador.php';

      //Primer objeto Ordenador1
      $ordenador1 = new Ordenador();
      $ordenador1->setMarca("Apple");
      $ordenador1->setRam(8);

      echo "Ordenador 1:  " . $ordenador1->getMarca() . $ordenador1->getRam() . "<br>";

      //Segundo objeto Ordenador2
      $ordenador2 = new Ordenador();
      $ordenador2->setMarca("Asus");
      $ordenador2->setRam(16);

      echo "Ordenador 2:  " . $ordenador2->getMarca() . $ordenador2->getRam() . "<br>";
    ?>

  </body>
</html>
