<?php

$computer = array(
  'cpu' => "AMD Ryzen 7 3700x",
  'gpu' => "Nvidia RTX 3080",
  'ssd' => "Samsung 970 EVO NVMe M.2 SSD",
  'hdd' => "Seagate BarraCuda 2TB",
  'fan'=> "ARCTIC Freezer 34 eSports DUO",
  'ram'=> "Patriot Viper Steel Series 16GB KIT DDR4 4000Mhz",
  'mb'=> "ASUS B550 PLUS",
  'case' => "SilentiumPC Signum SG1X TG",
  'os'=> "Windows 10",
  'display'=> "Dell AW2518H",
  'headphones'=> "Dell Alienware 7.1. Headset AW510H",
  'keyboard' => "Razer Cynosa Chroma",
  'mouse' => "Razer Viper",
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <p><b>CPU:</b> <?= $computer['cpu']?> </p>
    <p><b>GPU:</b> <?= $computer['gpu'] ?> </p>
    <p><b>SSD:</b> <?= $computer['ssd'] ?> </p>
    <p><b>HDD:</b> <?= $computer['hdd'] ?> </p>
    <p><b>CPU FAN:</b> <?= $computer['fan']   ?> </p>
    <p><b>RAM:</b> <?= $computer['ram'] ?> </p>
    <p><b>MAINBOARD:</b> <?= $computer['mb']   ?> </p>
    <p><b>CASE:</b> <?= $computer['case'] ?> </p>
    <p><b>OS:</b> <?= $computer['os'] ?> </p>
    <p><b>DISPLAY:</b> <?= $computer['display'] ?> </p>
    <p><b>HEADPHONES:</b> <?= $computer['headphones'] ?> </p>
    <P><b>KEYBOARD:</b> <?= $computer['keyboard'] ?> </P>
    <P><b>MOUSE:</b> <?= $computer['mouse'] ?> </P>













    
</body>
</html>