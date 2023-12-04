@extends('layouts/main')

@section('content')

@extends('partials/navbar')

<style>
   .carousel-caption {
      color: black;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #393939;
      
   }

   h5 {
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
      color: #d1d1d1;
      text-decoration-color: none;
   }
    
   .carousel-inner {
      margin-top: 50px;
   }

</style>

<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/carousel.jpg" class="d-block w-100" alt="carousel">
        <div class="carousel-caption d-none d-md-block text-center">
            <h5>Fresh and Organic Products For You</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut commodi consequuntur nostrum nisi labore aliquid.</p>
        </div>
    </div>
</div>

<div class="container">
   <section id="features" class="features">
      
      <a type="button" href="" class="d-grid link-offset-2 link-underline-opacity-25 link-underline-opacity-25-hover btn-our" data-bs-toggle="button">Our Features</a>

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
      
      <a type="button" href="" class="d-grid link-offset-2 link-underline-opacity-25 link-underline-opacity-25-hover btn-our" data-bs-toggle="button">Our Products</a>

      <div class="row row-cols-1 row-cols-md-3 g-4">
         <div class="col">
            <div class="card h-50">
               <img src="img/carrot.jpg" class="card-img-top" alt="vegies-carrot">
               <div class="card-body">
               <h5 class="card-title">Carrot</h5>
               <p class="card-text">This</p>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="card h-50">
               <img src="img/garlic.jpg" class="card-img-top" alt="vegies-garlic">
               <div class="card-body">
               <h5 class="card-title">Garlic</h5>
               <p class="card-text">This</p>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="card h-50">
               <img src="img/lettuce.jpg" class="card-img-top" alt="vegies-lettuce">
               <div class="card-body">
               <h5 class="card-title">Lettuce</h5>
               <p class="card-text">This</p>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="card h-50">
               <img src="img/tomato.jpg" class="card-img-top" alt="vegies-tomato">
               <div class="card-body">
               <h5 class="card-title">Tomato</h5>
               <p class="card-text">This</p>
               </div>
            </div>
         </div>
      </div>
      <div class="d-md-flex justify-content-md-end">
         <a href="" class="btn btn-outline-dark" >See more...</a>
      </div>
   </section>

   <section id="categories" class="categories">
      <a type="button" href="" class="d-grid btn-our" data-bs-toggle="button">Our Categories</a>

      <div class="row row-cols-1 row-cols-md-3 g-4">
         <div class="col">
            <div class="card h-100">
               <img src="img/vegies.jpg" class="card-img-top" alt="vegies">
               <div class="card-body">
               <h5 class="card-title">Vegetables</h5>
               <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, maxime!</p>
               </div>            
            </div>
         </div>
         <div class="col">
            <div class="card h-100">
               <img src="img/meat.jpg" class="card-img-top" alt="meat">
               <div class="card-body">
               <h5 class="card-title">Meat</h5>
               <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, eum?</p>
               </div>                
            </div>
         </div>
         <div class="col">
            <div class="card h-100">
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