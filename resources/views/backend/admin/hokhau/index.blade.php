@extends('backend.layouts.master')
@section('title','Danh sách hộ khẩu')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('js')
    <script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
{{--    <script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>--}}
{{--    <script src="{{ asset('backend/plugins/jszip/jszip.min.js')}}"></script>--}}
{{--    <script src="{{ asset('backend/plugins/pdfmake/pdfmake.min.js')}}"></script>--}}
{{--    <script src="{{ asset('backend/plugins/pdfmake/vfs_fonts.js')}}"></script>--}}
{{--    <script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>--}}
{{--    <script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>--}}
{{--    <script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>--}}
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": true, "autoWidth": false,

            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,

            });
        });
    </script>
@endsection

@section('content')
    @include('backend.partials.content-header',['title' => 'Danh sách hộ khẩu','chuyen_muc'=>'Hộ khẩu'])
    <!-- Main content -->

    <div class="content">
        <!-- /.content -->
        <div class="container-fluid">

            <div class="row">
                <div class=" col-md-12 mb-4 text-right">
                    <a href="{{ route('hokhau.create') }}" class="btn btn-primary">Thêm Hộ Khẩu</a>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Mã Hộ Khẩu</th>
                                    <th>Tên chủ hộ</th>
                                    <th>Hộ khẩu thường trú</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($hokhaus as $hokhau)
                                    <tr>
                                        <td>
                                            {{ $hokhau->mahk }}
                                        </td>
                                        <td>{{ $hokhau->tench }}</td>
                                        <td>{{ $hokhau->diachi }}</td>
                                        <td>
                                            <a href="" class="btn btn-primary">Xem</a>
                                            <a href="" class="btn btn-secondary">Sửa</a>
                                            <a href="" class="btn btn-danger">Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Mã Hộ Khẩu</th>
                                    <th>Tên chủ hộ</th>
                                    <th>Hộ khẩu thường trú</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



@endsection
