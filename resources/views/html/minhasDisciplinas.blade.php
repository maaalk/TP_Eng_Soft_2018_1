<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nome do Sistema</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style>
  .discOp {
      height: 450px;
      border: solid 1px #c19a25;
      padding: 20px;
      font-size: 18px;
  }
  #menu{
      background-color: #c19a25;
  }
  #top-bot{
      background-color: #fff0c9;
  }
  img{
      height: 140px;
  }
  #btnUsuario{
      background-color: #fff0c9;
      color: black;
  }
  #titulo{
      padding-bottom: 20px;
      margin-left:-15px;
  }
  .rowElementos{
      margin-left: -40px;
  }
  #opMenuDisc{
      padding-bottom: 20px;
  }
  #btn{
    background-color: #c19a25;
    color: white;
  }
  div.relative {
    position: relative;
    top: 200px;
    right: -10px;
  }
  #opDisciplina{
      padding-bottom: 20px;
  }
  #positionBtn{
      text-align: center;
      padding-top: 170px;
  }
  </style>
</head>
<body>

    <div id="top-bot" class="text-center" style="margin-bottom:0">
        <img src="logo.svg"></img>
    </div>

    <nav id="menu" height="100px" class="navbar navbar-expand-sm navbar-dark">
        <a class="navbar-brand" href="#">Disciplinas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Troféus</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Equipes</a>
                    </li>    
                </ul>
            </div>     
        </div>
        <button type="button" class="btn" id="btnUsuario">Usuário</button>   
    </nav>

    <div class="container" style="margin-top:30px">
        <div class="row rowElementos">
            <div id="titulo" class="col-sm-12">
                <h1>Minhas Disciplinas</h1>
            </div>
        </div>
        <div class="row rowElementos" >
            <div class="col-sm-3 discOp">  
                <div class="row">
                    <div class="col-sm-12">
                            <a href="#"><div id="opMenuDisc">Minhas Disciplinas</div></a>
                            <a href="#"><div id="opMenuDisc">Outras Disciplinas</div></a>
                            <a href="#"><div id="opMenuDisc">Disciplinas Finalizadas</div></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div id="positionBtn">
                            <button id="btn" type="submit" class="btn" >Cadastrar Disciplina</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Deverão ser adicionadas aqui as disciplinas que o professor leciona presentes no BD-->
            <!--O modelo será: Código Disciplina - Nome Disciplina - Descrição Disciplina-->
            <div class="col-sm-9">
                    <div id="opDisciplina">
                        <a href="#"><h5>COD - Nome Disciplina</h5></a>
                        <p>Descrição disciplina, descrição disciplina, descrição disciplina, descrição disciplina, 
                            descrição disciplina, descrição disciplina, descrição disciplina, descrição disciplina,
                            descrição disciplina,descrição disciplina,descrição disciplina.</p>
                    </div>
                    <div id="opDisciplina">
                        <a href="#"><h5>COD - Nome Disciplina</h5></a>
                        <p>Descrição disciplina, descrição disciplina, descrição disciplina, descrição disciplina, 
                            descrição disciplina, descrição disciplina, descrição disciplina, descrição disciplina,
                            descrição disciplina,descrição disciplina,descrição disciplina.</p>
                    </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>

    <div id="top-bot" class="text-center" style="margin-bottom:0">
        <p></p>
    </div>

</body>
</html>