<?php require_once '../php/authController.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDGSGamers</title>
    <link rel="shortcut icon" href="../img/logo.png" />
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/titulos.css">
    <link rel="stylesheet" href="../css/res.css">

    <link rel="stylesheet" media="all" href="../../public/ej.css" />

    <!----===== ICONOS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!----===== BOOTSTRAP ===== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">

    <!----===== SCRIPT ===== -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <a href="#" class="fas fa-arrow-alt-circle-up icon scroll-top" title="Ir arriba"></a>
    <!-- Background animtion-->
<div class="background">
       <div class="cube"></div>
       <div class="cube"></div>
       <div class="cube"></div>
       <div class="cube"></div>
      <div class="cube"></div>
    </div>
</head>

<body>

    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                <img src="../img/logo.png" alt="">
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
                        <a href="../../index.php">
                            <i class='fas fa-home icon'></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link xbox">
                        <a href="#">
                            <i class='fab fa-xbox icon'></i>
                            <span class="text nav-text">Xbox</span>
                        </a>
                    </li>

                    <li class="nav-link ps">
                        <a href="ps.php">
                            <i class='fab fa-playstation icon'></i>
                            <span class="text nav-text">Play Station</span>
                        </a>
                    </li>

                    <li class="nav-link pc">
                        <a href="pc.php">
                            <i class='fab fa-steam icon'></i>
                            <span class="text nav-text">PC</span>
                        </a>
                    </li>

                    <li class="nav-link nintendo">
                        <a href="nintendo.php">
                            <i class='fas fa-gamepad icon'></i>
                            <span class="text nav-text">Nintendo</span>
                        </a>
                    </li>

                    <li class="nav-link tienda">
                        <a href="tienda.php">
                            <i class='fas fa-shopping-cart icon'></i>
                            <span class="text nav-text">Tienda</span>
                        </a>
                    </li>


                </ul>
            </div>

            <div class="bottom-content">

                <li><a href="../views/info.php">
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
    <a href="#" class="fas fa-arrow-alt-circle-up icon scroll-top" title="Ir arriba"></a>
    <!-- Background animtion-->
<div class="background">
       <div class="cube"></div>
       <div class="cube"></div>
       <div class="cube"></div>
       <div class="cube"></div>
      <div class="cube"></div>
    </div>
<section class="home">

    <div class='recuadro' id="cero">
    <p class="t"><a href="">
    XBOX
  </a></p>
	</div>

    <div class='recuadro' id="uno">
    <p class="t7"><a href="">
    RESEÑA DE VIDEOJUEGOS
  </a></p>
	</div>
    <hr style="height:2px;border:none;color:#333;background-color:#333;">
    <div class='recuadro' id="dos" >
        <h1 class="tit">Halo Infinite</h1><br>
        <p class="tx">Halo Infinite la onceava entrega para consolas y la décima cuarta entrega en
         general de la saga, la cual conmemora 20 años del lanzamiento no solo de su primera entrega, sino también 
         de la primera Xbox, por lo que 343 Industries tuvo que demostrar todo su potencial para que esta nueva 
         entrega cumpliera con todas las expectativas de los fans; y bien ahora la pregunta es: ¿De verdad lo logro?
          Pues acompáñenme a descubrirlo.</p><br>
        <p class="tx">Comencemos hablando sobre la campaña de Halo Infinite, la cual no mentían a
         la hora de decir que es la campaña más grande de la franquicia hasta el momento y no solo por el tamaño 
         del mapa sino también por la trama, la cual continua los sucesos de Halo 5 por lo que he de aclarar que
          si es recomendable conocer la historia de las entregas anteriores sobre todo la de Halo 4 y 5. Halo 
          Infinite es el primer juego de la saga en ser de mundo abierto, por lo que pasemos a analizar que tan 
          bien implementado esta este apartado; para empezar, he de decir que el apartado grafico es estupendo 
          pues los detalles en cada área de interés en Zeta Halo son increíbles ya sea en una fortaleza de los 
          «Desterrados» o una de las ya conocidas torres de propaganda.
        </p><br>
        <p class="tx">En resumen podemos decir que Halo Infinite es un gran título que sin duda 
        alguna podrán disfrutar jugadores tanto veteranos así como los nuevos que recién empiezan, además claro 
        de contar con una campaña muy entretenida y dinámica la cual si bien comete un par de errores no deja de 
        ser interesante y sobre todo relevante para la saga, también quiero destacar su excelente trabajo.
        </p><br><br>
	</div>
    <div class='circulo' id="tres">
        <img src="../img/halo.jpg" class='imagen'><br><br><br>
        <p class="sub">Master Chief - Personaje Principal</p>
    </div>
                </hr>
                <hr style="height:2px;border:none;color:#333;background-color:#333;">
    <div class='recuadro' id="tres">

        <h1 class="tit">Gears Of War 5</h1><br>
        <p class="tx">Esta quinta entrega es el Gears of War más completo, más espectacular y más
         variado, y en ciertos aspectos también el más arriesgado desde la primera entrega, un festín de acción 
         épica y desenfrenada que va a enamorar a los fans de la serie, pero que tiene infinidad de argumentos 
         para satisfacer a cualquiera que disfrute pegando tiros en un buen videojuego.</p><br>
         <p class="tx">Con una jugabilidad sutilmente mejorada, que hace que sea simplemente 
         perfecta, y un espectáculo gráfico y sonoro de primera, podemos disfrutar de infinidad de contenidos, 
         todos de enorme calidad: una Campaña divertidísima y enorme, que puede durar más de 20 horas; un modo 
         Horda tan adictivo como siempre, pero con novedades importantes; un Multijugador más completo y con más 
         posibilidades que nunca, que ofrece infinidad de horas; y por último el original y desafiante modo 
         cooperativo Escape, en el que la comunidad puede crear sus propios mapas.</p><br>
        <p class="tx">Kait, la nueva protagonista, es un personaje complejo y con un interesante 
        trasfondo, tiene carisma, siendo su pasado uno de los pilares sobre los que se construye la historia de 
        Gears 5. Eso sí, está muy bien rodeada del resto de personajes habituales, a los que después de tantas 
        entregas ya les hemos cogido cariño, y que además en esta entrega cuentan con algunos diálogos muy 
        divertidos, en una aventura que como es habitual pasa del drama al humor con sorprendente naturalidad.
        </p>
        </p><br><br><br><br><br><br>
	</div>
    <div class='circulo' id="dos">
        <img src="../img/gears.jpg" class='imagen'>
    </div><br><br><br>
                </hr>
                <hr style="height:2px;border:none;color:#333;background-color:#333;">
    <div class='recuadro' id="dos">

        <h1 class="tit">Forza Horizon 5</h1><br>
        <p class="tx">Es el último lanzamiento de la saga para Xbox One, Xbox Series X|S y PC, 
        trasladando toda la emoción del festival Horizon a México, en una experiencia que resulta un auténtico 
        agasajo de principio a fin. Y es que quizá sea ese vínculo tan personal que tengo con los juegos de 
        carrera, o el hecho de que el escenario en esta ocasión es mi país, pero al jugar Forza Horizon 5 me 
        quedo con la sensación de que estamos ante uno de los mejores juegos de carreras de la historia, y sin 
        duda, ante una de las mejores entregas de la industria de los videojuegos de todo el 2021</p><br>
         <p class="tx">En Forza Horizon 5 estamos ante el mapa más extenso de la saga. Playground
          desarrolló de forma excepcional un amplio territorio totalmente inspirado en la geografía mexicana, 
          presentando una enorme variedad de entornos extremadamente exóticos e interesantes en los que uno pueda
           pasar las horas sin presentar el más ligero atisbo de aburrimiento.</p><br>
        <p class="tx">El tapiz de escenarios y fondos coloridos es probablemente el más hermoso 
        en la historia de los juegos de carrera. Quizá me está ganando un poco el amor que puedo profesar como 
        mexicano hacia mi país, sin embargo, no exagero al decir que estamos ante una entrega visualmente hermosa,
         con escenarios majestuosos que nos llenan la pupila con tonos y texturas que le dan una enorme belleza. 
         Un juego de carreras arcade que siempre se siente relajado, que no te abruma al encerrarte en algo que no
          quieres hacer y que te recompensa constantemente por lo que eliges jugar. Se ve hermoso, suena magnífico 
          y se siente como una experiencia placentera, recreativa y entretenida de principio a fin.
        </p><br><br><br>
	</div>
    <div class='circulo' id="tres">
        <img src="../img/forza.jpg" class='imagen'><br><br><br>
        <p class="sub">Forza Horizon 5 esta basado en México</p>
    </div>
                </hr>
            <hr style="height:2px;border:none;color:#333;background-color:#333;">
	<div class='recuadro' id="seis">
        <h1 style="text-align:center">COMENTARIOS</h1>
        <br>
        <?php $usuario=(!empty($_SESSION['Usuario'])) ? $_SESSION['Usuario'] : NULL;
                        if($usuario){
                        echo "
                            <div id='disqus_thread'></div>
                            <script>
        
                            (function() {
                            var d = document, s = d.createElement('script');
                            s.src = 'https://idgsgamers.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                            })();
                            </script>
                        ";
                        }else{
                        echo '
                            <h3 style="text-align:center">Debes iniciar sesion para dar tu reseñas</h3>
                            <br>
                            <a class="hfondo2" href="login.php">Iniciar Sesion</a>
                        ';
                        }
        ?>
    </div>
	
    <hr>
    <!--Waves Container-->
<div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
        </g>
        </svg>
        </div>
        <!--Waves end-->
        
        </div>
        <!--Header ends-->
        
        <!--Content starts-->
        <div class="content flex">


<footer class="footer-distributed">

        <div class="footer-left">
  
          <img class="logof" src="../img/logo.png" alt="">
  
          <p class="footer-links">
            <a href="../../index.php">Inicio</a>
            ·
            <a href="politica.php">Politica de Privacidad</a>
            
          </p>
  
          <p class="footer-company-name">IDGSGamers © 2022</p>
  
          <div class="footer-icons">
   
            <a class="tooltip" href="https://www.facebook.com/IDGSGamers-103492925755993"><span style="font-size: 15px; line-height: 23px;" class="tooltiptext">Facebook</span><i class='fab fa-facebook-square'></i></a>
            <a class="tooltip" href="https://twitter.com/IDGSGamers"><span style="font-size: 15px; line-height: 23px;" class="tooltiptext">Twitter</span><i class='fab fa-twitter'></i></i></a>
            <a class="tooltip" href="https://www.tiktok.com/@idgs_gamer?lang=es"><span style="font-size: 15px; line-height: 23px;" class="tooltiptext">Tik-Tok</span><i class='fab fa-tiktok'></i></i></a>
            <a class="tooltip" href="https://github.com/AntonyZuniga/IDGSGamers"><span style="font-size: 15px; line-height: 23px;" class="tooltiptext">GitHub</span><i class='fab fa-github'></i></i></a>
            <a class="tooltip" href="https://store.steampowered.com/?l=spanish"><span style="font-size: 15px; line-height: 23px;" class="tooltiptext">Steam</span><i class='fab fa-steam'></i></i></a>
  
          </div>
  
        </div>
  
        <div class="footer-right">
  
          <p>Contactanos</p>
  
          <form action="#" method="post">
  
                

            <input type="email" name="email" placeholder="<?php $usuario=(!empty($_SESSION['Usuario'])) ? $_SESSION['Usuario'] : NULL;
                    if($usuario){
                    echo 'Correo Electronico';
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
            include("../php/ac.php");
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

<script language="JavaScript" type="text/javascript" src="../js/arriba.js"></script>

<!-- Código de instalación Cliengo para antoniozigaluna@gmail.com --> 
<script type="text/javascript">(function () { 
    var ldk = document.createElement('script'); 
    ldk.type = 'text/javascript';
    ldk.async = true;
    ldk.src = '../js/chatbot.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ldk, s); })();
</script>

</body>

</html>