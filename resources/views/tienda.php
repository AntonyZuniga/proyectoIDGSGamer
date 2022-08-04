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
    <link rel="stylesheet" href="../css/tienda.css">

    <link rel="stylesheet" media="all" href="../../public/ej.css" />
    
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
                        <a href="nintendo.php">
                            <i class='fas fa-gamepad icon'></i>
                            <span class="text nav-text">Nintendo</span>
                        </a>
                    </li>

                    <li class="nav-link tienda">
                        <a href="#">
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
    <p class="t5"><a href="">
    TIENDA
  </a></p>
	</div>

    


    <div class='recuadro' id="uno">

    <?php $usuario=(!empty($_SESSION['Usuario'])) ? $_SESSION['Usuario'] : NULL;
                    if($usuario){
                    echo '
                    
                    <!-- main section -->
                    <main id="main" >
                    
                    <!-- all categories -->
                    <section class="categories">
                        <div class="title-container">
                            <h1 id="title">CATALOGO</h1>
                            <button class="fas fa-cart-arrow-down icon boton" type="button" id="cart">  CARRITO</button>
                        </div>
                        <div class="card">
                            <div class="item-container" id="0">
                                <div class="card-item">
                                    <img src="../img/fh.png" alt="img" id="card-img">
                                    <p id="item-name">FORZA Horizon</p>
                                </div>
                                <i class="fa fa-shopping-cart" id="add-to-cart"></i>
                                <h3 id="item-price">Precio : $ 1299</h3>               
                            </div>
                    
                            <div class="item-container" id="1">
                                <div class="card-item" >
                                    <img src="../img/sm.png" alt="img" id="card-img">
                                    <p id="item-name">Spiderman</p>              
                                </div>
                                <i class="fa fa-shopping-cart" id="add-to-cart"></i>
                                <h3 id="item-price">Precio : $ 1499</h3>
                            </div>
                    
                            <div class="item-container" id="2">
                                <div class="card-item" >
                                    <img src="../img/lol.png" alt="img" id="card-img">
                                    <p id="item-name">League of Legends</p>
                                </div>
                                <i class="fa fa-shopping-cart" id="add-to-cart"></i>
                                <h3 id="item-price">Precio : $ 0.1</h3>                
                            </div>
                    
                            <div class="item-container" id="3">
                                <div class="card-item">
                                    <img src="../img/mo.png" alt="img" id="card-img">
                                    <p id="item-name">Super Mario Oddisey                </p>
                                </div>
                                <i class="fa fa-shopping-cart" id="add-to-cart"></i>
                                <h3 id="item-price">Precio : $ 899</h3>            
                            </div>
                        </div>
                    </section>
                    
                    
                    </main>
                    <!-- end of main -->
                    <!-- details page section -->
                    <div id="details-page">
                        <div class="details">
                            <div class="items-detail">
                                <div class="image-container">
                                    
                                    <img src="/images/redmiK20.jpg" alt="" id="details-img">
                                </div>
                                <div class="details-card">
                                    <h2 id="detail-title"></h2>
                                    <h4 id="detail-price"></h4>
                                    <p id="spec"><strong><hr><br>Información :</strong>
                    
                                        <ul id="detail-info">
                                            </ul>
                                    </p>
                                    <button id="carts">Añadir al carrito</button>
                                    <button id="buy">Regresar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of page detail -->
                        <!-- cart list section -->
                    <div id="cart-container">
                        
                    <button style="position: absolute;right: 3%; padding:10px 0px 10px 0px;" class="fas fa-cart-arrow-down icon boton" type="button" id="logo">  REGRESAR</button>
                        <p id="cart-title">Tu <strong>Carrito</strong></p id="cart-title">
                        <div id="empty-cart">
                            <h1>Tu carrito esta vacio...</h1>
                        </div>
                    
                        <div id="cart-with-items">
                            <div class="cart-column">
                                <h3>Producto</h3>
                                <h3>Nombre del producto</h3>
                                <h3>Total </h3>
                                <h3>Cantidad</h3>
                                <h3>Eliminar</h3>
                            </div>
                            <div id="item-body">
                            </div>
                            <div id="total">
                                <h3 id="total-items"></h3>
                                <h2 id="total-amount"></h2>
                                <h3 id="you-saved"></h3>
                            </div>
                        </div>
                    </div>
                        </div>
                        
                        ';
                    }else{
                    echo 'Debes iniciar sesion para ver el catalogo de VideoJuegos!';
                    }
                ?>
      </div>  
                

	<br><br><br><br><br><br><br><br>
    <hr>
    


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
<script src="../js/tienda.js"></script>

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