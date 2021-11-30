@extends('layouts.master')

@section('content')
    <body>
        <div class="register-card">
            <div class="register-title">Masuk</div>
            <div class="register-body">
                {{-- @include('component.alert') --}}
                {{-- {{ route('login.user.post') }} --}}
                <form action="" method="post">
                    @csrf
                    <div class="register-form">
                        <div class="register-isi">
                            <label for="username" class="register-label">Username</label>
                            <input type="text" name="username" class="register-input" placeholder="Username">
                        </div>

                        <div class="register-isi">
                            <label for="password" class="register-label">Password</label>
                            <input type="password" name="password" class="register-input" placeholder="Password">
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
    </body>
@endsection