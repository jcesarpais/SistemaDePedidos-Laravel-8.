@extends('FrontEnd.master')

@section('title')
    Carrinho de Compras
    
@endsection

@section('content')

    <div class="products">
        <div class="container">
            <div class="col-md-9 product-w3ls-right">

                <div class="card">
                    <h3 class="card-header text-center mt-3" style="background-color: lightyellow; height: 50px; widht: auto">
                        Carrinho de Compras

                    </h3>
                    <div class="card-body">
                        <table class="table table-hover table-bordered table-responsive">
                            <thead>
                                
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Excluir</th>
                                    <th scope="col" class="text-success">Nome do Produto</th>
                                    <th scope="col">Imagem</th>
                                    <th scope="col">Preço</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">Valor Total</th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                @php($i=1)
                                @php($sum=0)
                                @foreach ($CartPrato as $pratos)
                              <tr>
                                  
                                <th scope="row">{{ $i++ }}</th>
                                <th scope="row">
                                    <a href="{{ route('remove_item', ['rowId' => $pratos->rowId]) }}" type="button" class="btn btn-danger">
                                        <span aria-hidden="true">X</span>
                                    </a>
                                </th>
                                <td>{{ $pratos->name }}</td>
                                <td><img src="{{ asset($pratos->options->image) }}" style="height: 50px; width: 70px; border-radius: 10%;" alt="não carregou"></td>
                                <td>{{ 'R$ '.number_format($pratos->price, 2, ',', '.') }}</td>

                                <td>
                                    <form action="{{ route('update_item') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="rowId" value="{{ $pratos->rowId }}">
                                        <input type="text" name="qty" value="{{ $pratos->qty }}" min="1" style="width: 50px; height: 25px;">
                                        <input type="submit" name="btn" value="Atualizar" class="btn btn-success" style="width: 57px; height: 25px; padding-botton: 0; padding-top: 0; padding-right: 0; padding-left: 0;">
                                    </form>
                                     
                                </td>
                                <td>{{ $subTotal = 'R$ '.number_format($pratos->price*$pratos->qty, 2, ',', '.') }}</td>
                                <td>{{ $pratos->subTotal }}</td>
                                <input type="hidden" name="" value="">
                              </tr>
                              @endforeach
                              <tr>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td class="text-center 1">{{ 'R$ '.number_format($sum, 2, ',', '.') }}</td>

                              </tr>
                            </tbody>
                          </table>

                    </div>

                </div>

            </div>
            {{--<div class="col-md-9 product-w3ls-right">
                <a href="{{ route('finalizar_pedido') }}"  class="btn btn-info" style="float:right">
                    <i class="fa fa-shopping-bag"></i>
                    Enviar
                </a>
            </div>--}}

            <div class="col-md-9 product-w3ls-right">
                <a href="" data-toggle="modal" data-target="#login_or_register" class="btn btn-info" style="float:right">
                    <i class="fa fa-shopping-bag"></i>
                    Enviar
                </a>
            </div>

        </div>
    </div>
    
    
  
  <!-- Modal -->
    <div class="modal fade" id="login_or_register" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body" >
                                <h3>
                                    Seja Bem Vindo!
                                </h3>
                                <div class="text-center" style="margin-top: 25px; height: 160px; width: 160px; border-radius: 50%; background-color: darkblue; color: ghostwhite; padding-top: 65px; font-size: 20px;">
                                    Mantemos você sorrindo...
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4>
                                    Você é um novo usuário!
                                </h4>
                                <a href="{{ route('cadastrar') }}" class="btn-block btn-primary text-center" style="height: 60px; width: auto; padding-top: 12px; margin-top: 10px; font-size: 25px;">
                                    <span class="mt-5">Cadastrar</span>
                                </a>
                                <h3 class="mt-lg-5 text-center">Ou</h3>
                                <h4 class="mt-5">já tem uma conta</h4>
                                <a href="#" class="btn-block btn-success text-center" style="height: 60px; width: auto; padding-top: 12px; margin-top: 10px; font-size: 25px;">
                                    <span class="mt-5">Entrar</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

@endsection