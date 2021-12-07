<div class="content-home">
    <form action="/" class="search-bar" >
        <input class="search" type="text" name="search" value="{{ request('search') }}" placeholder="Search...">
        <button class="button" type="submit" >Search</button>
    </form>
    <div class="add-laporan">
        <a href="/buat-laporan">Buat Laporan/Komentar</a>
        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 0C10.3008 0.0446294 6.76575 1.53395 4.14985 4.14985C1.53395 6.76575 0.0446294 10.3008 0 14C0.0446294 17.6992 1.53395 21.2343 4.14985 23.8501C6.76575 26.466 10.3008 27.9554 14 28C17.6992 27.9554 21.2343 26.466 23.8501 23.8501C26.466 21.2343 27.9554 17.6992 28 14C27.9554 10.3008 26.466 6.76575 23.8501 4.14985C21.2343 1.53395 17.6992 0.0446294 14 0V0ZM22 15H15V22H13V15H6V13H13V6H15V13H22V15Z" fill="#AB0B20"/>
        </svg>                                        
    </div>
    @if ($listLaporan->count() > 0)
        <div class="list-laporan">                
            <p>Laporan Terkini</p>
            <hr>
            @foreach ($listLaporan as $laporan)
                <div class="detail-laporan" id="{{ $laporan->id }}">
                    <h3>{{ $laporan->title }}</h3>
                    <p>{{ $laporan->description }}</p>
                    <div class="lampiran">
                        <p>Lampiran</p>
                        <p>{{ $laporan->category->name }}</p>
                        <div class="time">
                            <p>Waktu: {{ $laporan->created_at }}</p>
                            <a href="/detail/{{ $laporan->id }}">Lihat selengkapnya > </a>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    @else
        <div class="list-laporan">
            <p>Laporan Terkini</p>
            <hr>
            <div class="detail-laporan">
                <h3>Laporan atau Komentar Tidak Ditemukan !</h3>
            </div>
        </div>
    @endif

    {{-- {{ $listLaporan->links() }} --}}
    {{ $listLaporan->links('components.pagination') }}
</div>