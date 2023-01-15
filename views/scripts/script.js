
if ($(window).width() < 768) {
    $("#img1").attr('src', '/galeria - 767px/teste2.png');
    $("#img2").attr('src', '/galeria - 767px/teste3.png');
    $("#img3").attr('src', '/galeria - 767px/teste4.png');
    $("#img4").attr('src', '/galeria - 767px/teste5.png');
    $("#img5").attr('src', '/galeria - 767px/teste6.png');
    $("#img6").attr('src', '/galeria - 767px/teste7.png');
    $('.recentes-imagens').slick({
        infinite: true,
        arrows: false,
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        variableWidth: true,
        centerMode: true,
    });
} else if ($(window).width() < 991) {
    $("#img1").attr('src', '/galeria - 991px/teste2.png');
    $("#img2").attr('src', '/galeria - 991px/teste3.png');
    $("#img3").attr('src', '/galeria - 991px/teste4.png');
    $("#img4").attr('src', '/galeria - 991px/teste5.png');
    $("#img5").attr('src', '/galeria - 991px/teste6.png');
    $("#img6").attr('src', '/galeria - 991px/teste7.png');
    $('.recentes-imagens').slick({
        infinite: true,
        arrows: false,
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        variableWidth: true,
        centerMode: true,
    });
} else {
    $("#img1").attr('src', '/galeria - 1200px/teste2.png');
    $("#img2").attr('src', '/galeria - 1200px/teste3.png');
    $("#img3").attr('src', '/galeria - 1200px/teste4.png');
    $("#img4").attr('src', '/galeria - 1200px/teste5.png');
    $("#img5").attr('src', '/galeria - 1200px/teste6.png');
    $("#img6").attr('src', '/galeria - 1200px/teste7.png');
    $('.recentes-imagens').slick({
        dots: false,
        arrows: false,
        slidesToShow: 3,
        centerMode: true,
        autoplay: true,
        autoplaySpeed: 1500,
    });
}

if ($(window).width() < 768) {
    $("#port2").attr('src', '/galeria - 1200px/teste3.png');
    $("#port3").attr('src', '/galeria - 1200px/teste4.png');
    $("#port4").attr('src', '/galeria - 1200px/teste5.png');
    $("#port5").attr('src', '/galeria - 1200px/teste6.png');
    $("#port6").attr('src', '/galeria - 1200px/teste7.png');
    $('.portfolio-imagens').slick({
        infinite: true,
        dots: false,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        centerMode: true,
     });
} else if ($(window).width() < 991) {
    $("#port1").attr('src', '/galeria - 991px/teste2.png');
    $("#port2").attr('src', '/galeria - 991px/teste3.png');
    $("#port3").attr('src', '/galeria - 991px/teste4.png');
    $("#port4").attr('src', '/galeria - 991px/teste5.png');
    $("#port5").attr('src', '/galeria - 991px/teste6.png');
    $("#port6").attr('src', '/galeria - 991px/teste7.png');
    $('.portfolio-imagens').slick({
        infinite: true,
        dots: true,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        centerMode: true,
     });
} else {
    $("#port1").attr('src', '/galeria - 1200px/teste2.png');
    $("#port2").attr('src', '/galeria - 1200px/teste3.png');
    $("#port3").attr('src', '/galeria - 1200px/teste4.png');
    $("#port4").attr('src', '/galeria - 1200px/teste5.png');
    $("#port5").attr('src', '/galeria - 1200px/teste6.png');
    $("#port6").attr('src', '/galeria - 1200px/teste7.png');
    $('.portfolio-imagens').slick({
        infinite: true,
        dots: true,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        centerMode: true,
     });
}



// $('.feltro').on('click', function(){
//     $('.portfolio-imagens').slick('slickFilter',function() { return $('.feltro', this).length === 1; });
// });

// $('.eva').on('click', function(){
//     $('.portfolio-imagens').slick('slickFilter',function() { return $('.eva', this).length === 1; });
// });

// $('.tudo').on('click', function(){
//     $('.portfolio-imagens').slick('slickUnfilter');
// });


$(".portfolio-botoes button").on('click', function(){
    var filter = $(this).val();
    $(".portfolio-imagens").slick('slickUnfilter');

    if(filter == 'feltro'){
        $(".portfolio-imagens").slick('slickFilter', function() { return $('.feltro', this).length === 1; });
      }

      else if(filter == 'eva'){
        $(".portfolio-imagens").slick('slickFilter', function() { return $('.eva', this).length === 1; });
      }

      else if(filter == 'tudo'){
        $(".portfolio-imagens").slick('slickUnfilter');
      }
})

const btnMobile = document.getElementById('btn-mobile');

function toggleMenu(event) {
  if (event.type === 'touchstart') event.preventDefault();
  const nav = document.getElementById('nav');
  nav.classList.toggle('active');
  const active = nav.classList.contains('active');
  event.currentTarget.setAttribute('aria-expanded', active);
  if (active) {
    event.currentTarget.setAttribute('aria-label', 'Fechar Menu');
  } else {
    event.currentTarget.setAttribute('aria-label', 'Abrir Menu');
  }
}

btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);


$(".bt-inicio").click(function() {
  var inicio = $(".inicio").offset();
  var inicio_top = inicio.top;
  $('html, body').animate({ scrollTop: inicio_top }, 1000);
})

$(".bt-sobre").click(function() {
  var sobre = $(".sobre").offset();
  var sobre_top = sobre.top;
  $('html, body').animate({ scrollTop: sobre_top }, 1000);
})

$(".bt-recentes").click(function() {
  var recentes = $(".recentes").offset();
  var recentes_top = recentes.top;
  $('html, body').animate({ scrollTop: recentes_top }, 1000);
})

$(".bt-portfolio").click(function() {
  var portfolio = $(".portfolio").offset();
  var portfolio_top = portfolio.top;
  $('html, body').animate({ scrollTop: portfolio_top }, 1000);
})

$(".bt-contato").click(function() {
  var rodape = $(".rodape").offset();
  var rodape_top = rodape.top;
  $('html, body').animate({ scrollTop: rodape_top }, 1000);
})
