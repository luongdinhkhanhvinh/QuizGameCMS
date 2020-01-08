@extends('layout')
@section('content')
<div class="row">
<div class="col-lg-6">
<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title">@if(isset($goiCredit)) Cập Nhật @else Thêm @endif Gói Credit </h4>
        @if(isset($goiCredit))
         <form action="{{ route('goi-credit.xu-li-cap-nhat',['id'=>$goiCredit->id]) }}" method="POST"> 
        @else
        <form action="{{ route('goi-credit.xu-li-them-moi') }}" method="POST"> 
        @endif
            {{@csrf_field()}}   
                 @if(count($errors)>0)
             <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif               
             <div class="form-group">
                <label for="ten_goi">Tên gói</label>
                <input type="text" class="form-control" id="ten_goi" name="ten_goi" @if(isset($goiCredit)) value="{{$goiCredit->ten_goi}}"@endif>  
            </div>  
             <div class="form-group">
                <label for="credit">Credit</label>            
                 <input type="text" class="form-control" id="credit" name="credit" @if(isset($goiCredit)) value="{{$goiCredit->credit}}"@endif>  
            </div>
            <div class="form-group">
                <label for="so_tien">Số tiền</label>
                <input type="text" class="form-control" id="so_tien" name="so_tien" @if(isset($goiCredit)) value="{{$goiCredit->so_tien}}"@endif>  
            </div>
            
                   
            <button type="submit" class="btn btn-primary waves-effect waves-light"> @if(isset($goiCredit)) Cập Nhật @else Thêm @endif</button>
        </form>

    </div> <!-- end card-body-->
</div> <!-- end card-->
</div>
@endsection


