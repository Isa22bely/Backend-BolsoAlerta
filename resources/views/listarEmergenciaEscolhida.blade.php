@extends('layout')
@section('content')
<div class="texto">
    <div class="text-center" style="margin-bottom: -45px">
            <h2 class="fw-medium"> EMERGÊNCIA EM ANDAMENTO</h2>
    </div>
</div>
<a href="/listar">
    <div class="pbotao">
        <img  src="{{asset('storage/exemplo/voltarb.svg')}}"style="max-width: 3rem;">
    </div>
</a>


  

<div class="entrecard">
    <div class="card text-center">
    <div class="carde">
        <h5 class="text-start">endereço:</h5>
        <p class="text-start">{{$emergencia->rua}}, {{$emergencia->numero}} - {{$emergencia->bairro}}, {{$emergencia->cidade}}</p>
        <div class="mx-auto p-2" style="width: 400px;">
            <hr/>
        </div> 
        <h5 class="text-start">TIPO DE EMERGÊNCIA:</h5>
        <p class="text-start">{{$emergencia->tipoEmergencia}} {{$emergencia->subEmergencia}}</p>
        <div class="mx-auto p-2" style="width: 400px;">
            <hr/>
        </div> 
        <h5 class="text-start">PESSOA QUE REALIZOU A CHAMADA:</h5>
        <p class="text-start">{{$emergencia->nomeUser}}</p>
        <p class="text-start">Deficiente {{$emergencia->deficiencia}}</p>
        
    </div> 
    </div>
</div>
<a href="/listarMensagens/{{$emergencia->id}}">
    <div class="cardchat">
        <div class="card border-secondary mb-3" style="max-width: 10rem;">
            <div class="carde">
                <img  src="{{asset('storage/exemplo/chat.svg')}}"style="max-width: 10rem;">
            </div>
        </div>
    </div>
</a>

@endsection