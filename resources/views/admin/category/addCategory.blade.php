@extends('admin.master')
@section('title')

Página de Categoria
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
                        Categoria
                    </div>

                    <div class="card-body">
                        <form action="{{ route('save_categoria') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Nome da Categoria</label>
                                <input type="text" class="form-control" name="category_name" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Pedido N</label>
                                <input type="text" class="form-control" name="order_number" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Pedido em</label>
                                <input type="date" class="form-control" name="added_on" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Status da Categoria</label>
                                <div class="radio">
                                    <input type="radio" name="category_status" value="1" id="">Ativo
                                    <input type="radio" name="category_status" value="0" id="">Inativo
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