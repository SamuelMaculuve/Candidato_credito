@extends('templates.template')

@section('content')
        <h1 class= "text-center">Visualizar</h1><hr>

             <div class="col-8 m-auto">
                 @php
                 $user = $candidato->find($candidato->id)->relUsers;
                 @endphp
                 Nome:{{$candidato->name}}<br>
                 Local de Trabalho :{{$candidato->localtrabalho}}<br>
                 EStado civil :{{$candidato->estadocivil}}<br>
                 Casa propria :{{$candidato->casapropria}}<br>
                 Emprego Formal :{{$candidato->empregoformal}}<br>
                 Teve Credito :{{$candidato->tevecredito}}<br>
                 id_user : {{$user ->name}}<br>
                 email do usuario :{{$user->email }}<br>

             </div>
@endsection
