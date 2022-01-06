@extends('FrontEnd.master')
@section('tittle')
    Home
    
@endsection

@section('content')
    
    
    <!-- features -->
    <section class="w3l-reasons py-5" id="why">
        <div class="main-w3 py-lg-5 py-md-d py-2">
            <div class="container">
                <div class="title-content text-center">
                    <h6 class="title-small">Why we are the best</h6>
                    <h3 class="title-big">4 Reasons to Choose us</h3>
                </div>
                <div class="row main-cont-wthree-fea mt-5 pt-lg-4 text-center">
                    <div class="col-lg-3 col-sm-6 grids-feature">
                        <a href="#url" class="icon"><span class="fa fa-cutlery"></span></a>
                        <h4><a href="#feature" class="title-head">Tasty Burgers</a></h4>
                        <p>Dolor et sed amet eget volutp elit libero. timpus sed elit nibh quis dui, nunc tortor sit amet.</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 grids-feature mt-sm-0 mt-5">
                        <a href="#url" class="icon"><span class="fa fa-cogs"></span></a>
                        <h4><a href="#feature" class="title-head">Quality Products</a></h4>
                        <p>Dolor et sed amet eget volutp elit libero. timpus sed elit nibh quis dui, nunc tortor sit amet.</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 grids-feature mt-lg-0 mt-sm-5 mt-5">
                        <a href="#url" class="icon"><span class="fa fa-users"></span></a>
                        <h4><a href="#feature" class="title-head">World's best Chef</a></h4>
                        <p>Dolor et sed amet eget volutp elit libero. timpus sed elit nibh quis dui, nunc tortor sit amet.</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 grids-feature mt-lg-0 mt-sm-5 mt-5">
                        <a href="#url" class="icon"><span class="fa fa-motorcycle"></span></a>
                        <h4><a href="#feature" class="title-head">Fastest delivery</a></h4>
                        <p>Dolor et sed amet eget volutp elit libero. timpus sed elit nibh quis dui, nunc tortor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //features -->
    <!--  //Work gallery section -->    

    <!-- /bottom-grids-->
    <section class="w3l-bottom-grids-6 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="grids-area-hny main-cont-wthree-fea row">
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box">
                        <img src="{{ asset('/') }}FrontEndSourceFile/images/burger.png" alt="burger logo" width="35px">
                        <h4><a href="#feature" class="title-head">Burgers</a></h4>
                        <p class="mb-3">Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor amet ipsum primis in faucibus orci dolor sit et amet.</p>
                        <a href="menu.html" class="btn btn-text">View all </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                    <div class="area-box">
                        <img src="{{ asset('/') }}FrontEndSourceFile/images/snack.png" alt="burger logo" width="35px">
                        <h4><a href="#feature" class="title-head">Snacks</a></h4>
                        <p class="mb-3">Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor amet ipsum primis in faucibus orci dolor sit et amet.</p>
                        <a href="menu.html" class="btn btn-text">View all </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                    <div class="area-box">
                        <img src="{{ asset('/') }}FrontEndSourceFile/images/beverage.png" alt="burger logo" width="35px">
                        <h4><a href="#feature" class="title-head">Beverages</a></h4>
                        <p class="mb-3">Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor amet ipsum primis in faucibus orci dolor sit et amet.</p>
                        <a href="menu.html" class="btn btn-text">View all </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //bottom-grids-->

    <!-- /mobile section --->
    <section class="w3l-mobile-content-6 py-5">
        <div class="mobile-info py-lg-5 py-md-4 py-2">
            <!-- /mobile-info-->
            <div class="container">
                <div class="row mobile-info-inn mx-lg-0">
                    <div class="col-lg-4 mobile-right">
                        <div class="row mobile-right-grids mb-lg-5 mb-4">
                            <div class="col-2 mobile-right-icon">
                                <div class="mobile-icon">
                                    <span class="fa fa-leaf"></span>
                                </div>
                            </div>
                            <div class="col-10 mobile-right-info">
                                <h6><a href="#url">Natural ingredients</a></h6>
                                <p>Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
                                    adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="row mobile-right-grids mb-lg-5 mb-4">
                            <div class="col-2 mobile-right-icon">
                                <div class="mobile-icon">
                                    <span class="fa fa-shopping-basket"></span>
                                </div>
                            </div>
                            <div class="col-10 mobile-right-info">
                                <h6><a href="#url"> Fresh vegetables & Meet</a></h6>
                                <p>Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
                                    adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="row mobile-right-grids">
                            <div class="col-2 mobile-right-icon">
                                <div class="mobile-icon">
                                    <span class="fa fa-users"></span>
                                </div>
                            </div>
                            <div class="col-10 mobile-right-info">
                                <h6><a href="#url">World’s best Chef </a></h6>
                                <p>Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
                                    adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mobile-left">
                        <img src="{{ asset('/') }}FrontEndSourceFile/images/burger1.png" class="img-fluid radius-image" alt="">
                    </div>
                    <div class="col-lg-4 mobile-right">
                        <div class="row mobile-right-grids mb-lg-5 mb-4">
                            <div class="col-2 mobile-right-icon">
                                <div class="mobile-icon">
                                    <span class="fa fa-cogs"></span>
                                </div>
                            </div>
                            <div class="col-10 mobile-right-info">
                                <h6><a href="#url">Best quality products</a></h6>
                                <p>Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
                                    adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="row mobile-right-grids mb-lg-5 mb-4">
                            <div class="col-2 mobile-right-icon">
                                <div class="mobile-icon">
                                    <span class="fa fa-motorcycle"></span>
                                </div>
                            </div>
                            <div class="col-10 mobile-right-info">
                                <h6><a href="#url">Fastest door delivery</a></h6>
                                <p>Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
                                    adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="row mobile-right-grids">
                            <div class="col-2 mobile-right-icon">
                                <div class="mobile-icon">
                                    <span class="fa fa-thumbs-down"></span>
                                </div>
                            </div>
                            <div class="col-10 mobile-right-info">
                                <h6><a href="#url">Ground beef & Low fat</a></h6>
                                <p>Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
                                    adipisicing elit.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- //mobile-info-->
        </div>
    </section>
    <!-- //mobile section --->
    <!-- middle -->
    <div class="middle py-5" id="call">
        <div class="container py-lg-3">
            <div class="welcome-left text-center py-md-5 py-3">
                <h3>The Right Ingredients
                    for the Right Food. Eat Healthy, Delicious and Perfect Burgers From Our Hotel</h3>
                <h3 class="mt-4">Call us to order: <a href="tel:+1 123 456 789">+1 123 456 789</a> </h3>
                <a href="contact.html" class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2">Contact Us</a>
                <a href="#book" class="btn btn-style btn-outline-primary mt-sm-5 mt-4">Book a table</a>
            </div>
        </div>
    </div>
    <!-- //middle -->
    <!-- app-4 -->
    <section class="w3l-app-launch-4 py-5">
        <div id="app4-block" class="py-lg-5 py-md-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 app4-left-text">
                        <h5 class="title-small">Easy way to use mobile app</h5>
                        <h3 class="title-big">Download our mobile apps today</h3>
                        <p class="mt-3"> Suspendisse efficitur orci urna. In et augue ornare, tempor massa in, luctus
                            sapien. Proin a diam et dui fermentum molestie vel id neque. Donec sed tempus enim, 
                            a congue risus. euismod massa a quam interdum. </p>
                        <div class="download-btns mt-4 pt-lg-3">
                            <a href="#url"><img src="{{ asset('/') }}FrontEndSourceFile/images/appstore.png" class="radius-image" alt=""></a>
                            <a href="#url"><img src="{{ asset('/') }}FrontEndSourceFile/images/googleplay.png" class="radius-image" alt=""></a>
                        </div>
                        <span class="or"> or </span>
                        <div class="download-link">
                            <h5 class="mb-2">Enter your email to get download link</h5>
                            <form action="#" methos="GET" class="d-flex wrap-align">
                                <input type="email" placeholder="Enter email" required="required" />
                                <button type="submit">Get link</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 app4-right-image mt-lg-0 mt-md-5 mt-4">
                        <img src="{{ asset('/') }}FrontEndSourceFile/images/mobile.jpg" class="img-fluid radius-image-full" alt="App Device" />
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection