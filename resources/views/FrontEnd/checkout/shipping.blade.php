@extends('FrontEnd.master')

@section('title')
    Comprado
    
@endsection

@section('content')

    <!-- Shipping page -->
    <div class="login-page about">
        <img class="login-w3img" src="{{ asset('/') }}FrontEndSourceFile/images/img3.jpg" alt="">
        <div class="container"> 
            <h3 class="w3ls-title w3ls-title1">Insira ou altere suas informações, inclusive as de envio da compra!</h3>  
            <div class="login-agileinfo"> 
                <form action="{{ route('store_shipping') }}" method="post">
                    @csrf
                    <label for="">Nome Completo</label>
                    <input class="agile-ltext" type="text" name="name" placeholder="Digite seu nome..." value=" {{ $customer->name }}">
                    <label for="">Email</label>
                    <input class="agile-ltext" type="email" name="email" placeholder="Digite seu email..." value="{{ $customer->email }}">
                    <label for="">Telefone</label>
                    <input class="agile-ltext" type="text" name="phone" placeholder="Digite seu telefone..." value="{{ $customer->phone }}">
                    <label for="">Endereço Completo</label>
                    <input class="agile-ltext" type="text" name="address" placeholder="Digite seu endereço..." value="" >
                    <label for="">Comentário</label>
                    <textarea class="agile-ltext" name="comment" id="" cols="64" rows="10" placeholder="Deixe aqui seu comentário, ou se deseja acrescentar ou tirar algum ítem..."></textarea>
                    
                    <div class="wthreelogin-text"> 
                        <ul> 
                            <li>
                                
                            </li> 
                        </ul>
                        <div class="clearfix"> </div>
                    </div>   
                    <input type="submit" value="Sign Up">
                </form>
                 
            </div>	 
        </div>
    </div>
    <!-- //Shipping page --> 
    
@endsection