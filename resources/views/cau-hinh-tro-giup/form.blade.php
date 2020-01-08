@extends('layout')
@section('content')
<div class="row">
<div class="col-lg-6">
<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title">@if(isset($cauHinhTroGiup)) Cập Nhật @else Thêm @endif Cấu Hình Trợ Giúp </h4>
        @if(isset($cauHinhTroGiup))
         <form action="{{ route('cau-hinh-tro-giup.xu-li-cap-nhat',['id'=>$cauHinhTroGiup->id]) }}" method="POST"> 
        @else
        <form action="{{ route('cau-hinh-tro-giup.xu-li-them-moi') }}" method="POST"> 
        @endif
             {{@csrf_field()}}       
             <div class="form-group">
                <label for="loai_tro_giup">Loại trợ giúp</label>
                <input type="text" class="form-control" id="loai_tro_giup" name="loai_tro_giup" @if(isset($cauHinhTroGiup)) value="{{$cauHinhTroGiup->loai_tro_giup}}"@endif>  
            </div>  
             <div class="form-group">
                <label for="thu_tu">Thứ tự</label>            
                 <input type="text" class="form-control" id="thu_tu" name="thu_tu" @if(isset($cauHinhTroGiup)) value="{{$cauHinhTroGiup->thu_tu}}"@endif>  
            </div>
            <div class="form-group">
                <label for="credit">Credit</label>            
                 <input type="text" class="form-control" id="credit" name="credit" @if(isset($cauHinhTroGiup)) value="{{$cauHinhTroGiup->credit}}"@endif>  
            </div>
            <button type="submit" class="btn btn-primary waves-effect waves-light"> @if(isset($cauHinhTroGiup)) Cập Nhật @else Thêm @endif</button>
        </form>

    </div> <!-- end card-body-->
</div> <!-- end card-->
</div>
@endsection


