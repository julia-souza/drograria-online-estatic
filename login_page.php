<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
  <title> Drogaria Online</title>
</head>
<body>
    <?php include "include/header.php"?>
    <section>
        <div class="row">
            <h3 class="titulo-page">Minha conta</h3>
            <div class="col-md-6">
                <form class="login-form">
                    <h5>Login: </h5>
                    <div class="login-input">
                        <label>E-MAIL:</label>
                        <input name="email" type="text" placeholder="E-MAIL"></input>
                    </div>
                    <div class="login-input">
                        <label>SENHA:</label>
                        <input name="password" type="text" placeholder="SENHA"></input>
                    </div>
                    <button class="login-button" value="ENTRAR">LOGIN</button>
                </form>
            </div>
            <div class="col-md-6">
                <form class="cadastro-form">
                    <h5>Cadastro: </h5>
                    <div class="cadastro-input">
                    <label>E-MAIL:</label>
                    <input type="text" name="email" placeholder="E-MAIL"></input>
                    </div>
                    <div class="cadastro-input">
                    <label>NOME:</label>
                    <input type="text" name="nome" placeholder="NOME"></input>
                    </div>            
                    <div class="cadastro-input">
                    <label>CPF:</label>
                    <input type="text" name="cpf" pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}" placeholder="CPF"></input>            
                    </div>
                    <div class="cadastro-input">
                    <label>SENHA:</label>
                    <input type="password" name="senha" placeholder="SENHA"></input>
                    </div>
                    <div class="cadastro-input">
                    <label>REPITA SUA SENHA:</label>
                    <input type="password" name="senha" placeholder="REPITA SUA SENHA"></input>                        
                    </div>
                    <button class="cadastro-button" value="CADASTRAR">CADASTRAR</button>
                </form>
            </div>
        </div>
    </section>
    <?php include "include/footer.php"?>
</body>
</html>