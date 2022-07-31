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
                        <a href="#">
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
    
    <section class="home">

    <div class='recuadro' id="cero">
    <p class="t2"><a href="">
    PLAY STATION
  </a></p>
	</div>

    <div class='recuadro' id="uno">
    <p class="t7"><a href="">
    RESEÑA DE VIDEOJUEGOS
  </a></p><br>
	</div>
    
    <hr style="height:5px;border:none;color:#333;background-color:#333;">
<div class='recuadro' id="dos">
        <h1 class="tit">Horizon zero down: Forbidden West</h1><br>
        <p class="tx">El mundo de Horizon Zero Dawn era increíblemente hermoso y con el 
        poder de la PS5, Forbidden West es aún más hermoso. Con la PS5, también tienes la opción de jugar
         en hermosos gráficos 4K a 30FPS o jugar a una resolución ligeramente más baja a 60FPS. Se pueden
          ver las diferencias entre estos dos modos, pero el modo 60FPS todavía se ve ridículamente hermoso. 
          Aloy mismo se ve muy bien diseñado. Quizás la mayor diferencia entre su personaje de Forbidden West 
          y Zero Dawn es cómo se peina el cabello de Aloy. Se ha pensado en cada pequeño detalle, haciendo que
           Aloy parezca casi real.</p><br>
        <p class="tx">La jugabilidad de Forbidden West es bastante reconocible para las personas 
        que están familiarizadas con Zero Dawn. Al comienzo del juego, tienes acceso a tu arco y flecha y puedes
         colocar trampas, pero también lanzar bloques de hielo. Estas son todas las cosas que salen de Zero Dawn,
          y pronto tendrás acceso a estas armas. El hecho de que tengas acceso rápido a estas armas es bueno, 
          porque mi temor era que tenías que comenzar prácticamente desde 0 en Forbidden West.
        </p><br>
        <p class="tx">Horizon Forbidden West es otro jonrón para Playstation. El juego es una
         mejora respecto a Horizon Zero Dawn en todos los sentidos y nos aporta mucho más. El mundo se siente 
         vivo, se ve genial, las misiones secundarias se sienten parte de la historia completa y también vale 
         la pena jugar la historia completa.
        </p><br><br><br>
	</div>
    <div class='circulo2' id="tres">
        <img src="../img/hori.jpg" class='imagen'>
    </div>
    
    <hr style="height:2px; border:none; color:#333; background-color:#333;">
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

                </hr>
                <hr style="height:5px;border:none;color:#333;background-color:#333;">
    <div class='recuadro' id="tres">
        <h1 class="tit">Spider-Man: Miles Morales</h1><br>
        <p class="tx">El videojuego Marvel's Spider-Man ofrece un sistema de mundo abierto en el
         que, tomando el control de Spidey, podremos circular a toda velocidad por las calles de Nueva York, 
         haciéndonos vale de las telas de araña propias del superhéroe. </p><br>
        <p class="tx">Debido a su metodología de mundo abierto tenemos cierta libertad a la hora
         de realizar misiones; tanto las que complementan la historia principal como las numerosas tareas 
         secundarias que incrementan la vida del título. Todo ello mediante una historia interesante, a la altura
          del personaje, en la que no falta una buena dosis de humor.
        </p><br>
        <p class="tx">El sistema de combate resulta además bastante dinámico, guardando 
        semejanzas con el visto en la saga Batman Arkham. Spider-Man tiene más versatilidad a la hora de poder 
        utilizar objetos del entorno para acabar con los enemigos.
        </p><br>
        <p class="tx">La historia es un punto fuerte de este juego, como se representa la 
        responsabilidad de ser spider-Man y como se plasma la frase de que cuando Spider-Man gana, Peter Parker
         pierde es sublime, un juego realmente recomendado.
        </p><br><br><br><br><br><br>
	</div>
    <div class='circulo2' id="dos">
        <img src="../img/spider.jpg" class='imagen'>
    </div>

    <hr style="height:2px; border:none; color:#333; background-color:#333;">
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

                </hr>
                <hr style="height:5px;border:none;color:#333;background-color:#333;">
    <div class='recuadro' id="dos">
        <h1 class="tit">Ratchet & Clank: rift Apart</h1><br>
        <p class="tx">Todo detalle del juego ha sido pulido hasta su máxima expresión, incluido el
         desempeño del juego en la consola. En toda nuestra experiencia no hemos experimentado una sola pantalla
          de carga, ni siquiera cuando estas saltando entre dimensiones en tiempo real, en verdad este es un logro
           que nos deja con la quijada en el suelo.</p><br>
        <p class="tx">El combate y las armas que el juego te da para jugar son tremendamente 
        divertidas, existe de todo en tu arsenal. Desde una clásica pistola o escopeta, hasta granadas que 
        invocan a un hongo que será tu compañero de combate por unos minutos o una pistola que electrocuta a 
        tus enemigos, acompañada por supuesto de excelentes animaciones en las que le ves hasta los huesos a tus 
        enemigos. Cada instante dentro de Ratchet & Clank: Rift Apart se siente como estar habitando una película
         de Pixar en tiempo real. Este sentimiento es reforzado por las transiciones completamente naturales 
         entre los cinemáticos y la jugabilidad.
        </p><br>
        <p class="tx">Tu misión intergaláctica te llevará a visitar varios planetas donde tendrás
         que cumplir algún objetivo principal, pero en todos ellos siempre hay uno o más objetivos secundarios 
         que personalmente siempre completamos con mucho gusto. Cada instante con Ratchet & Clank: Rift Apart es 
         un verdadero gozo y cualquier excusa que tengamos para pasar más tiempo con este juego es una que vamos 
         a usar con gusto.
        </p><br><br><br><br><br><br>
	</div>
    <div class='circulo2' id="tres">
        <img src="../img/ratchet.jpg" class='imagen'>
    </div>

    <hr style="height:2px; border:none; color:#333; background-color:#333;">
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

                </hr>
                <hr style="height:5px;border:none;color:#333;background-color:#333;">
    <div class='recuadro' id="tres">
        <h1 class="tit">Demon Souls</h1><br>
        <p class="tx">Lo interesante de este remake es que respetaron la estructura del diseño de
         niveles, pero con visuales de nueva generación. Puedes decidir jugar a 60 cuadros o a 30 con una mayor 
         carga en los detalles, aunque a título personal, son casi imperceptibles.</p><br>
        <p class="tx">La jugabilidad ha sido respetada de igual forma y solo tendremos que
         ocuparnos en descifrar como eliminar a los enemigos, ya que cada uno de ellos tiene una particularidad, 
         si a esto le sumamos que muchos salen de sorpresa, le da un valor agregado. No obstante, los enemigos 
         principales requieres de pericia, ya que cada uno tiene su propia forma de vencerlo.
        </p><br>
        <p class="tx">Es importante tener en cuenta que Demons Souls puede llegar a ser frustrante
         para quienes están acostumbrados a los avances rápidos y puntos para salvar cercanos. Esta versión re 
         imaginada de Demons Souls, ha puesto un precedente de lo que increíble que puede llegar a ser uno de 
         estos juegos a nivel visual. Sin duda es el mejor juego de lanzamiento de la PS5 en términos visuales a 
         pesar de ser un remake
        </p><br><br><br><br><br><br>
	</div>
    <div class='circulo2' id="dos">
        <img src="../img/demon.jpg" class='imagen'>
    </div>

    <hr style="height:2px; border:none; color:#333; background-color:#333;">
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
    <hr style="height:5px; border:none; color:#333; background-color:#333;">
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