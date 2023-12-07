<style>
   .navbar {
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
   }

   .navbar-brand {
      font-family: poppins;
      font-weight: 800;
      font-size: 40px;
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
   .logo:hover, .nav-link:hover, .navbar-brand:hover {
      color: #e38455;
   }
</style>

<nav class="navbar navbar-expand-lg fixed-top shadow-md">
   <div class="container">
      <a class="navbar-brand" href="/home">KitchenMate</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            <li class="nav-item">
               <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#features">Features</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#product">Products</a>
            </li>
            {{-- <li class="nav-item">
               <a class="nav-link" href="#categories">Categories</a>
            </li>          --}}
         </ul>

         
         <form class="d-flex mb-auto ml-2" role="search">
            <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
         </form>
         <div class="icon ml-auto">            
            <a href="" class="logo mr-3"><i class="fa-solid fa-heart fa-lg"></i></a>
            <a href="#" class="logo mr-3"><i class="fa-solid fa-cart-shopping fa-lg"></i></a>
            <a href="#" class="logo mr-3"><i class="fa-solid fa-user fa-lg"></i></a>
         </div>
      </div>
   </div>
</nav>