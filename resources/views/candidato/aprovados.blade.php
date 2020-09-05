@extends('layouts.main')
{{--@section('titulo', '')--}}
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Candidatos à Financiamento Bancário Aprovados</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
               <a href="/aprovados">
                   <button class="au-btn-filter">
                       <i class="zmdi zmdi-filter-list"></i>Aprovados</button>
               </a>
                <a href="/reprovados">
                    <button class="au-btn-filter">
                        <i class="zmdi zmdi-filter-list"></i>Reprovados</button>
                </a>
                <a href="/pedentes">
                    <button class="au-btn-filter">
                        <i class="zmdi zmdi-filter-list"></i>Pedentes</button>
                </a>
            </div>
            <div class="table-data__tool-right">
                <a href="{{route('candidato.create')}}">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="zmdi zmdi-plus"></i>Cadastrar Canditado</button>
                </a>

            </div>
        </div>
        @if (session('message'))
            @include('alerts.sucess-messages')
        @endif
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                <tr>
                    <th>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Local de Tabalho</th>
                    <th>Data do Registro</th>
                    <th>status</th>
                    <th>Valor do Finaciamento</th>
                    <th>Gestor</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($candidatos as $candidato)
                <tr class="tr-shadow">
                    <td>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </td>
                    <td>{{ $candidato->nome }}</td>
                    <td>
                        <span class="block-email">{{$candidato->telefone}}</span>
                    </td>
                    <td class="desc">{{$candidato->local_trabalho}}</td>
                    <td>{{$candidato->created_at}}</td>
                    <td>
                        <span class="status--process">
                            @if ($candidato->status === 1)
                                Aprovado
                            @elseif ($candidato->status === 0)
                               Reprovado
                            @else
                               Pedente
                            @endif
                        </span>
                    </td>
                    <td>{{$candidato->credito_requesitado}}</td>
                    <td>{{$candidato->gestor->nome}}</td>
                    <td>
                        <div class="table-data-feature">
                            <a href="candidato/{{ $candidato->id }}/edit">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                            </a>
                            <i class="">
                                <form action="candidato/{{ $candidato->id }}" method="post">

                                    <input class="btn" type="submit" value="Delete" />
                                    @method('delete')
                                    @csrf
                                </form>
                            </i>
                            <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                <i class="zmdi zmdi-more"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="spacer"></tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
@endsection
