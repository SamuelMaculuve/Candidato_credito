@extends('layouts.main')
{{--@section('titulo', '')--}}
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Candidatos à Financiamento Bancário</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                <div class="rs-select2--light rs-select2--md">
                    <select class="js-select2" name="property">
                        <option selected="selected">All Properties</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
                <div class="rs-select2--light rs-select2--sm">
                    <select class="js-select2" name="time">
                        <option selected="selected">Today</option>
                        <option value="">3 Days</option>
                        <option value="">1 Week</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
                <button class="au-btn-filter">
                    <i class="zmdi zmdi-filter-list"></i>filters</button>
            </div>
            <div class="table-data__tool-right">
                <a href="{{route('candidato.create')}}">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="zmdi zmdi-plus"></i>Cadastrar Canditado</button>
                </a>
                <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                    <select class="js-select2" name="type">
                        <option selected="selected">Export</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>
        </div>
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
                        <span class="status--process">Processed</span>
                    </td>
                    <td>{{$candidato->credito_requesitado}}</td>
                    <td>{{$candidato->gestor_id}}</td>
                    <td>
                        <div class="table-data-feature">

                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </button>
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>

                            </button>
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
