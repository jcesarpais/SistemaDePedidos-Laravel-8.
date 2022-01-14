@extends('FrontEnd.master')

@section('title')
Acessar sua conta
    
@endsection

@section('content')

    <!-- sign up-page -->
    <div class="login-page about">
        <img class="login-w3img" src="{{ asset('/') }}FrontEndSourceFile/images/img3.jpg" alt="">
        <div class="container"> 
            <h3 class="w3ls-title w3ls-title1">Entre com a sua conta de usuário</h3>  
            <div class="login-agileinfo"> 
                <form action="{{ route('check_login') }}" method="post">
                    @csrf
                    <input class="agile-ltext" type="email" name="email" placeholder="Digite seu email..." required="">
                    <input class="agile-ltext" type="password" name="password" placeholder="Crie sua senha..." required="">
                    
                    <input type="submit" value="Entrar">
                </form>
                 
            </div>	 
        </div>
    </div>
    <!-- //sign up-page --> 
    
@endsection