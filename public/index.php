<?php require_once '../resources/php/authController.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDGSGamers</title>
    <link rel="shortcut icon" href="../resources/img/logo.png" />
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../resources/css/navbar.css">
    <link rel="stylesheet" href="../resources/css/carrusel.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="../resources/css/index.css">
    
    <!----===== ICONOS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!----===== BOOTSTRAP ===== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">

    <!----===== SCRIPT ===== -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!----===== JS ===== -->
    <script src="../resources/js/index.js"></script>

</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                <img src="../resources/img/logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">IDGSGamers</span>
                    <span class="profession">amantes del gaming</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle boton'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box" style="display: none">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='fas fa-home icon'></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link xbox">
                        <a href="../resources/views/xbox.php">
                            <i class='fab fa-xbox icon'></i>
                            <span class="text nav-text">Xbox</span>
                        </a>
                    </li>

                    <li class="nav-link ps">
                        <a href="../resources/views/ps.php">
                            <i class='fab fa-playstation icon'></i>
                            <span class="text nav-text">Play Station</span>
                        </a>
                    </li>

                    <li class="nav-link pc">
                        <a href="../resources/views/pc.php">
                            <i class='fab fa-steam icon'></i>
                            <span class="text nav-text">PC</span>
                        </a>
                    </li>

                    <li class="nav-link nintendo">
                        <a href="../resources/views/nintendo.php">
                            <i class='fas fa-gamepad icon'></i>
                            <span class="text nav-text">Nintendo</span>
                        </a>
                    </li>

                    <li class="nav-link tienda">
                        <a href="../resources/views/tienda.php">
                            <i class='fas fa-shopping-cart icon'></i>
                            <span class="text nav-text">Tienda</span>
                        </a>
                    </li>


                </ul>
            </div>

            <div class="bottom-content">

                <li><a href="../resources/views/info.php">
                <i class='fas fa-user-circle icon'></i>
                <span class="text nav-text">


                <?php $usuario=(!empty($_SESSION['Usuario'])) ? $_SESSION['Usuario'] : NULL;
                    if($usuario){
                    echo $_SESSION['Usuario'];
                    }else{
                    echo 'Iniciar Sesion';
                    }
                ?>

                
                </span>
                </a></li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Modo Oscuro</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
    <a href="#" style="text-decoration:none;" class="fas fa-arrow-alt-circle-up icon scroll-top" title="Ir arriba"></a>

    <section class="home">
<br><br>
        <div class="titulo">
        <div class="titulo2">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" class="filterwrapper">
                <defs>
                    <svg id="glitchmask-r" width="100%" height="100%" viewbox="0 0 100 100" preserveAspectRatio="none">
                        <line class="top-r" x1="0" y1="0" x2="100%" y2="0"> </line>
                        <line class="bot-r" x1="0" y1="100%" x2="100%" y2="100%"></line>
                    </svg>
                    <svg id="glitchmask-g" width="100%" height="100%" viewbox="0 0 100 100" preserveAspectRatio="none">
                        <line class="top-g" x1="0" y1="0" x2="100%" y2="0"></line>
                        <line class="bot-g" x1="0" y1="100%" x2="100%" y2="100%"></line>
                    </svg>

                    <filter color-interpolation-filters="sRGB" id="filter" width="100%" heigth="100%" x="0" y="0">
                        <feFlood flood-color="black" result="black" />

                        <!-- red text start -->
                        <feFlood flood-color="red" result="REDTXT_FLOOD_10" />
                        <feComposite operator="in" in="REDTXT_FLOOD_10" in2="SourceAlpha" result="REDTXT_COMP_20" />
                        <feOffset in="SourceGraphic" dx="-2" dy="0" result="REDTXT_OFFSET_30" />
                        <feMerge result="REDTXT_MERGE_40">
                            <feMergeNode in="black" />
                            <feMergeNode in="REDTXT_COMP_20" />
                            <feMergeNode in="REDTXT_OFFSET_30" />
                        </feMerge>
                        <feImage preserveAspectRatio="none" id="mask-r" result="REDTXT_IMG_50" xlink:href="#glitchmask-r" />
                        <feComposite in2="REDTXT_IMG_50" in="REDTXT_MERGE_40" operator="out" result="REDTXT_COMP_60" />
                        <!-- red text end -->

                        <!-- green text start -->
                        <feFlood flood-color="limegreen" result="GREENTXT_FLOOD_10" />
                        <feComposite operator="in" in="GREENTXT_FLOOD_10" in2="SourceAlpha" result="GREENTXT_COMP_20" />
                        <feOffset in="SourceGraphic" dx="2" dy="0" result="GREENTXT_OFFSET_30" />
                        <feMerge result="GREENTXT_MERGE_40">
                            <feMergeNode in="black" />
                            <feMergeNode in="GREENTXT_COMP_20" />
                            <feMergeNode in="GREENTXT_OFFSET_30" />
                        </feMerge>
                        <feImage preserveAspectRatio="none" id="mask-g" result="GREENTXT_IMG_50" xlink:href="#glitchmask-g" />
                        <feComposite in2="GREENTXT_IMG_50" in="GREENTXT_MERGE_40" operator="out" result="GREENTXT_COMP_60" />
                        <!-- green text end -->

                        <feMerge result="MERGE_10">
                            <feMergeNode in="SourceGraphic" />
                            <feMergeNode in="REDTXT_COMP_60" />
                            <feMergeNode in="GREENTXT_COMP_60" />
                        </feMerge>
                    </filter>
                </defs>
            </svg>
                
                    <figure class="glitch-filter-example">
                    <svg class="glitch-filter-example__demo" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <text class="glitch-filter-example__filtered-text" y="50%" text-anchor="middle" x="50%" transform="translate(0 34)">IDGSG</text>
                        </svg>
                    </figure>
        </div>    
        </div>
        

        <div class="contenedor">
          <div class="slider-contenedor" >
              <section class="contenido-slider ">
                  <div>
                  <h1>Nintendo</h1>
                        <h2>La gran Nintendo, la compañía enfocada en consolas portátiles pisa fuerte con la Nintendo Switch, una consola 
                            que combina lo mejor de la sobremesa y la portabilidad, trayendo innovación a esta nueva generación.</h2>
                        <a class="hfondo" href="https://www.nintendo.com/es-mx/">Sitio Oficial</a>
                  </div>
                  <img src="../resources/img/juegos.jpg" alt="">
  
              </section>
              <section class="contenido-slider">
                  <div>
                  <h1>Xbox</h1>
                      <h2>Xbox la gran compañía verde es la competencia directa de Play Station, una consola potente siendo la
                           mejor en rendimiento de esta generación, es la consola con pocos exclusivos pero que son de calidad.</h2>
                      <a class="hfondo" href="https://www.xbox.com/es-MX">Sitio Oficial</a>
                  </div>
                  <img src="../resources/img/xbox.jpg" alt="">
  
              </section>
                <section class="contenido-slider">
              <div>
                <h1>Play Station</h1>
                  <h2>Play Station es una consola de videojuegos enfocada en los jugadores con un diseño impresionante que 
                    cumple con lo que promete, ser un juego de sobremesa con exclusivos únicos.</h2>
                  <a class="hfondo" href="https://www.playstation.com/es-mx/">Sitio Oficial</a>
              </div>
              <img src="../resources/img/ps.jpg" alt="">
  
          </section>
          <section class="contenido-slider">
              <div>
              <h1>PC</h1>
                  <h2>Si lo tuyo no son las consolas, la PC es tu mejor opción, siendo una de las mejores herramientas versátiles 
                      y con buena potencia en base a sus componentes, teniendo disponibilidad de muchos videojuegos.</h2>
                  <a class="hfondo" href="https://store.steampowered.com/?l=spanish">Sitio Oficial</a>
              </div>
              <img src="../resources/img/pc.jpg" alt="">
  
                </section>
                    <section class="contenido-slider">
            <div>
                    <h1>Nintendo</h1>
                <h2>La gran Nintendo, la compañía enfocada en consolas portátiles pisa fuerte con la Nintendo Switch, una consola 
                    que combina lo mejor de la sobremesa y la portabilidad, trayendo innovación a esta nueva generación.</h2>
                <a class="hfondo" href="https://www.nintendo.com/es-mx/">Sitio Oficial</a>
            </div>
            <img src="../resources/img/juegos.jpg" alt="">

        </section>
            </div>
      </div>
      <script src="../resources/js/carrusel.js"></script>
<br><br><br><br><br><br>
<hr/>
<footer class="footer-distributed">

        <div class="footer-left">
  
          <img class="logof" src="../resources/img/logo.png" alt="">
  
          <p class="footer-links">
            <a href="#">Inicio </a>
            ·
            <a href="../resources/views/politica.php">Politica de Privacidad</a>
            
          </p>
  
          <p class="footer-company-name">IDGSGamers © 2022</p>
  
          <div class="footer-icons">
  
            <a class="tooltip" href="https://www.facebook.com/IDGSGamers-103492925755993"><span style="font-size: 15px; line-height: 23px;" class="tooltiptext">Facebook</span><i class='fab fa-facebook-square'></i></a>
            <a class="tooltip" href="https://twitter.com/IDGSGamers"><span style="font-size: 15px; line-height: 23px;" class="tooltiptext">Twitter</span><i class='fab fa-twitter'></i></i></a>
            <a class="tooltip" href="https://github.com/AntonyZuniga/IDGSGamers"><span style="font-size: 15px; line-height: 23px;" class="tooltiptext">GitHub</span><i class='fab fa-github'></i></i></a>
            <a class="tooltip" href="https://store.steampowered.com/?l=spanish"><span style="font-size: 15px; line-height: 23px;" class="tooltiptext">Steam</span><i class='fab fa-steam'></i></i></a>
  
          </div>
  
        </div>
  
        <div class="footer-right">
  
          <p>Contactanos</p>
  
          <form action="#" method="post">
  
                

            <input type="email" name="email" placeholder="<?php $usuario=(!empty($_SESSION['Usuario'])) ? $_SESSION['Usuario'] : NULL;
                    if($usuario){
                    echo '';
                    }else{
                    echo 'Correo Electronico';
                    }
                ?>"
                
                value="<?php $usuario=(!empty($_SESSION['Usuario'])) ? $_SESSION['Usuario'] : NULL;
                    if($usuario){
                        echo $_SESSION['Correo'];
                    }else{
                    echo '';
                    }
                ?>"
                >
            </input>
            <textarea name="message" placeholder="Mensaje"></textarea>
            <button type="submit" name="register">Enviar</button>
          </form><br><br>
            <?php 
            include("../resources/php/ac.php");
            ?>
            
  
        </div>
  
 </footer>
    </section>
    

    

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Modo Luz";
    }else{
        modeText.innerText = "Modo Oscuro";
        
    }
});
    </script>
    
<script language="JavaScript" type="text/javascript" src="../resources/js/arriba.js"></script>

</body>

</html>
