@extends('admin.master')
@section('title')

Página de Cupons
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
                        <form action="{{ route('save_cupons') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Nome do Cupon</label>
                                <input type="text" class="form-control" name="cupon_code_name" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Valor do Cupon</label>
                                <input type="text" class="form-control" name="cupon_value" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Valor Mínimo</label>
                                <input type="text" class="form-control" name="cart_min_value" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Data de Expiração</label>
                                <input type="date" class="form-control" name="expired_on" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Data de Criação</label>
                                <input type="date" class="form-control" name="added_on" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Selecione o Tipo de Cupon</label>
                                <div class="radio">
                                    <input type="radio" name="cupon_type" value="1" id="">Porcentagem
                                    <input type="radio" name="cupon_type" value="0" id="">Fixo
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Status</label>
                                <div class="radio">
                                    <input type="radio" name="cupon_status" value="1" id="">Ativo
                                    <input type="radio" name="cupon_status" value="0" id="">Inativo
                                </div>
                            </div>
                            <button type="submit" name="btn" class="btn btn-outline-primary btn-block">Adicionar Cupon</button>

                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection