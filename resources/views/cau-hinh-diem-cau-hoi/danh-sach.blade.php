@extends('layout')
@section('content')
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Cấu hình Điểm</h4>
                                <a href="{{route('cau-hinh-diem-cau-hoi.them-moi')}}" class="btn btn-info waves-effect waves-light"><i class="  la la-plus-square">Thêm cấu hình điểm</i></a>                             
                                <table id="cau-hinh-diem-cau-hoi-table" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Thứ tự</th>
                                            <th>Điểm</th> 
                                           
                                            <th></th>
                                            
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                        @foreach( $dsCauHinhDiem as $cauHinhDiem)
                                        <tr>
                                            <td>{{ $cauHinhDiem->id }}</td>
                                            <td>{{ $cauHinhDiem->thu_tu}}</td>
                                            <td>{{ $cauHinhDiem->diem}}</td>
                                            <td>
                                            <a href="{{ route('cau-hinh-diem-cau-hoi.cap-nhat',['id' => $cauHinhDiem ->id]) }}" class="btn btn-success waves-effect waves-light"><i class=" la la-edit"></i></a>
                                            <a href="{{ route('cau-hinh-diem-cau-hoi.xoa',['id' => $cauHinhDiem ->id]) }}" class="btn btn-danger waves-effect waves-light"><i class=" far fa-trash-alt"></i></a>
                                            </td>   
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
@endsection

@section('css')
<!-- third party css -->
<link  href="{{asset('assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link  href="{{asset('assets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link  href="{{asset('assets/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link  href="{{asset('assets/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<!-- third party css end -->
@endsection

@section('js')
<!-- third party js -->
<script src="{{asset('assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables/dataTables.select.min.js')}}"></script>
<script src="{{asset('assets/libs/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/libs/pdfmake/vfs_fonts.js')}}"></script>
<!-- third party js ends -->

<script type="text/javascript">
    $(document).ready(function(){
        $("#cau-hinh-diem-cau-hoi-table").DataTable({
            language:{
                paginate:{
                previous:"<i class='mdi mdi-chevron-left'>",
                next:"<i class='mdi mdi-chevron-right'>"
                    }
                },
            drawCallback:function(){
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
             }
            });
    });
</script>
@endsection