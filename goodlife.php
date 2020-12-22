<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "icon" type="icon/png" href="https://image.freepik.com/vector-gratis/gato-gracioso-dibujos-animados-aislado_29190-4874.jpg">
    <title> GoodLife</title>
    <link href="css/php.css" rel="stylesheet" type="text/css">
</head>
<!-- contenido-->
<body>
     <style type= text/css ></style>
     
<?php 
 
 $day = date("D");
      if($day =="Fri") {
          echo "<h1>Ten una saludable fin de semana</h1>";
      } 
      elseif ($day == "Sun") {
          echo "<h1>Ten un estupendo domingo</h1>";
          # code...
      } 
      else{
          echo "<h1>Mucha suerte</h1>";
      }
?>

</body>
</html>