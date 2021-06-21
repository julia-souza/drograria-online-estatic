<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="/css/style.css" media="screen" />

  <title> Drogaria Online</title>
</head>
<body>
  <?php include "include/header.php"?>
  <!--Slides-->
  <div class="slideshow-container">

  <div class="mySlides">
    <img src="/img/banner_recorrencia.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="/img/banner-farmacia-popupar-brasil.jpg" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
  </div>

  <!-- Cards de produtos -->
  <!--A imagem deve ser 150 x 150 px-->
  <h2 style="text-align:center">PRODUTOS EM ALTA</h2>
  <div id="grid">
    <div id="item1">
      <div class="card">
        <img src="/img/remedio.jpg" alt="Remédio" style="width:100%">
        <h1>Remédio para gripe</h1>
        <p class="price">R$21,50</p>
        <p>Remédio para aliviar dores e febre</p>
        <p><button>Adicionar ao carrinho</button></p>
      </div>
    </div>

    <div id="item2">
      <div class="card">
        <img src="/img/remedio.jpg" alt="Remédio" style="width:100%">
        <h1>Dores de cabeça</h1>
        <p class="price">R$58,56</p>
        <p>Alivia dores de cabeça<br><br></p>
        <p><button>Adicionar ao carrinho</button></p>
      </div>
    </div>

    <div id="item3">
      <div class="card">
        <img src="/img/remedio.jpg" alt="Remédio" style="width:100%">
        <h1>Crescimento de cabelo</h1>
        <p class="price">R$30,99</p>
        <p>Acelera o crescimento do cabelo</p>
        <p><button>Adicionar ao carrinho</button></p>
      </div>
    </div>

    <!-- <div id="item4">
      <div class="card">
        <img src="/img/remedio.jpg" alt="Remédio" style="width:100%">
        <h1>Ômega 3</h1>
        <p class="price">R$30,99</p>
        <p>Ômega 3 <br><br><br><br></p>
        <p><button>Adicionar ao carrinho</button></p>
      </div>
    </div> -->
  </div>
   
  <!-- Chama o footer-->
  <?php include "include/footer.php"?>

  
  <script>
    /*script slides*/
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
  }
  </script>
  

</body>

</html> 