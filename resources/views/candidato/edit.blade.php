@extends('layouts.main')
{{--@section('titulo', '')--}}
@section('content')
    <div class="col-md-12 col-md-offset-3">
        <div class="col-md-9 offset-md-1">
            @if (session('message'))
                @include('alerts.sucess-messages')
            @endif
            <div class="card">
                <div class="card-header">
                    <strong>Registro de </strong> Gestor
                </div>
                <div class="card-body card-block">
                    <div class="container">
                        <form action="{{ route('candidato.update', ['candidato' => $candidato->id ]) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Aprovar</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="status" id="select" class="form-control">
                                        <option value="">Please select</option>
                                            <option value="1">Aprovar Finaciamento</option>
                                            <option value="0">Reprovar Finaciamento</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="email-input" class=" form-control-label">Nome do Candidato</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="email-input" required name="nome" placeholder="Nome do Candidato" class="form-control" value="{{$candidato->nome}}">
                                    <small class="help-block form-text">Nome do Gestor</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="email-input" class=" form-control-label">telefone</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="email-input" name="telefone" value="{{$candidato->telefone}}" placeholder="telefone" class="form-control" value="{{ old('telefone') ? old('telefone') : '' }}">
                                    <small class="help-block form-text">telefone</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="password-input" class=" form-control-label">Data de Nascimento</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="date" id="password-input" name="data_nascimento" value="{{$candidato->data_nascimento}}" placeholder="data_nascimento" class="form-control">
                                    <small class="help-block form-text">Data de Nascimento</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="password-input" class=" form-control-label">Local de Trabalho</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="password-input" name="local_trabalho" placeholder="local_trabalho"  value="{{$candidato->local_trabalho}}" class="form-control">
                                    <small class="help-block form-text"></small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="password-input" class=" form-control-label">casapropria</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="password-input" name="casapropria"value="{{$candidato->casapropria}}" placeholder="casapropria" class="form-control">
                                    <small class="help-block form-text"></small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="password-input" class=" form-control-label">credito_requesitado</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="password-input" name="credito_requesitado" value="{{$candidato->credito_requesitado}}" placeholder="credito_requesitado" class="form-control">
                                    <small class="help-block form-text"></small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="password-input" class=" form-control-label">salario</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="password-input" name="salario" value="{{$candidato->salario}}" placeholder="salario" class="form-control">
                                    <small class="help-block form-text"></small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Gestor</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="gestor_id" id="select" class="form-control" required>

                                        <option value="" required>Please select</option>
                                        @foreach($gestores as $gestor)
                                            <option value="{{ $gestor->id }}" required>{{ $gestor->nome }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="password-input" class=" form-control-label">naturaldade</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="password-input" name="naturaldade" value="{{$candidato->naturaldade}}" placeholder="naturaldade" class="form-control">
                                    <small class="help-block form-text">naturaldade</small>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>

                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
@endsection
