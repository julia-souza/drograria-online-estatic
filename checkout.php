<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Checkout - Farmácia Lippia</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!--favicon do site-->
    <link rel="sortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="theme-color" content="#7952b3">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="img/6357977537_6429fb4333-removebg-preview.png" alt="" width="190" height="110">
                <h2>Checkout</h2>
            </div>

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Meu carrinho</span>
                        <span class="badge bg-primary rounded-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Remédios para gripe</h6>
                                <small class="text-muted">Remédio para aliviar dores e febre</small>
                            </div>
                            <span class="text-muted">R$21,50</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Dores de cabeça</h6>
                                <small class="text-muted">Alivia dores de cabeça</small>
                            </div>
                            <span class="text-muted">R$58,56</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Crescimento de cabelo</h6>
                                <small class="text-muted">Acelera o crescimento do cabelo</small>
                            </div>
                            <span class="text-muted">R$30,99</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Cupom de desconto</h6>
                                <small>NIVER10</small>
                            </div>
                            <span class="text-success">−R$10</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (R$)</span>
                            <strong>R$111,05</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <span>Total com desconto (R$)</span>
                            </div>
                            <strong><span class="text-success">R$101,05</span></strong>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Código promocional">
                            <button type="submit" class="btn btn-secondary">Aplicar</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Endereço de entrega</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Por favor digite seu nome.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Sobrenome</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Por favor digite seu sobrenome.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="exemplo@exemplo.com" required>
                                <div class="invalid-feedback">
                                    Por favor adicione um e-mail válido para prosseguir com a compra.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="telephone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control" id="telephone" placeholder="+55 28 99999-9999" required>
                                <div class="invalid-feedback">
                                    Por favor adicione um e-mail válido para prosseguir com a compra.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">Endereço</label>
                                <input type="text" class="form-control" id="address" placeholder="Rua 25 de março, nº 7" required>
                                <div class="invalid-feedback">
                                    Por favor adicione um endereço de entrega.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="state" class="form-label">Complemento<span class="text-muted"></span></label>
                                <input type="text" class="form-control" id="state" placeholder="Casa/Apartamento">
                            </div>

                            <div class="col-md-5">
                                <label for="state" class="form-label">Estado</label>
                                <select class="form-select" id="state" required>
                                    <option value="">Selecionar...</option>
                                    <option>ES</option>
                                    <option>RJ</option>
                                    <option>MG</option>
                                    <option>SP</option>
                                </select>
                                <div class="invalid-feedback">
                                    Por favor selecione um estado válido.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="city" class="form-label">Cidade</label>
                                <select class="form-select" id="city" required>
                                    <option value="">Selecionar...</option>
                                    <option>Cachoeiro de Itapemirim</option>
                                    <option>Rio de Janeiro</option>
                                    <option>Belo Horizonte</option>
                                    <option>São Paulo</option>
                                </select>
                                <div class="invalid-feedback">
                                    Por favor selecione uma cidade válida.
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="zip" class="form-label">CEP</label>
                                <input type="text" class="form-control" id="zip" placeholder="CEP" required>
                                <div class="invalid-feedback">
                                    Adicione um CEP válido.
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="same-address">
                            <label class="form-check-label" for="same-address">Receber comunicações e promoções em meu e-mail</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="save-info">
                            <label class="form-check-label" for="save-info">Salvar informações para futuras compras.</label>
                        </div>

                        <hr class="my-4">

                        <h4 class="mb-3">Forma de pagamento</h4>

                        <div class="my-3">
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label" for="credit">Cartão de crédito</label>
                            </div>
                            <div class="form-check">
                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="debit">Cartão de débito</label>
                            </div>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="paypal">PayPal</label>
                            </div>
                            <div class="form-check">
                                <input id="boleto" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="boleto">Boleto</label>
                            </div>
                        </div>

                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">Nome do titular</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                <small class="text-muted">Nome completo presente no cartão</small>
                                <div class="invalid-feedback">
                                    Nome do titular é obrigatório.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Número</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                    Número do cartão é obrigatório.
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-expiration" class="form-label">Validade</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback">
                                    Validade é obrigatório.
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback">
                                    CVV é obrigatório.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="pay" class="form-label">Opções de parcelamento</label>
                                <select class="form-select" id="pay" required>
                                    <option value="">Selecionar...</option>
                                    <option>1x de R$ 101,05</option>
                                    <option>2x de R$ 50,55</option>
                                    <option>3x de R$ 33,70</option>
                                    <option>4x de R$ 25,26</option>
                                </select>
                                <div class="invalid-feedback">
                                    Por favor escolha a opção de parcelamento.
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit" onclick="alert('Compra realizada com sucesso!'); localStorage.clear(); location.reload();">Finalizar compra</button>

                        <!-- MENSAGEM DE SUCESSO -->
                        <!-- <script>
                            function Success() {
                                alert("Compra realizada com sucesso! Voltando para a página inicial...");
                                localStorage.clear();
                                location.reload();
                                //redirecionar para a página inicial
                            }
                        </script> -->
                    </form>
                </div>
            </div>
        </main>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017–2021 Farmácia Lippia</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacidade</a></li>
                <li class="list-inline-item"><a href="#">Termos</a></li>
            </ul>
        </footer>
    </div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="form-validation.js"></script>
</body>

</html>