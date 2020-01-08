@extends('layout')
@section('content')
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh Sách Câu Hỏi</h4>
                                <a href="{{route('cau-hoi.them-moi')}}" class="btn btn-info waves-effect waves-light"><i class="  la la-plus-square">Thêm Câu Hỏi</i></a>   
                                <div class="col-lg-12">
                                    @if(Session::has('flash_message'))
                                        <div class="alert alert-success">
                                            {!! Session::get('flash_message')!!}
                                        </div>
                                        @endif
                                </div>                                                      
                                <table id="cau-hoi-table" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nội dung</th>
                                            <th>Lĩnh vực</th>
                                            <th>Phương án A</th>
                                            <th>Phương án B</th>
                                            <th>Phương án C</th>
                                            <th>Phương án D</th>
                                            <th>Đáp án</th>
                                            <th></th>
                                            
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                        @foreach($dsCauHoi as $cauHoi)
                                        <tr>
                                            <td>{{ $cauHoi->id }}</td>
                                            <td>{{ $cauHoi->noi_dung }}</td>
                                            <td>{{ $cauHoi->linhVuc->ten_linh_vuc }}</td>
                                            <td>{{ $cauHoi->phuong_an_a }}</td>
                                            <td>{{ $cauHoi->phuong_an_b }}</td>
                                            <td>{{ $cauHoi->phuong_an_c }}</td>
                                            <td>{{ $cauHoi->phuong_an_d }}</td>
                                            <td>{{ $cauHoi->dap_an }}</td>
                                            <td>
                                            <a href="{{ route('cau-hoi.cap-nhat',['id' => $cauHoi ->id]) }}" class="btn btn-success waves-effect waves-light"><i class=" la la-edit"></i></a>
                                            <a onclick="del()" href="#" class="btn btn-danger waves-effect waves-light"><i class=" far fa-trash-alt"></i></a>
                                            <script>
                                                function del(){
                                                   Swal.fire({
                                                        title:'Bạn có chắc muốn xóa ?',
                                                        type:'warning',
                                                        showCancelButton:true,
                                                        confirmButtonColor:'#3085d6',
                                                        CancelButtonColor:'#d33',
                                                        confirmButtonText:'Có',
                                                        CancelButtonText:'Không'
                                                    }).then((result)=>{
                                                        if(result.value){
                                                            open("{{ route('cau-hoi.xoa',['id' => $cauHoi ->id]) }}","_self")
                                                        }
                                                    })
                                                };
                                            </script>
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
 <!-- Sweet alert init js-->
<script src="{{asset('assets/js/pages/sweet-alerts.init.js')}}"></script>     

<script type="text/javascript">
    $(document).ready(function(){
        $("#cau-hoi-table").DataTable({
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
