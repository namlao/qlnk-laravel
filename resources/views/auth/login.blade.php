@extends('layouts.master')

@section('content')

    <div class="d-flex justify-content-center py-3">

        <h2 class="text-white">Đăng nhập</h2>

    </div>
    <div class="d-flex justify-content-center form_container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                </div>
                <input type="email" name="email" class="form-control input_user @error('email') is-invalid @enderror"
                       value="phannhuphuong@email.com" placeholder="Nhập Email">
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
                       class="form-control input_pass @error('password') is-invalid @enderror" value="123456"
                       placeholder="Nhập password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input class="form-check-input" type="checkbox" name="remember"
                           id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="custom-control-label" for="customControlInline">Nhớ mật khẩu</label>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3 login_container">
                <button type="submit" name="button" class="btn login_btn">Đăng nhập</button>
            </div>
        </form>


    </div>

    <div class="mt-4">

        <div class="d-flex justify-content-center links">
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Quên mật khẩu?') }}
            </a>
        </div>
    </div>
@endsection
