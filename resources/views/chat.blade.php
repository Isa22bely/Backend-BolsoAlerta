@extends('layout')
@section('content')
<div class="texto">
    <div class="text-center" style="margin-bottom: -45px">
        <h2 class="fw-medium"> CHAT DE EMERGÊNCIA</h2>
    </div>
</div>
<a href="/emergencia">
    <div class="pbotao">
        <img src="{{asset('storage/exemplo/voltarb.svg')}}" style="max-width: 3rem;">
    </div>
</a>

<div class="entrecard">

    <div class="ard text-center" style="max-width: 80%;">
        <div class="cardechat">
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{{asset('storage/exemplo/mensagen.svg')}}" width="30" height="24"
                            class="d-inline-block align-text-top">
                        {{$nome}}
                    </a>
                </div>
            </nav>
            <div class="bloco">
                @foreach ($mensagens as $item)
                    @if ($item->remetente == 1)
                        <div class="blocoD">
                            <div class="card" style="max-width: 50%; margin-bottom: 2rem;">
                                <p class="titulo">Corpo de Bombeiros</p>
                                <div class="card-body">
                                    <p class="text-break">
                                        {{$item->conteudo}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="blocoE">
                            <div class="card" style="max-width: 50%;  margin-bottom: 2rem;">
                                <p class="titulo">{{$nome}}</p>
                                <div class="card-body">
                                <p class="text-break">
                                        {{$item->conteudo}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div>
                    <div class="cardmensagen">
                        <form action="/novaMensagem/{{$idEmergencia}}">
                            <textarea class="form-control custom-textarea digitar" rows="1"
                                oninput="this.style.height = ''; this.style.height = this.scrollHeight + 'px'"
                                placeholder="..." name="conteudo"> </textarea>

                            <button type="submit">Enviar</button>
                        </form>


                    </div>
                </div>

            </div>
        </div>

    </div>

















    @endsection