<!DOCTYPE html>
<html lang="pt-br">
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

    <!--favicon do site-->
    <link rel="sortcut icon" href="img/favicon.ico" type="image/x-icon" />

    <title>Carrinho de Compras</title>
</head>

<body>
    <?php include "include/header.php" ?>
    <br>
    <h2 style="text-align:center"><b>MEU CARRINHO</b></h2>

    <div id="itens"> </div>
    <br>

    <div class="text-success">
        <strong>Total (R$): <span class="text-success" id="total">></span></strong>
    </div>

    <!-- exibe itens do carrinho armazenados na localStorage e calcula total-->
    <script>
        var total = 0; // variável que retorna o total dos produtos que estão na LocalStorage.
        var i = 0; // variável que irá percorrer as posições
        var valor = 0; // variável que irá receber o preço do produto convertido em Float.

        for (i = 1; i <= 99; i++) // verifica até 99 produtos registrados na localStorage
        {
            var prod = localStorage.getItem("produto" + i + ""); // verifica se há recheio nesta posição. 
            if (prod != null) {
                // exibe os dados da lista dentro da div itens
                document.getElementById("itens").innerHTML += localStorage.getItem("qtd" + i) + " x ";
                document.getElementById("itens").innerHTML += localStorage.getItem("produto" + i);
                document.getElementById("itens").innerHTML += " ";
                document.getElementById("itens").innerHTML += "R$: " + localStorage.getItem("valor" + i) + "<hr>";

                // calcula o total dos recheios
                valor = parseFloat(localStorage.getItem("valor" + i)); // valor convertido com o parseFloat()
                total = (total + valor); // arredonda para 2 casas decimais com o .toFixed(2)
            }
        }
        // exibe o total dos recheios
        document.getElementById("total").innerHTML = total.toFixed(2);
    </script>

    <br>

    <!-- botões limpar e finalizar-->
    <button type="button" class="btn btn-secondary" onclick=" localStorage.clear(); location.reload();"> Limpar carrinho </button>
    <a href="checkout.php"><button type="button" class="btn btn-success"> Finalizar pedido </button></a>

    <!-- CONTEÚDO PÁGINA INDEX COM OS PRODUTOS -->
    <br><br><br>
    <h2 style="text-align:center"><b>OUTROS CLIENTES TAMBÉM COMPRARAM</b></h2>
    <br>

    <div id="grid">
        <div id="item1">
            <div class="card">
                <img src="img/remedio.jpg" alt="Remédio" style="width:100%">
                <h2>Remédio para gripe</h2>
                <p class="price">R$21,50</p>
                <p>Remédio para aliviar dores e febre<br>qtd: <input type="number" value="1" min="1" max="10" id="qtd1"></p>
                <p><button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('Remédio para gripe', document.getElementById('qtd1').value, '21.50', 1)"> Adicionar ao carrinho </button></p>
            </div>
        </div>

        <div id="item2">
            <div class="card">
                <img src="img/remedio.jpg" alt="Remédio" style="width:100%">
                <h2>Dores de cabeça</h2>
                <p class="price">R$58,50</p>
                <p>Alivia dores de cabeça<br>qtd: <input type="number" value="1" min="1" max="10" id="qtd2"></p>
                <p><button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('Dores de cabeça', document.getElementById('qtd2').value, '58.50', 2)"> Adicionar ao carrinho </button></p>
            </div>
        </div>

        <div id="item3">
            <div class="card">
                <img src="img/remedio.jpg" alt="Remédio" style="width:100%">
                <h2>Crescimento de cabelo</h2>
                <p class="price">R$30,99</p>
                <p>Acelera o crescimento do cabelo<br>qtd: <input type="number" value="1" min="1" max="10" id="qtd3"></p>
                <p><button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('Crescimento do cabelo', document.getElementById('qtd3').value, '30.99', 3)"> Adicionar ao carrinho </button></p>
            </div>
        </div>
    </div>

    <!-- adicionando os produtos no carrinho-->
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