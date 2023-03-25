<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $user = 'root';
  $password = 'root';
  $db = 'dk_banana';
  $host = 'localhost';
  $port = 8889;

  $link = mysqli_init();
  $conn = mysqli_connect(
    $host,
    $user,
    $password,
    $db,
    $port
  );

  $stmt = $conn->prepare("INSERT INTO messages (name, email, phone, message) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $name, $email, $phone, $message);
  $stmt->execute();
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DK Banana's</title>
  <link rel="stylesheet" href="./src/styles/css/style.css" />
  <link rel="icon" type="image/x-icon" href="./src/images/favicon.png">
  <script src="https://kit.fontawesome.com/cd94039ada.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Header -->
  <section class="intro">
    <div class="container">
      <header class="header">
        <!-- Logo -->
        <img id="topo" src="./src/images/logo.svg" />
        <!-- Navbar -->
        <nav>
          <ul>
            <li><a href="#quem-somos">Quem somos?</a></li>
            <li><a href="#diferenciais">Diferenciais</a></li>
            <li><a href="#FAQ-container">Dúvidas frequentes</a></li>
          </ul>
        </nav>
        <!-- Whatsapp -->
        <a class="number"
          href="https://wa.me/5562991112187?text=Parab%C3%A9ns%2C%20voc%C3%AA%20passou%20no%20teste%20e%20vai%20ser%20contratado!">
          <i class="fa-brands fa-whatsapp"></i>
          (48)9 9999-9999</a>
      </header>
      <!-- Conteúdo principal -->
      <main>
        <div class="section1">
          <div id="title">
            <h1>
              <span>Tenha as suas</span>
            </h1>
            <h1>
              <span>bananas de volta!</span>
            </h1>
            <p>
              Com a DK Banana’s, você pode recuperar suas bananas o mais
              rápido possível. Caso as tenha perdido ou tenha sido roubado,
              isso não será mais um problema.
            </p>
          </div>
          <img id="bananaBack1" src="./src/images/banana.png" alt="" />
          <img id="bananaBack2" src="./src/images/banana.png" alt="" />
          <img id="bananaBack3" src="./src/images/banana.png" alt="" />
          <div class="contact">
            <fieldset>
              <form id="form" method="post" action="/">
                <legend>
                  <h2>Entre em contato</h2>
                </legend>
                <input type="text" id="name" name="name" placeholder="NOME:" />
                <input type="text" id="email" name="email" placeholder="E-MAIL:" />
                <input type="tel" class="phone-input" id="number" name="phone" placeholder="DDD + Número" />
                <textarea id="message" name="message" placeholder="COMO PODEMOS TE AJUDAR?"
                  style="height: 50px"></textarea>
                <button class="submit-button" disabled type="submit">Enviar</button>
              </form>
            </fieldset>
          </div>
        </div>
      </main>
    </div>
  </section>
  <section id="quem-somos" class="quem-somos">
    <div id="family" class="container slide-in">
      <img src="./src/images/family.png" alt="" />
      <div id="family-text">
        <img id="banana" src="./src/images/banana.png" alt="" />
        <h1>Quem somos nós?</h1>
        <p>
          Após o sucesso de Donkey e Diddy Kong em sua aventura pela Ilha
          Kong, ao recuperarem o roubo de seu bem mais precioso: seu estoque
          de bananas. Nós, a Família Kong, decidimos abrir nosso próprio
          negócio e ajudar todos aqueles que se encontrarem na mesma triste
          situação. Por isso, se você perdeu ou roubaram suas bananas, entre
          em contato conosco!
        </p>
      </div>
    </div>
  </section>
  <section class="servicos">
    <div class="container">
      <div id="diferenciais" class="serviceslist slide-in-left">
        <div class="title">
          <h2>Nossos diferenciais</h2>
        </div>
        <img id="banana2" src="/src/images/banana.png" alt="" />
        <img id="banana3" src="/src/images/banana.png" alt="" />
        <div class="services">
          <div class="service">
            <div class="icon">
              <img src="./src/images/1.svg" alt="" />
            </div>
            <div class="text">
              <h3>Agilidade</h3>
              <p>Nossa empresa realiza o serviço em cerca de 3 dias.</p>
            </div>
          </div>
          <div class="service">
            <div class="icon"><img src="./src/images/4.svg" alt="" /></div>
            <div class="text">
              <h3>Entrega</h3>
              <p>
                Entregamos suas bananas recuperadas, na porta da sua casa.
              </p>
            </div>
          </div>
          <div class="service">
            <div class="icon"><img src="./src/images/2.svg" alt="" /></div>
            <div class="text">
              <h3>Atendimento</h3>
              <p>Equipe disponível 24h, todos os dias da semana.</p>
            </div>
          </div>
          <div class="service">
            <div class="icon"><img src="./src/images/5.svg" alt="" /></div>
            <div class="text">
              <h3>Frete Grátis</h3>
              <p>
                Nós não cobramos a taxa de entrega, é totalmente gratuita.
              </p>
            </div>
          </div>
          <div class="service">
            <div class="icon"><img src="./src/images/3.svg" alt="" /></div>
            <div class="text">
              <h3>Garantia de 15 dias</h3>
              <p>
                Caso você nao fique satisfeito com o serviço, tem o direito de
                pedir seu dinheiro de volta.
              </p>
            </div>
          </div>
          <div class="service">
            <div class="icon"><img src="./src/images/6.svg" alt="" /></div>
            <div class="text">
              <h3>Precificação</h3>
              <p>Ofereçemos diversos serviços com custo a “preço de banana’’.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Sessão FAQ-->
  <section class="FAQ">
    <div id="FAQ-container" class="container">
      <div class="title">
        <h2>Dúvidas frequentes</h2>
      </div>
      <div class="perguntas">
        <div class="pergunta">
          <h3>Existe mais de uma opção de preço?</h3>
          <img src="./src/images/+.png" alt="" />
        </div>
        <div class="pergunta">
          <h3>Consigo manter contato após a contratação do serviço?</h3>
          <img src="./src/images/+.png" alt="" />
        </div>
        <div class="pergunta">
          <h3>Posso cancelar o serviço?</h3>
          <img src="./src/images/+.png" alt="" />
        </div>
        <div class="pergunta">
          <h3>Posso agendar a entrega das bananas?</h3>
          <img src="./src/images/+.png" alt="" />
        </div>
        <div class="pergunta">
          <h3>Como funciona a garantia?</h3>
          <img src="./src/images/+.png" alt="" />
        </div>
      </div>
    </div>
  </section>
  <section class="last slide-in">
    <div id="last-container" class="container">
      <div class="wrapper">
        <div class="title">
          <h2>Não seja um banana!</h2>
          <p>
            Se você chegou aqui, o que está esperando? Entre em contato
            conosco e nunca mais fique sem suas preciosas bananas!
          </p>
          <a href="#topo">Entrar em contato</a>
        </div>
        <img src="./src/images/end.png" alt="" />
      </div>
    </div>
  </section>

  <footer>
    <div>
      <p>DK Bananas’s</p>
      <p>Todos os direitos reservados - 2023</p>
    </div>
    <div>
      <p>CNPJ - 00.000.000-0000-00</p>
      <p>TERMOS DE USO</p>
    </div>
  </footer>
  <a class="toTopButton" href="#topo">
    <i class="fa-solid fa-arrow-up"></i>
  </a>
  <script src="./src/scripts/pageControl.js"></script>
  <script src="./src/scripts/Questions.js"></script>
  <script src="./src/scripts/form.js"></script>
</body>

</html>