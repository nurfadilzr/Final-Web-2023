@extends('layouts/main')

@section('content')


<style>
   .navbar {
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
   }

   .navbar-brand {
      font-family: poppins;
      font-weight: 800;
      font-size: 24px;
      font-style: italic;
      color: #019267;      
   }
   
   .nav-link, form {
      font-family: poppins;
      font-weight: 400;
      font-size: 16px;     
      color: #019267;      
   }

   .logo {
      color: #019267;
   }
   .carousel-caption {
      color: black;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #393939;
      
   }

   .fresh-product {
      font-family: poppins;
      font-weight: 700;
      font-size: 28px;
      margin-top: 50px;
      white-space: nowrap;
   }
   p {
      font-family: poppins;
      font-weight: 400;
      font-size: 20px;
   }
   .card-title {
   font-family: poppins;
   font-weight: 600;
   font-size: 20px;
   }
   .btn-our {
      background-color: #019267;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 20px 0;
      padding: 10px 0;
      font-family: poppins;
      font-weight: 600;
      font-size: 24px;
      text-align: center;
      text-decoration: none;
      border-radius: 10px;
   } 
   .btn-our:hover {
      color: #fff;
      text-decoration-color: none;
   }
    
   .carousel-inner {
      margin-top: 50px;
   }

   .logo {
      color: #019267;
   }
   .logo:hover, .nav-link:hover, .navbar-brand:hover {
      color: #e38455;
   }

</style>

<nav class="navbar navbar-expand-lg fixed-top">
   <div class="container">
      <a class="navbar-brand" href="/home-buyer">KitchenMate</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            <li class="nav-item">
               <a class="nav-link" href="/home-buyer">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#features">Features</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/product">Products</a>
            </li>
            {{-- <li class="nav-item">
               <a class="nav-link" href="#categories">Categories</a>
            </li>          --}}
         </ul>

         
         <form class="d-flex mb-auto ml-2" role="search" action="{{ route('products.search') }}" method="GET">
            <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
         </form>
         <div class="icon ml-auto">            
            <a href="" class="logo mr-3"><i class="fa-solid fa-heart fa-lg"></i></a>
            <a href="" class="logo mr-3"><i class="fa-solid fa-cart-shopping fa-lg"></i></a>
            <a href="/buyerDashboard" class="logo mr-3"><i class="fa-solid fa-user fa-lg"></i></a>
         </div>
      </div>
   </div>
</nav>



<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/carousel.jpg" class="d-block w-100" alt="carousel">
        <div class="carousel-caption d-none d-md-block text-center">
            <h5 class="fresh-product">Fresh and Organic Products For You</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut commodi consequuntur nostrum nisi labore aliquid.</p>
        </div>
    </div>
</div>

<div class="container">
   <section id="features" class="features">
      
      <p class="btn-our">Our Features</p>

      <div class="row row-cols-1 row-cols-md-3 g-4">
         <div class="col">
            <div class="card h-50">
               <img src="img/cart.jpg" class="card-img-top" alt="vegies-carrot">
               <div class="card-body">
               <h5 class="card-title">Keranjang Belanjang</h5>
               <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="card h-50">
               <img src="img/lup.jpg" class="card-img-top" alt="vegies-garlic">
               <div class="card-body">
               <h5 class="card-title">Search Bar</h5>
               <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="card h-50">
               <img src="img/best.jpg" class="card-img-top" alt="vegies-lettuce">
               <div class="card-body">
               <h5 class="card-title">Produk Berkualitas</h5>
               <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="product" class="product">
      
      <a type="button" href="/product" class="d-grid link-offset-2 link-underline-opacity-25 link-underline-opacity-25-hover btn-our">Our Products</a>

      <div class="row row-cols-1 row-cols-md-3 g-4">
         <div class="col">
            <div class="card h-50">
               <img src="img/carrot.jpg" class="card-img-top" alt="vegies-carrot">
               <div class="card-body">
               <h5 class="card-title">Wortel</h5>
               <p class="card-text">Rp5000</p>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="card h-50">
               <img src="img/garlic.jpg" class="card-img-top" alt="vegies-garlic">
               <div class="card-body">
               <h5 class="card-title">Bawang Putih</h5>
               <p class="card-text">Rp5000</p>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="card h-50">
               <img src="img/lettuce.jpg" class="card-img-top" alt="vegies-lettuce">
               <div class="card-body">
               <h5 class="card-title">Selada</h5>
               <p class="card-text">Rp5000</p>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="card h-50">
               <img src="img/tomato.jpg" class="card-img-top" alt="vegies-tomato">
               <div class="card-body">
               <h5 class="card-title">Tomat</h5>
               <p class="card-text">Rp5000</p>
               </div>
            </div>
         </div>
      </div>

   <section id="categories" class="categories">
      <a type="button" href="/productCategory" class="d-grid btn-our" data-bs-toggle="button">Our Categories</a>

      <div class="row row-cols-1 row-cols-md-3 g-4">
         <div class="col">
            <div class="card h-80">
               <img src="img/vegies.jpg" class="card-img-top" alt="vegies">
               <div class="card-body">
               <h5 class="card-title">Vegetables</h5>
               <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, maxime!</p>
               </div>            
            </div>
         </div>
         <div class="col">
            <div class="card h-80">
               <img src="img/meat.jpg" class="card-img-top" alt="meat">
               <div class="card-body">
               <h5 class="card-title">Meat</h5>
               <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, eum?</p>
               </div>                
            </div>
         </div>
         <div class="col">
            <div class="card h-80">
               <img src="img/spices.jpg" class="card-img-top" alt="spices">
               <div class="card-body">
               <h5 class="card-title">Spices</h5>
               <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, earum.</p>
               </div>                
            </div>
         </div>
         </div>
   </section>
</div>
@endsection