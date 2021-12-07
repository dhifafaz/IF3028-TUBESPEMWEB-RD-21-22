@extends('layouts.master')

@section('content')

@auth

    @include('components.navbarAuth')    
    @include('components.laporanList')

@else

    @include('components.navbarGuest')
    @include('components.laporanList')

@endauth

@endsection