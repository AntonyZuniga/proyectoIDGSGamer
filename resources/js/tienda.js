const data= [
    {
        id : 0,
        img : '../img/fh.png',
        name : 'FORZA Horizon',
        price : 1299,
        delievery : 'In 3 - 4 days',
        info : '<br> Forza Horizon 5 es la quinta parte de la saga de conducción en mundo abierto de Microsoft y PlayGround Games. Trasladándonos a un enorme mapeado que recrea Reino Unido casi en su totalidad, la nueva entrega apuesta por incluir más coches, más eventos y competiciones, mejorar los gráficos y ofrecer un sistema de estaciones en tiempo real que nos ofrece la posibilidad de pilotar en verano, otoño, invierno y primavera. Está disponible en Xbox One. <br><br><hr>',
        itemInCart: false
    },
    {
        id : 1,
        img : '../img/sm.png',
        name : 'Spiderman',
        price : 1499,
        delievery : 'In 3 - 4 days',
        info : '<br> Spider-Man para PS4 es un videojuego de acción y aventuras con un estilo jugable de mundo abierto, que permite al jugador desplazarse de un lugar a otro con total libertad de movimientos y que tiene por escenario donde de desarrolla la historia, la ciudad de Nueva York. El juego está desarrollado por Imsomniac Games, creadores de juegos como Spyro, Ratchet & Clank o Sunset Overdrive, entre otros y además está producido por Sony como videojuego exclusivo de PlayStation 4. <br><br><hr>',
        itemInCart: false
    },
    {
        id : 2,
        img : '../img/lol.png',
        name : 'League of Legends',
        price : 0.1,
        delievery : 'In 3 - 4 days',
        info : '<br>  League of Legends es un juego de estrategia por equipos en el que dos equipos de cinco campeones se enfrentan para ver quién destruye antes la base del otro. Elige de entre un elenco de 140 campeones para realizar jugadas épicas, asesinar rivales y derribar torretas para alzarte con la victoria.<br><br><hr>',
        itemInCart: false
    },
    {
        id : 3,
        img : '../img/mo.png',
        name : 'Super Mario Oddisey',
        price : 899,
        delievery : 'In 3 - 4 days',
        info : '<br> Super Mario Odyssey es un videojuego desarrollado, producido y distribuido por Nintendo exclusivamente para su nueva videoconsola, Nintendo Switch. <br><br> Mario regresa a los videojuegos con su primer gran título para Nintendo Switch. En esta ocasión lo hace con un juego en 3D de mundo abierto que recuerda en estética y jugabilidad a lo visto en Super Mario 64 o los juegos de la serie en Game Cube, pero que además incluye una gran cantidad de novedades, los mejores gráficos de la saga e interesantes mecánicas jugables como la gorra, la cual tendrá un gran protagonismo y ofrecerá diversas funcionalidades como ayudarnos a recorrer el escenario o la capacidad de controlar a los enemigos, obteniendo así increíbles y variadas habilidades. <br><br><hr>',
        itemInCart: false
    },
    
];

let cartList=[]; //array to store cart lists

var i;
var detail =document.getElementsByClassName('card-item');
var detailsImg = document.getElementById('details-img')
var detailTitle = document.getElementById('detail-title')
var detailPrice = document.getElementById('detail-price')
var detailsPage = document.getElementById('details-page');

var detailInfo = document.getElementById('detail-info')

var back = document.getElementById('buy')
back.addEventListener('click',refreshPage)
var addToCarts = document.querySelectorAll('#add-to-cart')
var cart = document.getElementById('cart');

// click event to display cart page
cart.addEventListener('click',displayCart)

var carts = document.getElementById('carts');

//click events to add items to cart from details page
carts.addEventListener('click',()=>addToCart(getId))

var home = document.getElementById('logo');

//click event to hide cart page and return to home page
home.addEventListener('click',hideCart);

//events on dynamically created element to remove items from list
document.addEventListener('click',function (e){
    if(e.target.id=='remove'){
        var itemId = e.target.parentNode.id
        removeFromCart(itemId)
    }
})


//click event to display details page
for(i=0;i<data.length;i++){
    detail[i].addEventListener('click',handleDetail)
}

var getId;

//click events to add items to cart from home page cart icon
addToCarts.forEach(val=>val.addEventListener('click',()=>addToCart(val.parentNode.id)));

// details function
function handleDetail(e){
    detailsPage.style.display = 'block'
    getId= this.parentNode.id;
    detailsImg.src= data[getId].img;
    detailTitle.innerHTML=   data[getId].name;
    detailInfo.innerHTML= data[getId].info;
    detailPrice.innerHTML= 'Precio : $ ' +data[getId].price;
}

// add item to the cart
function addToCart(id) {
    if(!data[id].itemInCart){
        cartList= [...cartList,data[id]];
        addItem()
        
        alert('Producto añadido al carrito')

    }
    else{
        alert('Ya esta añadido el producto al carrito')
    }
    data[id].itemInCart= true
}

//back to main page
function refreshPage(){
    detailsPage.style.display = 'none'
}

// hide your cart page
function hideCart(){
    document.getElementById('main').style.display= "block";
    document.getElementById('cart-container').style.display= "none";
}

//display your cart page
function displayCart(){
    document.getElementById('main').style.display= "none";
    document.getElementById('details-page').style.display= "none";
    document.getElementById('cart-container').style.display= "block";
    if(cartList.length==0){
        document.getElementById('cart-with-items').style.display= "none";
        document.getElementById('empty-cart').style.display= "block";
    }
    else{
        document.getElementById('empty-cart').style.display= "none";
        document.getElementById('cart-with-items').style.display= "block";
        
    }
}

var totalAmount;
var totalItems;
var totalSaving;

//add item to the cart
function addItem(){
    totalAmount=0;
    totalItems = 0;
    totalSaving=0
    var clrNode=document.getElementById('item-body');
        clrNode.innerHTML= '';
        console.log(clrNode.childNodes)
        cartList.map((cart)=>
        {
            var cartCont = document.getElementById('item-body');
            totalAmount = totalAmount + cart.price;
            totalItems = totalItems + 1;

            var tempCart = document.createElement('div')
            tempCart.setAttribute('class','cart-list');
            tempCart.setAttribute('id',cart.id);

            var listImg = document.createElement('img');
            listImg.setAttribute('id','list-img');
            listImg.src = cart.img
            tempCart.appendChild(listImg)

            var listName = document.createElement('h3');
            listName.setAttribute('class','list-name');
            listName.innerHTML = cart.name;
            tempCart.appendChild(listName)

            var listPay = document.createElement('h3');
            listPay.setAttribute('class','pay');
            listPay.innerHTML = cart.price;
            tempCart.appendChild(listPay);

            var listQuantity = document.createElement('h3');
            listQuantity.setAttribute('class','quantity');
            listQuantity.innerHTML = '1';
            tempCart.appendChild(listQuantity);

            var listTrash = document.createElement('i');
            listTrash.setAttribute('class','fa fa-trash ');
            listTrash.setAttribute('id','remove');
            tempCart.appendChild(listTrash);

            cartCont.appendChild(tempCart)
            
        })
        document.getElementById('total-amount').innerHTML = 'Cantidad Total : $ ' + totalAmount;
        document.getElementById('total-items').innerHTML = 'Articulos Totales : ' + totalItems;
        document.getElementById('total').style.display= "block";
}

//remove item from the cart
function removeFromCart(itemId){
    data[itemId].itemInCart = false
    cartList = cartList.filter((list)=>list.id!=itemId);
    addItem()
    if(cartList.length==0){
        document.getElementById('cart-with-items').style.display= "none";
        document.getElementById('empty-cart').style.display= "block";
    }
}