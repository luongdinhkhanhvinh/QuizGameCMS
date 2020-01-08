 @extends('layout')
@section('content')
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh Sách Lĩnh Vực  </h4>
                                <a href="{{route('linh-vuc.them-moi')}}" class="btn btn-info waves-effect waves-light"><i class="  la la-plus-square">Thêm Lĩnh Vực</i></a>  
                                <div class="col-lg-12">
                                    @if(Session::has('flash_message'))
                                        <div class="alert alert-success">
                                            {!! Session::get('flash_message')!!}
                                        </div>
                                        @endif
                                </div>                           
                                <table id="linh-vuc-table" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên lĩnh vực</th>
                                            <th>Sửa|Xóa </th>
                                            
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                        @foreach($dsLinhVuc as $linhVuc)
                                        <tr>
                                            <td>{{ $linhVuc->id }}</td>
                                            <td>{{ $linhVuc->ten_linh_vuc }}</td>
                                            <td>
                                            <a href="{{ route('linh-vuc.cap-nhat',['id' => $linhVuc ->id]) }}" class="btn btn-success waves-effect waves-light"><i class=" la la-edit"></i></a>
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
                                                            open("{{ route('linh-vuc.xoa',['id' => $linhVuc ->id]) }}","_self")
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
<link  href="{{asset('assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css"/>
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
<script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

        <!-- Sweet alert init js-->
<script src="{{asset('assets/js/pages/sweet-alerts.init.js')}}"></script>     

<!-- third party js ends -->

<script type="text/javascript">
    $(document).ready(function(){
        $("#linh-vuc-table").DataTable({
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