@extends('layouts.master')

@section('content')
    <body>
        <div class="register-card">
            <div class="register-title">Daftar</div>
            <div class="register-body">
                <form method="post" action="">
                    @csrf
                    <div class="register-form">
                        <div class="register-isi">
                            <label for="name" class="register-label">Nama Lengkap</label>
                            <input type="text" name="name" class="register-input" placeholder="Nama Lengkap" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="register-isi">
                            <label for="username" class="register-label">Username</label>
                            <input type="text" name="username" class="register-input" placeholder="Username" value="{{ old('username') }}" required>
                        </div>

                        <div class="register-isi">
                            <label for="email" class="register-label">Email</label>
                            <input type="email" name="email" class="register-input" placeholder="Email" value="{{ old('email') }}" required>
                        </div>

                        <div class="register-isi">
                            <label for="password" class="register-label">Password</label>
                            <input type="password" name="password" class="register-input @error('password') is-invalid @enderror" placeholder="Password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="register-isi">
                            <label for="password-confirm" class="register-label">Password Konfirmasi</label>
                            <input type="password" name="password_confirmation" class="register-input @error('password') is-invalid @enderror" placeholder="Password Konfirmasi" required>
                        </div>

                        <div class="register-isi">
                            <label for="no-telepon" class="register-label">Nomor Telepon</label>
                            <input type="number" name="telp" class="register-input" placeholder="No. Telepon" value="{{ old('telp') }}" required>
                        </div>                        
                    </div>
                    
                    <div class="register-submit">
                        <button type="submit" class="button">DAFTAR</button>
                    </div>
                </form>
            </div>
            <div class="footer">
                <div>Anda sudah terdaftar?</div>
                <a class="daftar" href="/login">MASUK SEKARANG</a>
            </div>
        </div>            
    </body>
@endsection