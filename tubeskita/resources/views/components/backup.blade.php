
<div class="content">
    <h1> 
        Sampaikan Laporan Anda !
    </h1>

    <form action="/lapor" method="post" class="form-lapor">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <div class="tipe-laporan">
            <p>Pilih Tipe Laporan</p>
            <div class="d-flex mb-5">
                <input type="radio" name="type_laporan" value="1401"> Pengaduan                            
                <input type="radio" name="type_laporan" value="1402"> Aspirian                            
                <input type="radio" name="type_laporan" value="1403"> Permintaan Informasi 
            </div>
        </div>
        

        <div class="title-laporan">
            <label for="title">Judul Laporan</label>
            <input type="text" placeholder="Ketik Judul laporan Anda*" name="title" class="form-text-box"  value="{{ old('title') }}" required>
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="detail-laporan">
            <label for="description">Isi Laporan</label>
            <textarea name="description" id="" placeholder="Ketik Isi Laporan Anda*" class="form-text-box" rows="5" required>{{Request::old('description')}}</textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="date-laporan">
            <label for="tgl_kejadian">Tanggal Kejadian</label>
            <input type="date" placeholder="Tanggal Kejadian*" name="tgl_kejadian" class="form-text-box">
            @error('date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="location-laporan">
            <label for="location">Lokasi Kejadian</label>
            <select name="location" id="" class="form-text-box" style="width: 99%">
                <option value="" disabled selected>Lokasi Kejadian</option>
                @foreach ($listLokasi as $city)
                    <option value="{{$city->id}}">{{ucwords($city->name)}}</option>
                @endforeach
            </select>
            @error('location')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="instansi-laporan">
            <label for="instansi_tujuan">Instansi Tujuan</label>
            <select name="instansi_tujuan" id="" class="form-text-box" style="width: 99%">
                <option value="" disabled selected>Instansi Tujuan</option>
                @foreach ($listInstansi as $instansi)
                    <option value="{{$instansi->id}}">{{ucwords($instansi->name)}}</option>
                @endforeach
            </select>
            @error('instansi_tujuan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="category-laporan">
            <label for="category">Kategori Laporan</label>
            <select name="category" id="" class="form-text-box" style="width: 99%">
                <option value="" disabled selected>Pilih Kategori Laporan Anda</option>
                @foreach ($listKategori as $kategori)
                    <option value="{{$kategori->id}}">{{ucwords($kategori->name)}}</option>
                @endforeach
            </select>
            @error('category')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <hr style="width: 99%">

        <div class="d-flex space-bettwen">
            <div class="file">
                <span>Lampiran</span>
                <input type="file" class="custom-button" name="lampiran" id="">
            </div>
            <div class="send">
                <div class="input-submit">
                    <input type="radio" name="anonim" id="" value="1" class="radio-subs"><span class="radio-sub">Anonim</span>
                    <input type="radio" name="anonim" id="" value="0" class="radio-subs"><span class="radio-sub">Rahasia</span>                    
                </div>
                <div class="btn-submit">
                    <input type="submit" value="Lapor!" class="btn-lapor">
                </div>

            </div>
        </div>
    </form>
</div>