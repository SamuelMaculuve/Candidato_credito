@extends('layouts.main')
{{--@section('titulo', '')--}}
@section('content')
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
                <form action="{{ route('gestor.update', ['gestor' => $gestor->id ]) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class="` form-control-label">Nome do Gestor</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="email-input" name="nome" placeholder="Enter Email" class="form-control" value="{{ $gestor->nome }}">
                            <small class="help-block form-text">Nome do Gestor</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="password-input" class=" form-control-label">Data de Nascimento</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" id="password-input" name="data_nascimento" placeholder="data_nascimento" value="{{ $gestor->data_nascimento }}" class="form-control">
                            <small class="help-block form-text">Data de Nascimento</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Genero</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="estado_civil" id="select" class="form-control">
                                <option value="0">Please select</option>
                                <option value="Maaculino">Maaculino</option>
                                <option value="Feninino">Feninino</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="password-input" class=" form-control-label">Telegone</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="number" id="password-input" value="{{ $gestor->telefone }}" name="telefone" placeholder="telefone" class="form-control">
                            <small class="help-block form-text">Telefone</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="password-input" class=" form-control-label">residencia</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="password-input" value="{{ $gestor->residencia }}" name="residencia" placeholder="residencia" class="form-control">
                            <small class="help-block form-text">residencia</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="password-input" class=" form-control-label">naturaldade</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="password-input" name="naturaldade" value="{{ $gestor->naturaldade }}" placeholder="naturaldade" class="form-control">
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
