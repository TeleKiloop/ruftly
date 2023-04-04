<?php

?>
<?php
session_start();

if(!isset($_SESSION['a30'])){
    header("Location: https://encoder.tlkiloop.com/secure/");
    $_SESSION['alert_secure'] = "Por favor inicie sessão para entrar no nosso sistema";
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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Megrim&family=Orbitron&family=Ubuntu:wght@400;700&family=VT323&display=swap" rel="stylesheet">

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
    <title>Home - Rufty Store</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="src/semantic_ui/components/visibility.js"></script>
    <script src="src/semantic_ui/components/sidebar.js"></script>
    <script src="src/semantic_ui/components/transition.js"></script>
    <script src="src/semantic_ui/components/toast.js"></script>
    <script src="src/semantic_ui/components/dropdown.js"></script>

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
            background-color: #252525;
        }
    </style>
</head>
<body>
<div class="ui borderless inverted menu">
  <div class="ui inverted dropdown icon item">
    <i class="bars icon"></i>
    <div class="menu">
      <div class="item">
        <i class="dropdown icon"></i>
        <span class="text">API</span>
        <div class="menu">
          <a class="item" href="https://encoder.tlkiloop.com/beta/token">Tokens</a>
          <div class="item">Config</div>
        </div>
      </div>
      <a class="item" href="https://encoder.tlkiloop.com/beta/logs">
        Logs
      </a>
      <div class="item">My account</div>
      <div class="divider"></div>
      <div class="header">
        Help
      </div>
      <div class="item">
        Docs
      </div>
      <div class="item">
        Contact us
      </div>
    </div>
    
      
    <div class="ui center item">
        <a>KiloopEncoder 0.0.1</a>
    </div>
  </div>

  <div class="right menu">
    <div class="item">
        <i class="sign out alternate icon"></i>
    </div>
  </div>
</div>

    <script>
        $('.ui.inverted.dropdown.icon.item')
        .dropdown()
        ;
    </script>
</body>
</html>