@extends('layout')
@section('content')
<div></div>


<div class="d-flex justify-content-around" style="padding: 30px">

    <div style="width: 35%; margin-top: 25px;">
        <h5 class="fw-bold text-center">EMERGÊNCIAS EM ANDAMENTO</h5>
        @foreach ($emergenciaAndamento as $item)
            <a href="/listarEmergencia/{{$item->id}}" style="text-decoration: none;  ">
                <div class="card" style="margin-bottom: 2rem;">
                    <div class="carde" style="padding-top:8px; height: 100%">
                        <p class="text-center">
                            {{$item->rua}}, {{$item->numero}} - {{$item->bairro}}, {{$item->cidade}}
                        </p>
                        <div class="mx-auto p-2" style="width: 80%;">
                            <hr />
                        </div>
                        <p class="text-center">
                            {{$item->tipoEmergencia}} {{$item->subEmergencia}}
                        </p>
                    </div>
                </div>
            </a>
        @endforeach

    </div>


    <div>
        <hr class=" vertical">
    </div>

    <div style="width: 35%; margin-top: 25px;">
        <h5 class="fw-bold text-center">NOVAS EMERGÊNCIAS </h5>
        @foreach ($emergenciaNova as $item)
            <a href="/emergencia" style="text-decoration: none;">
                <div class="card" style="margin-bottom: 2rem;">
                    <div class="carde" style="padding-top:8px; height: 100%">
                        <p class="text-center">
                            {{$item->rua}}, {{$item->numero}} - {{$item->bairro}}, {{$item->cidade}}
                        </p>
                        <div class="mx-auto p-2" style="width: 80%;">
                            <hr />
                        </div>
                        <p class="text-center">
                            {{$item->tipoEmergencia}} {{$item->subEmergencia}}
                        </p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>


</div>








@endsection