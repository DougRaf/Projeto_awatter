<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../style/produtividade.css" rel="stylesheet">
  <title>Awatter</title>
</head>

<body>
    <div class="fundo">
        <a href="produtividade.php" class="btn-voltar"><</a>
        <h2 class="titulo">Gráfico Diário</h2>
        <img src="../img/senhor.jpeg" class="circulo" alt="...">
        <br><br><br><br>
<center>
      <div class="grafico">
        <iframe width="370" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1690416/charts/3?bgcolor=%23ffffff&color=%2300FF00&dynamic=true&results=60&title=Total+em+mililitros&type=line"></iframe>
      </div>
</center>
    </div>

</body>
</html>