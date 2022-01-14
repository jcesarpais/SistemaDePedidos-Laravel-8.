@extends('FrontEnd.master')

@section('title')
    Finalizar Pedido
    
@endsection

@section('content')
    <div class="products">
        <div class="col-md-9 product-w3ls-right">
            <div class="card">
                <div class="card-header text-muted" >
                    <h3>Ola {{-- Session::get('customer_name') --}}.</h3> <h4 class="text-center">Escolha a forma que deseja efetuar seu pagamento!</h4>
                </div>
                <div class="card mt-4">
                    <h5 class="card-header mt-4 text-center text-muted">Por favor Selecione a forma de pagamento.</h5>
                    <div class="card-body">
                        <div class="checkout-left">
                            <div class="address_form_agile mt-sm-5 mt-4">
                                <form action="{{ route('ordem_pagamento') }}" method="post">
                                    @csrf
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Em Dinheiro</th>
                                            <td><input type="radio" name="payment_type" value="dinheiro" id=""></td>
                                        </tr>
                                        <tr>
                                            <th>Cartão Débito</th>
                                            <td><input type="radio" class="mr-5" name="payment_type" value="debito" id=""></td>
                                        </tr>
                                        <tr>
                                            <th>Cartão Crédito</th>
                                            <td><input type="radio" class="mr-5" name="payment_type" value="credito" id=""></td>
                                        </tr>
                                        <tr>
                                            <td><input type="submit" name="btn" class="btn btn-success" value="confirmar" id=""></td>
                                        </tr>
                                    </table>
                                </form>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection