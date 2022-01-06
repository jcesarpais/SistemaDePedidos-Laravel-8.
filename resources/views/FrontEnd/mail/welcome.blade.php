<div class="card">
    <div class="card-body">
        <table class="table-borderless">
            <tr>
                <td>Ola! <strong>{{$name}}</strong></td>
            </tr>
            <tr>
                <td>Seu endereço de email: <strong>{{$email}}</strong></td>
            </tr>
            <tr>
                <td>Seu número de telefone: <strong>{{$phone}}</strong></td>
            </tr>
            <tr>
                <td>Obrigado por se cadastrar</td>
            </tr>
            <tr>
                <td>Continue conectado</td>
            </tr>
            <tr>
                <td>Acesse esse link para: <a href="{{ url('/') }}">comprar mais.</a></td>
            </tr>
        </table>
    </div>
</div>