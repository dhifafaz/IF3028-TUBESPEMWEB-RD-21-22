@extends('layouts.master')
        
@section('css')
    <link rel="stylesheet" href="{{ asset('assets') }}/css/Detail.css">
@endsection

@section('content')
    @include('components.navbarAuth')
        <div class="content-detail">
            <div class="detail">
                <p>Detail Laporan</p>
                <a href="/">Kembali ke home</a>
                <hr>
                <h1>{{ $laporan->title }}</h1>
                @if ($laporan->anonim == 1)
                    <p>{{ $laporan->type->name }} - dibuat secara Anonim</p>
                @else
                    <p>{{ $laporan->type->name }} - dibuat oleh {{ $laporan->user->name }} </p>
                @endif
                <p>{{ $laporan->description }}</p>
                <p>Waktu kejadian : {{ $laporan->tgl_kejadian }}</p>
            </div>
            <div class="lampiran">
                <p>Lampiran :</p>
                @if (pathinfo($laporan->lampiran, PATHINFO_EXTENSION) == 'jpg' 
                    || pathinfo($laporan->lampiran, PATHINFO_EXTENSION) == 'png'
                    || pathinfo($laporan->lampiran, PATHINFO_EXTENSION) == 'svg'
                    || pathinfo($laporan->lampiran, PATHINFO_EXTENSION) == 'raw'
                    || pathinfo($laporan->lampiran, PATHINFO_EXTENSION) == 'gif'
                    || pathinfo($laporan->lampiran, PATHINFO_EXTENSION) == 'jpeg'
                    || pathinfo($laporan->lampiran, PATHINFO_EXTENSION) == 'tiff')
                    <div class="lampiran-img">
                        <img src="{{ asset('storage') }}/lampiran/{{ $laporan->lampiran }}" alt="">
                    </div>
                @else
                <div class="dTugas-material" onclick="alert('Opening Materi....')">
                    <img class="dTugas-material-img dTugas-img" src="{{ asset('assets') }}/images/folders.png">
                    <div class="dTugas-material-info">
                        <div class="dTugas-material-text">
                            <p class="subheadline dTugas-title text-small">{{ $laporan->lampiran }}.pdf</p>
                            <p class="subheadline text-small">PDF</p>
                        </div>
                        <a href="{{ asset('storage') }}/lampiran/{{ $laporan->lampiran}}">
                            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle opacity="0.2" cx="14.2422" cy="14.2407" r="14" fill="#3991C9"/>
                                <path d="M14.3229 16.5312L14.3229 8.50391" stroke="#3991C9" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.2676 14.5796L14.3236 16.5316L12.3796 14.5796" stroke="#3991C9" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.4122 11.6592H18.0342C19.3909 11.6592 20.4902 12.7585 20.4902 14.1158V17.3718C20.4902 18.7252 19.3936 19.8218 18.0402 19.8218H10.6136C9.2569 19.8218 8.1569 18.7218 8.1569 17.3652L8.1569 14.1085C8.1569 12.7558 9.25424 11.6592 10.6069 11.6592H11.2349" stroke="#3991C9" stroke-width="1.27932" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                @endif
                {{-- <img src="{{ asset('assets') }}/images/logo.png" width="100px"> --}}
            </div>
            <div class="detail-bawah">
                <div class="keterangan">
                    <div class="waktu">
                        <p>Waktu : {{ $laporan->created_at }}</p>
                    </div>
                    <div class="aspek">
                        <p>Aspek : {{ $laporan->category->name }}</p>
                    </div>
                </div>                
                <div class="hapus">
                    <button type="button" class="hapus-button">Hapus</button>
                </div>                
            </div>
        
        </div>
@endsection
