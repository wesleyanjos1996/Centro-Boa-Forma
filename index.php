<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Boa Forma - Seu espaço de saúde</title>
    <link rel="shortcut icon" href="/image/fav.png" type="image/png">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- IMPORT CDN FONTAWESOME / BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
    <link rel="stylesheet" href="css/custom.css">
    <meta name="descreption" content="O melhor centro de saúde de todo o Brasil.">
    <meta name="author" content="Wesley dos Anjos">
</head>
<body>
    <!--START HEADER-->
    <header>
        <!--START MENU-MOBILE-->
        <ul class="side-nav" id="menu-mobile">
            <li><a href="#home" class="hide-menu">Home</a></li>
            <li><a href="#sobre" class="hide-menu">Sobre o Boa Forma</a></li>
            <li><a href="#servicos" class="hide-menu">Serviços</a></li>
            <li><a href="#unidades" class="hide-menu">Unidades</a></li>
            <li><a href="#contat" class="hide-menu">Contato</a></li>
        </ul>
        <!--END MENU-MOBILE-->
        <!--START MENU-->
        <div class="navbar-fixed">
            <nav class="navbar z-depth-0">
                <div class="nav-wrapper container">
                    <h1 class="logo-text">Centro Boa Forma - Seu espaço de saúde</h1>
                    <a href="#"><img src="image/logo.png" alt="Logo Centro Boa Forma" class="logo-img"></a>
                    <ul class="right light hide-on-med-and-down">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#sobre">Sobre o Boa Forma</a></li>
                        <li><a href="#servicos">Serviços</a></li>
                        <li><a href="#unidades">Unidades</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                    <a class="button-collapse right" data-activates="menu-mobile"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>
        <!--END MENU-->
    </header>
    <!--END HEADER-->
    <!--START SECTION-HOME-->
    <section class="home bloco scrollspy" id="home">
        <!--START BANNER-->
        <div class="row container banner">
            <div class="col s12 center">
                <h2 class="white-text">O melhor treinamenro funcional de região</h2>
                <p class="white-text light">Um novo conceito em prevenção, promoção e reabilitação da saúde para quem
                    busca melhora do condicionamento e emagrecimento, além de ser divertido e desafiador. Quer
                    experimentar?</p>
                <div class="row">
                    <a href="#sobre" class="btn btn-large blue-logo">Sobre nós</a>
                    <a href="#contato" class="btn btn-large white black-text">Contato</a>
                </div>
            </div>
        </div>
        <!--END BANNER-->
    </section>
    <!--END SECTION-HOME-->
    <!--START SECTION-SOBRE-->
    <section class="sobre bloco scrollspy" id="sobre">
        <div class="row container">
            <div class="col s12 center">
                <h2 class="light titulo">Sobre nós</h2>
            </div>
            <div class="col s12 l6">
                <p class="light texto-justicado">A Centro Boa Forma chegou a Itabuna e região trazendo um novo conceito
                    em prevenção, promoção e reabilitação da saúde. Localizada no centro da cidade,
                    conta com fácil estacionamento, salas amplas e climatizadas, ambiente confortável
                    e seguro aos seus usuários. Suas instalações foram projetadas e equipadas sob medida,
                    dentro dos padrões de acessibilidade, para acolher principalmente pessoas com limitações funcionais.
                    O centro dispõe de uma equipe profissional qualificada e com experiência no mercado, prezando sempre por
                    tratamentos individualizados e baseados em evidências científicas.
                    Localizada no centro da cidade, conta com fácil estacionamento, salas amplas e climatizadas,
                    ambiente confortável e seguro aos seus usuários.</p>
            </div>
            <!--START CAROUSEL-->
            <div class="col s12 l6">
                <div class="carousel carousel-slider" data-indicators="true">
                    <a href="#" class="carousel-item"><img src="image/banner-01.jpg" alt="Imagem institucional"></a>
                    <a href="#" class="carousel-item"><img src="image/banner-02.jpg" alt="Imagem institucional"></a>
                    <a href="#" class="carousel-item"><img src="image/banner-03.jpg" alt="Imagem institucional"></a>
                </div>
            </div>
            <!--END CAROUSEL-->
        </div>
        <div class="row blue-logo missao-visao-valores">
            <div class="container">
                <article class="item col s12 m4 center">
                    <span class="icon"><i class="material-icons medium">directions_run</i></span>
                    <h3 class="light">Missão</h3>
                    <p class="light">Promover a saúde e bem-estar dos clientes com ações de prevenção, promoção e reabilitação,através de tratamentos eficazes e humanizados em Fisioterapia e suas vertentes.</p>
                </article>
                <article class="item col s12 m4 center">
                    <span class="icon"><i class="material-icons medium">visibility</i></span>
                    <h3 class="light">Visão</h3>
                    <p class="light">Tornar-se referência no cenário estadual, buscando a excelência dos serviços prestados, além de promover o desenvolvimento técnico-científico de sua equipe e da sociedade.</p>
                </article>
                <article class="item col s12 m4 center">
                    <span class="icon"><i class="material-icons medium">grade</i></span>
                    <h3 class="light">Valores</h3>
                    <p class="light">• Agir com ética frente aos clientes e colaboradores.<br>
                        • Tornar o ambiente de trabalho o mais familiar possível.<br>
                        • Priorizar a qualidade e excelência do atendimento, valorizando e qualificando a equipe.</p>
                </article>
            </div>
        </div>
    </section>
    <!--END SECTION-SOBRE-->
    <!--START SECTION-SERVICO-->
    <section class="servicos bloco scrollspy" id="servicos">
        <div class="row container">
            <div class="col s12 center">
                <h2 class="light titulo white-text">Serviços</h2>
                <p class="light paragafro white-text">Suas instalações foram projetadas e equipadas sob medida, dentro dos padrões de acessibilidade, para acolher principalmente pessoas com limitações funcionais. A clínica dispõe de uma equipe profissional qualificada e com experiência no mercado, prezando sempre por tratamentos individualizados e baseados em evidências científicas.</p>
            </div>
        </div>
        <!--START CARDS-->
        <!--START CARD-PILATES-->
        <div class="row container">
            <article class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="image/pilates.jpg" alt="Pilates" class="materialboxed">
                        <a href="#pilates-modal" class="btn btn-floating halfway-fab blue-logo modal-trigger"><i class="material-icons">more_horiz</i></a>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Pilates</h3>
                        <p class="light">Pilates é um método de controle muscular desenvolvido por Joseph Pilates...</p>
                    </div>
                </div>
            </article>
            <!--START MODAL-PILATES-->
            <div class="modal" id="pilates-modal">
                <div class="modal-content">
                    <h5 class="light">O que é pilates?</h5>
                    <p class="light black-text">O Pilates é um método de exercício físico e alongamento que utiliza o peso do próprio corpo na sua execução. É uma técnica de reeducação do movimento que visa trabalhar o corpo todo, trazendo equilíbrio muscular e mental. </p>
                    <h5 class="light">Quais os benefícios do Pilates?</h5>
                    <ul class="collection">
                        <li class="collection-item">Alongar, tonificar e definir a musculatura sem exageros;</li>
                        <li class="collection-item">Melhorar a postura;</li>
                        <li class="collection-item">Tonificar a musculatura profunda do abdômen;</li>
                        <li class="collection-item">Prevenir e recuperar lesões; </li>
                        <li class="collection-item">Reduzir o “stress” e aliviar as tensões;</li>
                        <li class="collection-item">Deixar sua coluna mais forte e flexível;</li>
                        <li class="collection-item">Melhorar a área de movimento das articulações;</li>
                        <li class="collection-item"> Melhora a circulação sanguínea;</li>
                        <li class="collection-item"> Aumentar a coordenação e o equilíbrio;</li>
                        <li class="collection-item"> Corrigir sobrecargas e alinhar os músculos;</li>
                        <li class="collection-item"> Melhorar a mobilidade e a agilidade;</li>
                        <li class="collection-item"> Complementar o seu treino esportivo;</li>
                        <li class="collection-item"> Melhorar o visual de seu corpo e a sua auto-estima.</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a class="btn blue-logo modal-action modal-close">Sair</a>
                </div>
            </div>
            <!--END MODAL-PILATES-->
            <!--END CARD-PILATES-->
            <!--START CARD-NUTRICAO-->
            <article class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="image/nutricao.jpg" alt="Nutrição" class="materialboxed">
                        <a href="#nutricao-modal" class="btn btn-floating halfway-fab blue-logo modal-trigger"><i class="material-icons">more_horiz</i></a>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Nutrição</h3>
                        <p class="light">Ele planeja, administra e coordena programas de alimentação e nutrição em empresas, escolas...</p>
                    </div>
                </div>
            </article>
            <!--START MODAL-NUTRICAO-->
            <div class="modal" id="nutricao-modal">
                <div class="modal-content">
                    <h5 class="light">Qual a importância da nutrição?</h5>
                    <p class="light black-text">Seja por um estilo de vida saudável ou para eliminar peso, a preocupação com os alimentos é constante na rotina das pessoas. Por isso é importante saber comer e dar relevância ao que se come. Uma nutrição adequada pode prevenir doenças e tornar a vida mais saudável.</p>
                </div>
                <div class="modal-footer">
                    <a class="btn blue-logo modal-action modal-close">Sair</a>
                </div>
            </div>
            <!--END MODAL-NUTRICAO-->
            <!--END CARD-NUTRICAO-->
            <!--START CARD-FISIOTERAPIA-->
            <article class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="image/fisioterapia.jpg" alt="Fisioterapia" class="materialboxed">
                        <a href="#fisioterapia-modal" class="btn btn-floating halfway-fab blue-logo modal-trigger"><i class="material-icons">more_horiz</i></a>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Fisioterapia</h3>
                        <p class="light">O fisioterapeuta trata e previne doenças e lesões, empregando técnicas...</p>
                    </div>
                </div>
            </article>
            <!--START MODAL-FISIOTERAPIA-->
            <div class="modal" id="fisioterapia-modal">
                <div class="modal-content">
                    <h5 class="light">Qual a importância da Fisioterapia?</h5>
                    <p class="light black-text">Fisioterapia é uma ciência da saúde aplicada ao estudo, diagnóstico, prevenção e tratamento de disfunções cinéticas funcionais de órgãos e sistemas. Ela estuda, diagnostica, previne e trata os distúrbios, entre outros, cinético-funcionais decorrentes de alterações de órgãos e sistemas humanos.</p>
                </div>
                <div class="modal-footer">
                    <a class="btn blue-logo modal-action modal-close">Sair</a>
                </div>
            </div>
            <!--END MODAL-FISIOTERAPIA-->
            <!--END CARD-FISIOTERAPIA-->
            <!--START CARD-FUNCIONAL-->
            <article class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="image/funcional.jpg" alt="Funcional" class="materialboxed">
                        <a href="#funcional-modal" class="btn btn-floating halfway-fab blue-logo modal-trigger"><i class="material-icons">more_horiz</i></a>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Funcional</h3>
                        <p class="light">O treinamento funcional é um método de trabalho ainda mais dinâmico...</p>
                    </div>
                </div>
            </article>
            <!--START MODAL-FUNCIONAL-->
            <div class="modal" id="funcional-modal">
                <div class="modal-content">
                    <h5 class="light">Qual a importância de exercício funcional?</h5>
                    <p class="light black-text">A ginástica funcional é um método de atividade física baseada em movimentos do cotidiano, como levantar, agachar, puxar ou empurrar. O objetivo desses exercícios é fortalecer, definir, melhorar a flexibilidade e aumentar a resistência e o equilíbrio corporal para os movimentos do dia a dia.</p>
                </div>
                <div class="modal-footer">
                    <a class="btn blue-logo modal-action modal-close">Sair</a>
                </div>
            </div>
            <!--END MODAL-FUNCIONAL-->
            <!--START TIME-->
            <div class="row center btn-horario">
                <a href="#horarios-modal" class="btn btn-large blue-logo modal-trigger"><i class="material-icons left">timer</i>Quadro de horários</a>
            </div>
            <!--START MODAL-TIMES-->
            <div class="modal" id="horarios-modal">
                <div class="modal-content">
                    <h5 class="light">Quadro de horários</h5>
                    <ul class="tabs">
                        <li class="tab col s3"><a href="#tabela-pilates">Pilates</a></li>
                        <li class="tab col s3"><a href="#tabela-musculacao">Musculação</a></li>
                        <li class="tab col s3"><a href="#tabela-fitness">Fitness</a></li>
                        <li class="tab col s3"><a href="#tabela-artes-marcias">Artes marciais</a></li>
                    </ul>
                    <table class="striped responsive-table" id="tabela-pilastes">
                        <thead>
                            <tr>
                                <th class="center-align">-</th>
                                <th>Segunda</th>
                                <th>Terça</th>
                                <th>Quarta</th>
                                <th>Quinta</th>
                                <th>Sexta</th>
                                <th>Sabado</th>
                                <th>Domingo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>06h:00 às 22h:00</td>
                                <td>Pilates</td>
                                <td>Pilates</td>
                                <td>Pilates</td>
                                <td>Pilates</td>
                                <td>Pilates</td>
                                <td class="center-align">-</td>
                                <td class="center-align">-</td>
                            </tr>
                            <tr>
                                <td>06h:00 às 10h:00</td>
                                <td>Pilates</td>
                                <td class="center-align">-</td>
                                <td>Pilates</td>
                                <td class="center-align">-</td>
                                <td>Pilates</td>
                                <td>Pilates</td>
                                <td class="center-align">-</td>
                            </tr>
                            <tr>
                                <td>12h:00 às 22h:00</td>
                                <td class="center-align">-</td>
                                <td>Pilates</td>
                                <td class="center-align">-</td>
                                <td>Pilates</td>
                                <td class="center-align">-</td>
                                <td>Pilantes</td>
                                <td class="center-align">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <a class="btn blue-logo modal-action modal-close">Sair</a>
                </div>
            </div>
            <!--END MODAL-TIMES-->
            <!--END TIME-->
            <!--END CARD-FUNCIONAL-->
            <!--END CARD-->
        </div>
    </section>
    <!--END SECTION-SERVICO-->

    <!--START SECTION-UNIDADES-->
    <section class="unidades bloco scrollspy" id="unidades">
        <div class="row container">
            <div class="col s12 center">
                <h2 class="light titulo white-text">Unidades</h2>
                <p class="light paragafro white-text">Para oferecer serviços de acordo com a realidade e necessidade de cada região do Brasil, o centro boa forma possui unidades em quatro estados. Com atividades permanentes os espaços físicos buscam oferecer facilidade de acesso e atendimento de qualidade.</p>
            </div>
        </div>
        <div class="row container">
            <!--START CARD-STATES-->
            <!--START CARD-BH-->
            <article class="col s12 l6">
                <div class="card horizontal">
                    <div class="card-image card-image-horizontal">
                        <img src="image/bh.jpg" alt="Unidade Belo Horizonte">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h3 class="card-title light">Belo Horizonte</h3>
                            <p class="light">
                                <i class="material-icons left">phone</i> 11 1111-2222 <br>
                                <i class="material-icons left">email</i> bh@boaforma.com <br>
                                <i class="material-icons left">location_on</i>Av. Belo Horizonte, 123
                            </p>
                        </div>
                    </div>
                </div>
            </article>
            <!--END CARD-BH-->
            <!--START CARD-BAHIA-->
            <article class="col s12 l6">
                <div class="card horizontal">
                    <div class="card-image card-image-horizontal">
                        <img src="image/salvador.jpg" alt="Unidade Salvador">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h3 class="card-title light">Salvador</h3>
                            <p class="light">
                                <i class="material-icons left">phone</i> 11 1122-3344 <br>
                                <i class="material-icons left">email</i> salvador@boaforma.com <br>
                                <i class="material-icons left">location_on</i>Av. Bahia, 123
                            </p>
                        </div>
                    </div>
                </div>
            </article>
            <!--END CARD-BAHIA-->
            <!--START CARD-SP-->
            <article class="col s12 l6">
                <div class="card horizontal">
                    <div class="card-image card-image-horizontal">
                        <img src="image/sp.jpg" alt="Unidade São Paulo">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h3 class="card-title light">São Paulo</h3>
                            <p class="light">
                                <i class="material-icons left">phone</i> 11 1111-2222 <br>
                                <i class="material-icons left">email</i> sp@boaforma.com <br>
                                <i class="material-icons left">location_on</i>Av. São Paulo, 123
                            </p>
                        </div>
                    </div>
                </div>
            </article>
            <!--END CARD-SP-->
            <!--START CARD-RJ-->
            <article class="col s12 l6">
                <div class="card horizontal">
                    <div class="card-image card-image-horizontal">
                        <img src="image/rj.jpg" alt="Unidade Rio de Janeiro">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h3 class="card-title light">Rio de Janeiro</h3>
                            <p class="light">
                                <i class="material-icons left">phone</i> 11 1111-2222 <br>
                                <i class="material-icons left">email</i> rj@boaforma.com <br>
                                <i class="material-icons left">location_on</i>Av. Rio de Janeiro, 123
                            </p>
                        </div>
                    </div>
                </div>
            </article>
            <!--END CARD-RJ-->
            <!--END CARD-STATE-->
        </div>
    </section>
    <!--END SECTION-UNIDADES-->
    <!--START SECTION-CONTATO-->
    <section class="contato bloco scrollspy" id="contato">
        <div class="row container">
            <div class="col s12 center">
                <h2 class="titulo light black-text">Contato</h2>
            </div>
            <div class="col s12 m6 l4 hide-on-med-only hi">
                <div class="mapa transparent">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.10024619399!2d-38.469356249015924!3d-12.96543676315483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7161b6280fbf113%3A0x6c816c9e3e3bf3fb!2sNode%20Studio%20Treinamentos!5e0!3m2!1spt-BR!2sbr!4v1665196076346!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="informacoes white-text">
                    <h4>Redes sociais</h4>
                    <p class="light">Fique por dentro das novidades, receba dicas, ou simplesmente mostre ao mundo que você faz parte desse projeto sensacional!</p>
                    <a href="#" class="btn-floating blue-logo"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="btn-floating blue-logo"><i class="fa fa-google"></i></a>
                    <a href="#" class="btn-floating blue-logo"><i class="fa fa-twitter"></i></a>
                    <h4>Endereço</h4>
                    <p class="light">Rua paraíso, 123 <br>Centro, Itabuna - BA</p>
                    <h4>Contatos</h4>
                    <p class="light">(73) 1234-5678<br>(73) 1234-5678<br>(73) 1234-5678</p>
                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="formulario white black-text">
                    <h4>Fale conosco</h4>
                    <p>Dúvidas, criticas ou sujestões? Entre em contato conosco, seu feedback é muito importante.</p>
                    <form action="enviar_email.php" method="POST">
                        <div class="input-field">
                            <input type="text" name="name" id="name">
                            <label for="name">Seu nome</label>
                        </div>
                        <div class="input-field">
                            <input type="email" name="email" id="email">
                            <label for="email">Seu e-mail</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="subject" id="subject">
                            <label for="subject">Assunto</label>
                        </div>
                        <div class="input-field">
                            <textarea name="message" id="message" class="materialize-textarea" cols="30" rows="10"></textarea>
                            <label for="message">Mensagem</label>
                        </div>
                        <button class="btn blue-logo" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--END SECTION-CONTATO-->
    <!--START SECTION-DEPOIMENTOS-->
    <div class="depoimentos blue-logo">
        <div class="row container">
            <div class="col s12 center">
                <h2 class="titulo white-text light">Depoimentos</h2>
            </div>
            <div class="col s12 m4 center">
                <img src="image/depo1.jpg" alt="Depoimento um" class="circle responsive-img">
                <p class="light white-text">"Conheci o treinamento funcional e a metodologia Centro Boa Forma por indicação de um amigo. Execelentes profissionais e super atenciosos!"</p>
                <h4 class="light white-text">Felipe Souza</h4>
                <p class="white-text">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                </p>
            </div>
            <div class="col s12 m4 center">
                <img src="image/depo2.jpg" alt="Depoimento um" class="circle responsive-img">
                <p class="light white-text">"Gostei muito da oficina e das aulas, superou minhas expectativas. A empresa e os treinamentos foram ótimos!"</p>
                <h4 class="light white-text">Bruno Valério</h4>
                <p class="white-text">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                </p>
            </div>
            <div class="col s12 m4 center">
                <img src="image/depo3.jpg" alt="Depoimento um" class="circle responsive-img">
                <p class="light white-text">"Treinar com motivação e satisfação pelos resultados obtidos são os motivos que me conquistaram e me mantém no Centro Boa Forma."</p>
                <h4 class="light white-text">Joana Souza</h4>
                <p class="white-text">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                </p>
            </div>
        </div>
    </div>
    <!--END SECTION-DEPOIMENTOS-->
    <!--START FOOTER-->
    <footer class="rodape">
        <div class="row container center">
            <img src="image/logo.png" alt="Logo" class="logo-img">
            <p class="light white-text">&copy; Centro Boa Forma 2022 - Todos os direitos reservados</p>
        </div>
    </footer>
    <!--END FOOTER-->
    <!-- IMPORT CDN GOOGLE JQUERY VERSION-1, VERSION-2 & VERSION-3-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>-->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>-->
    <script type="text/javascript" src="js/materialize.js"></script>
    <script>
        $(document).ready(function() {
            //INICIALIZADORES DO MATERIALIZE
            //MENU-MOBILE
            $(".button-collapse").sideNav()

            //ROLAGEM SUAVE PARA LINKS INTERNOS
            $(".scrollspy").scrollSpy({
                scrollOffset: 0
            })

            //CAROUSEL
            $(".carousel.carousel-slider").carousel({
                fullWidth: true
            })

            //MODAL
            $(".modal").modal()

            //TABS
            $("ul.tabs").tabs()

            //OCULTAR MENU-MOBILE APÓS CLIQUE
            $(".hide-menu").click(function() {
                $(".button-collapse").sideNav("hide")
            })

            //AUTOPLAY - SLIDERS DA SECTION-SOBRE INICIA AUTOMATICAMENTE
            function autoplay() {
                $(".carousel").carousel("next")
                setTimeout(autoplay, 4500)
            }

            autoplay()
        })

        //NAVCOLOR - MUDA A COR DA BARRA DE MENU AO ROLAR PELA PÁGINA
        $(window).on("scroll", function() {
            if ($(window).scrollTop() > 100) {
                $(".navbar").addClass("nav-color")
            } else {
                $(".navbar").removeClass("nav-color")
            }
        })
    </script>
    <?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == "sucesso") {
            echo "<script>Materialize.toast('Enviado comsucesso!', 4000);</script>";
        } else {
            echo "<script>Materialize.toast('Erro ao enviar!', 4000);</script>";
        }
    }
    ?>
</body>
</html>