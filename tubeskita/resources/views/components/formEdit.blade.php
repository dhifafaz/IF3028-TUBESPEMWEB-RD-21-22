
<div class="content">
    <h1> 
        Sampaikan Laporan Anda !
    </h1>

    <form action="/home/detail/{{ $laporan->id }}" method="post" class="form-lapor" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    
        <div class="tipe-laporan">
            <p>Pilih Tipe Laporan</p>
            <div class="d-flex mb-5">
                @if ($laporan->laporan_type_id == 1401)
                    <input type="radio" name="laporan_type_id" value="1401" checked="checked"> Laporan   
                    <input type="radio" name="laporan_type_id" value="1402"> Komentar
                @else                       
                    <input type="radio" name="laporan_type_id" value="1401" checked="checked"> Laporan   
                    <input type="radio" name="laporan_type_id" value="1402" checked="checked"> Komentar
                @endif                           
            </div>
        </div>
        

        <div class="title-laporan">
            <label for="title">Judul Laporan</label>
            <input type="text" placeholder="Ketik Judul laporan Anda*" name="title" class="form-text-box" value="{{ old('title', $laporan->title) }}" required>
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="detail-laporan">
            <label for="description">Isi Laporan</label>
            <textarea name="description" id="" placeholder="Ketik Isi Laporan Anda*" class="form-text-box" rows="15" required>{{Request::old('description', $laporan->description) }}</textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="date-laporan">
            <label for="tgl_kejadian">Tanggal Kejadian</label>
            <input type="date" placeholder="Tanggal Kejadian*" name="tgl_kejadian" class="form-text-box" value="{{ old('tgl_kejadian', $laporan->tgl_kejadian) }}" required>
            @error('tgl_kejadian')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="category-laporan">
            <label for="category_id">Kategori Laporan</label>
            <select name="category_id" id="" class="form-text-box" style="width: 99%">
                <option value="" disabled>Pilih Kategori Laporan</option>
                
                @foreach ($listCategory as $category)
                    @if (old('category_id', $laporan->category_id) == $category->id)
                        <option value="{{ $category->id }}" selected >{{ ucwords($category->name) }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                    @endif
                @endforeach
            </select>
            @error('category')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <input type="hidden" name="status_id" value="1201">

        <hr style="width: 99%">

        <div class="d-flex space-bettwen">
            <div class="file">
                <span>Lampiran</span>
                <input type="file" class="custom-button" name="lampiran" id="">
                @error('lampiran')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="send">
                <div class="input-submit">
                @if ($laporan->anonim == 1)
                    <input type="radio" checked="checked" name="anonim" id="" value="1" class="radio-subs"><span class="radio-sub">Anonim</span>
                    <input type="radio" name="anonim" id="" value="0" class="radio-subs"><span class="radio-sub">Publik</span>                    
                @else
                    <input type="radio" name="anonim" id="" value="1" class="radio-subs"><span class="radio-sub">Anonim</span>
                    <input type="radio" checked="checked" name="anonim" id="" value="0" class="radio-subs"><span class="radio-sub">Publik</span>                    
                @endif
                </div>
                <div class="btn-submit">
                    <input type="submit" value="Edit Laporan" class="btn-lapor">
                </div>

            </div>
        </div>
    </form>
</div>