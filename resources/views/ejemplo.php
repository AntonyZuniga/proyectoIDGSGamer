<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaampleKart</title>
</head>

<!-- css file -->
<link rel="stylesheet" href="../css/tienda.css">

 <!-- font awesome icon -->
 <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<body>
            <img src="/images/phone-icon3.png" alt="image" class="logo" id="logo">
            
                <a href="#" id="cart"><i class="	fas fa-cart-arrow-down"></i></a>

<!-- main section -->
<main id="main" >

<!-- all categories -->
<section class="categories">
    <div class="title-container">
        <h1 id="title">Latest Phones</h1>
        <button type="button" id="item-btn">View All</button>
    </div>
    <div class="card">
        <div class="item-container" id="0">
            <div class="card-item">
                <img src="/images/redmiK20.jpg" alt="img" id="card-img">
                <p id="item-name">Redmi K20 (Flame Red, 6GB RAM, 128GB Storage)</p>
            </div>
            <i class="fa fa-shopping-cart" id="add-to-cart"></i>
            <h3 id="item-price">Price : $ 190</h3>               
        </div>

        <div class="item-container" id="1">
            <div class="card-item" >
                <img src="/images/samGalaxynote20.jpg" alt="img" id="card-img">
                <p id="item-name">Samsung Galaxy Note 20 Ultra 5G</p>              
            </div>
            <i class="fa fa-shopping-cart" id="add-to-cart"></i>
            <h3 id="item-price">Price : $ 300</h3>
        </div>

        <div class="item-container" id="2">
            <div class="card-item" >
                <img src="/images/oppofindX2.jpg" alt="img" id="card-img">
                <p id="item-name">OPPO Find X2 (Ocean, 12GB RAM, 256GB Storage)</p>
            </div>
            <i class="fa fa-shopping-cart" id="add-to-cart"></i>
            <h3 id="item-price">Price : $ 240</h3>                
        </div>

        <div class="item-container" id="3">
            <div class="card-item">
                <img src="/images/realmeX20pro.jpg" alt="img" id="card-img">
                <p id="item-name">Realme X50 Pro (Moss Green, 12GB RAM, 256GB Storage)                </p>
            </div>
            <i class="fa fa-shopping-cart" id="add-to-cart"></i>
            <h3 id="item-price">Price : $ 285</h3>            
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
                <h2 id="detail-title">Samsung Galaxy</h2>
                <h4 id="detail-price">Price : Rs 9,999</h4>
                <p id="delievery"><strong>Delivery : </strong> In 3 - 4 days</p>
                <p id="spec"><strong>Specification :</strong>

                    <ul>
                        <li>13MP AI triple main camera + 2MP bokeh (depth of field) camera + 2MP macro camera with photo, video, professional mode panorama, portrait, time-lapse etc. | 16MP front punch hole camera</li>

                        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </li>

                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil maxime reiciendis laborum! Velit odit molestias architecto doloremque est sapiente. </li>
                    </ul>
                </p>
                <button id="carts">Add to Cart</button>
                <button id="buy">Back</button>
            </div>
        </div>
    </div>
</div>
<!-- end of page detail -->


<!-- cart list section -->
<div id="cart-container">
    <p id="cart-title">Your <strong>Cart</strong></p id="cart-title">
    <div id="empty-cart">
        <h1>Your Cart is Empty...</h1>
    </div>

    <div id="cart-with-items">
        <div class="cart-column">
            <h3>Product</h3>
            <h3>Product Name</h3>
            <h3>Total </h3>
            <h3>Quantity</h3>
            <h3>Remove</h3>
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
<script src="../js/tienda.js"></script>
</body>
</html>