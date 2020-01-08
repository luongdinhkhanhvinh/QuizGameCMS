@extends('layout')
@section('content')
<div class="row">
<div class="col-lg-6">
<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title">@if(isset($cauHinhDiem)) Cập Nhật @else Thêm @endif Cấu Hình Điểm </h4>
        @if(isset($cauHinhDiem))
         <form action="{{ route('cau-hinh-diem-cau-hoi.xu-li-cap-nhat',['id'=>$cauHinhDiem->id]) }}" method="POST"> 
        @else
        <form action="{{ route('cau-hinh-diem-cau-hoi.xu-li-them-moi') }}" method="POST"> 
        @endif
             {{@csrf_field()}}      
             <div class="form-group">
                <label for="thu_tu">Thứ tự</label>
                <input type="text" class="form-control" id="thu_tu" name="thu_tu" @if(isset($cauHinhDiem)) value="{{$cauHinhDiem->thu_tu}}"@endif>  
            </div>  
             <div class="form-group">
                <label for="diem">Điểm</label>            
                 <input type="text" class="form-control" id="diem" name="diem" @if(isset($cauHinhDiem)) value="{{$cauHinhDiem->diem}}"@endif>  
            </div>
            
            <button type="submit" class="btn btn-primary waves-effect waves-light"> @if(isset($cauHinhDiem)) Cập Nhật @else Thêm @endif</button>
        </form>

    </div> <!-- end card-body-->
</div> <!-- end card-->
</div>
@endsection


