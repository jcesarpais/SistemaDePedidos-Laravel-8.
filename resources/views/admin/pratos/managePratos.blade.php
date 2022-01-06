@extends('admin.master')
@section('title')

Editar Cardápio dos Pratos
@endsection

@section('content')

  @if(Session::get('sms'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>{{ Session::get('sms') }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif

  <div class="card my-5">
    <div class="card-header">
      <h3 class="card-title">Editar os Dados do Prato</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>SL</th>
          <th>Nome do Prato</th>
          <th>Tipo da Categoria</th>
          <th>Descrição do Prato</th>
          <th>Imagem Ilustrativa</th>
          
          <th>Adicionado em</th>
          <th>Preço do Prato</th>
          <th>Ação</th>

        </tr>
        </thead>
        <tbody>
            @php($i = 1)
            @foreach($pratos as $pratos)
            <tr>
              <td>
                  {{ $i++ }}
              </td>
              <td>
                  {{ $pratos->pratos_name }}
              </td>
              
              <td>
                  {{ $pratos->category_name}}
              </td>

              <td>
                  {{ $pratos->pratos_detail}}
              </td>

              <td>
                  <img src="{{ asset($pratos->pratos_image) }}" height="25" width="68" class="img-fluid img-thumbnail" alt="">
              </td>

              <td>
                  {{ $pratos->created_at}}
              </td>

              <td>
              {{  'R$ '.number_format($pratos->pratos_price, 2, ',', '.') }}

                  
              </td>

            <td>
            @if($pratos->pratos_status == 1)
              <a class="btn btn-outline-success" href="{{ route('inactive_pratos', ['pratos_id'=>$pratos->pratos_id]) }}">
                <i class="fas fa-arrow-up" title="Click para Inativar"></i>
              </a>
            @else
              <a class="btn btn-outline-info" href="{{ route('active_pratos', ['pratos_id'=>$pratos->pratos_id]) }}">
                <i class="fas fa-arrow-down" title="Click para Ativar"></i>
              </a>
            @endif
            <a type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{ $pratos->pratos_id }}">
              <i class="fas fa-edit" title="Click para Editar"></i>
            </a>
            <a class="btn btn-outline-danger" href="{{ route('delete_pratos', ['pratos_id'=>$pratos->pratos_id]) }}">
              <i class="fas fa-trash" title="Click para Excluir"></i>
            </a>

          </td>
        </tr>

        {{-- ============================================= Inicio Modal ============================================= --}}
        
        <div class="modal fade" id="edit{{ $pratos->pratos_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"> Atualizar Cupon </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">.</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{ route('update_pratos') }}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                      <label for="">Nome do Prato</label>
                      <input type="text" class="form-control" name="pratos_name" value="{{ $pratos->pratos_name }}">
                      <input type="hidden" class="form-control" name="pratos_id" value="{{ $pratos->pratos_id }}">
                    </div>
                    <div class="form-group">
                        <label for="">Categoria atual</label>
                        <input type="text" name="category_name" class="form-control" value="{{ $pratos->category_name }}" id="">
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
                        <textarea type="text" class="form-control" name="pratos_detail" rows="5" id="" >{{ $pratos->pratos_detail }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Imagem</label>
                        <img src="{{ asset('/$pratos->pratos_image') }}" style="height: 150px; width: 150px; border-radius:50%;" alt="">
                        <input type="file" class="form-control" name="pratos_image" accept="image/*" id="">
                    </div>
                    <div class="form-group">
                                <label for="">Preço do Prato</label>
                                <input type="text" name="pratos_price" class="form-control" value="{{ $pratos->pratos_price }}">
                            </div>                          
                    <div class="form-group">
                      <input type="submit" name="btn" class="btn btn-primary" value="Update">
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>


        {{-- ============================================= Fim Modal ============================================= --}}

        @endforeach
        </tbody>
        
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

@endsection