@extends('admin.master')
@section('title')

Editar Motoboy
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
      <h3 class="card-title">Editar os Dados do Motoboy</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>SL</th>
          <th>Nome do Motoboy</th>
          <th>Telefone do Motoboy</th>
          <th>Adicionado em</th>
          <th>Ação</th>

        </tr>
        </thead>
        <tbody>
            @php($i = 1)
            @foreach($entregas as $motoboy)
            <tr>
            <td>
                {{ $i++ }}
            </td>
            <td>
                {{ $motoboy->motoboy_name }}
            </td>
            <td>
                {{ $motoboy->motoboy_phone_number }}
            </td>

            <td>
                {{ $motoboy->added_on}}
            </td>

            
            
            <td>
              
            
            @if($motoboy->motoboy_status == 1)
              <a class="btn btn-outline-success" href="{{ route('inactive_motoboy', ['motoboy_id'=>$motoboy->motoboy_id]) }}">
                <i class="fas fa-arrow-up" title="Click para Inativar"></i>
              </a>
            @else
              <a class="btn btn-outline-info" href="{{ route('active_motoboy', ['motoboy_id'=>$motoboy->motoboy_id]) }}">
                <i class="fas fa-arrow-down" title="Click para Ativar"></i>
              </a>
            @endif
            <a type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{ $motoboy->motoboy_id }}">
              <i class="fas fa-edit" title="Click para Editar"></i>
            </a>
            <a class="btn btn-outline-danger" href="{{ route('delete_motoboy', ['motoboy_id'=>$motoboy->motoboy_id]) }}">
              <i class="fas fa-trash" title="Click para Excluir"></i>
            </a>

          </td>
        </tr>

        {{-- ============================================= Inicio Modal ============================================= --}}
        
        <div class="modal fade" id="edit{{ $motoboy->motoboy_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"> Atualizar Motoboy </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">.</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{ route('update_motoboy') }}" method="post">
                  @csrf
                    <div class="form-group">
                      <label for="">Nome do motoboy</label>
                      <input type="text" class="form-control" name="motoboy_name" value="{{ $motoboy->motoboy_name }}">
                      <input type="hidden" class="form-control" name="motoboy_id" value="{{ $motoboy->motoboy_id }}">
                    </div>
                    <div class="form-group">
                      <label for="">Telefone do Motoboy</label>
                      <input type="text" class="form-control" name="motoboy_phone_number" value="{{ $motoboy->motoboy_phone_number }}">
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