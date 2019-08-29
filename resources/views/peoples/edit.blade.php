@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            @include('partials.menu')
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('person.index')}}">Pessoas</a> <i class="fa fa-arrow-right"></i> Cadastro
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <select name="class" id="person_tipe" class="form-control" required readonly="readonly">
                                    <option value="">Selecione o Tipo</option>
                                    @foreach(config('helpers.people_type') as $key => $value)
                                        <option value="{{$key}}" {{($person->class == $key ? 'selected' : '')}}>
                                            {{$value}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form_display">
                            <div class="col-md-4 fisica">
                            <label for="">Nome: <input type="text" name="name" value="{{$person->name}}" class="form-control"/></label>
                            </div>

                            <div class="col-md-4 juridica">
                            <label for="">Razão Social <input type="text" name="corporate_name" value="{{$person->corporate_name}}" class="form-control"/></label>
                            </div>

                            <div class="col-md-2 fisica">
                                <label for=""> Sexo: 
                                    <select name="sex" class="form-control">
                                        @foreach(config('helpers.sex') as $key => $value)
                                            <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>

                            <div class="col-md-4">
                            <label for=""><span id="cpf_cnpj"></span>
                                <input type="text" name="cpf_cnpj" value="{{$person->cpf_cnpj}}" class="cpf_cnpj all form-control"/>
                            </label>
                            </div>

                            <div class="col-md-4 fisica">
                                <label for="">RG: <input type="text" name="rg" value="{{$person->cpf_cnpj}}" class="form-control"/></label>
                            </div>

                            <div class="col-md-4">
                            <label for=""><span id="datebirth_or_foundation"></span>
                            <input type="date" name="datebirth_or_foundation" value="{{$person->datebirth_or_foundation}}" class="all form-control"/></label>
                            </div>

                            <div class="col-md-4 juridica">
                            <label for=""> Nome Fantasia: <input type="text" name="fantasy_name" class="form-control"/></label>
                            </div>

                            <div class="col-md-4 juridica">
                            <label for="">Inscrição Estadual: <input type="text" name="state_registration" class="form-control"/></label>
                            </div>
                        </div>

                        <div class="row m-t-10">
                            <div class="col-md-12">
                                <input class="btn btn-sm btn-success" type="submit" value="Enviar"/>
                            </div>
                        </div>

                        <script>
                        $( document ).ready(function() {
                                var i = $(this).val();
                                $('.form_display').removeClass('hide');
                                
                                if(i == {{$person->class}}){
                                    $('.juridica').addClass('hide');
                                    $('.fisica').removeClass('hide');
                                    $('#cpf_cnpj').html('CPF: ');
                                    $('#datebirth_or_foundation').html('Data de Nascimento: ');
                                } else {
                                    $('.juridica').removeClass('hide');
                                    $('.fisica').addClass('hide');
                                    $('#cpf_cnpj').html('CNPJ: ');
                                    $('#datebirth_or_foundation').html('Data de Fundação: ');
                                }
                            });
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection