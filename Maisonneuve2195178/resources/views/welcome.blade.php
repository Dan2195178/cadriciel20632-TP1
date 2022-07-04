@extends('layouts.app')
@section('content')
<div class="container bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/6.jpg');
            height: 100vh">
        <div class="row bg-dark bg-gradient pb-5 bg-opacity-75 flex-column justify-content-center" style="height:100%;">
            <div class="col-12 text-center pt-5">
                <div class="display-one mt-5 text-white">COLLÈGE MAISONNEUVE - {{ config('app.name') }}</div>
                <h1 class="mt-2 opacity-100 text-white">GESTION DES ÉTUDIANTS </h1>
                <!-- <a href="etudiants" class="btn btn-outline-primary mt-3 text-white">ENTRER</a> -->
                <a href="{{ route('etudiants') }}" class="btn btn-outline-primary mt-3 text-white">ENTRER</a>
            </div>
        </div>
</div>

@endsection