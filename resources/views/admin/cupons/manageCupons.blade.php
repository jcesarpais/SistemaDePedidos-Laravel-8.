@extends('admin.master')
@section('title')

Editar Cupons
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
      <h3 class="card-title">Editar os Dados do Cupon</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>SL</th>
          <th>Nome do Cupon</th>
          <th>Tipo do Cupon</th>
          <th>Valor do Cupon</th>
          <th>Valor Mínimo</th>
          <th>Expira em</th>
          <th>Adicionado em</th>
          <th>Ação</th>

        </tr>
        </thead>
        <tbody>
            @php($i = 1)
            @foreach($cupon as $cupons)
            <tr>
            <td>
                {{ $i++ }}
            </td>
            <td>
                {{ $cupons->cupon_code_name }}
            </td>
            <td>
                @if ($cupons->cupon_type == 1 )
                    Porcentagem
                @else
                    Fixed
                @endif
            </td>

            <td>
                {{ $cupons->cupon_value}}
            </td>

            <td>
                {{ $cupons->cart_min_value}}
            </td>

            <td>
                {{ $cupons->expired_on}}
            </td>

            <td>
                {{ $cupons->added_on}}
            </td>

            <td>
              
            
            @if($cupons->cupon_status == 1)
              <a class="btn btn-outline-success" href="{{ route('inactive_cupons', ['cupon_id'=>$cupons->cupon_id]) }}">
                <i class="fas fa-arrow-up" title="Click para Inativar"></i>
              </a>
            @else
              <a class="btn btn-outline-info" href="{{ route('active_cupons', ['cupon_id'=>$cupons->cupon_id]) }}">
                <i class="fas fa-arrow-down" title="Click para Ativar"></i>
              </a>
            @endif
            <a type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{ $cupons->cupon_id }}">
              <i class="fas fa-edit" title="Click para Editar"></i>
            </a>
            <a class="btn btn-outline-danger" href="{{ route('delete_cupons', ['cupon_id'=>$cupons->cupon_id]) }}">
              <i class="fas fa-trash" title="Click para Excluir"></i>
            </a>

          </td>
        </tr>

        {{-- ============================================= Inicio Modal ============================================= --}}
        
        <div class="modal fade" id="edit{{ $cupons->cupon_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"> Atualizar Cupon </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">.</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{ route('update_cupons') }}" method="post">
                  @csrf
                    <div class="form-group">
                      <label for="">Nome do cupon</label>
                      <input type="text" class="form-control" name="cupon_code_name" value="{{ $cupons->cupon_code_name }}">
                      <input type="hidden" class="form-control" name="cupon_id" value="{{ $cupons->cupon_id }}">
                    </div>
                    <div class="form-group">
                      <label for="">Valor do Cupon</label>
                      <input type="text" class="form-control" name="cupon_value" value="{{ $cupons->cupon_value }}">
                    </div>
                    <div class="form-group">
                        <label for="">Valor Mínimo do Cupon</label>
                        <input type="text" class="form-control" name="cart_min_value" value="{{ $cupons->cart_min_value }}">
                    </div>
                    <div class="form-group">
                        <label for="">Selecione o Tipo de Cupon</label>
                        <div class="radio">
                            <input {{ isset($cupons['cupon_type'])&&$cupons['cupon_type'] =='1' ? 'checked' : '' }} type="radio" name="cupon_type" value="1" id="">Porcentagem
                            <input {{ isset($cupons['cupon_type'])&&$cupons['cupon_type'] =='0' ? 'checked' : '' }} type="radio" name="cupon_type" value="0" id="">Fixo
                        </div>
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