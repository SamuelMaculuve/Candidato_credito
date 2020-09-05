
@extends('templates.template')

@section('content')
  <h1 class= "text-center"> @if(@isset($candidato))Editar @else Cadastrar @endif</h1><hr>
{{--<?php echo 8; ?>--}}
  <div class="col-8 m-auto ">
      @if(@isset($errors)&& count($errors)>0)
      <div class="text-center mt-4 mb-4 p-2 alert-danger">
          @foreach($errors->all() as $error)
              {{$error}}<br>
          @endforeach
          @endif
{{--              @if(@isset($candidato))--}}
{{--              <form name="formEdit" id="formEdit" method ='POST' action ="{{ route('candidatos.store') }}">--}}
{{--                   @method('PUT')--}}

{{--              </form>--}}

         </div>
      <form name="formCard" id="formCard" method='POST' action="{{ route('candidatos.store') }}" role="form" enctype="multipart/form-data">
          @csrf
         <select class="form-control" name="id_user" id="id_user">
            <option value="{{$candidato->relUssers->id ?? ''}}">{{$candidato->relUssers->name ?? 'Selecione o usuario'}}</option>
             @foreach($users as $user)
                 <option value="{{$user->id}}">{{$user->name}}</option>
             @endforeach
         </select><br>
        {{--<input class="form-control" type="text"> --}}
         {{-- <input class= "form-control "id_user ="id_user" required >--}}
          <input class="form-control" name ="name" placeholder="nome:" value ="{{$candidato-> name ?? ''}}" required><br>
          <input class="form-control" name ="localtrabalho" placeholder="localtrabalho:" value ="{{$candidato->localtrabalho ?? ''}}"required><br>
          <input class="form-control" name ="estadocivil" placeholder="estadocivil:" value ="{{$candidato->estadocivil ?? ''}}" required ><br>
          <input class="form-control" name ="casapropria" placeholder="casaproria:" value ="{{$candidato->casaproria ?? ''}}"required><br>
          <input class="form-control" name ="empregoformal" placeholder="empregoformal:" value ="{{$candidato->empregoformal ?? ''}}"required><br>
          <input class="form-control" name ="tevecredito" placeholder="tevecredito:" value="{{$candidato->tevecredito ?? ''}}"required><br>
          <input class="btn btn-primary" type="submit" value ="@if(@isset($candidato))Editar @else Cadastrar @endif"><br>

      </form>

    </div>

@endsection
