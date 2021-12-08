<div class="top-background">
    <div class="logo">
        <div class="left-menu">
            <img src="{{ asset('assets') }}/images/logo-itera.png">
            <h1 class="user-info">Welcome {{ auth()->user()->name }}</h1>
            <a href="/home">HOME</a>
            <a href="/buat-laporan">LAPOR</a>
        </div>
        <div class="nav-bar">            
            <form action="/logout" method="post" class="logout-button">
                @csrf
                <button type="submit" class="btn btn-danger">KELUAR</button>
            </form>
        </div>                
    </div>            
    <div class="desc-page">
        <h1>Layanan Aspirasi dan Pengaduan Online Prodi Teknik Informatika ITERA</h1>
        <p>Sampaikan laporan atau komentar Anda langsung </p>
    </div>            
</div>

