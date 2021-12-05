@extends('layouts.master')

@section('content')

@auth

    <div class="top-background">
        <div class="logo">
            <img src="{{ asset('assets') }}/images/logo-white (1).png">
            <div class="nav-bar">
                <h1 class="user-info">Welcome {{ auth()->user()->name }}</h1>
                <form action="/logout" method="post" class="logout-button">
                    @csrf
                    <button type="submit" class="btn btn-danger">KELUAR</button>
                </form>
            </div>                
        </div>            
        <div class="desc-page">
            <h1>Layanan Aspirasi dan Pengaduan Online Rakyat</h1>
            <p>Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</p>
        </div>            
    </div>
    
    @include('components.formLapor')

@else

    <div class="top-background">
        <div class="logo">
            <img src="{{ asset('assets') }}/images/logo-white (1).png">
            <div class="nav-bar">
                <a href="/login">MASUK</a>
                <a href="/register">DAFTAR</a>
            </div>                
        </div>            
        <div class="desc-page">
            <h1>Layanan Aspirasi dan Pengaduan Online Rakyat</h1>
            <p>Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</p>
        </div>            
    </div>

    @include('components.formLapor')

@endauth

@endsection