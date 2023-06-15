/*=============== MOSTRAR MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navFechar = document.getElementById('nav-fechar')

if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('mostrar-menu')
    })
}

if(navFechar){
    navFechar.addEventListener('click', () => {
        navMenu.classList.remove('mostrar-menu')
    })
}

/*=============== REMOVER MENU MOBILE ===============*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')

    navMenu.classList.remove('mostrar-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*=============== REPETINDO TEXTO ===============*/
const texto = document.querySelector("#texto");

const textoLoad = () => {
    setTimeout(() => {
        texto.textContent = "Artesã";
    }, 0);
    setTimeout(() => {
        texto.textContent = "Criativa"; 
    }, 4000);
    setTimeout(() => {
        texto.textContent = "Professora"; 
    }, 8000);
    setTimeout(() => {
        texto.textContent = "Mãe"; 
    }, 12000);
}

textoLoad();
setInterval(textoLoad, 16000);

/*=============== MODAL ===============*/
const modalViews = document.querySelectorAll('.habilidade__modal'),
      modalBtns = document.querySelectorAll('.habilidade__button'),
      modalCloses = document.querySelectorAll('.habilidade__modal-close')

let modal = function(modalClick) {
    modalViews[modalClick].classList.add('active-modal')
}

modalBtns.forEach((modalBtn, i) => {
    modalBtn.addEventListener('click', () => {
        modal(i);
    })
})

modalCloses.forEach((modalClose) => {
    modalClose.addEventListener('click', () => {
        modalViews.forEach((modalView) => {
            modalView.classList.remove('active-modal')
        })
    })
})

// sadsa

let swiperPortfolio = new Swiper(".swiper", {
    cssMode: true,
    loop: true,
    grabCursor: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});
  

/*=============== ANIMAÇÃO GSAP ===============*/
// Verificar se a largura da tela é maior que 768 pixels (pode ser ajustado de acordo com suas necessidades)
if (window.innerWidth > 768) {
    TweenMax.from('.home__titulo', 1, {delay: .2, opacity: 0, y: 20, ease: Expo.easeInOut});
    TweenMax.from('.home__descricao', 1, {delay: .3, opacity: 0, y: 20, ease: Expo.easeInOut});
    TweenMax.from('.home__botao', 1, {delay: .4, opacity: 0, y: 20, ease: Expo.easeInOut});
    TweenMax.from('.home__liquido', 1, {delay: .7, opacity: 0, y: 200, ease: Expo.easeInOut});
    TweenMax.from('.home__juice-animate', 1, {delay: 1.2, opacity: 0, y: -800, ease: Expo.easeInOut});
    TweenMax.from('.home__apple1', 1, {delay: 1.5, opacity: 0, y: -800, ease: Expo.easeInOut});
    TweenMax.from('.home__apple2', 1, {delay: 1.6, opacity: 0, y: -800, ease: Expo.easeInOut});
    TweenMax.from('.home__leaf:nth-child(1)', 2, {delay: 1.3, opacity: 0, y: -800, ease: Expo.easeInOut});
    TweenMax.from('.home__leaf:nth-child(2)', 2, {delay: 1.4, opacity: 0, y: -800, ease: Expo.easeInOut});
    TweenMax.from('.home__leaf:nth-child(3)', 2, {delay: 1.5, opacity: 0, y: -800, ease: Expo.easeInOut});
    TweenMax.from('.home__leaf:nth-child(4)', 2, {delay: 1.6, opacity: 0, y: -800, ease: Expo.easeInOut});
    TweenMax.from('.home__leaf:nth-child(5)', 2, {delay: 1.7, opacity: 0, y: -800, ease: Expo.easeInOut});
    TweenMax.from('.home__leaf:nth-child(6)', 2, {delay: 1.8, opacity: 0, y: -800, ease: Expo.easeInOut});

    const sr = ScrollReveal({
        origin: 'top',
        distance: '60px',
        duration: 2000,
        delay: 400,
        reset: false
    })
    
    sr.reveal(`.habilidade__dados, .card__article:nth-child(2), .footer__bg`, {delay:400})
    sr.reveal(`.sobre__dados, .card__article:nth-child(1), .portfolio__titulo, .contato__titulo`, {origin:'left'})
    sr.reveal(`.sobre__img, .card__article:nth-child(3), .portfolio__container, .contact__container`, {origin:'right'})
  } else {

    const sr = ScrollReveal({
        origin: 'top',
        distance: '60px',
        duration: 2000,
        delay: 400,
        reset: false
    })
    
    sr.reveal(`.habilidade__dados, .card__article:nth-child(2), .footer__bg, .home__titulo, .home__liquido, .home__apple1, .home__apple2, .home__leaf:nth-child(1), .home__leaf:nth-child(2)`, {delay:400})
    sr.reveal(`.sobre__dados, .card__article:nth-child(1), .portfolio__titulo, .contato__titulo, .home__descricao, .home__botao, .home__leaf:nth-child(3), .home__leaf:nth-child(4)`, {origin:'left'})
    sr.reveal(`.sobre__img, .card__article:nth-child(3), .portfolio__container, .contact__container, .home__juice-animate, .home__leaf:nth-child(5), .home__leaf:nth-child(6)`, {origin:'right'})

  }
  

/*================== SEÇÕES FICAREM ATIVAS ==================*/
const sections = document.querySelectorAll('section[id]')

function scrollActive() {
    const scrollY = window.pageYOffset

    sections.forEach(current => {
        const sectionHeight = current.offsetHeight
        const sectionTop = current.offsetTop - 50;
        sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('link-ativo')
        } else {
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('link-ativo')
        }
    })
}
window.addEventListener('scroll', scrollActive)

/*================== NAVEGAÇÃO FLUÍDA ==================*/

document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
    });   
    });
});

/*================== MOSTRAR SCROLL UP ==================*/

function scrollToTop() {
    const scrollDuration = 500; // Duração da animação em milissegundos
    const scrollStep = -window.scrollY / (scrollDuration / 15); // Quantidade de pixels a serem rolados a cada intervalo
    let scrollInterval = setInterval(function() {
      if (window.scrollY !== 0) {
        window.scrollBy(0, scrollStep);
      } else {
        clearInterval(scrollInterval);
      }
    }, 15);
  }
  
  function scrollUp() {
    const scrollUp = document.getElementById('scroll-up');
    //Quando o scroll for maior que 350 no viewport, adicionar a class do CSS
    if (this.scrollY >= 350) {
      scrollUp.classList.add('show-scroll');
    } else {
      scrollUp.classList.remove('show-scroll');
    }
  }
  
  const scrollUpButton = document.getElementById('scroll-up');
  scrollUpButton.addEventListener('click', function(event) {
    event.preventDefault(); // Impede o comportamento padrão do link
  
    // Inicia a animação de rolagem suave até o topo
    scrollToTop();
  });
  
  window.addEventListener('scroll', scrollUp);
      