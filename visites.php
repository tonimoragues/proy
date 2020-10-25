<?php
$visites=1;
if(!isset($_COOKIE['num_visites'])) {
  $visites=1;
} else {
  $visites=$_COOKIE['num_visites']+1;
}
setcookie("num_visites", $visites); // 86400 = 1 day
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
<h1>Has visitat aquesta pàgina <?php echo $visites; ?> vegades!</h1>
</body>
</html>
