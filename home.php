<?php
session_start();

if (isset($_SESSION['usuario_nome'])) {
    $nome = $_SESSION['usuario_nome'];
    }
else{
    $nome = header('Location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Login - bem-vindo</title>
     <?php include("include/header.php");?>  
</head>
<body class="body-home">
    <!-- <?php include("include/navbar.php");?>  -->
    <img src="include/image/mask_fnaf.webp" alt="maskFreddy" id="mask" class="mask">

<main class="home">
  <!-- Luzes de neon e banner principal -->
  <header class="home-header">
    <div class="stars">★ ★ ★</div>
    <h1 class="home-title">FREDDY FAZBEAR'S PIZZA</h1>
    <div class="stars">★ ★ ★</div>
  </header>

  <p class="slogan-tag">
    <svg id="phone-guy" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#00ffff"><path d="M763-145q-121-9-229.5-59.5T339-341q-86-86-135.5-194T144-764q-2-21 12.29-36.5Q170.57-816 192-816h136q17 0 29.5 10.5T374-779l24 106q2 13-1.5 25T385-628l-97 98q20 38 46 73t57.97 65.98Q422-361 456-335.5q34 25.5 72 45.5l99-96q8-8 20-11.5t25-1.5l107 23q17 5 27 17.5t10 29.5v136q0 21.43-16 35.71Q784-143 763-145ZM255-600l70-70-17.16-74H218q5 38 14 73.5t23 70.5Zm344 344q35.1 14.24 71.55 22.62Q707-225 744-220v-90l-75-16-70 70ZM255-600Zm344 344Z"/></svg>
    "Welcome to Freddy Fazbear's Pizza: a magical place for kids and grown-ups alike, where fantasy and fun come to life."
  </p>

  <!-- Banner de Destaque / Pôster Retrô -->
  <section class="hero-poster">
   <img src="include/image/logo-color.jpg" alt="logo-fazbear_entertainment" class="logo-badge" width="100px" onclick="openMask()">
    <div class="poster-badge">NOVIDADE!</div>
    <h2 class="poster-heading">O LUGAR PERFEITO PARA SUA FESTA!</h2>
    <p class="poster-text">
     Olá! <?php echo "<strong>$nome</strong>";?> Venha saborear nossas deliciosas pizzas, comemorar seu aniversário e assistir ao show inesquecível da nossa banda animatrônica!
    </p>

    <!-- Avisos e Pegadinhas de Lore no Pôster -->
    <div class="fine-print">
      *A Fazbear Entertainment não se responsabiliza por objetos perdidos, refrigerantes derramados ou incidentes após as 22h.
    </div>
  </section>

  <!-- Grade de Cartões em Estilo Ficha de Aniversário / Arcade -->
  <section class="promo-grid">
    
    <div class="promo-card card-yellow">
      <div class="card-tag">FAZBEAR'S PIZZERIA</div>
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
      <div class="card-tag">GALLERY</div>
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
    }
  }

  document.addEventListener('DOMContentLoaded', () => {
    const mask = document.getElementById('mask');
    if (mask) {
      mask.addEventListener('click', () => {
        mask.classList.remove('active');
      });
    }
  });

  const phone_guy = document.getElementById('phone-guy');
  phone_guy.addEventListener('click', () => {
    // colocar o trecho do audio(night 1) que fala o txt do slogan-tag
  });

  //  console.log("Usuário logado: </*?php echo htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');?>");
</script>
</html>
 