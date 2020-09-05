
@extends ('templates.template')

@section('content')
<h1 class= "text-center" >SISTEMA DE GESTÃO DE CANDIDATO A CRÉDITO</h1><hr>
   <div class="text-center mt-3 mb-4 p-2">
    <a href="{{url('candidatos/create')}}">
        <button class="btn btn-success">Cadastro de candidatos</button>
    </a>
  </div>
  <div class="col-8 m-auto ">
    @csrf
      <table class="table text-center" >
           <thead class="thead-dark">
              <tr>
                    <th scope="col">id</th>
                    <th scope="col">id_user</th>
                    <th scope="col">nome</th>
                    <th scope="col">localtrabalho</th>
                    <th scope="col">estadocivil</th>
                    <th scope="col">casapropria</th>
                    <th scope="col">empregoformal</th>
                    <th scope="col">tevecredito</th>
                    <th scope="col">Actions</th>
              </tr>
             </thead>
             <tbody>
                 @foreach($candidato as $candidatos)
                 @php
                 $user = $candidatos->find($candidatos->id)->relUsers;
                  @endphp

                                 <tr>
                                        <th scope="row">{{$candidatos->id}}</th>
                                        <th>{{$candidatos->id_user}}</th>
                                        <th>{{$candidatos->name}}</th>
                                        <th>{{$candidatos->localtrabalho}}</th>
                                        <th>{{$candidatos->estadocivil}}</th>
                                        <th>{{$candidatos->casapropria}}</th>
                                        <th>{{$candidatos->empregoformal}}</th>
                                         <th>{{$candidatos->tevecredito}}</th>
                                        <td>
                                                   <th> <a  href="{{url("candidatos/$candidatos->id")}}">
                                                   <button class="btn btn-dark">Visualizar</button>
                                                    </th> </a>


                                              <th> <a href= "{{url("candidatos/$candidatos->id/edit")}}">
                                                <button class= "btn btn-primary">Editar</button>
                                                </th> </a>
                                              <th> <a href ="{{url("candidatos/$candidatos->id")}}" class ="js-del">
                                                <button class="btn btn-danger">delete</button>
                                              </th> </a>
                                        </td>
                                 </tr>
                @endforeach
          </tbody>
      </table>

    </div>
@endsection
