@extends('layouts.master')

@section('content')
    
        <div class="register-card">
            <div class="register-title">Masuk</div>
            @if(session()->has('success'))
                <div class="alert-success">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    <strong>{!! session('success') !!}</strong>
                </div>
            @endif

            @if(session()->has('loginError'))
                <div class="alert-success">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    <strong>{!! session('loginError') !!}</strong>
                </div>
            @endif
            <div class="register-body">
                {{-- @include('component.alert') --}}
                {{-- {{ route('login.user.post') }} --}}
                
                <form action="/login" method="post">
                    @csrf
                    <div class="register-form">
                        <div class="register-isi">
                            <label for="email" class="register-label">Email</label>
                            <input type="text" name="email" class="register-input" placeholder="Email" value="{{ old('email') }}" required>
                            @error('email')
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
                    </div>
                    <div class="register-submit">
                        <button type="submit" class="button">MASUK</button>
                    </div>
                </form>
                
            </div>
            <div class="footer">
                <div>Anda belum memiliki akun?</div>
                <a class="daftar" href="/register">DAFTAR SEKARANG</a>
            </div>
        </div>            
    
@endsection