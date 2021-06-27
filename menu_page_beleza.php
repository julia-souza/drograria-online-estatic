<!DOCTYPE html>
<html lang="pt-br">
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/menu_page.css" media="screen" />
  <link rel="sortcut icon" href="img/favicon.ico" type="image/x-icon" />

  <title> Drogaria Online</title>
</head>

<body>
  <?php include "include/header.php" ?>
  <h2 style="text-align:center">BELEZA</h2>

  <div id="grid">
    <div id="item1">
      <div class="card">
        <img src="img/remedio.jpg" alt="Remédio" style="width:100%">
        <h4>Remédio para gripe</h4>
        <p class="taxado">De: R$21,50</p>
        <p class="price">Por: R$19,50</p>
        <p>Remédio para aliviar dores e febre<br>qtd: <input type="number" value="1" min="1" max="10" id="qtd1"></p>
        <p><button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('Remédio para gripe', document.getElementById('qtd1').value, '19.50', 1)"> Adicionar ao carrinho </button></p>
      </div>
    </div>

    <div id="item2">
      <div class="card">
        <img src="img/remedio.jpg" alt="Remédio" style="width:100%">
        <h4>Dores de cabeça</h4>
        <p class="taxado">De: R$58,50</p>
        <p class="price">Por: R$48,50</p>
        <p>Alivia dores de cabeça<br>qtd: <input type="number" value="1" min="1" max="10" id="qtd2"></p>
        <p><button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('Dores de cabeça', document.getElementById('qtd2').value, '48.50', 2)">Adicionar ao carrinho</button></p>
      </div>
    </div>

    <div id="item3">
      <div class="card">
        <img src="img/remedio.jpg" alt="Remédio" style="width:100%">
        <h4>Crescimento de cabelo</h4>
        <p class="taxado">De: R$30,99</p>
        <p class="price">Por: R$27,50</p>
        <p>Acelera o crescimento do cabelo<br>qtd: <input type="number" value="1" min="1" max="10" id="qtd3"></p>
        <p><button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('Crescimento do cabelo', document.getElementById('qtd3').value, '27.50', 3)">Adicionar ao carrinho</button></p>
      </div>
    </div>
  </div>

  <div id="grid">
    <div id="item4">
      <div class="card">
        <img src="img/remedio.jpg" alt="Remédio" style="width:100%">
        <h4>Remédio para gripe</h4>
        <p class="taxado">De: R$21,50</p>
        <p class="price">Por: R$19,50</p>
        <p>Remédio para aliviar dores e febre<br>qtd: <input type="number" value="1" min="1" max="10" id="qtd4"></p>
        <p><button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('Remédio para gripe', document.getElementById('qtd4').value, '19.50', 1)"> Adicionar ao carrinho </button></p>
      </div>
    </div>

    <div id="item5">
      <div class="card">
        <img src="img/remedio.jpg" alt="Remédio" style="width:100%">
        <h4>Dores de cabeça</h4>
        <p class="taxado">De: R$58,50</p>
        <p class="price">Por: R$48,50</p>
        <p>Alivia dores de cabeça<br>qtd: <input type="number" value="1" min="1" max="10" id="qtd5"></p>
        <p><button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('Dores de cabeça', document.getElementById('qtd5').value, '48.50', 2)">Adicionar ao carrinho</button></p>
      </div>
    </div>

    <div id="item6">
      <div class="card">
        <img src="img/remedio.jpg" alt="Remédio" style="width:100%">
        <h4>Crescimento de cabelo</h4>
        <p class="taxado">De: R$30,99</p>
        <p class="price">Por: R$27,50</p>
        <p>Acelera o crescimento do cabelo<br>qtd: <input type="number" value="1" min="1" max="10" id="qtd6"></p>
        <p><button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('Crescimento do cabelo', document.getElementById('qtd6').value, '27.50', 3)">Adicionar ao carrinho</button></p>
      </div>
    </div>
  </div>

  <div id="grid">
    <div id="item7">
      <div class="card">
        <img src="img/remedio.jpg" alt="Remédio" style="width:100%">
        <h4>Remédio para gripe</h4>
        <p class="taxado">De: R$21,50</p>
        <p class="price">Por: R$19,50</p>
        <p>Remédio para aliviar dores e febre<br>qtd: <input type="number" value="1" min="1" max="10" id="qtd7"></p>
        <p><button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('Remédio para gripe', document.getElementById('qtd7').value, '19.50', 1)"> Adicionar ao carrinho </button></p>
      </div>
    </div>

    <div id="item8">
      <div class="card">
        <img src="img/remedio.jpg" alt="Remédio" style="width:100%">
        <h4>Dores de cabeça</h4>
        <p class="taxado">De: R$58,50</p>
        <p class="price">Por: R$48,50</p>
        <p>Alivia dores de cabeça<br>qtd: <input type="number" value="1" min="1" max="10" id="qtd8"></p>
        <p><button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('Dores de cabeça', document.getElementById('qtd8').value, '48.50', 2)">Adicionar ao carrinho</button></p>
      </div>
    </div>

    <div id="item9">
      <div class="card">
        <img src="img/remedio.jpg" alt="Remédio" style="width:100%">
        <h4>Crescimento de cabelo</h4>
        <p class="taxado">De: R$30,99</p>
        <p class="price">Por: R$27,50</p>
        <p>Acelera o crescimento do cabelo<br>qtd: <input type="number" value="1" min="1" max="10" id="qtd9"></p>
        <p><button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('Crescimento do cabelo', document.getElementById('qtd9').value, '27.50', 3)">Adicionar ao carrinho</button></p>
      </div>
    </div>
  </div>

  <?php include "include/footer.php" ?>

  <!--adiciona os itens no cart-->
  <script>
    function AddCarrinho(produto, qtd, valor, posicao) {
      localStorage.setItem("produto" + posicao, produto);
      localStorage.setItem("qtd" + posicao, qtd);
      valor = valor * qtd;
      localStorage.setItem("valor" + posicao, valor);
      alert("Produto adicionado ao carrinho!");
      location.reload();
    }
  </script>
</body>

</html>