<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--=============== LOGO ===============-->
        <link rel="icon" type="image/png" sizes="16x16"  href="/assets/img/iconeLogo.png">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css"/>

        <title>Lalá Artes</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    Lalá <span>Artes</span>
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__lista">
                        <li class="nav__item">
                            <a href="#home" class="nav__link link-ativo">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#sobre" class="nav__link">Sobre</a>
                        </li>
                        <li class="nav__item">
                            <a href="#habilidades" class="nav__link">Habilidades</a>
                        </li>
                        <li class="nav__item">
                            <a href="#portfolio" class="nav__link">Portfólio</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contato" class="nav__link">Contato</a>
                        </li>
                    </ul>

                    <div class="nav__fechar" id="nav-fechar">
                        <i class="ri-close-line "></i>
                    </div>
                    
                    <img src="assets/img/linhaCostura.png" alt="Imagem Navbar" class="nav__img">
                </div>

                <!-- Botão toggle -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line "></i>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__shape-small"></div>
                <div class="home__shape-big"></div>
                <img src="assets/img/shape-bg.png" alt="" class="home__shape-bg">

                <div class="home__container container">
                    <div class="home__dados">
                        <h1 class="home__titulo">
                            Eu sou
                            <span id="texto"></span>
                        </h1>
                        <p class="home__descricao">
                            Venha conhecer um pouco mais<br>
                            do meu trabalho.
                        </p>
                        <a href="#" class="home__botao">Venha me conhecer</a>
                    </div>

                    <div class="home__imagens">
                        <img src="assets/img/fundo.png" alt="iamgem de liquido" class="home__liquido">

                        <div class="home__juice-animate">
                            <img src="assets/img/logo.png" alt="Imagem suco" class="home__juice">
                        </div>

                        <img src="assets/img/linha.png" alt="Imagem maçã" class="home__apple1">
                        <img src="assets/img/tesoura.png" alt="Imagem maçã" class="home__apple2">

                        <div>
                            <img src="assets/img/botao1.png" alt="Imagem leaf" class="home__leaf">
                            <img src="assets/img/botao2.png" alt="Imagem leaf" class="home__leaf">
                            <img src="assets/img/botao3.png" alt="Imagem leaf" class="home__leaf">
                            <img src="assets/img/botao4.png" alt="Imagem leaf" class="home__leaf">
                            <img src="assets/img/alfinete.png" alt="Imagem leaf" class="home__leaf">
                            <img src="assets/img/colaQuente.png" alt="Imagem leaf" class="home__leaf">
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== SOBRE ====================-->
            <section class="sobre section" id="sobre">
                <img src="assets/img/shape-bg.png" alt="" class="home__shape-bg">

                <div class="sobre__container container">
                    <div class="sobre__dados">
                        <span class="section__subtitulo">Saiba um pouco mais</span>
                        <h2 class="section__titulo sobre__titulo">
                            <div>
                                <p>
                                    Sobre mim
                                </p>      
                            </div>
                        
                        </h2>

                        <p class="sobre__descricao">
                            Meu nome é Marlene, também conhecida como Lalá. Sou professora há mais de 30 anos e uma verdadeira apaixonada por educar. Além disso, adoro criar artesanato usando materiais como feltro, resina e E.V.A. 
                            <br><br>
                            Conciliar meu trabalho, artesanato e cuidar da minha família é um desafio diário, mas sou grata por ter a oportunidade de desempenhar esses papéis importantes na minha vida. O artesanato é uma forma de expressão e relaxamento para mim, e minha jornada como professora, artesã e mãe me ensinou o valor da criatividade, dedicação e amor em tudo o que faço. 
                            <br><br>
                            Encontrar o equilíbrio entre minha paixão pela educação e pelo artesanato me faz sentir completa e realizada. Sou Lalá, a professora apaixonada pelo artesanato, mãe amorosa e sempre em busca de novas formas de inspirar e encantar as pessoas ao meu redor.
                        </p>
                    </div>

                    <div class="sobre__img">
                        <img src="assets/img/imagem_sobre1.avif" alt="Imagem Sobre cu">
                    </div>
                </div>

                <img src="assets/img/costura.png" alt="Imagem Sobre mim" class="sobre__ladoD">
                <img src="assets/img/alfinete.png" alt="Imagem Sobre mim" class="sobre__ladoE">
            </section>

            <!--==================== HABILIDADES ====================-->
            <section class="habilidades section" id="habilidades">
                <img src="assets/img/shape-bg.png" alt="" class="home__shape-bg">
                <div class="habilidade__container container">
                    <div class="habilidade__dados">
                        <span class="section__subtitulo">Minhas habilidades</span>
                    </div>

                    <div class="habilidade__cards">
                        <article class="card__article">
                            <div class="card__shape-1">
                                <div class="card__shape-2"></div>
                                <div class="card__shape-3">
                                    <i class="ri-scissors-fill card__icone"></i>
                                </div>
                            </div>

                            <div class="card__dados">
                                <h2 class="card__titulo">E.V.A</h2>

                                <p class="card__descricao">
                                    Realizo trabalhos com E.V.A, como decorações, cubos e livros interativos e entre outros.  
                                </p>

                                <a class="card__botao habilidade__button"  id="abrirModal">Saiba mais</a>
                            </div>

                            <div class="habilidade__modal">
                                <div class="habilidade__modal-content">
                                    <h4 class="habilidade__modal-title" id="habilidade__modal1">O que faço com E.V.A</h4>
                                    <i class="ri-close-fill habilidade__modal-close"></i>
    
                                    <ul class="habilidade__modal-habilidade ">
                                        <li class="habilidade__modal-service">
                                            <i class="ri-check-double-fill habilidade__modal-icon"></i>
                                            <p id="habilidade__mp1">Decorações para festas</p>
                                        </li>
    
                                        <li class="habilidade__modal-service">
                                            <i class="ri-check-double-fill habilidade__modal-icon"></i>
                                            <p id="habilidade__mp12">Cubos e livros interativos</p>
                                        </li>
    
                                        <li class="habilidade__modal-service">
                                            <i class="ri-check-double-fill habilidade__modal-icon"></i>
                                            <p id="habilidade__mp13">Enfeites para sala de aula</p>
                                        </li>
                                        
                                        <li class="habilidade__modal-service">
                                            <i class="ri-check-double-fill habilidade__modal-icon"></i>
                                            <p id="habilidade__mp13">Enfeites para sala de aula</p>
                                        </li>
    
                                        <li class="habilidade__modal-service">
                                            <i class="ri-check-double-fill habilidade__modal-icon"></i>
                                            <p id="habilidade__mp13">Acessórios</p>
                                        </li>

                                        <li class="habilidade__modal-service">
                                            <i class="ri-check-double-fill habilidade__modal-icon"></i>
                                            <p id="habilidade__mp13">Brinquedos e lembranças</p>
                                        </li>
    
                                    </ul>
                                </div>
                            </div>

                        </article>

                        <article class="card__article">
                            <div class="card__shape-1">
                                <div class="card__shape-2"></div>
                                <div class="card__shape-3">
                                    <i class="ri-pencil-fill card__icone"></i>
                                </div>
                            </div>

                            <div class="card__dados">
                                <h2 class="card__titulo">Feltro</h2>

                                <p class="card__descricao">
                                    Realizo trabalhos com feltro, como bonecos, bichinhos, enfeites, flores, chaveiros e entre outros.
                                </p>

                                <a class="card__botao habilidade__button"  id="abrirModal">Saiba mais</a>
                            </div>

                            <div class="habilidade__modal">
                                <div class="habilidade__modal-content">
                                    <h4 class="habilidade__modal-title" id="habilidade__modal1">O que faço com feltro</h4>
                                    <i class="ri-close-fill habilidade__modal-close"></i>
    
                                    <ul class="habilidade__modal-habilidade ">
                                        <li class="habilidade__modal-service">
                                            <i class="ri-check-double-fill habilidade__modal-icon"></i>
                                            <p id="habilidade__mp1">Bonecas e bichinhos de feltro</p>
                                        </li>
    
                                        <li class="habilidade__modal-service">
                                            <i class="ri-check-double-fill habilidade__modal-icon"></i>
                                            <p id="habilidade__mp12">Enfeites</p>
                                        </li>
    
                                        <li class="habilidade__modal-service">
                                            <i class="ri-check-double-fill habilidade__modal-icon"></i>
                                            <p id="habilidade__mp13">Porta-objetos e organizadores</p>
                                        </li>
                                        
                                        <li class="habilidade__modal-service">
                                            <i class="ri-check-double-fill habilidade__modal-icon"></i>
                                            <p id="habilidade__mp13">Chaveiros e pingentes</p>
                                        </li>
    
                                        <li class="habilidade__modal-service">
                                            <i class="ri-check-double-fill habilidade__modal-icon"></i>
                                            <p id="habilidade__mp13">Acessórios</p>
                                        </li>

                                        <li class="habilidade__modal-service">
                                            <i class="ri-check-double-fill habilidade__modal-icon"></i>
                                            <p id="habilidade__mp13">Brinquedos</p>
                                        </li>
    
                                    </ul>
                                </div>
                            </div>
                        </article>

                        <article class="card__article">
                            <div class="card__shape-1">
                                <div class="card__shape-2"></div>
                                <div class="card__shape-3">
                                    <i class="ri-ink-bottle-fill card__icone"></i>
                                </div>
                            </div>

                            <div class="card__dados">
                                <h2 class="card__titulo">Resina</h2>

                                <p class="card__descricao">
                                    Realizo trabalhos com resina, como acessórios, artes em resina, objetos decorativos e entre outros. 
                                </p>

                                <a class="card__botao habilidade__button"  id="abrirModal">Saiba mais</a>
                            </div>

                            <div class="habilidade__modal">
                                <div class="habilidade__modal-content">
                                    <h4 class="habilidade__modal-title" id="habilidade__modal1">O que faço com resina</h4>
                                    <i class="ri-close-fill habilidade__modal-close"></i>
    
                                    <ul class="habilidade__modal-habilidade ">
                                        <li class="habilidade__modal-service">
                                            <i class="ri-check-double-fill habilidade__modal-icon"></i>
                                            <p id="habilidade__mp1">Acessórios</p>
                                        </li>
    
                                        <li class="habilidade__modal-service">
                                            <i class="ri-check-double-fill habilidade__modal-icon"></i>
                                            <p id="habilidade__mp12">Objetos de decoração</p>
                                        </li>
    
                                        <li class="habilidade__modal-service">
                                            <i class="ri-check-double-fill habilidade__modal-icon"></i>
                                            <p id="habilidade__mp13">Peças em 3D</p>
                                        </li>
                                        
                                        <li class="habilidade__modal-service">
                                            <i class="ri-check-double-fill habilidade__modal-icon"></i>
                                            <p id="habilidade__mp13">Peças encapsuladas</p>
                                        </li>
    
                                        <li class="habilidade__modal-service">
                                            <i class="ri-check-double-fill habilidade__modal-icon"></i>
                                            <p id="habilidade__mp13">Arte em resina</p>
                                        </li>

                                        <li class="habilidade__modal-service">
                                            <i class="ri-check-double-fill habilidade__modal-icon"></i>
                                            <p id="habilidade__mp13">Chaveiros e pingentes</p>
                                        </li>
    
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <!--  ======================== PORTFÓLIO ========================  -->
            <section class="portfolio section" id="portfolio">
                <img src="assets/img/shape-bg.png" alt="" class="home__shape-bg">
                
                <div class="portfolio__titulo">
                    <h2 class="section__titulo">Portfólio</h2>
                    <span class="section__subtitulo">Meus trabalhos mais recentes</span>
                </div>

                <div class="portfolio__container container swiper mySwiper">
                    <div class="swiper-wrapper">
                        <!--  ======================== PORTFÓLIO 1 ========================  -->
                        <div class="portfolio__conteudo swiper-slide">
                            <img src="assets/img/logo.png" alt="" class="portfolio__img">

                            <div class="portfolio__dados">
                                <h3 class="slide__titulo">Site sobre artesanato</h3>
                                <p class="slide__descricao">Site feito com o intuito de divulgar o trabalho de artesanato feito pela minha mãe.</p>
                                <a href="https://github.com/Bacelar263/lala-artes" class="slide__botao" target="_blank"> 
                                    <span id="vport">Ver</span> 
                                    <i class="uil uil-arrow-right slide__icone"></i>
                                </a>
                            </div>
                        </div>

                        <!--  ======================== PORTFÓLIO 2 ========================  -->
                        <div class="portfolio__conteudo swiper-slide">
                            <img src="assets/img/fundo_card2.avif" alt="" class="portfolio__img">

                            <div class="portfolio__dados">
                                <h3 class="slide__titulo">Site sobre artesanato</h3>
                                <p class="slide__descricao">Site feito com o intuito de divulgar o trabalho de artesanato feito pela minha mãe.</p>
                                <a href="https://github.com/Bacelar263/lala-artes" class="slide__botao" target="_blank"> 
                                    <span id="vport">Ver</span> 
                                    <i class="uil uil-arrow-right slide__icone"></i>
                                </a>
                            </div>
                        </div>

                        <!--  ======================== PORTFÓLIO 3 ========================  -->
                        <div class="portfolio__conteudo swiper-slide">
                            <img src="assets/img/fundo-mobile.png" alt="" class="portfolio__img">

                            <div class="portfolio__dados">
                                <h3 class="slide__titulo">Site sobre artesanato</h3>
                                <p class="slide__descricao">Site feito com o intuito de divulgar o trabalho de artesanato feito pela minha mãe.</p>
                                <a href="https://github.com/Bacelar263/lala-artes" class="slide__botao" target="_blank"> 
                                    <span id="vport">Ver</span> 
                                    <i class="uil uil-arrow-right slide__icone"></i>
                                </a>
                            </div>
                        </div>

                        <!--  ======================== PORTFÓLIO 4 ========================  -->
                        <div class="portfolio__conteudo swiper-slide">
                            <img src="assets/img/fundo_card.avif" alt="" class="portfolio__img">

                            <div class="portfolio__dados">
                                <h3 class="slide__titulo">Site sobre artesanato</h3>
                                <p class="slide__descricao">Site feito com o intuito de divulgar o trabalho de artesanato feito pela minha mãe.</p>
                                <a href="https://github.com/Bacelar263/lala-artes" class="slide__botao" target="_blank"> 
                                    <span id="vport">Ver</span> 
                                    <i class="uil uil-arrow-right slide__icone"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-button-next">
                        <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                    </div>

                    <div class="swiper-button-prev">
                        <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                    </div>
                    
                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <!--==================== CONTATO ====================-->
            <section class="contato section" id="contato">
                <img src="assets/img/shape-bg.png" alt="" class="home__shape-bg">

                <div class="contato__titulo">
                    <h2 class="section__titutlo" >Entre em contato</h2>
                    <span class="section__subtitulo"></span>
                </div>

                <div class="contact__container container">
                    <div>
                        <div class="contact__information">
                            <i class="ri-phone-fill contact__icon"></i>

                            <div>
                                <h3 class="contact__title" id="contact__title1">Ligue</h3>
                                <span class="contact__subtitle"><a href="tel:+77998414219">(77) 99841-4219</a></span>
                            </div>
                        </div>

                        <div class="contact__information">
                            <i class="ri-mail-fill contact__icon"></i>

                            <div>
                                <h3 class="contact__title">Email</h3>
                                <span class="contact__subtitle"><a href="mailto:lala_bacelar@hotmail.com">lala_bacelar@hotmail.com</a></span>
                            </div>
                        </div>
                    </div>

                    <form action="./api/envio.php" method="POST" class="contact__form">
                        <div class="contact__inputs">
                            <div class="contact__content">
                                <label for="" class="contact__label"  id="contact__label1">Nome:</label>
                                <input type="text" class="contact__input" name='nome'>
                            </div>
                            <div class="contact__content">
                                <label for="" class="contact__label" >Email</label>
                                <input type="email" class="contact__input" name='email'>
                            </div>
                        </div>
                        <div class="contact__content">
                            <label for="" class="contact__label" id="contact__label2">Mensagem</label>
                            <textarea id="" cols="0" rows="7" class="contact__input" name='mensagem'></textarea>
                        </div>

                        <div>
                            <button type="submit" name="enviar" class="contato__botao-submit" id="abrirModal">Enviar Mensagem <i class="ri-send-plane-2-fill button__icon"></i></button>
                        </div>
                        
                    </form>
                </div>
            </section>
        </main>

        <!--  ======================== FOOTER ========================  -->
        <footer class="footer">
            <div class="footer__bg">
                <div class="footer__container container">
                    <div>
                        <h1 class="footer__title">BACELAR</h1>
                        <span class="footer__subtitle" id="footer__subtitle">Desenvolvedor Full Stack</span>
                    </div>

                    <ul class="footer__links">
                        <li>
                            <a href="#sobre" class="footer__link" id="footer__services">Sobre</a>
                        </li>
                        <li>
                            <a href="#habilidades" class="footer__link" id="footer__portfolio">Habilidades</a>
                        </li>
                        <li>
                            <a href="#portfolio" class="footer__link" id="footer__contact">Portfólio</a>
                        </li>
                        <li>
                            <a href="#contato" class="footer__link" id="footer__contact">Contato</a>
                        </li>
                    </ul>

                    <div class="footer__socials">
                        <a href="https://wa.link/e6196s" target="_blank" class="footer__social">
                            <i class="ri-whatsapp-fill"></i>
                        </a>
                        <a href="https://www.facebook.com/marlenebacelar.bacelardossantossoares" target="_blank" class="footer__social">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/lala_bacelar/" target="_blank" class="footer__social">
                            <i class="ri-instagram-fill"></i>
                        </a>
                    </div>
                </div>

                <p class="footer__copy">&#169; <a href="https://bacelar.tech/" target="_blank">Bacelar. All Right reserved</a></p>
            </div>
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-circle-fill"></i>
        </a>
        <!--=============== GSAP ===============-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js"></script>

        <!--=============== SLIDER ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>

        <?php
            // Verifica se o parâmetro emailenviado está presente na URL
            if (isset($_GET['emailenviado']) && $_GET['emailenviado'] === 'true') {
                // Exibe o alerta
                echo "<script>alert('Email enviado com sucesso!');</script>";
            }
        ?>

    </body>
</html>