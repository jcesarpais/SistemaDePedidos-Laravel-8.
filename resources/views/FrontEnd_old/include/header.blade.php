<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke px-0">
            <h1> <a class="navbar-brand" href="index.html">
                <img src="{{ asset('/') }}FrontEndSourceFile/images/burger.png" alt="burger logo"width="35px" /> Burger Bun
                </a></h1>
            <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>
  
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto">
                    @foreach ($categorias as $category)
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('categoria_pratos', ['category_id'=>$category->category_id]) }}">{{ $category->category_name }} <span class="sr-only">(current)</span></a>
                        </li>
                    @endforeach
                    
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Menu</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                    <!--/search-right-->
                    <div class="search-right">
                        <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                        <!-- search popup -->
                        <div id="search" class="pop-overlay">
                            <div class="popup">
                                <h4 class="mb-3">Search here</h4>
                                <form action="error.html" method="GET" class="search-box">
                                    <input type="search" placeholder="Enter Keyword" name="search" required="required"
                                        autofocus="">
                                    <button type="submit" class="btn btn-style btn-primary">Search</button>
                                </form>
  
                            </div>
                            <a class="close" href="#close">×</a>
                        </div>
                        <!-- /search popup -->
                    </div>
                    <!--//search-right-->
                </ul>
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
  </header>

  <!-- banner section -->
<section id="home" class="w3l-banner py-5">
    <div class="container py-lg-5 py-md-4 mt-lg-0 mt-md-5 mt-4">
        <div class="row align-items-center py-lg-5 py-4 mt-4">
            <div class="col-lg-6 col-sm-12">
                <h3 class="">Delight your Best. </h3>
                <h2 class="mb-4">Steak Burger</h2>
                <p>We are dedicated to the safety of our guests and employees and have updated our safety measures. Lorem ipsum dolor sit amet elit. Provident.
                    fugit odit? Fugit ipsam. Sed ac ex. Nam mauris velit, ac
                    cursus quis, leo.</p>
                <div class="mt-md-5 mt-4">
                    <a class="btn btn-primary btn-style mr-2" href="menu.html"> See Menu </a>
                    <a class="btn btn-outline-primary btn-style" href="#call"> Book a table </a>
                </div>
            </div>
            <div class="col-lg-5">
            </div>
        </div>
    </div>
</section>

<!-- //banner section -->
<section class="w3l-index3" id="work">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                <div class="col-lg-6 left-wthree-img text-righ">
                    <div class="position-relative">
                        <img src="{{ asset('/') }}FrontEndSourceFile/images/about.jpg" alt="" class="img-fluid radius-image-full">
                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a>
                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                            <iframe src="https://www.youtube.com/embed/dCVEY88Fn1k" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4 about-right-faq align-self">
                    <h5 class="title-small mb-1">Our story</h5>
                    <h3 class="title-big">Burgers! You won't Find Anywhere Else with Best Quality <span>Ingredients</span></h3>
                    <p class="mt-sm-4 mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Non quae, consequatur voluptatem ad.</p>
                    <a class="btn btn-primary btn-style mt-md-5 mt-4 mr-2" href="about.html"> Read More </a>
                </div>
            </div>
        </div>
    </div>
</section>