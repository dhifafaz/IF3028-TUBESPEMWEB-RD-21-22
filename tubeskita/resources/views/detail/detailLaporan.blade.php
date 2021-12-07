@extends('layouts.master')
        
@section('css')
    <link rel="stylesheet" href="{{ asset('assets') }}/css/Detail.css">
@endsection

@section('content')
    @include('components.navbarAuth')
        <div class="content-detail">
            <div class="detail">
                <p>Detail Laporan</p>
                <hr>
                <p>lorem ipsum dolor sit amet, consectetur adipis lorem ipsum lorem ipsum dolor sit amet, consectetur adipis lorem ipsum lorem Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </p>
            </div>
            <div class="lampiran">
                <p>Lampiran :</p>
                <img src="{{ asset('assets') }}/images/logo.png" width="100px">
            </div>
            <div class="detail-bawah">
                <div class="keterangan">
                    <div class="waktu">
                        <p>Waktu : 20-11-2021 20.00</p>
                    </div>
                    <div class="aspek">
                        <p>Aspek : Infrastruktur</p>
                    </div>
                </div>                
                <div class="hapus">
                    <button type="button" class="hapus-button">Hapus</button>
                </div>                
            </div>
            
        </div>
@endsection
