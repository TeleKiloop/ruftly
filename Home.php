<?php

?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ruftly, loja online femenina, produtos de maquilhagem, acessórios de moda e muito mais.">
    <meta name="keywords" content="ruftly, ruftus, kiloop, KPCode, maquilhagem, acessorios para maquilhagem, loja online">
    <meta name="author" content="KPCode">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,400;0,700;1,400;1,700&family=Raleway:ital,wght@0,200;0,400;0,700;1,400&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/reset.css">
    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/site.css">

    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/container.css">
    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/grid.css">
    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/header.css">
    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/image.css">
    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/menu.css">

    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/divider.css">
    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/dropdown.css">
    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/segment.css">
    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/button.css">
    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/loader.css">
    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/icon.css">
    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/sidebar.css">
    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/transition.css">
    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/toast.css">
    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/input.css">
    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/popup.css">
    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/label.css">
    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/list.css">
    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/card.css">
    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/rating.css">
    <link rel="stylesheet" type="text/css" href="src/semantic_ui/components/form.css">
    	
    <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="src/css/footer.css">
    <link rel="stylesheet" type="text/css" href="src/css/product_list.css">
    <title>Home - Rufty Store</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="src/semantic_ui/components/visibility.js"></script>
    <script src="src/semantic_ui/components/sidebar.js"></script>
    <script src="src/semantic_ui/components/transition.js"></script>
    <script src="src/semantic_ui/components/toast.js"></script>
    <script src="src/semantic_ui/components/dropdown.js"></script>
    <script src="src/semantic_ui/components/rating.js"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }
        body{
            /*background-color: #252525;*/
            font-family: Ubuntu;
        }
        h1{
          color: #262626;
          font-family: Raleway;
          font-size: clamp(0.8rem, 1vw + 0.1rem, 1.4rem);
        }
        h2{
          color: #262626;
          font-family: Raleway;
          font-size: clamp(0.9rem, 1vw + 0.1rem, 1.5rem);
        }
        .ui.centered.header{
          color: #262626;
          font-family: Ubuntu;
          margin-bottom: 15px;
        }
        .ui.basic.segment.banner{
            padding:0px;
            margin: 0px;
        }
        .ui.basic.segment.mais_vendidos h1{
            color: #6e6e84;
            font-family: Raleway;
            margin-left: 10px;
            margin-bottom: 5px;
        }
        .ui.basic.segment.Novos_Produtos{
          background-color: #bd3246 !important;
          margin-top: 0px;
          margin-bottom: 0px;
        }
        .barra{
          border-radius: 50px;
          width: 250px;
          background-color: #0b9afb;
        }
        .ui.inverted.segment.info_more{
          padding: 0px;
          border-radius: 0px;
          margin-bottom: 0px;
        }
        .c-carousel.c-carousel--responsive2{
          background-color: #ffffff !important;
          padding: 5px;
          border-radius: 5px;
        }
        .c-carousel.c-carousel--responsive3{
          border-radius: 10px;
          color: #2b2b2b;
          font-family: Ubuntu;
          margin-top: 0px;
          padding: 0px;
        }
        .ui.inverted.placeholder.segment{
          align-items: center;
          justify-content: center;
          text-align: center;
          padding: 0px;
        }
        .ui.inverted.placeholder.segment h2{
          font-size: clamp(0.9rem, 1vw + 0.1rem, 1.5rem);
        }
        .ui.inverted.placeholder.segment p{
          font-size: clamp(0.7rem, 1vw + 0.1rem, 1.3rem);
        }
        .ui.basic.segment.Novos_Produtos .ui.stackable.grid .three.wide.column{
          padding-left: 30px;
        }

        .ui.centered.basic.segment.rastrear{
          align-items: center;
          justify-items: center;
          padding: 40px;
        }
        .ui.search.rastrear{
          max-width: 40%;
          margin-left: 30%;
        }

        @media only screen and (max-width: 700px) {
          .ui.basic.segment.Novos_Produtos .ui.stackable.grid .three.wide.column{
            padding-left: 10px;
          }
        } 
    </style>
</head>
<body>
<!--<div class="ui basic segment info_site">
    <div class="ui stackable three column grid">
    <div class="column"><p style="item_info_site"><i class="truck icon" style="visibility: visible;"></i>Frete Grátis para Portugal</p></div>
    <div class="column"></div>
    <div class="column"><p style="item_info_site">Frete Grátis para Portugal</p></div>
    </div>
</div>!-->
<div class="ui vertical inverted sidebar menu">
  <a class="active item">Home</a>
  <a class="item">Work</a>
  <a class="item">Company</a>
  <a class="item">Careers</a>
  <a class="item">Login</a>
  <a class="item">Signup</a>
</div>
<div class="pusher">
<?php
require('src/Components/menu.php');
?>
<div class="ui basic segment banner">
    <img class="ui fluid image banner" id="banner" src="src/img/banner_2.png"/>
</div>

<div class="ui basic segment mais_vendidos">
<h1 class="ui header">Categorias</h1>

</div>

<div class="ui basic segment mais_vendidos">
  <h1 class="ui header">Mais vendidos</h1> 
    <article class="c-carousel c-carousel--responsive">
      <div class="c-carousel__slides js-carousel--responsive">
        <article class="c-carousel__slide">
          <div class="ui fluid centered basic link card">
            <div class="image">
              <div class="ui top left attached label"><span class="desconto">23% OFF</span></div>
              <img src="src/img_products/9007572021071310195160ecf847448b7.jpeg"/>
            </div>
            <div class="content">
              <div class="header" style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">Sweet Dreams - Máscara de dormir confortável e aconchegante para os olhos</div>
                <div class="meta">
                  <a>Acessórios</a>
                </div>
                <div class="ui large red disabled rating" data-rating="5" data-max-rating="5" data-icon="heart"></div><span style="color: #9d9d9d;">(19)</span>
              <div style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;margin-top: 10px;"><span class="novo_preco">€19.99</span><span class="antigo_preco">€25.99</span></div>
            </div>
          </div>
        </article>
        <article class="c-carousel__slide">
          <div class="ui fluid centered basic link card">
            <div class="image">
              <div class="ui top left attached label"><span class="desconto">23% OFF</span></div>
                <img src="src/img_products/9007572021071310195160ecf847448b7.jpeg"/>
              </div>
              <div class="content">
                <div class="header" style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">Sweet Dreams - Máscara de dormir confortável e aconchegante para os olhos</div>
                <div class="meta">
                  <a>Acessórios</a>
                </div>
                <div style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;margin-top: 10px;"><span class="novo_preco">€19.99</span><span class="antigo_preco">€25.99</span></div>
              </div>
          </div>
        </article>
        <article class="c-carousel__slide">
          <div class="ui fluid centered basic link card">
            <div class="image">
              <div class="ui top left attached label"><span class="desconto">23% OFF</span></div>
                <img src="src/img_products/9007572021071310195160ecf847448b7.jpeg"/>
              </div>
              <div class="content">
                <div class="header" style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">Sweet Dreams - Máscara de dormir confortável e aconchegante para os olhos</div>
                  <div class="meta">
                    <a>Acessórios</a>
                  </div>
                  <div style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;margin-top: 10px;"><span class="novo_preco">€19.99</span><span class="antigo_preco">€25.99</span></div>
              </div>
            </div>
        </article>
        <article class="c-carousel__slide">
          <div class="ui fluid centered basic link card">
            <div class="image">
              <div class="ui top left attached label"><span class="desconto">23% OFF</span></div>
              <img src="src/img_products/9007572021071310195160ecf847448b7.jpeg"/>
            </div>
            <div class="content">
              <div class="header" style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">Sweet Dreams - Máscara de dormir confortável e aconchegante para os olhos</div>
              <div class="meta">
                <a>Acessórios</a>
              </div>
              <div style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;margin-top: 10px;"><span class="novo_preco">€19.99</span><span class="antigo_preco">€25.99</span></div>
            </div>
          </div>
        </article>
        <article class="c-carousel__slide">
          <div class="ui fluid centered basic link card">
            <div class="image">
              <div class="ui top left attached label"><span class="desconto">23% OFF</span></div>
                <img src="src/img_products/9007572021071310195160ecf847448b7.jpeg"/>
              </div>
              <div class="content">
                <div class="header" style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">Sweet Dreams - Máscara de dormir confortável e aconchegante para os olhos</div>
                  <div class="meta">
                    <a>Acessórios</a>
                  </div>
                  <div style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;margin-top: 10px;"><span class="novo_preco">€19.99</span><span class="antigo_preco">€25.99</span></div>
              </div>
          </div>
        </article>
        <article class="c-carousel__slide">
          <div class="ui fluid centered basic link card">
            <div class="image">
              <div class="ui top left attached label"><span class="desconto">23% OFF</span></div>
                <img src="src/img_products/9007572021071310195160ecf847448b7.jpeg"/>
              </div>
              <div class="content">
                <div class="header" style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">Sweet Dreams - Máscara de dormir confortável e aconchegante para os olhos</div>
                  <div class="meta">
                    <a>Acessórios</a>
                  </div>
                  <div style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;margin-top: 10px;"><span class="novo_preco">€19.99</span><span class="antigo_preco">€25.99</span></div>
                </div>
            </div>
        </article>
      </div>
      <div class="js-carousel--responsive-dots"></div>
    </article> 
</div>

<div class="ui basic segment banner">
    <img class="ui fluid image banner" id="banner" src="src/img/banner_3.png"/>
</div>

<div class="ui basic segment Novos_Produtos">
  <div class="ui stackable grid">
      <div class="three wide column" style="color: white;font-family: Ubuntu;">
        <h1 class="ui inverted header" style="font-family: Ubuntu;">Produtos do mês</h1>
        <p>Para ver mais produtos relacionados, clique no botão abaixo!</p>
        <div class="ui right aligned green button">Ver mais produtos</div>
      </div>
      <div class="thirteen wide column">
        <article class="c-carousel c-carousel--responsive2">
          <div class="c-carousel__slides js-carousel--responsive2">
                  <article class="c-carousel__slide">
                    <div class="ui fluid centered basic link card">
                        <div class="image">
                        <div class="ui top left attached label"><span class="desconto">23% OFF</span></div>
                        <img src="src/img_products/9007572021071310195160ecf847448b7.jpeg"/>
                        </div>
                        <div class="content">
                        <div class="header" style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">Sweet Dreams - Máscara de dormir confortável e aconchegante para os olhos</div>
                        <div class="meta">
                            <a>Acessórios</a>
                        </div>
                        <div style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;margin-top: 10px;"><span class="novo_preco">€19.99</span><span class="antigo_preco">€25.99</span></div>
                        </div>
                    </div>
                 </article>
                  <article class="c-carousel__slide">
                    <div class="ui fluid centered basic link card">
                        <div class="image">
                        <div class="ui top left attached label"><span class="desconto">23% OFF</span></div>
                        <img src="src/img_products/9007572021071310195160ecf847448b7.jpeg"/>
                        </div>
                        <div class="content">
                        <div class="header" style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">Sweet Dreams - Máscara de dormir confortável e aconchegante para os olhos</div>
                        <div class="meta">
                            <a>Acessórios</a>
                        </div>
                        <div style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;margin-top: 10px;"><span class="novo_preco">€19.99</span><span class="antigo_preco">€25.99</span></div>
                        </div>
                    </div>
                  </article>
                  <article class="c-carousel__slide">
                    <div class="ui fluid centered basic link card">
                        <div class="image">
                        <div class="ui top left attached label"><span class="desconto">23% OFF</span></div>
                        <img src="src/img_products/9007572021071310195160ecf847448b7.jpeg"/>
                        </div>
                        <div class="content">
                        <div class="header" style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">Sweet Dreams - Máscara de dormir confortável e aconchegante para os olhos</div>
                        <div class="meta">
                            <a>Acessórios</a>
                        </div>
                        <div style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;margin-top: 10px;"><span class="novo_preco">€19.99</span><span class="antigo_preco">€25.99</span></div>
                        </div>
                    </div>
                  </article>
                  <article class="c-carousel__slide">
                    <div class="ui fluid centered basic link card">
                        <div class="image">
                        <div class="ui top left attached label"><span class="desconto">23% OFF</span></div>
                        <img src="src/img_products/9007572021071310195160ecf847448b7.jpeg"/>
                        </div>
                        <div class="content">
                        <div class="header" style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">Sweet Dreams - Máscara de dormir confortável e aconchegante para os olhos</div>
                        <div class="meta">
                            <a>Acessórios</a>
                        </div>
                        <div style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;margin-top: 10px;"><span class="novo_preco">€19.99</span><span class="antigo_preco">€25.99</span></div>
                        </div>
                    </div>
                  </article>
                  <article class="c-carousel__slide">
                    <div class="ui fluid centered basic link card">
                        <div class="image">
                        <div class="ui top left attached label"><span class="desconto">23% OFF</span></div>
                        <img src="src/img_products/9007572021071310195160ecf847448b7.jpeg"/>
                        </div>
                        <div class="content">
                        <div class="header" style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">Sweet Dreams - Máscara de dormir confortável e aconchegante para os olhos</div>
                        <div class="meta">
                            <a>Acessórios</a>
                        </div>
                        <div style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;margin-top: 10px;"><span class="novo_preco">€19.99</span><span class="antigo_preco">€25.99</span></div>
                        </div>
                    </div>
                </article>
                  <article class="c-carousel__slide">
                    <div class="ui fluid centered basic link card">
                        <div class="image">
                        <div class="ui top left attached label"><span class="desconto">23% OFF</span></div>
                        <img src="src/img_products/9007572021071310195160ecf847448b7.jpeg"/>
                        </div>
                        <div class="content">
                        <div class="header" style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">Sweet Dreams - Máscara de dormir confortável e aconchegante para os olhos</div>
                        <div class="meta">
                            <a>Acessórios</a>
                        </div>
                        <div style="max-width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;margin-top: 10px;"><span class="novo_preco">€19.99</span><span class="antigo_preco">€25.99</span></div>
                        </div>
                    </div>
                  </article>
          </div>
          <div class="js-carousel--responsive-dots2"></div>
        </article>
      </div>
</div>
</div>

<div class="ui centered basic segment rastrear">
  <h2 class="ui centered header">Rastrear Encomenda</h2>
  <div class="ui center aligned compact form">
        <div class="field">
          <div class="ui search rastrear">
            <div class="ui icon input">
              <input class="prompt" type="text" placeholder="RFT#186425.">
              <i class="search icon"></i>
            </div>
            <div class="results"></div>
          </div>
  </div>
</div>
<p style="text-align:center;margin-top: 10px;font-family: Ubuntu; color: #6e6e84">Não se lembra do seu codigo de rastriamento? Não recebeu o codigo no seu e-mail?</p>
      </div>

<div class="ui inverted segment info_more">
  <article class="c-carousel c-carousel--responsive3">
    <div class="c-carousel__slides js-carousel--responsive3">
      <article class="c-carousel__slide">
        <div class="ui inverted placeholder segment">
          <h2 class="ui header">
          <i class="shipping fast icon"></i>
            <div class="content">
            Frete Grátis Para Todo o Portugal
            </div>
          </h2>
          <p>Receba seu pedido no conforto da sua casa com entrega garantida e segurada pelos Correios.</p>
      </div>
      </article>
      <article class="c-carousel__slide">
        <div class="ui inverted placeholder segment">
          <h2 class="ui header">
          <i class="box icon"></i>
            <div class="content">
            Satisfação ou reembolso
            </div>
          </h2>
          <p>Todas as nossas entregas possuem código de rastreio e você recebe todas as atualizações em seu e-mail e whatsapp.</p>
        </div>
      </article>
      <article class="c-carousel__slide">
        <div class="ui inverted placeholder segment">
          <h2 class="ui header">
          <i class="handshake outline icon"></i>
            <div class="content">
            Suporte Profissional
            </div>
          </h2>
          <p>Contamos com um time de especialistas para atender você 24 horas por dia, 07 dias por semana.</p>
        </div>
      </article>
      <article class="c-carousel__slide">
        <div class="ui inverted placeholder segment">
          <h2 class="ui header">
          <i class="user shield icon"></i>
            <div class="content">
            Compra Segura
            </div>
          </h2>
            <p>Ambiente seguro e certificado pela Norton™</p>
        </div>
      </article>
    </div>
  </article>
</div>
<?php
require('src/Components/footer.php');
?>
</div>
    <script>
        $('.ui.dropdown')
        .dropdown()
        ;
        $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
        ;
        $('.ui.rating')
        .rating('disable')
        ;
    </script>
    
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
    <script>
const $responsiveCarousel = document.querySelector(".js-carousel--responsive");
const $responsiveCarousel2 = document.querySelector(".js-carousel--responsive2");
const $responsiveCarousel3 = document.querySelector(".js-carousel--responsive3");

new Glider($responsiveCarousel, {
  slidesToShow: 2,
  slidesToScroll: 1,
  draggable: true,
  dots: ".js-carousel--responsive-dots",
  arrows: {
    prev: ".ui.centered.basic.button.js-carousel--responsive-prev",
    next: ".ui.centered.basic.button.js-carousel--responsive-next",
  },
  responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      },
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 5,
      },
    },
  ],
});

new Glider($responsiveCarousel2, {
  slidesToShow: 2,
  slidesToScroll: 1,
  draggable: true,
  dots: ".js-carousel--responsive-dots2",
  arrows: {
    prev: ".ui.centered.basic.button.js-carousel--responsive-prev2",
    next: ".ui.centered.basic.button.js-carousel--responsive-next2",
  },
  responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      },
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 5,
      },
    },
  ],
});
var glider_3 = new Glider($responsiveCarousel3, {
  slidesToShow: 1,
  slidesToScroll: 1,
  rewind: true,
  dots: ".js-carousel--responsive-dots3",
  arrows: {
    prev: ".ui.centered.basic.button.js-carousel--responsive-prev3",
    next: ".ui.centered.basic.button.js-carousel--responsive-next3",
  },
  responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

var Current_Slide = 0;
function next_slide_3(){
  if(Current_Slide >= 3){
    Current_Slide = 0;
  }else{
    Current_Slide++;
  }
  glider_3.scrollItem(Current_Slide, true)
}

window.setInterval('next_slide_3()', 4000);
</script>
</body>
</html>
