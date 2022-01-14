<div class="banner">
    <!-- header -->
    <div class="header">
        <div class="w3ls-header"><!-- header-one --> 
            <div class="container">
                <div class="w3ls-header-left">
                    <p>Free home delivery at your doorstep For Above $30</p>
                </div>
                <div class="w3ls-header-right">
                    <ul> 
                        <li class="head-dpdn">
                            <i class="fa fa-phone" aria-hidden="true"></i> Tel/Whatsapp: +55 (00) 00000-0000
                        </li>
                        
                        @if (Session::get('id'))
                            <li class="head-dpdn">
                                <a href="#" onclick="document.getElementById('sair').submit();"><i class="fa fa-sign-in" aria-hidden="true"></i> Sair</a>
                                <form action="{{ route('sair') }}" id="sair" method="post">
                                    @csrf
                                </form>
                            </li>
                        @else 
                            <li class="head-dpdn">
                                <a href="{{ route('entrar') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Entrar</a>
                            </li>
                        @endif
                        
                        @if (Session::get('id'))
                            <li class="head-dpdn">
                                <a href="{{ route('cadastrar') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> {{ Session::get('name') }}</a>
                            </li>
                        @else
                            <li class="head-dpdn">
                                <a href="{{ route('cadastrar') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Cadastrar</a>
                            </li>
                        @endif 

                        <li class="head-dpdn">
                            <a href="{{ asset('/') }}FrontEndSourceFile/offers.html"><i class="fa fa-gift" aria-hidden="true"></i> Promoções</a>
                        </li>
                        <li class="head-dpdn">
                            <a href="{{ asset('/') }}FrontEndSourceFile/help.html"><i class="fa fa-question-circle" aria-hidden="true"></i> Ajuda</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div> 
            </div>
        </div>
        <!-- //header-one -->    
        <!-- navigation -->
        <div class="navigation agiletop-nav">
            <div class="container">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header w3l_logo">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>  
                        <h1><a href="{{ asset('/') }}FrontEndSourceFile/index.html">Big Burger<span>O melhor da Cidade</span></a></h1>
                    </div> 
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav navbar-right">
                            @foreach ($categorias as $category)
                            <li><a href="{{ route('categoria_pratos', ['category_id'=>$category->category_id]) }}">{{ $category->category_name }}</a></li>	
                            @endforeach
                            
                            
                            <li><a href="{{ asset('/') }}FrontEndSourceFile/about.html">Sobre</a></li> 
                             
                            <li><a href="{{ asset('/') }}FrontEndSourceFile/contact.html">Contato</a></li>
                        </ul>
                    </div>
                    <div class="cart cart box_1"> 
                        <a href="{{ route('cart_show') }}"  class="last"> 
                            
                            <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                        </form>   
                    </div> 
                </nav>
            </div>
        </div>
        <!-- //navigation --> 
    </div>
    <!-- //header-end --> 
    <!-- banner-text -->
    <div class="banner-text">	
        <div class="container">
            <h2>Delicious food from the <br> <span>Best Chefs For you.</span></h2>
            <div class="agileits_search">
                <form action="#" method="post">
                    <input name="Search" type="text" placeholder="Enter Your Area Name" required="">
                    <select id="agileinfo_search" name="agileinfo_search" required="">
                        <option value="">Popular Cities</option>
                        <option value="navs">New York</option>
                        <option value="quotes">Los Angeles</option>
                        <option value="videos">Chicago</option>
                        <option value="news">Phoenix</option>
                        <option value="notices">Fort Worth</option>
                        <option value="all">Other</option>
                    </select>
                    <input type="submit" value="Search">
                </form>
            </div> 
        </div>
    </div>
</div>