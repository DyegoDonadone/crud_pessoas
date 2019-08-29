@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            @include('partials.menu')
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Pessoas</div>
                <div class="col-md-12">
                    @include('peoples.filters.filter')
                </div>
                
                <table class="table m-t-10">
                    <thead class="thead-blue">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">CPF/CNPJ</th>
                        <th scope="col" width="150px">Ação</th>
                        </tr>
                    </thead>

                    @if(count($person))
                        @foreach($person as $people) 
                            <tbody>
                                <tr>
                                    <th scope="row">{{$people->id}}</th>
                                    <td>{{($people->class == 0) ? $people->name : $people->corporate_name}}</td>
                                    <td>{{$people->cpf_cnpj}}</td>
                                    <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Opções
                                        <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Editar</a></li>                                           
                                            <li><a href="{{route('person.destroy', [$people->id])}}">Excluir</a></li>
                                        </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    @else
                        <tbody>
                            <tr>
                                <td> Não há pessoas cadastradas</td>
                            </tr>
                        </tbody>
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>
@endsection