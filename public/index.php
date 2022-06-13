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
    
    <!----===== ICONOS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!----===== BOOTSTRAP ===== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">

    <!----===== SCRIPT ===== -->


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

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
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

                    <li class="nav-link">
                        <a href="#">
                            <i class='fab fa-xbox icon'></i>
                            <span class="text nav-text">Xbox</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='fab fa-playstation icon'></i>
                            <span class="text nav-text">Play Station</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='fab fa-steam icon'></i>
                            <span class="text nav-text">PC</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='fas fa-gamepad icon'></i>
                            <span class="text nav-text">Nintendo</span>
                        </a>
                    </li>


                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="../resources/views/login.php">
                        <i class='fas fa-user-circle icon'></i>
                        <span class="text nav-text">Iniciar Sesion</span>
                    </a>
                </li>

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

    <section class="home">

        <div class="contenedor">
          <div class="slider-contenedor">
              <section class="contenido-slider">
                  <div>
                      <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ipsa ipsam aliquam natus quidem
                          sed. Quos cupiditate id delectus est.</h2>
                      <a href="#">Contact us</a>
                  </div>
                  <img src="../resources/img/juegos.jpg" alt="">
  
              </section>
              <section class="contenido-slider">
                  <div>
                      <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ipsa ipsam aliquam natus quidem
                          sed. Quos cupiditate id delectus est.</h2>
                      <a href="#">Contact us</a>
                  </div>
                  <img src="../resources/img/xbox.jpg" alt="">
  
              </section>
          <section class="contenido-slider">
              <div>
                <h1>Play Station</h1>
                  <h2>PlayStation es una consola de videojuegos enfocada en los jugadores con un diseño impresionante que 
                    cumple con lo que promete, ser un juego de sobremesa con exclusivos únicos.</h2>
                  <a href="https://www.playstation.com/es-mx/">Sitio Oficial</a>
              </div>
              <img src="../resources/img/ps.jpg" alt="">
  
          </section>
          <section class="contenido-slider">
              <div>
                  <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ipsa ipsam aliquam natus quidem
                      sed. Quos cupiditate id delectus est.</h2>
                  <a href="#">Contact us</a>
              </div>
              <img src="../resources/img/pc.jpg" alt="">
  
          </section>
          <section class="contenido-slider">
            <div>
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ipsa ipsam aliquam natus quidem
                    sed. Quos cupiditate id delectus est.</h2>
                <a href="#">Contact us</a>
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
            <a href="index.php">Inicio</a>
            ·
            <a href="#">Nosotros</a>
            ·
            <a href="#">Acerca de la página</a>
            
          </p>
  
          <p class="footer-company-name">IDGSGamers © 2022</p>
  
          <div class="footer-icons">
  
            <a href="#"><i class='fab fa-facebook-square'></i></a>
            <a href="#"><i class='fab fa-twitter'></i></i></a>
            <a href="#"><i class='fab fa-github'></i></i></a>
            <a href="#"><i class='fab fa-steam'></i></i></a>
  
          </div>
  
        </div>
  
        <div class="footer-right">
  
          <p>Contactanos</p>
  
          <form action="#" method="post">
  
            <input type="text" name="email" placeholder="Correo Electrónico">
            <textarea name="message" placeholder="Mensaje"></textarea>
            <button>Enviar</button>
  
          </form>
  
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
</body>

</html>
