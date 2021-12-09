@extends('layouts.master')

@section('content')

@auth
    @include('components.navbarAuth')  
    @include('components.alertPost')
    @include('components.laporanList')

@else

    @include('components.navbarGuest')
    @include('components.laporanList')

@endauth

@endsection