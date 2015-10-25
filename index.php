<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
  <title>Style Guide Boilerplate</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000000">

  <!-- Style Guide Boilerplate Styles -->
  <link rel="stylesheet" href="css/sg-style.css">
  <!--[if lt IE 9]><link rel="stylesheet" href="css/sg-style-old-ie.css"><![endif]-->

  <!-- https://github.com/sindresorhus/github-markdown-css -->
  <link rel="stylesheet" href="css/github-markdown.css">

  <!-- Replace below stylesheet with your own stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Prisim Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prisim/prisim.css">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="bootstrap-3.3.5/css/bootstrap.css">
  <!--<link rel="stylesheet" href="bootstrap-3.3.5/css/bootstrap-theme.css">-->

</head>
<body>
  <a href="#main" class="sg-visually-hidden sg-visually-hidden-focusable">Skip to main content</a>

  <div id="top" class="sg-header" role="banner">
    <div class="sg-container">
      <h1 class="sg-logo">
        <span class="sg-logo-initials"><em>SAD ONLINE</em> - GUIA DE ESTILO</span>
        <span class="sg-logo-full"><em>SAD ONLINE</em> - GUIA DE ESTILO</span>
      </h1>
      <button type="button" class="sg-nav-toggle">Menu</button>
    </div>
  </div><!--/.sg-header-->

  <div class="sg-wrapper sg-clearfix">
    <div id="nav" class="sg-sidebar" role="navigation">
      <h2 class="sg-h2 sg-subnav-title">Sobre</h2>
      <ul class="sg-nav-group">
        <!--<li>
          <a href="#sg-about">Introdução</a>
        </li>-->
        <li>
          <a href="#sg-colors">Cores</a>
        </li>
        <li>
          <a href="#sg-fontStacks">Fontes</a>
        </li>
      </ul>

      <?php listFilesInFolder('markup'); ?>
    </div><!--/.sg-sidebar-->

    <div id="main" class="sg-main" role="main">
      <div class="sg-container">
        <div class="sg-info">
          
          <!--<div class="sg-about sg-section">
            <h2 id="sg-about" class="sg-h2">Introdução</h2>
            <p>A living style guide is a great tool to promote visual consistency, unify UX designers and front-end developers, as well as speed up development times. Add some documentation here on how to get started with your new style guide and start customizing this boilerplate to your liking.</p>
            <p>If you are looking for resources on style guides, check out <a href="http://styleguides.io">styleguides.io</a>. There are a ton of great articles, books, podcasts, talks, and other style guide tools!</p>
          </div><!--/.sg-about-->

          <!-- Manually add your UI colors here. -->
          <div class="sg-colors sg-section">
            <h2 id="sg-colors" class="sg-h2">Cores</h2>
            <h3>Primárias</h3>
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #8b0000;"></div>
                <div class="sg-color-name">Castanho Avermelhado</div>
                <div><samp>#8b0000</samp></div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #cd0000;"></div>
                <div class="sg-color-name">Vermelho GM</div>
                <div><samp>#cd0000</samp></div>
              </div>              
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #cd5c5c;"></div>
                <div class="sg-color-name">Vermelho Indiano</div>
                <div><samp>#cd5c5c</samp></div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #f5f5f5;"></div>
                <div class="sg-color-name">Branco Fumaça</div>
                <div><samp>#f5f5f5</samp></div>
              </div>
            </div><!--/.sg-color-grid-->
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #c0c0c0;"></div>
                <div class="sg-color-name">Prata</div>
                <div><samp>#c0c0c0</samp></div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #111313;"></div>
                <div class="sg-color-name">Obsidiana</div>
                <div><samp>#111313</samp></div>
              </div>
            </div><!--/.sg-color-grid-->
            <h3>Secundárias</h3>
            <div class="sg-color-grid">
              <div class="sg-color">
                  <div class="sg-color-swatch" style="background-color: #697374;"></div>
                  <div class="sg-color-name">Concreto</div>
                  <div><samp>#697374</samp></div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #4682b4;"></div>
                <div class="sg-color-name">Azul Aço</div>
                <div><samp>#4682b4</samp></div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #ffffff;"></div>
                <div class="sg-color-name">Branco</div>
                <div><samp>#ffffff</samp></div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #000000;"></div>
                <div class="sg-color-name">Preto</div>
                <div><samp>#000000</samp></div>
              </div>
            </div><!--/.sg-color-grid-->
          </div><!--/.sg-colors-->

          <!-- Manually add your fonts here. -->
          <div class="sg-font-stacks sg-section">
            <h2 id="sg-fontStacks" class="sg-h2">Fontes</h2>
            <dl class="sg-font-list">
              <dt>Fonte Primária:</dt>
              <dd style='font-family: "Trebuchet MS", Helvetica, Arial, sans-serif;'>"Trebuchet MS", Helvetica, Arial, sans-serif;</dd>

              <dt>Fonte Primária em Itálico:</dt>
              <dd style='font-family: "Trebuchet MS", Helvetica, Arial, sans-serif; font-style: italic;'>"Trebuchet MS", Helvetica, Arial, sans-serif;</dd>

              <dt>Fonte Primária em Negrito:</dt>
              <dd style='font-family: "Trebuchet MS", Helvetica, Arial, sans-serif; font-weight: 800;'>"Trebuchet MS", Helvetica, Arial, sans-serif;</dd>

              <dt>Fonte Secundária:</dt>
              <dd style='font-family: Georgia, Times, "Times New Roman", serif;'>Georgia, Times, "Times New Roman", serif;</dd>

              <dt>Fonte Secundária em Itálico:</dt>
              <dd style='font-family: Georgia, Times, "Times New Roman", serif; font-style: italic;'>Georgia, Times, "Times New Roman", serif;</dd>

              <dt>Fonte Secundária em Negrito:</dt>
              <dd style='font-family: Georgia, Times, "Times New Roman", serif; font-weight: 800;'>Georgia, Times, "Times New Roman", serif;</dd>
            </dl>
            <div class="sg-markup-controls"><a class="sg-btn--top" href="#top">Voltar ao topo</a></div>
          </div><!--/.sg-font-stacks-->
        </div><!--/.sg-info-->

        <?php renderFilesInFolder('markup'); ?>
      </div><!--/.sg-container-->
    </div><!--/.sg-main-->
  </div><!--/.sg-wrapper-->

  <!--[if gt IE 8]><!--><script src="vendor/prisim/prisim.js"></script><!--<![endif]-->
  
  <script src="js/jquery-2.1.4.js"></script>
  <script src="js/sad.js"></script>    
  <script src="js/sg-scripts.js"></script>
  <script src="bootstrap-3.3.5/js/bootstrap.js"></script>

</body>
</html>

