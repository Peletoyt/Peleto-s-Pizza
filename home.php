<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Login - bem-vindo</title>
     <?php include("include/header.php");?>  
</head>
<body class="body-home">
    <?php include("include/navbar.php");?> 
    <img src="include/image/mask_fnaf.webp" alt="maskFreddy" id="mask" class="mask">

<main class="home">
  <!-- Luzes de neon e banner principal -->
  <header class="home-header">
    <div class="stars">★ ★ ★</div>
    <h1 class="home-title">FREDDY FAZBEAR'S PIZZA</h1>
    <div class="stars">★ ★ ★</div>
  </header>

  <p class="slogan-tag">"Welcome to Freddy Fazbear's Pizza: a magical place for kids and grown-ups alike, where fantasy and fun come to life."</p> <!--Trocar o slogan-->

  <!-- Banner de Destaque / Pôster Retrô -->
  <section class="hero-poster">
   <img src="include/image/logo-color.jpg" alt="logo-fazbear_entertainment" class="logo-badge" width="100px" onclick="openMask()">
    <div class="poster-badge">NOVIDADE!</div>
    <h2 class="poster-heading">O LUGAR PERFEITO PARA SUA FESTA!</h2>
    <p class="poster-text">
      Venha saborear nossas deliciosas pizzas artesanais, comemorar seu aniversário e assistir ao show inesquecível da nossa banda animatrônica!
    </p>

    <!-- Avisos e Pegadinhas de Lore no Pôster -->
    <div class="fine-print">
      *A Fazbear Entertainment não se responsabiliza por objetos perdidos, refrigerantes derramados ou incidentes após as 22h.
    </div>
  </section>

  <!-- Grade de Cartões em Estilo Ficha de Aniversário / Arcade -->
  <section class="promo-grid">
    
    <div class="promo-card card-yellow">
      <div class="card-tag">UNIDADES Fazbear</div>
      <h3>PIZZARIAS</h3>
      <p>Conheça a história e a localização da nossa famosa unidade local!</p>
      <a href="#unidades" class="promo-btn">VER PIZZARIAS</a>
    </div>

    <div class="promo-card card-red">
      <div class="card-tag">SHOW TIME!</div>
      <h3>CARDÁPIO FESTIVO</h3>
      <p>Confira nossas opções de pizzas, refrigerantes e os horários dos shows.</p>
      <a href="#cardapio" class="promo-btn">VER MENU</a>
    </div>

    <div class="promo-card card-purple">
      <div class="card-tag">PARTY ROOM</div>
      <h3>RESERVE SUA MESA</h3>
      <p>Garanta o melhor lugar perto do palco para o aniversário dos seus filhos!</p>
      <a href="#agendar" class="promo-btn">AGENDAR AGORA</a>
    </div>

    <div class="promo-card card-green">
      <div class="card-tag">MUSEU DA COMUNIDADE</div>
      <h3>FANARTS</h3>
      <p>Desenhos, tributos e artes enviadas por nossos pequenos fãs e visitantes!</p>
      <a href="#fanarts" class="promo-btn">VER GALERIA</a>
    </div>

  </section>
</main>
    <?php include('include/scripts.php');?>
</body>
<script>
function openMask() {
    const mask = document.getElementById('mask');
    if (mask) {
      mask.classList.toggle('active');
      console.log("ooo");
    }
  }

  // Evento para fechar a máscara ao clicar sobre ela
  document.addEventListener('DOMContentLoaded', () => {
    const mask = document.getElementById('mask');
    if (mask) {
      mask.addEventListener('click', () => {
        mask.classList.remove('active');
      });
    }
  });
</script>
</html>
 