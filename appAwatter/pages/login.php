<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="style/style.css" rel="stylesheet">
 
    <title>Awatter</title>
  </head>
  <body> 
    <div class="container"> 
      <div class="login">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>    
        <div class="logo_frente">
          <div class="logo_central">
            <img src="img/logo.png" alt="Logo Awatter">
          </div>
          <div class="logo_letra">
            <img src="img/logo_letra.png" alt="Awatter">
          </div>
          <div class="btn-principal">
            <div class="d-grid gap-2 col-6 mx-auto">
              <button type="button"  class="btn btn-font"  data-bs-toggle="modal" data-bs-target="#exampleModal">Conectar-se</button>
              <button class="btn btn-font"  data-bs-toggle="modal" data-bs-target="#ModalCadastro" type="button">Cadastrar-se</button>
            </div>
            <!-- Modal login-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content" style="position:relative;top: 125px;">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Login de Acesso</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form method="post" action="config/acesso.php">
                  <div class="modal-body">
                    <div class="mb-3">
                      <label class="form-label">E-mail</label>
                      <input type="email" class="form-control" name="email" placeholder="Digite Aqui...">
                    </div>
                      <div class="mb-3">
                      <label class="form-label">Senha</label>
                      <input type="password" class="form-control" name="senha" placeholder="Digite Aqui...">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Acessar</button>
                  </div>
                  </form>
                </div>
              </div>
            </div> 
            
             <!-- Modal cadastro -->
            <div class="modal fade" id="ModalCadastro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content" style="position:relative; margin-bottom: 30px;">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Úsuarios</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  
                  <form method="post" action="config/database_conect.php">
                  <div class="modal-body">
                    <div class="mb-3">
                      <label class="form-label">Nome</label>
                      <input type="text" class="form-control" name="nome" placeholder="Digite Aqui...">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">E-mail</label>
                      <input type="text" class="form-control" name="email"  placeholder="Digite Aqui...">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Senha</label>
                      <input type="password" class="form-control" name="senha" placeholder="Digite Aqui...">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Confirmação</label>
                      <input type="text" class="form-control" name="confirma" placeholder="Digite Aqui...">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">CPF</label>
                      <input type="text" class="form-control" name="cpf" placeholder="Digite Aqui...">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Idade</label>
                      <input type="text" class="form-control" name="idade" placeholder="Digite Aqui...">
                    </div>
                  </div>
                  <div class="modal-footer" style="position:relative; top:-25px; margin-bottom:-20px;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Enviar Cadastro</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>   
          </div>
        </div>
      </div>
    </div>
    <div class="footer">Desenvolvido por Douglas Esquinelato®</div>
  </body>
</html>