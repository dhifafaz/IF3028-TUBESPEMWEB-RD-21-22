@extends('layouts.master')

@section('content')
        <div class="logo-regist">
            <img src="{{ asset('assets') }}/images/logo-itera.png">
        </div>
        <div class="register-card">
            <div class="register-title">Daftar</div>
            <div class="register-body">
                <form action="/register" method="post" >
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

                        <input type="hidden" name="role_id" class="register-input" placeholder="role_id" value="1002">

                        <div class="register-isi">
                            <label for="email" class="register-label">Email</label>
                            <input type="email" name="email" class="register-input" placeholder="Email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="register-isi">
                            <label for="username" class="register-label">Username</label>
                            <input type="text" name="username" class="register-input" placeholder="Username" value="{{ old('username') }}" required>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="register-isi">
                            <label for="no-telepon" class="register-label">Nomor Telepon</label>
                            <input type="text" name="telp" class="register-input" placeholder="No. Telepon" value="{{ old('telp') }}" required>
                            @error('telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
                            <label for="password_confirmation" class="register-label">Password Konfirmasi</label>
                            <input type="password" name="password_confirmation" class="register-input @error('password') is-invalid @enderror" placeholder="Password Konfirmasi" required>
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>

                    <div class="register-submit">
                        <button type="submit" class="button">DAFTAR</button>
                    </div>
                </form>
            </div>
            <div class="footer">
                <div>
                    <p>Anda sudah terdaftar?</p>
                </div>
                <div>
                    <a class="daftar" href="/login">MASUK SEKARANG</a>
                </div>                
            </div>
        </div>        
        <div class="back-btn">
            <a href="/">KEMBALI KE BERANDA</a>
        </div>

@endsection