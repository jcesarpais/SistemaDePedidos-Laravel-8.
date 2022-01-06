@extends('admin.master')
@section('title')

Página de Cardápio dos Pratos
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
                        <form action="{{ route('save_pratos') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nome do Prato</label>
                                <input type="text" class="form-control" name="pratos_name" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Categoria</label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="">Selecione a Categoria</option>
                                    @foreach($categorias as $categories)
                                        <option value="{{ $categories->category_id }}">{{ $categories->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Detalhes do Prato</label>
                                <textarea type="text" class="form-control" name="pratos_detail" rows="5" id="" ></textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Imagem</label>
                                <input type="file" class="form-control" name="pratos_image" accept="image/*" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Adicionado em</label>
                                <input type="date" class="form-control" name="added_on" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Preço do Prato</label>
                                <input type="text" name="pratos_price" class="form-control" placeholder="Preço do Prato" id="">
                            </div>
                                                        
                            <div class="form-group">
                                <label for="">Status</label>
                                <div class="radio">
                                    <input type="radio" name="pratos_status" value="1" id="">Ativo
                                    <input type="radio" name="pratos_status" value="0" id="">Inativo
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