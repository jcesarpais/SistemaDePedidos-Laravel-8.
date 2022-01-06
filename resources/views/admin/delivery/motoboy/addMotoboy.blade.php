@extends('admin.master')
@section('title')

Página de Motoboy
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="offset-3 col-md-5 my-lg-5">

            @if(Session::get('sms'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('sms') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

                <div class="card">
                    <div class="card-header text-center">
                        Motoboy
                    </div>

                    <div class="card-body">
                        <form action="{{ route('save_motoboy') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Nome do Motoboy</label>
                                <input type="text" class="form-control" name="motoboy_name" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Telefone do Motoboy</label>
                                <input type="text" class="form-control" name="motoboy_phone_number" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Senha</label>
                                <input type="password" class="form-control" name="motoboy_password" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Adicionado em</label>
                                <input type="date" class="form-control" name="added_on" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Status do Motoboy</label>
                                <div class="radio">
                                    <input type="radio" name="motoboy_status" value="1" id="">Ativo
                                    <input type="radio" name="motoboy_status" value="0" id="">Inativo
                                </div>
                            </div>
                            <button type="submit" name="btn" class="btn btn-outline-primary btn-block">Adicionar</button>

                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection