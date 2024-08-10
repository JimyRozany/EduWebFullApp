 <!--
    - #HEADER
  -->

 <header class="header" data-header>
     <div class="container">

         <a href="#" class="logo">
             <img src="{{ asset('./assets/images/logo.svg') }}" width="162" height="50" alt="EduWeb logo">
         </a>

         <nav class="navbar" data-navbar>

             <div class="wrapper">
                 <a href="#" class="logo">
                     <img src="./assets/images/logo.svg" width="162" height="50" alt="EduWeb logo">
                 </a>

                 <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                     <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                 </button>
             </div>

             <ul class="navbar-list">

                 <li class="navbar-item">
                     <a href="{{ route('home-page') }}" class="navbar-link" data-nav-link>Home</a>
                 </li>

                 <li class="navbar-item">
                     <a href="{{ route('about-page') }}" class="navbar-link" data-nav-link>About</a>
                 </li>

                 <li class="navbar-item">
                     <a href="{{ route('courses-page') }}" class="navbar-link" data-nav-link>Courses</a>
                 </li>

                 <li class="navbar-item">
                     <a href="{{ route('blog-page') }}" class="navbar-link" data-nav-link>Blog</a>
                 </li>

                 <li class="navbar-item">
                     <a href="#" class="navbar-link" data-nav-link>Contact</a>
                 </li>

             </ul>

         </nav>

         <div class="header-actions">

             <button class="header-action-btn" aria-label="toggle search" title="Search">
                 <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
             </button>

             <button class="header-action-btn" aria-label="cart" title="Cart">
                 <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>

                 <span class="btn-badge">0</span>
             </button>



             @guest
                 <button class="btn has-before" id="login-btn">
                     <span class="span">Login</span>

                     <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                 </button>
             @endguest
             @auth
                 <form action="{{ route('user-logout') }}" method="POST">
                    @csrf
                     <button type="submit">logout</button>
                 </form>
                 @endauth

                 <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
                     <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
                 </button>

         </div>

         <div class="overlay" data-nav-toggler data-overlay></div>

     </div>
 </header>
