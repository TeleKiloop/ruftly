<?php
if(!empty($_GET['path'])){
    $url = explode('/', $_GET['path']);
                
    $Nome_Produto = $url[0];
    array_shift($url);
}
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Kiloop Encoder, iniciar sessão">
    <meta name="keywords" content="codificador api, proteção de textos, codificar, api">
    <meta name="author" content="Kiloop">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,400;0,700;1,400;1,700&family=Raleway:ital,wght@0,200;0,400;0,700;1,400&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/reset.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/site.css">

    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/container.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/grid.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/header.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/image.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/menu.css">

    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/divider.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/dropdown.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/segment.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/button.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/loader.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/icon.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/sidebar.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/transition.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/toast.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/input.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/popup.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/label.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/list.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/card.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/rating.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/form.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/sticky.css">
    <link rel="stylesheet" type="text/css" href="../src/semantic_ui/components/rail.css">
    	
    <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../src/css/footer.css">
    <link rel="stylesheet" type="text/css" href="../src/css/product_list.css">
    <link rel="stylesheet" type="text/css" href="../src/css/button_buy.css">
    <title>Produto - Rufty Store</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="../src/semantic_ui/components/visibility.js"></script>
    <script src="../src/semantic_ui/components/sidebar.js"></script>
    <script src="../src/semantic_ui/components/transition.js"></script>
    <script src="../src/semantic_ui/components/toast.js"></script>
    <script src="../src/semantic_ui/components/dropdown.js"></script>
    <script src="../src/semantic_ui/components/rating.js"></script>
    <script src="../src/semantic_ui/components/sticky.js"></script>
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
            background-color: #F7F7F7 !important;
            font-family: Ubuntu;
        }
        h1{
            color: #6E6E6E;
            font-size: clamp(1rem, 1.8vw + 0.1rem, 1.8rem);
        }
        .container_produto{
            background-color: #F7F7 !important;
            border-radius: 15px;
            padding: 10px;
            width: 54%;
            height: 2000px;
            margin-left: 5%;
        }
        .container_info_produto{
            background-color: #ffffff !important;
            position: fixed;
            right: 5%;
            border-radius: 15px;
            padding: 10px;
            width: 35%;
            display: block;
        }
        .ui.basic.segment.info_mobile{
                display: none;
            }
        .ui.basic.segment.info{
            background-color: #ffffff !important;
        }
        .container_global{
            display: flex;
            background-color: #F7F7F7 !important;
            padding-top: 20px;
        }
        .container_info_loja p{
            margin-bottom: 15px;
        }

        .span_verde{
            color: #1BBF6C;
            font-family: Raleway;
        }
        .span_verde_escuro{
            color: #00B75B;
            font-family: Raleway;
            font-weight: 800;
        }
        .span_cizento{
            color: #737373;
            font-family: Raleway;
        }
        .span_cizento_claro{
            color: #9E9E9E;
            font-family: Raleway;
        }
        .span_azul{
            color: #2899FF;
            font-family: Raleway;
        }
        .text_new{
            margin-bottom: 0px;
            color: #9E9E9E;
            font-family: Raleway;
            font-size: clamp(0.7rem, 1vw + 0.1rem, 1rem);
        }
        .nome_produto{
            margin-top: 0px;
        }
        .estoque_codigo{
            font-size: clamp(0.8rem, 0.9vw + 0.1rem, 0.9rem);
            margin-bottom: 5px;
        }
        .intermediario{
            background-color: #DFF0FF;
            padding: 5px;
            width: max-content;
            border-radius: 5px;
            font-size: clamp(0.8rem, 0.9vw + 0.1rem, 0.9rem);
            margin-top: 0px;
        }
        .container_info_produto .ui.basic.segment.info .opcoes_button_text button{
            margin-bottom: 10px;
        }
        .container_info_produto .ui.basic.segment.info .opcoes_button_cores button{
            margin-bottom: 10px;
            display: block-inline;
        }

        .container_galeria{
            display: flex;
            flex-direction: row;
            overflow-x: hidden;
        }
        .one.wide.column.setas{
            display: flex;
            justify-self: center;
            align-items: center;
        }
        @media only screen and (max-width: 700px) {
        .container_info_produto{
            display: none;
        }
        .ui.basic.segment.info_mobile{
                display: block;
            }
        .container_produto{
            background-color: #F7F7 !important;
            border-radius: 15px;
            padding: 10px;
            height: 2000px;
            width: 90%;
            margin-left: 5%;
        }
        .ui.basic.segment.info{
            background-color: #ffffff !important;
        }
        .container_global{
            display: flex;
            background-color: #F7F7F7 !important;
            padding-top: 20px;
        }
        .container_produto .ui.basic.segment.info .opcoes_button_text button{
            margin-bottom: 5px;
        }
        .container_produto .ui.basic.segment.info .opcoes_button_cores button{
            margin-bottom: 5px;
        }
        }
    </style>
</head>
<body>
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
require('../src/Components/menu.php');
?>
<div class="container_global">
    <div class="container_produto">
        <div class="ui segment">
            <div class="ui basic segment">
                <img src="../src/img_products/9007572021071310195160ecf847448b7.jpeg" class="ui centered medium image"/>
               
                    <div class="ui three column grid">
                      <div class="one wide column setas"><div class="ui tertiary basic icon button" onclick="move_left()"><i class="arrow left icon"></i></div></div>
                      <div class="fourteen wide column">
                        <div class="container_galeria" id="galeria">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSoxQayyjrRbDz3d2X0jNIZFm_fglHHWRzjQ&usqp=CAU" class="ui centered tiny image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoUEzLKGWhf-Oc2y46H9-0xSXITsgTQklZNQ&usqp=CAU" class="ui centered tiny image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR65wxT0dJAtY1tKiGbUvHiotKpktJ3DOrfuw&usqp=CAU" class="ui centered tiny image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ4PMJUnAl4cP5W4Z9gsVQcM_QNRkAO1A2hsKr31apaeur_Uc7RMXuZeXbE_NgSp_b3s4&usqp=CAU" class="ui centered tiny image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_NBS399yarZ0qOi4DRndDY_BDE54L6QRYR4d7vjGKMMrV9KixEriA9KNiMx4z9bTM5CU&usqp=CAU" class="ui centered tiny image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTngQfXTOegqyIh_YXFF6ggeTolP3q9Tb6Is9xJQpVYm94GaHwMmPre0eALdD6LbBXUXkM&usqp=CAU" class="ui centered tiny image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2-YI6N4rC_EC9CVPqLr6OD48VWpRM9wzXQrl8zt7_DQrjYhK2Ugs1REsh08ZeKCezQGg&usqp=CAU" class="ui centered tiny image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRa2q5iZZbz1LRPiOkC1wGaPYxR_KYoQ1paaw&usqp=CAU" class="ui centered tiny image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT73N3NxIHNpE9IMIeHXvXo0Opx0-XbS1p81w&usqp=CAU" class="ui centered tiny image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-hw-8G1MEBoir7Lwv84U3ZOxuBllMrjr5-Q&usqp=CAU" class="ui centered tiny image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTySpYIRn-dyJWfE24pgtw-FDpG0DbvJckZlA&usqp=CAU" class="ui centered tiny image">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1BkJ6JbQ5zn5R6YS5bkOzrLDMa7QZlRmJHQ&usqp=CAU" class="ui centered tiny image">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdahB-LMkN8WtEclN2fJnD9XHlPLhZJgLYdA&usqp=CAU" class="ui centered tiny image">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQh8WU2C5w6ruxNxNpeHSB0ztWDDQzMzVGMQ&usqp=CAU" class="ui centered tiny image">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQxehLsWtJ11OWt0VBgDQO1tX9m1IicAdHlg&usqp=CAU" class="ui centered tiny image">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzV7qIe17eYV7NwhS1c-HV7Z9zWZqRh3SCMQ&usqp=CAU" class="ui centered tiny image">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR3nB-f5KTwMXrGvR20RtM1zQl8u4X4OvOJQ&usqp=CAU" class="ui centered tiny image">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSa_qM8dALy0Q2PPldA0zBubxPpTjD6v_A1nQ&usqp=CAU" class="ui centered tiny image">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQb1jnLw07SvAtjCzJ3_p56xKjJW9OvajJp3A&usqp=CAU" class="ui centered tiny image">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzItbBNjK0J0eLOFTI_eLxozWmy1Alf9ZXYg&usqp=CAU" class="ui centered tiny image"> 
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSoxQayyjrRbDz3d2X0jNIZFm_fglHHWRzjQ&usqp=CAU" class="ui centered tiny image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoUEzLKGWhf-Oc2y46H9-0xSXITsgTQklZNQ&usqp=CAU" class="ui centered tiny image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR65wxT0dJAtY1tKiGbUvHiotKpktJ3DOrfuw&usqp=CAU" class="ui centered tiny image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ4PMJUnAl4cP5W4Z9gsVQcM_QNRkAO1A2hsKr31apaeur_Uc7RMXuZeXbE_NgSp_b3s4&usqp=CAU" class="ui centered tiny image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_NBS399yarZ0qOi4DRndDY_BDE54L6QRYR4d7vjGKMMrV9KixEriA9KNiMx4z9bTM5CU&usqp=CAU" class="ui centered tiny image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTngQfXTOegqyIh_YXFF6ggeTolP3q9Tb6Is9xJQpVYm94GaHwMmPre0eALdD6LbBXUXkM&usqp=CAU" class="ui centered tiny image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2-YI6N4rC_EC9CVPqLr6OD48VWpRM9wzXQrl8zt7_DQrjYhK2Ugs1REsh08ZeKCezQGg&usqp=CAU" class="ui centered tiny image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRa2q5iZZbz1LRPiOkC1wGaPYxR_KYoQ1paaw&usqp=CAU" class="ui centered tiny image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT73N3NxIHNpE9IMIeHXvXo0Opx0-XbS1p81w&usqp=CAU" class="ui centered tiny image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-hw-8G1MEBoir7Lwv84U3ZOxuBllMrjr5-Q&usqp=CAU" class="ui centered tiny image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTySpYIRn-dyJWfE24pgtw-FDpG0DbvJckZlA&usqp=CAU" class="ui centered tiny image">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1BkJ6JbQ5zn5R6YS5bkOzrLDMa7QZlRmJHQ&usqp=CAU" class="ui centered tiny image">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdahB-LMkN8WtEclN2fJnD9XHlPLhZJgLYdA&usqp=CAU" class="ui centered tiny image">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQh8WU2C5w6ruxNxNpeHSB0ztWDDQzMzVGMQ&usqp=CAU" class="ui centered tiny image">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQxehLsWtJ11OWt0VBgDQO1tX9m1IicAdHlg&usqp=CAU" class="ui centered tiny image">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzV7qIe17eYV7NwhS1c-HV7Z9zWZqRh3SCMQ&usqp=CAU" class="ui centered tiny image">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR3nB-f5KTwMXrGvR20RtM1zQl8u4X4OvOJQ&usqp=CAU" class="ui centered tiny image">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSa_qM8dALy0Q2PPldA0zBubxPpTjD6v_A1nQ&usqp=CAU" class="ui centered tiny image">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQb1jnLw07SvAtjCzJ3_p56xKjJW9OvajJp3A&usqp=CAU" class="ui centered tiny image">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzItbBNjK0J0eLOFTI_eLxozWmy1Alf9ZXYg&usqp=CAU" class="ui centered tiny image">  
                    </div>
                    </div>
                      <div class="one wide column setas"><div class="ui tertiary basic icon button" onclick="move_right()"><i class="arrow right icon"></i></div></div>
                    </div>
            </div>
            <div class="ui basic segment info_mobile">
                <div class="ui basic segment info">
                    <p class="text_new">Novo!</p>
                    <h1 class="nome_produto">Dispositivo de treinamento e proteção de cães com comportamentos indesejados <span style="color: #0042FF;"><i class="small check circle icon"></i></span></h1>
                    <p class="estoque_codigo"> <span style="color: #9E9E9E;">(Cód. item 37123481)</span> | <span style="color: #1690FF;">Disponível em estoque</span></p>
                    <p class="intermediario"><span style="color: #4CAAFF;">Intermediário autorizado</span> <span style="color: #0086FF;font-weight: 800;">Ruftus<i class="copyright outline icon"></i></span></p>
                    <div class="ui divider"></div>
                    <div class="opcoes_button_text">
                        <a>Modelo: (Modelo selecionado)</a><br/>
                        <button class="tiny ui inverted blue button opcoes_button">U33</button>
                        <button class="tiny ui inverted blue button opcoes_button">U33</button>
                        <button class="tiny ui inverted blue button opcoes_button">U33</button>
                        <button class="tiny ui inverted blue button opcoes_button">U33</button>
                        <button class="tiny ui inverted blue button opcoes_button">U33</button>
                        <button class="tiny ui inverted blue button opcoes_button">U33</button>
                        <button class="tiny ui inverted blue button opcoes_button">U33</button><br/>
                    </div>

                    <div class="opcoes_button_cores">
                        <a>Cores: (Cor selecionada)</a><br/>
                        <button class="tiny ui red button opcoes_button"></button>
                        <button class="tiny ui orange button opcoes_button"></button>
                        <button class="tiny ui yellow button opcoes_button"></button>
                        <button class="tiny ui olive button opcoes_button"></button>
                        <button class="tiny ui blue button opcoes_button"></button>
                        <button class="tiny ui violet button opcoes_button"></button>
                        <button class="tiny ui purple button opcoes_button"></button>
                        <button class="tiny ui pink button opcoes_button"></button>
                        <button class="tiny ui brown button opcoes_button"></button>
                        <button class="tiny ui grey button opcoes_button"></button>
                        <button class="tiny ui black button opcoes_button"></button>
                        <button class="tiny ui white button opcoes_button"></button>
                    </div>
                    

                    <div class="ui divider"></div>
                    <div class="container_info_loja">
                        <p><span class="span_verde"><i class="shipping fast icon"></i>Frete grátis</span> <span class="span_verde_escuro"><i class="bolt icon"></i>FULL</span></p>
                        <p><span class="span_cizento"><i class="reply icon"></i></span><span class="span_azul">Devolução grátis.</span> <span class="span_cizento_claro">Você tem 7 dias a partir da data de recebimento.</span></p>
                        <p><span class="span_cizento"><i class="shield alternate icon"></i></span><span class="span_azul">Compra Garantida.</span> <span class="span_cizento_claro">Receba o produto qu está a espera ou devolvemos o dinheiro.</span></p>
                        <p><span class="span_cizento"><i class="award icon"></i></span><span class="span_azul">Mais vendido</span> <span class="span_cizento_claro">entre os produtos da coleção.</span></p>
                    </div>
                    <div class="ui divider"></div>
                    <div class="ui fluid green button comprar">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <i class="shopping basket icon"></i>Comprar
                    </div>
                </div>
            </div>
                </div>
    </div>

    <div class="container_info_produto">
        <div class="ui basic segment info">
            <p class="text_new">Novo!</p>
            <h1 class="nome_produto">Dispositivo de treinamento e proteção de cães com comportamentos indesejados <span style="color: #0042FF;"><i class="small check circle icon"></i></span></h1>
            <p class="estoque_codigo"> <span style="color: #9E9E9E;">(Cód. item 37123481)</span> | <span style="color: #1690FF;">Disponível em estoque</span></p>
            <p class="intermediario"><span style="color: #4CAAFF;">Intermediário autorizado</span> <span style="color: #0086FF;font-weight: 800;">Ruftus<i class="copyright outline icon"></i></span></p>
            <div class="ui divider"></div>
            <div class="opcoes_button_text">
                <a>Modelo: (Modelo selecionado)</a><br/>
                <button class="tiny ui inverted blue button opcoes_button">U33</button>
                <button class="tiny ui inverted blue button opcoes_button">U33</button>
                <button class="tiny ui inverted blue button opcoes_button">U33</button>
                <button class="tiny ui inverted blue button opcoes_button">U33</button>
                <button class="tiny ui inverted blue button opcoes_button">U33</button>
                <button class="tiny ui inverted blue button opcoes_button">U33</button>
                <button class="tiny ui inverted blue button opcoes_button">U33</button><br/>
            </div>

            <div class="opcoes_button_cores">
                <a>Cores: (Cor selecionada)</a><br/>
                <button class="tiny ui red button opcoes_button"></button>
                <button class="tiny ui orange button opcoes_button"></button>
                <button class="tiny ui yellow button opcoes_button"></button>
                <button class="tiny ui olive button opcoes_button"></button>
                <button class="tiny ui blue button opcoes_button"></button>
                <button class="tiny ui violet button opcoes_button"></button>
                <button class="tiny ui purple button opcoes_button"></button>
                <button class="tiny ui pink button opcoes_button"></button>
                <button class="tiny ui brown button opcoes_button"></button>
                <button class="tiny ui grey button opcoes_button"></button>
                <button class="tiny ui black button opcoes_button"></button>
                <button class="tiny ui white button opcoes_button"></button>
            </div>
            

            <div class="ui divider"></div>
            <div class="container_info_loja">
                <p><span class="span_verde"><i class="shipping fast icon"></i>Frete grátis</span> <span class="span_verde_escuro"><i class="bolt icon"></i>FULL</span></p>
                <p><span class="span_cizento"><i class="reply icon"></i></span><span class="span_azul">Devolução grátis.</span> <span class="span_cizento_claro">Você tem 7 dias a partir da data de recebimento.</span></p>
                <p><span class="span_cizento"><i class="shield alternate icon"></i></span><span class="span_azul">Compra Garantida.</span> <span class="span_cizento_claro">Receba o produto qu está a espera ou devolvemos o dinheiro.</span></p>
                <p><span class="span_cizento"><i class="award icon"></i></span><span class="span_azul">Mais vendido</span> <span class="span_cizento_claro">entre os produtos da coleção.</span></p>
            </div>
            <div class="ui divider"></div>
            <div class="ui fluid green button comprar">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <i class="shopping basket icon"></i>Comprar
            </div>
        </div>
    </div>  
</div>
<?php
require('../src/Components/footer.php');
?>
</div>
    <script>
        $('.ui.dropdown')
        .dropdown()
        ;
        $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
        ;
        $('.ui.sticky')
        .sticky({
            context: '#example1'
        })
        ;

        $('.ui.rating')
        .rating('disable')
        ;
    </script>

<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
    <script>
  function move_left() {
    const galeria = document.getElementById("galeria");
    galeria.scrollLeft -= galeria.offsetWidth;
  }

  function move_right() {
    const galeria = document.getElementById("galeria");
    galeria.scrollLeft += galeria.offsetWidth;
  }
</script>
</body>
</html>
