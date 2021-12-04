@extends('layouts.master')

@section('content')
@auth
    <form action="/logout" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
    {{-- <a href="/logout">
        Keluar
    </a> --}}
    <h1>Welcome {{ auth()->user()->name }}</h1>
@else
    <a href="/login">
        Masuk
    </a>
    <br/>
    <a href="/register">
        Daftar
    </a>
@endauth

@endsection