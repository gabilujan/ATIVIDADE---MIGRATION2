<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="imagens/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
    <title>Lujan</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
        }
        header {
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 1000;
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target="#menu">
    <header class="bg-light d-flex flex-wrap justify-content-center py-3 mb-5 border-bottom">
        <div class="container d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4 fw-bold"><i class="mdi mdi-dog"></i> Lujan's</span>
        </div>
        <ul id="menu" class="nav nav-pills">
            <li class="nav-item"><a href="#topo" class="nav-link active" aria-current="page">Início</a></li>
            <li class="nav-item"><a href="/quemsomos" class="nav-link">Quem somos</a></li>
            <li class="nav-item"><a href="/contato" class="nav-link">Contato</a></li>
            <li class="nav-item"><a href="/produtos-detalhes" class="nav-link">Detalhes produtos</a></li>
        </ul>
    </header>

    <div id="topo" class="container content" style="margin-top: 80px;">
        <section>
            <div class="row text-center text-md-start mb-5">
                <div class="col-md-6 mt-3">
                    <h2 class="fs-5 mt-5">Aqui o seu amigo é tratado com carinho</h2>
                    <h1 class="display-2 fw-bold">Clínica Veterinária</h1>
                    <p class="text-muted mt-4">Nossa clínica tem profissionais com mais de 20 anos de experiência, somos especializados em todos os campos do ramo veterinário, estamos disponíveis para o que você e seu animalzinho precisarem.</p>
                    <a href="/contato" class="mt-5 w-50 fw-bold p-3 btn btn-primary">Agendar Consulta <i class="mdi mdi-arrow-right-thick"></i></a>
                </div>
                <div class="col-md-6">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player class="m-0 m-auto float-none float-md-end" src="https://assets6.lottiefiles.com/packages/lf20_PXcBlV.json" background="transparent" speed="1" style="max-width: 70%;" loop autoplay></lottie-player>
                </div>
            </div>
        </section>

        <section id="servicos" class="text-center py-5 my-5">
            <div class="row pt-5 mt-5">
                <div class="col-12">
                    <h2 class="display-5 fw-bold">Serviços Prestados</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 mt-5">
                    <img class="rounded-circle border shadow p-5" src="imagens/vacinado.png" alt="vacina">
                    <h2 class="fw-normal mt-3">Vacinação</h2>
                    <p>Grande estoque de vacinas disponíveis para seu animalzinho a qualquer momento.</p>
                    <p><a class="btn btn-secondary" href="#">Ver detalhes</a></p>
                </div>
                <div class="col-lg-4 mt-5">
                    <img class="rounded-circle border shadow p-5" src="imagens/veterinario.png" alt="Veterinário">
                    <h2 class="fw-normal mt-3">Emergências</h2>
                    <p>Profissionais disponíveis 24 horas por dia, caso ocorra algum acidente ou emergência com você e seu animalzinho.</p>
                    <p><a class="btn btn-secondary" href="#">Ver detalhes</a></p>
                </div>
                <div class="col-lg-4 mt-5">
                    <img class="rounded-circle border shadow p-5" src="imagens/dog.png" alt="raio-x">
                    <h2 class="fw-normal">Raio-X</h2>
                    <p>Também contamos com serviço de raio-x caso seu animalzinho esteja sentindo algum tipo de dor, para sabermos exatamente o procedimento que devemos tomar.</p>
                    <p><a class="btn btn-secondary" href="#">Ver detalhes</a></p>
                </div>
            </div>
        </section>
    </div>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">2024 <i class="mdi mdi-dog"></i> Clínica Veterinária</p>
        <p>Site desenvolvido por Gabriela Lujan</p>
        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Início</a></li>
            <li class="nav-item"><a href="/quemsomos" class="nav-link px-2 text-muted">Quem somos</a></li>
            <li class="nav-item"><a href="/contato" class="nav-link px-2 text-muted">Contato</a></li>
        </ul>
    </footer>
</body>
</html>
