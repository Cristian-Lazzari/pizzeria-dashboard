@extends('layouts.app')
@section('content')
<div class="container">
    <h1>BENVENUTO NELL'AREA ADMIN DEL TUO SITO</h1>
    <p>Accedi con le tue credenziali</p>

    <a class="btn btn-outline-primary" href="{{ route('login') }}">{{ __('Login') }}</a>

</div>
@endsection