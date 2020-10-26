<?php
$headers=getallheaders();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>

<h1>
  <?php
  //print($headers["Accept-Language"]);

  $lang=substr($headers["Accept-Language"],0,2);
  switch ($lang) {
      case "ca":
          echo "Benvinguts a la meva pàgina web";
          break;
      case "es":
          echo "Bienvendios a mi página web";
          break;
      case "en":
          echo "Wellcome to my web page";
          break;
  }
  ?>
</h1>
</body>
</html>
