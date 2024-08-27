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
    <title>Quem somos</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#menu">
    <header class="bg-light sticky-top d-flex flex-wrap justify-content-center py-3 mb-5 border-bottom">
        <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4 fw-bold"><i class="mdi mdi-dog"></i> Lujan's</span>
        </div>
        <ul id="menu" class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Início</a></li>
            <li class="nav-item"><a href="/quemsomos" class="nav-link">Quem somos</a></li>
            <li class="nav-item"><a href="/contato" class="nav-link">Contato</a></li>
        </ul>
    </header>
    <div class="content container">
        <h1 class="mt-5">Quem Somos</h1>
        <p class="text-muted mt-4">Nossa clínica tem profissionais com mais de 20 anos de experiência, somos especializados em todos os campos do ramo veterinario, estamos disponíveis para o que você e seu animalzinho precisarem.</p>
        <section id="faq" class="py-5 my-5">
            <div class="row pt-5 mt-5">
                <div class="col-12 text-center">
                    <h2 class="display-5 fw-bold">Perguntas frequentes</h2>
                </div>
            </div>
            <div class="row mt-3 mb-5">
                <div class="col-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Sobre a clínica
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Quais são os horários de funcionamento da clínica?</strong> A clínica veterinária funciona de segunda a sexta-feira, das 8h às 18h, e aos sábados, das 8h às 14h. Não abrimos aos domingos e feriados.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Sobre nossos Veterinarios
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Os veterinários possuem especializações?</strong> Nossos veterinários possuem especializações em áreas como cirurgia, dermatologia, odontologia, cardiologia, e outras. Isso nos permite oferecer um atendimento mais completo e especializado para seu animal de estimação.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Sobre Internação
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>A clínica oferece serviços de internação?</strong> Sim, nossa clínica possui instalações adequadas para a internação de animais que necessitam de cuidados contínuos e monitoramento constante.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">2024 <i class="mdi mdi-dog"></i> Clínica Veteninária</p>
        <p>Site desenvolvido por Gabriela Lujan</p>
        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Início</a></li>
            <li class="nav-item"><a href="/quemsomos" class="nav-link px-2 text-muted">Quem somos</a></li>
            <li class="nav-item"><a href="/contato" class="nav-link px-2 text-muted">Contato</a></li>
        </ul>
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
