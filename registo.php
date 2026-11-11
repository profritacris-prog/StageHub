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

    <main class="registo-section py-5">
        <div class="container">
            <div class="text-center mb-4">
                <span class="section-kicker">FAZ PARTE DA COMUNIDADE</span>
                <h1 class="display-5 fw-bold mt-3">Cria a tua <span class="gradient-text">conta.</span></h1>
                <p class="registo-intro">O teu talento merece um palco. Junta-te ao StageHub!</p>
            </div>

            <div class="registo-card mx-auto">
                <h2 class="h4 mb-2">Registo de utilizador</h2>
                <p class="text-white-50 mb-4">Preenche os campos para criares a tua conta. Os campos assinalados com * são obrigatórios.</p>



                <form id="formRegisto">
                    <div class="row g-3">
                        <!-- Nome completo -->
                        <div class="col-md-6">
                            <label for="nome" class="form-label">Nome completo *</label>
                            <input type="text" class="form-control" id="nome" name="nome"
                                   placeholder="O teu nome completo" minlength="3" maxlength="80"
                                   autocomplete="name" required>
                        </div>

                        <!-- Nome de utilizador: letras, números e underscore -->
                        <div class="col-md-6">
                            <label for="utilizador" class="form-label">Nome de utilizador *</label>
                            <input type="text" class="form-control" id="utilizador" name="utilizador"
                                   placeholder="Ex.: palco_2026" minlength="4" maxlength="20"
                                   pattern="[A-Za-z0-9_]{4,20}"
                                   title="Utiliza entre 4 e 20 caracteres: letras sem acentos, números ou underscore (_)."
                                   autocomplete="username" required>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="nome@exemplo.pt" autocomplete="email" required>
                        </div>

                        <!-- Telemóvel português: validação simplificada -->
                        <div class="col-md-6">
                            <label for="telemovel" class="form-label">Telemóvel *</label>
                            <input type="tel" class="form-control" id="telemovel" name="telemovel"
                                   placeholder="Ex.: 912345678" pattern="9[1236][0-9]{9}"
                                   maxlength="9" inputmode="numeric" autocomplete="tel-national"
                                   title="Introduz 9 dígitos, começando por 91, 92, 93 ou 96."
                                   required>
                        </div>

                        <!-- Data de nascimento -->
                        <div class="col-12">
                            <label for="nascimento" class="form-label">Data de nascimento *</label>
                            <input type="date" class="form-control" id="nascimento" name="nascimento"
                                   min="1900-01-01"  autocomplete="bday"  style="max-width: 220px;" required>
                        </div>

                        <!-- Palavra-passe: HTML5 pattern -->
                        <div class="col-md-6">
                            <label for="password" class="form-label">Palavra-passe *</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password"
                                       minlength="12" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9]).{12,}"
                                       title="Mínimo de 12 caracteres, com uma maiúscula, uma minúscula, um número e um carácter especial."
                                       autocomplete="new-password" required>
                                <button type="button" class="btn btn-outline-light btn-ver" data-alvo="password"
                                        aria-label="Mostrar palavra-passe" aria-pressed="false">👁️</button>
                            </div>
                        </div>

                        <!-- Confirmação da palavra-passe -->
                        <div class="col-md-6">
                            <label for="confirmarPassword" class="form-label">Confirmar palavra-passe *</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="confirmarPassword"
                                       name="confirmarPassword" autocomplete="new-password" required>
                                <button type="button" class="btn btn-outline-light btn-ver" data-alvo="confirmarPassword"
                                        aria-label="Mostrar confirmação da palavra-passe" aria-pressed="false">👁️</button>
                            </div>
                        </div>
                    </div>

                    <p class="form-text text-white-50 mt-3">A palavra-passe deve ter pelo menos 12 caracteres, incluindo maiúscula, minúscula, número e carácter especial.</p>

                    <!-- Checkbox obrigatório -->
                    <div class="form-check mt-4">
                        <input type="checkbox" class="form-check-input" id="termos" name="termos" required>
                        <label for="termos" class="form-check-label">Li e aceito os termos e condições da comunidade. *</label>
                    </div>

                    <div class="d-grid mt-4">
                        <div class="text-center mt-4">
                            <button type="submit"
                                    class="btn btn-primary-custom btn-registo">
                                Criar conta
                            </button>
                        </div>
                    </div>
                    <p id="mensagemRegisto" class="text-center mt-3 mb-0" role="status" aria-live="polite"></p>
                </form>

                <p class="text-center text-white-50 mt-4 mb-0">
                    Já tens uma conta? <a href="index.php" class="registo-link">Voltar para iniciar sessão</a>
                </p>
            </div>
        </div>
    </main>

    <footer class="site-footer py-4">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <span class="footer-name">Stage<span>Hub</span></span>
            <span>O palco dos novos talentos.</span>
            <span>© 2026 StageHub · Projeto escolar</span>
        </div>
    </footer>

    
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

    <script src="js/bootstrap.bundle.min.js"></script>

     <!--mostrar/ocultar password  de login-->
  <script>
      const passwordLogin = document.getElementById("loginPassword");
      const btnMostrar = document.getElementById("btnMostrarPassword");

      btnMostrar.addEventListener("click", function () {

          if (passwordLogin.type === "password") {
              passwordLogin.type = "text";
              btnMostrar.textContent = "🙈";
              btnMostrar.setAttribute("aria-label", "Ocultar palavra-passe");
              btnMostrar.setAttribute("aria-pressed", "true");
          } else {
              passwordLogin.type = "password";
              btnMostrar.textContent = "👁️";
              btnMostrar.setAttribute("aria-label", "Mostrar palavra-passe");
              btnMostrar.setAttribute("aria-pressed", "false");
          }

      });
  </script>

    <!-- validação do formulário de registo -->
    <script>
      
        // Comparar as duas palavras-passe (não é possível apenas com HTML5)
        const form = document.getElementById('formRegisto');
        const password = document.getElementById('password');
        const confirmar = document.getElementById('confirmarPassword');
        const mensagem = document.getElementById('mensagemRegisto');

        function validarConfirmacao() {
            if (confirmar.value !== '' && confirmar.value !== password.value) {
                confirmar.setCustomValidity('As palavras-passe não coincidem.');
            } else {
                confirmar.setCustomValidity('');
            }
        }
        password.addEventListener('input', validarConfirmacao);
        confirmar.addEventListener('input', validarConfirmacao);

        form.addEventListener('submit', function (evento) {
            evento.preventDefault(); // Projeto demonstrativo: não envia nem guarda dados
            validarConfirmacao();
            if (!form.reportValidity()) return;
            mensagem.textContent = 'Formulário validado com sucesso! O registo real será implementado mais tarde.';
            mensagem.className = 'text-center mt-3 mb-0 text-success';
        });
    </script>

    <!-- Definir a data máxima permitida para o campo de nascimento -->
    <script>
        // Obter a data atual
        const hoje = new Date();

        // Formatar a data: AAAA-MM-DD (data local)
        const ano = hoje.getFullYear();
        const mes = String(hoje.getMonth() + 1).padStart(2, "0");
        const dia = String(hoje.getDate()).padStart(2, "0");

        // Definir a data máxima permitida
        document.getElementById("nascimento").max =
            `${ano}-${mes}-${dia}`;
    </script>

     <!--mostrar/ocultar password do form de registo -->
    <script>
    document.querySelectorAll(".btn-ver").forEach(function(botao) {

            botao.addEventListener("click", function() {

                const campo = document.getElementById(this.dataset.alvo);

                if (campo.type === "password") {
                    campo.type = "text";
                    this.textContent = "🙈";
                } else {
                    campo.type = "password";
                    this.textContent = "👁️";
                }

            });

        });
    </script>

</body>
</html>
