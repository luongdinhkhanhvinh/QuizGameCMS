@extends('layout')
@section('content')
<div class="row">
<div class="col-lg-6">
<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title">@if(isset($cauHinhApp)) Cập Nhật @else Thêm @endif Cấu Hình App </h4>
        @if(isset($cauHinhApp))
         <form action="{{ route('cau-hinh-app.xu-li-cap-nhat',['id'=>$cauHinhApp->id]) }}" method="POST"> 
        @else
        <form action="{{ route('cau-hinh-app.xu-li-them-moi') }}" method="POST"> 
        @endif
            {{@csrf_field()}}     
             <div class="form-group">
                <label for="co_hoi_sai">Cơ hội sai</label>
                <input type="text" class="form-control" id="co_hoi_sai" name="co_hoi_sai" @if(isset($cauHinhApp)) value="{{$cauHinhApp->co_hoi_sai}}"@endif>  
            </div>  
             <div class="form-group">
                <label for="thoi_gian_tra_loi">Thời gian trả lời</label>            
                 <input type="text" class="form-control" id="thoi_gian_tra_loi" name="thoi_gian_tra_loi" @if(isset($cauHinhApp)) value="{{$cauHinhApp->thoi_gian_tra_loi}}"@endif>  
            </div>
           
            <button type="submit" class="btn btn-primary waves-effect waves-light"> @if(isset($cauHinhApp)) Cập Nhật @else Thêm @endif</button>
        </form>

    </div> <!-- end card-body-->
</div> <!-- end card-->
</div>
@endsection


