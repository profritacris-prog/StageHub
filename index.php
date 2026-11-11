<?php
  require_once 'ligarbd.php';
?>

<!doctype html>
<html lang="pt-PT">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>StageHub | O palco dos novos talentos</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <header class="site-header">
    <nav class="navbar navbar-expand-lg navbar-dark" aria-label="Navegação principal">
      <div class="container py-2">
        <a class="navbar-brand" href="index.php" aria-label="StageHub — página inicial">
          <img src="imagens/logo-stagehub_branco.png" alt="StageHub — Bandas e artistas amadores" class="brand-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Abrir menu"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="menuPrincipal">
          <ul class="navbar-nav mx-auto gap-lg-3">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Início</a></li>
            <li class="nav-item"><a class="nav-link" href="#comunidade">A comunidade</a></li>
            <li class="nav-item"><a class="nav-link" href="#talentos">Artistas</a></li>
            <li class="nav-item"><a class="nav-link" href="#eventos">Eventos</a></li>
          </ul>
          <!-- Botão para abrir o modal de login -->
         <button type="button" class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#modalLogin">
            Iniciar sessão
        </button>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section class="hero">
      <div class="container py-5">
        <div class="row align-items-center g-5 py-lg-5">
          <div class="col-lg-7">
            <span class="eyebrow"><span class="status-dot"></span> A COMUNIDADE DOS NOVOS TALENTOS</span>
            <h1 class="display-4 fw-bold mt-4">O teu talento<br>merece <span class="gradient-text">um palco.</span></h1>
            <p class="hero-lead mt-4">Um espaço para descobrir bandas, apoiar artistas independentes e dar voz a quem vive a música com paixão.</p>
            <div class="d-flex flex-wrap gap-3 mt-4">
              <a href="#talentos" class="btn btn-primary-custom">Descobrir talentos <span aria-hidden="true">→</span></a>
              <a href="#comunidade" class="btn btn-outline-light rounded-pill px-4 py-3">Conhecer a comunidade</a>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="hero-art text-center">
              <div class="hero-art-glow"></div>
              <img src="imagens/logo-stagehub_branco.png" alt="Logótipo StageHub" class="hero-logo img-fluid">
              <p class="hero-art-caption">CRIAR · PARTILHAR · INSPIRAR</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="comunidade" class="section-light py-5">
      <div class="container py-4">
        <div class="row align-items-center g-4">
          <div class="col-lg-5"><span class="section-kicker">SOBRE NÓS</span><h2 class="section-title mt-2">Mais do que música.<br><span class="gradient-text">Uma comunidade.</span></h2></div>
          <div class="col-lg-7"><p class="section-description mb-0">O StageHub é um ponto de encontro para bandas e artistas amadores. Aqui, cada projeto tem espaço para se apresentar, partilhar o seu trabalho e chegar a novos públicos. Porque todos os grandes palcos começam com uma oportunidade.</p></div>
        </div>
      </div>
    </section>

    <section id="talentos" class="section-dark py-5">
      <div class="container py-4">
        <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-4">
          <div><span class="section-kicker">EM DESTAQUE</span><h2 class="section-title mt-2 mb-0">Descobre novos talentos</h2></div>
          <span class="small text-secondary">Exemplos fictícios para a página inicial</span>
        </div>
        <div class="row g-4">
          <div class="col-md-4"><article class="artist-card h-100"><div class="artist-visual visual-one"><span class="artist-symbol">♫</span></div><div class="p-4"><span class="genre">ROCK ALTERNATIVO</span><h3 class="h4 mt-2">Os Sem Palco</h3><p>Uma banda que transforma ensaios de garagem em energia contagiante.</p><a href="#eventos" class="artist-link">Conhecer projeto →</a></div></article></div>
          <div class="col-md-4"><article class="artist-card h-100"><div class="artist-visual visual-two"><span class="artist-symbol">♬</span></div><div class="p-4"><span class="genre">INDIE / POP</span><h3 class="h4 mt-2">Luz de Ensaio</h3><p>Melodias originais, histórias reais e vontade de chegar mais longe.</p><a href="#eventos" class="artist-link">Conhecer projeto →</a></div></article></div>
          <div class="col-md-4"><article class="artist-card h-100"><div class="artist-visual visual-three"><span class="artist-symbol">♩</span></div><div class="p-4"><span class="genre">PERCUSSÃO / FUSÃO</span><h3 class="h4 mt-2">Ritmo Livre</h3><p>Ritmos que cruzam influências e fazem da música um lugar de encontro.</p><a href="#eventos" class="artist-link">Conhecer projeto →</a></div></article></div>
        </div>
      </div>
    </section>

    <section id="eventos" class="events-section py-5">
      <div class="container py-4 text-center"><span class="section-kicker">O QUE AÍ VEM</span><h2 class="section-title mt-2">Há sempre algo a acontecer.</h2><p class="mx-auto events-copy">Concertos, encontros, novos lançamentos e oportunidades de colaboração. Em breve, esta área terá os eventos da comunidade.</p><span class="coming-soon">AGENDA EM CONSTRUÇÃO</span></div>
    </section>
  </main>

  <footer class="site-footer py-4"><div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
    <span class="footer-name">Stage<span>Hub</span></span><span>O palco dos novos talentos.</span><span>© 2026 StageHub · Projeto escolar</span></div></footer>
  


  <!-- Modal - Iniciar sessão - Login  -->
  <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="modalLoginTitulo" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content modal-stagehub">
              <!-- Cabeçalho -->
              <div class="modal-header border-secondary">
                  <h5 class="modal-title" id="modalLoginTitulo">
                      Iniciar sessão
                  </h5>
                  <button type="button" class="btn-close btn-close-white"
                          data-bs-dismiss="modal" aria-label="Fechar">
                  </button>
              </div>
              <!-- Formulário de Login -->
              <form id="formLogin">
                  <!-- Corpo -->
                  <div class="modal-body py-4">
                      <h5 class="text-center mb-4">
                          Bem-vindo ao StageHub!
                      </h5>
                      <!-- Email -->
                      <div class="mb-3">
                          <label for="loginEmail" class="form-label">
                              Email
                          </label>
                          <input type="email"
                                class="form-control"
                                id="loginEmail"
                                name="email"
                                placeholder="Introduz o teu email"
                                autocomplete="email"
                                required>
                      </div>
                      <!-- Palavra-passe -->
                      <div class="mb-3">
                          <label for="loginPassword" class="form-label">
                              Palavra-passe
                          </label>
                          <input type="password"
                                class="form-control"
                                id="loginPassword"
                                name="password"
                                placeholder="Introduz a palavra-passe"
                                pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9]).{12,}"
                                title="A palavra-passe deve ter pelo menos 12 caracteres, incluindo uma letra maiúscula, uma minúscula, um número e um carácter especial."
                                minlength="12"
                                autocomplete="current-password"
                                required>                                
                                <button type="button"
                                    class="btn btn-outline-secondary" style="border:none"
                                    id="btnMostrarPassword"
                                    aria-label="Mostrar palavra-passe"
                                    aria-pressed="false">
                                    👁️
                              </button>
                      </div>
                      <!-- Ligação para registo -->
                      <p class="text-center mt-4 mb-0">
                          Ainda não tens uma conta?
                          <a href="registo.php" class="fw-bold">
                              Cria uma conta
                          </a>
                      </p>
                  </div>
                  <!-- Rodapé -->
                  <div class="modal-footer border-secondary">
                      <button type="button"
                              class="btn btn-outline-light"
                              data-bs-dismiss="modal">
                          Fechar
                      </button>

                      <button type="submit" class="btn btn-primary">
                          Entrar
                      </button>
                  </div>
              </form>
          </div>
      </div>      
  </div>


  <!--js -->
  <script src="js/bootstrap.bundle.min.js"></script>

  <!--mostrar/ocultar password no formulário de login-->
  <script>
      const password = document.getElementById("loginPassword");
      const btnMostrar = document.getElementById("btnMostrarPassword");

      btnMostrar.addEventListener("click", function () {

          if (password.type === "password") {
              password.type = "text";
              btnMostrar.textContent = "🙈";
              btnMostrar.setAttribute("aria-label", "Ocultar palavra-passe");
              btnMostrar.setAttribute("aria-pressed", "true");
          } else {
              password.type = "password";
              btnMostrar.textContent = "👁️";
              btnMostrar.setAttribute("aria-label", "Mostrar palavra-passe");
              btnMostrar.setAttribute("aria-pressed", "false");
          }

      });
  </script>
</body>
</html>
