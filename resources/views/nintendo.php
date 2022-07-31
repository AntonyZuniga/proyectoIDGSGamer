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

    <!----===== ICONOS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!----===== BOOTSTRAP ===== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">

    <!----===== SCRIPT ===== -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


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

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box" style="display: none">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="../../public/index.php">
                            <i class='fas fa-home icon'></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link xbox">
                        <a href="xbox.php">
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
                        <a href="#">
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

    <section class="home">

    <div class='recuadro' id="cero">
        <p class="t4"><a href="">
        NINTENDO
        </a></p>
	</div>  
    <div class='recuadro' id="uno">
    <p class="t7"><a href="">
    RESEÑA DE VIDEOJUEGOS
  </a></p>
	</div>
    <hr style="height:5px;border:none;color:#333;background-color:#333;">
    <div class='recuadro' id="dos" >
        <h1 class="tit">Zelda Breath of the Wild</h1><br>
        <p class="tx">La principal característica de Breath of the Wild es el gigantesco mapa que tiene, cosa especialmente destacable por ser el primer juego de mundo abierto de Nintendo. 
        Deberás descubrir hasta quince regiones, superar los retos de los ciento veinte santuarios, salvar los cuatro poblados de la furia de sus bestias divinas y liberar el espíritu de los cinco amigos de Link. 
        Además, tendrás cientos de misiones secundarias para resolver por el camino, personajes por conocer y ayudar, y recovecos que explorar para conseguir completar el juego al cien por cien.
        The Legend of Zelda: Breath of the Wild es un juego con PEGI +12 debido a que es un juego en el que se lucha con armas contra animales, bestias y otros humanos. Aun así, según mi opinión personal, es un juego bastante decente para todos los públicos.</p><br>
        <p class="tx">The Legend of Zelda es una mezcla de puzles, acción, estrategia y exploración. Estos elementos se han mantenido a lo largo de la saga, pero con mejoras en cada juego. La mayoría de los juegos de The Legend of Zelda implican la localización y exploración de mazmorras, en los que se resuelven puzzles y derrotan enemigos. Luego de pasar toda la mazmorra, se lucha con el enemigo final de la mazmorra. Cada mazmorra tiene un objeto o arma importante, para llegar hasta el jefe de la mazmorra. Algunos objetos se encuentran en casi toda la saga (como por ejemplo, el Bumerán), mientras que otros son exclusivos de un solo juego (como el Telescarabajo).
        </p><br>
        <p class="tx">The Legend of Zelda: Breath of the Wild es un videojuego de acción-aventura de 2017 de la serie The Legend of Zelda, desarrollado por la filial Nintendo EPD en colaboración con Monolith Soft y publicado por Nintendo para las consolas Wii U y Nintendo Switch
        </p><br><br><br><br>
	</div>
    <div class='circulo3' id="tres">
        <img src="../img/Zelda.jpg" class='imagen'><br><br><br><br><br>
        <p class="sub">Ganador al premio de mejor juego del 2017</p>
        </div>
                </hr>
                <hr style="height:5px;border:none;color:#333;background-color:#333;">
    <div class='recuadro' id="tres">
        <h1 class="tit">Mario Kart 8 Deluxe</h1><br>
        <p class="tx">Mario Kart 8 Deluxe es un juego de carreras en el que participan muchos de los personajes de la serie de Super Mario, con algunos personajes invitados, como Link de The Legend of Zelda y Villager de Animal Crossing. El título permite al jugador participar en distintas copas a lo largo de múltiples circuitos en el mundo de la mascota de Nintendo utilizando items para avanzar y hacer daño a los demás competidores, además de desafiar las leyes de la gravedad con pistas que nos ponen de cabeza.
        Del lado visual, Mario Kart 8 Deluxe luce espectacular, llegando a los 1080p cuando se encuentra en el dock del Nintendo Siwtch y corriendo a unos muy estables 60 cuadros por segundo cuando se juega de uno a dos jugadores. </p><br>
        <p class="tx">Mario Kart 8 Deluxe es un juego asombroso que pule muchos de los aspectos de su versión original de 2014. </p><br>
        <p class="tx">Mario Kart 8 Deluxe no defrauda en cuanto a lo que representa a su juego y a todo nintendo, sin duda, un juego que debes de tener junto a tu Nintendo Switch </p><br>
</p><br><br><br><br><br><br>
	</div>
    <div class='circulo3' id="dos">
        <img src="../img/Mario.PNG" class='imagen'>
    </div>
                </hr>
                <hr style="height:5px;border:none;color:#333;background-color:#333;">
    <div class='recuadro' id="dos">

        <h1 class="tit">Splatoon 2</h1><br>
        <p class="tx">Es un juego de disparos en tercera persona, 
        centrado principalmente en el cooperativo multijugador online, 
        aunque tiene también un modo historia para un jugador, pero que es totalmente secundaria. 
        La esencia jugable es la de un shooter, con la particularidad de que disparamos pintura, 
        pudiendo sumergirnos en ella y teniendo que hacerlo para recargar "munición" 
        y pudiendo usarla para escalar por determinadas superficies, entre otras cosas.
        Splatoon 2 ofrece varios modos de juego que vamos a ir comentando individualmente. </p><br>
        <p class="tx">El primero es el modo para un jugador, en el que recorreremos cinco mundos, 
        presididos por un jefe final y con diferentes fases en cada uno, mientras descubrimos una sencilla historia que sirve como excusa para animarnos a avanzar. 
        Para los que jugaron al primero tiene algunos guiños que se agradecen bastante y que nos sacan una sonrisa.</p><br>
         <p class="tx">La principal novedad de este título es la inclusión del modo Salmon Run, una especie de modo horda para hasta cuatro jugadores (aunque podemos jugar también en solitario, si no hubiese nadie online). En este modo tenemos que derrotar a los enemigos que llegan en oleada, recoger su caviar, y en el caso de los enemigos más complicados, recoger los alevines dorados que sueltan para depositarlos en una especie de cesta en un lugar concreto del escenario. Esto, además, abre la puerta a nuevas recompensas especiales para nuestro personaje.
Como pasa con otros muchos juegos, si Splatoon no te gustó, Splatoon 2 no te va a hacer cambiar de opinión. Si lo disfrutaste, su secuela te va a dar muchas más horas de diversión, a pesar de la escasa evolución que supone más allá del modo Salmon Run y el obligatorio nuevo contenido.
        </p><br>
	</div>
    <div class='circulo3' id="tres">
        <img src="../img/platano.jpg" class='imagen'><br><br><br><br>
        <p class="sub">Un juego que promete mucho, pero no cumple.</p>
    </div>
                </hr>
                <hr style="height:5px;border:none;color:#333;background-color:#333;">
                </div> 
    <hr>
	<div class='recuadro' id="dos">
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
	<div class='recuadro' id="tres">
    <h1 style="text-align:center">SITIOS OFICIALES</h1>


	</div>
        
<hr/>
<footer class="footer-distributed">

        <div class="footer-left">
  
          <img class="logof" src="../img/logo.png" alt="">
  
          <p class="footer-links">
            <a href="../../public/index.php">Inicio</a>
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

</body>

</html>