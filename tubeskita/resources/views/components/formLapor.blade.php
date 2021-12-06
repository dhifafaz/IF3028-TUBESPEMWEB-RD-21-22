
<div class="content">
    <h1> 
        Sampaikan Laporan Anda !
    </h1>

    <form action="/lapor" method="post" class="form-lapor">
        @csrf
        <div class="tipe-laporan">
            <p>Pilih Tipe Laporan</p>
            <div class="d-flex mb-5">
                {{-- class="form-type-lapor" --}} <input type="radio" name="type_laporan" name="laporan_type_id" value="1102"> Pengaduan                            
                {{-- class="form-type-lapor" --}} <input type="radio" name="type_laporan" name="laporan_type_id" value="1102"> Aspirian                            
                {{-- class="form-type-lapor" --}} <input type="radio" name="type_laporan" name="laporan_type_id" value="1102"> Permintaan Informasi 
            </div>
        </div>
        

        <div class="title-laporan">
            <label for="title">Judul Laporan</label>
            <input type="text" placeholder="Ketik Judul laporan Anda*" name="title" class="form-text-box">
        </div>
        
        {{-- @include('component.inputAlert', ['name' => 'title']) --}}

        <div class="detail-laporan">
            <label for="laporan">Isi Laporan</label>
            <textarea name="laporan" id="" placeholder="Ketik Isi Laporan Anda*" class="form-text-box" rows="5"></textarea>
        </div>
        
        {{-- @include('component.inputAlert', ['name' => 'laporan']) --}}

        {{-- onfocus="(this.type='date')" --}}
        <div class="date-laporan">
            <label for="tgl_kejadian">Tanggal Kejadian</label>
            <input type="date" placeholder="Tanggal Kejadian*" name="tgl_kejadian" class="form-text-box">
        </div>
        
        {{-- @include('component.inputAlert', ['name' => 'tgl_kejadian']) --}}

        <div class="location-laporan">
            <label for="location">Lokasi Kejadian</label>
            <select name="location" id="" class="form-text-box" style="width: 99%">
                <option value="" disabled selected>Lokasi Kejadian</option>
                @foreach ($listLokasi as $city)
                    <option value="{{$city->id}}">{{ucwords($city->name)}}</option>
                @endforeach
            </select>
        </div>
        
        {{-- @include('component.inputAlert', ['name' => 'location']) --}}

        <div class="instansi-laporan">
            <label for="instansi_tujuan">Instansi Tujuan</label>
            <select name="instansi_tujuan" id="" class="form-text-box" style="width: 99%">
                <option value="" disabled selected>Instansi Tujuan</option>
                @foreach ($listInstansi as $instansi)
                    <option value="{{$instansi->id}}">{{ucwords($instansi->name)}}</option>
                @endforeach
            </select>
        </div>
        
        {{-- @include('component.inputAlert', ['name' => 'instansi_tujuan']) --}}

        <div class="category-laporan">
            <label for="category">Kategori Laporan</label>
            <select name="category" id="" class="form-text-box" style="width: 99%">
                <option value="" disabled selected>Pilih Kategori Laporan Anda</option>
                @foreach ($listKategori as $kategori)
                    <option value="{{$kategori->id}}">{{ucwords($kategori->name)}}</option>
                @endforeach
            </select>
        </div>
        
        {{-- @include('component.inputAlert', ['name' => 'category']) --}}

        <hr style="width: 99%">

        <div class="d-flex space-bettwen">
            <div class="file">
                <span>Lampiran</span>
                <input type="file" class="custom-button" name="lampiran" id="">
            </div>
            <div class="send">
                <div class="input-submit">
                    <input type="radio" name="anonim" id="" value="1" class="radio-subs"><span class="radio-sub">Anonim</span>
                    <input type="radio" name="rahasia" id="" value="0" class="radio-subs"><span class="radio-sub">Rahasia</span>                    
                </div>
                <div class="btn-submit">
                    <input type="submit" value="Lapor!" class="btn-lapor">
                </div>

            </div>
        </div>
    </form>
</div>