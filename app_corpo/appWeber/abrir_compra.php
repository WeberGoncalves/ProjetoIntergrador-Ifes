<?php require_once "validador_acesso.php" ?>

<html>
  <head>
    <meta charset="utf-8" />
    <title> Alimentação saudável para todos - Luana Pinudo</title>
    <link rel="shortcut icon" href="imagens/04favicon_io/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="index.html">
        <img src="imagens/logoLuana04.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Alimentação saudável para todos
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Escolha o minicurso
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="registra_compra.php">
                                       
                    <div class="form-group">
                      <label>Cursos</label>
                      <select name="cursos" class="form-control">
                        <option>Semana Fit</option>
                        <option>Tortas fitness</option>
                        <option>Doces fitness</option>
                        <option>Monte seu kit fitness</option>
                        <option>Desafio Fitness</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Objetivo ao fazer este minicurso</label>
                      <textarea name="objetivo" class="form-control" rows="3"></textarea>
                    </div>
                    
                    <div class="form-group">
                      <label>Forma de pagamento</label>
                      <input name="pagamento" type="text" class="form-control" placeholder=" Chave do Pix ou Nome do PicPay">
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Comprar</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>