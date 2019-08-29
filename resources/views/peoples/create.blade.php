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
                    <form action="{{route('person.store')}}" method="post">
                        @csrf
                        @include('peoples.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection