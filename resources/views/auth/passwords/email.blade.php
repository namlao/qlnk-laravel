@extends('layouts.master')

@section('content')

    <div class="d-flex justify-content-center py-3">

        <h2 class="text-white">Reset mật khẩu</h2>

    </div>
    <div class="d-flex justify-content-center form_container">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                </div>
                <input type="email" name="email" class="form-control input_user @error('email') is-invalid @enderror"
                       value="" placeholder="Nhập Email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div class="d-flex justify-content-center mt-3 login_container">
                <button type="submit" name="button" class="btn login_btn">Gửi link reset mật khẩu cho tôi</button>
            </div>
        </form>


    </div>

    <div class="mt-4">

        <div class="d-flex justify-content-center links">
            <a class="btn btn-link" href="{{ route('login') }}">
                {{ __('Đã nhớ mật khẩu?') }}
            </a>
        </div>
    </div>
@endsection
