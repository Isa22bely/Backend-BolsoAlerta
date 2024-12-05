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
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                            <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                            <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2"/>
                        </svg>
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
            <a href="/listarEmergencia/{{$item->id}}" style="text-decoration: none;">
                <div class="card" style="margin-bottom: 2rem;">
                    <div class="carde" style="padding-top: 8px; height: 100%">
                        
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
        
    </div>


</div>








@endsection