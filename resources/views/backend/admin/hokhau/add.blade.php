@extends('backend.layouts.master')
@section('title','Thêm hộ khẩu')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    @include('backend.partials.content-header',['title' => 'Thêm hộ khẩu','chuyen_muc'=>'Hộ khẩu'])
    <!-- Main content -->

    <div class="content">
        <!-- /.content -->
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mahokhau">Mã Hộ Khẩu</label>
                                    <input type="text" class="form-control" id="mahokhau" placeholder="HK001">
                                </div>
                                <div class="form-group">
                                    <label for="mahokhau">Số CMND/CCCD Chủ Hộ</label>
                                    <input type="text" class="form-control" id="mahokhau" placeholder="019199003997">
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" class="">
                                    <span>Click vào ô bên cạnh nếu để trống chủ hộ</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mahokhau">Thường Trú</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">chọnCHọn</option>
                                        <option value="1">Thái nguyên 1</option>
                                        <option value="2">Thái nguyên 2</option>
                                        <option value="3">Thái nguyên 33</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="mahokhau">Tên Chủ Hộ</label>
                                    <input type="text" class="form-control" id="mahokhau" placeholder="Nguyễn Văn A">
                                </div>

                            </div>
                        </div>
                        <div>
                            <div class="pl-4"></div>
                            <button type="submit" class="btn btn-primary">Gửi</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>



@endsection
