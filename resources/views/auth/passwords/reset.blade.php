@extends('layouts.master')

@section('content')

    <div class="d-flex justify-content-center py-3">

        <h2 class="text-white">Đăng nhập</h2>

    </div>
    <div class="d-flex justify-content-center form_container">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="input-group mb-3">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                </div>
                <input type="email" name="email" class="form-control input_user @error('email') is-invalid @enderror"
                       value="{{ $email ?? old('email') }}" placeholder="Nhập Email" required>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="input-group mb-2">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" name="password"
                       class="form-control input_pass @error('password') is-invalid @enderror" value=""
                       placeholder="Nhập password" required>
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="input-group mb-2">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" name="password_confirmation"
                       class="form-control input_pass @error('password') is-invalid @enderror" value=""
                       placeholder="Nhập lại password" required>
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div class="d-flex justify-content-center mt-3 login_container">
                <button type="submit" name="button" class="btn login_btn">Đổi mật khẩu</button>
            </div>
        </form>


    </div>

@endsection
