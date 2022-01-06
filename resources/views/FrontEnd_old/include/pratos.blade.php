@extends('FrontEnd.master')
@section('title')
    Pratos
    
@endsection

@section('content')
    <!--  Work gallery section -->
    <div class="w3l-gallery2" id="gallery">
        <div class="burger galleryks py-5">
        <div class="container py-lg-4 py-md-3">
            <h6 class="title-small text-center"></h6>
            <h3 class="title-big mb-lg-5 mb-4 text-center">Cardápio</h3>
            <div class="row no-gutters masonry">
            

            @foreach ($categoriaPratos as $pratos)
                
            
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="{{ asset($pratos->pratos_image) }}" class="js-img-viwer d-block" data-caption="{{ $pratos->pratos_detail }}"
                    data-id="lion">
                    <img src="{{ asset($pratos->pratos_image) }}" style="height: 200px; width: 300px; " class="img-fluid radius-image-full" alt="burger gallery" />
                    <div class="content-overlay"></div>
                    <div class="content-details fadeIn-top">
                        
                        <h3>{{ $pratos->pratos_name }}</h3>
                        <h2>{{ 'R$ '.number_format($pratos->pratos_price, 2, ',', '.') }}</h2>
                    </div>
                    </a>
                </div>
            @endforeach
            
            
            </div>
        </div>
        </div>
    </div>
@endsection

<!-- modal --> 
<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
            </div>
            <section>
                <div class="modal-body">
                    <div class="col-md-5 modal_body_left">
                        <img src="images/s1.jpg" alt=" " class="img-responsive">
                    </div>
                    <div class="col-md-7 modal_body_right single-top-right"> 
                        <h3 class="item_name">France Special Dish</h3>
                        <p>Proin placerat urna et consequat efficitur, sem odio blandit enim</p>
                        <div class="single-rating">
                            <ul>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li class="w3act"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li class="rating">20 reviews</li>
                                <li><a href="#">Add your review</a></li>
                            </ul> 
                        </div>
                        <div class="single-price">
                            <ul>
                                <li>$18</li>  
                                <li><del>$20</del></li> 
                                <li><span class="w3off">10% OFF</span></li> 
                                <li>Ends on : Dec,5th</li>
                                <li><a href="#"><i class="fa fa-gift" aria-hidden="true"></i> Coupon</a></li>
                            </ul>	
                        </div> 
                        <p class="single-price-text">Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra. </p>
                        <form action="#" method="post">
                            <input type="hidden" name="cmd" value="_cart" />
                            <input type="hidden" name="add" value="1" /> 
                            <input type="hidden" name="w3ls_item" value="France Special" /> 
                            <input type="hidden" name="amount" value="18.00" /> 
                            <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                        </form>
                        <a href="#" class="w3ls-cart w3ls-cart-like"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to Wishlist</a>
                        <div class="single-page-icons social-icons"> 
                            <ul>
                                <li><h4>Share on</h4></li>
                                <li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
                                <li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
                                <li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
                                <li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
                                <li><a href="#" class="fa fa-rss icon rss"> </a></li> 
                            </ul>
                        </div> 
                    </div> 
                    <div class="clearfix"> </div>
                </div>
            </section>
        </div>
    </div>
</div> 
<!-- //modal -->
