<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Condicionales</title>
    <style>

      body{
        font-family: Times Roman;
        background: #00FFFF;
      }
      div{
        background: white;
        padding: 30px;
        margin: 0 auto;
        width: 200px:
      }
      h1{font-size: 36px}

    </style>
  </head>
  <body>
    <div>
      <?php
        $hora = 20;
        if ($hora > 6 && $hora < 12) {
          echo "<h1>Buenos dias</h1>";
        }else if($hora >= 12 && $hora <= 18 ){
          echo "<h1>Buenas tardes</h1>";
        }else {
          echo "<h1>Buenas noches</h1>";
        }
      ?>
    </div>
  </body>
</html>
