@extends('layouts.main')
{{--@section('titulo', '')--}}
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35">Gestores</h3>
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
                    <a href="{{route('gestor.create')}}">
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
                        <th>Data Nascimento</th>
                        <th>Data do Registro</th>
                        <th>Naturalidade</th>
                        <th>Resisdencia</th>

                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($gestores as $gestor)
                        <tr class="tr-shadow">
                            <td>
                                <label class="au-checkbox">
                                    <input type="checkbox">
                                    <span class="au-checkmark"></span>
                                </label>
                            </td>
                            <td>{{ $gestor->nome }}</td>
                            <td>
                                <span class="block-email">{{$gestor->telefone}}</span>
                            </td>
                            <td class="desc">{{$gestor->data_nascimento	}}</td>
                            <td>{{$gestor->created_at}}</td>

                            <td>{{$gestor->naturaldade}}</td>
                            <td>{{$gestor->	residencia}}</td>
                            <td>
                                <div class="table-data-feature">
                                     <a href="gestor/{{ $gestor->id }}/edit " >
                                         <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                             <i class="zmdi zmdi-edit"></i>
                                         </button>
                                     </a>

                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">

                                        <form action="{{ url('/gestor', ['id' => $gestor->id]) }}" method="post">
                                            <input class="btn" type="submit" value="Delete" />
                                            @method('delete')
                                            @csrf
                                        </form>
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
