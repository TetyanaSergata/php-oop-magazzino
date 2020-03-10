<?php
  include 'classe/Technology.php';

  $phoneXiaomi = new Technology();
  $phoneXiaomi->setMarca("Xiaomi");
  $phoneXiaomi->setModello("Mi 9");
  $phoneXiaomi->setAnno(2019);
  $phoneXiaomi->setColore("Nero");
  $phoneXiaomi->setPrezzo(350);
  $phoneXiaomi->setDisplay("Touchscreen");
  $phoneXiaomi->setConnettivita("Wi-Fi, Bluetooth");
  $phoneXiaomi->setSistemaOperativo("MIUI");
  echo $phoneXiaomi->getMarca();
  var_dump($phoneXiaomi);

  $phoneSamsung = new Technology();
  $phoneSamsung->setMarca("Samsung");
  $phoneSamsung->setModello("Galaxy A50");
  $phoneSamsung->setAnno(2019);
  $phoneSamsung->setColore("Bianco");
  $phoneSamsung->setPrezzo(200);
  $phoneSamsung->setDisplay("Touchscreen");
  $phoneSamsung->setConnettivita("Wi-Fi, Bluetooth");
  $phoneSamsung->setSistemaOperativo("Android");
  echo $phoneSamsung->getMarca();
  var_dump($phoneSamsung);

  $phoneApple = new Technology();
  $phoneApple->setMarca("Apple");
  $phoneApple->setModello("IPhone 6");
  $phoneApple->setAnno(2014);
  $phoneApple->setColore("Oro");
  $phoneApple->setPrezzo(220);
  $phoneApple->setDisplay("Touchscreen");
  $phoneApple->setConnettivita("Wi-Fi, Bluetooth");
  $phoneApple->setSistemaOperativo("iOS 8");
  echo $phoneApple->getMarca();
  var_dump($phoneApple->getInfo());
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Magazzino_Telefoni</title>
  </head>
  <body>
    <ul>
    <?php foreach ($phoneXiaomi->getInfo() as $key => $value) { ?>
       <li><?php echo $value ?></li>
    <?php } ?>
    </ul>

    <ul>
    <?php foreach ($phoneSamsung->getInfo() as $key => $value) { ?>
       <li><?php echo $value ?></li>
    <?php } ?>
    </ul>

    <ul>
    <?php foreach ($phoneApple->getInfo() as $key => $value) { ?>
       <li><?php echo $value ?></li>
    <?php } ?>
    </ul>
  </body>
</html>
