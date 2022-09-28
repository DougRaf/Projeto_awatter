<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="../style/home.css" rel="stylesheet" >

    <title>Awatter</title>
  </head>

  <body> 




    <div class="container"> 
   <div class="fundo">
     <div class="data">
        <p id="data"></p></div>
     <div class="pesquisa">
<div class="pesquisa-input">
 
  <input type="text" class="input-form" aria-label="Username">
  <a><img class="lupa" src="data:image/png;base64,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"></a>

</div>
     </div>
     <div class="user">
     <div class="text-center">
     <img src="../img/senhor.jpeg" class="circulo" alt="...">
     </div>
     </div>

    <div class="footer">Desenvolvido por Douglas Esquinelato®</div>

       </div>

           <script>
var semana = ["Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado"];
var d = new Date();
document.getElementById("data").innerHTML = semana[d.getDay()];
</script>
  </body>
</html>