@extends('layout.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thêm mới danh mục</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.danhmuc.update', $danhMuc->id) }}" method="post" class="form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="" class="form-label">Mã loại</label>
                    <input type="text" name="id" id="" class="form-control" disabled>
                </div>
                <div class="mb-3">
                    <label for="ten_danh_muc" class="form-label">Tên danh mục</label>
                    <input type="text" name="ten_danh_muc" id="ten_danh_muc" class="form-control 
                    @error('ten_danh_muc') is-invalid @enderror" placeholder="Nhập tên danh mục..."  value="{{$danhMuc->ten_danh_muc}}">
                    @error('ten_danh_muc')
                        <p class="Err mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="hinh_anh" class="form-label">Hình ảnh</label>
                    <input type="file" name="hinh_anh" id="hinh_anh" class="" onchange="showImage(event)">
                    <img id="img_danh_muc" src="{{Storage::url($danhMuc->hinh_anh)}}" alt="Hình ảnh danh mục" style="width:100xp; height:100px;">
                </div>
                <div class="mb-3">
                    <label for="trang_thai" class="form-label">Trạng thái</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="trang_thai" name="trang_thai" value="1" {{$danhMuc->trang_thai == true ? 'checked': ''}}>
                        <label class="form-check-label text-success" for="trang_thai">Hiển thị</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="trang_thai" name="trang_thai" value="0" {{$danhMuc->trang_thai == false ? 'checked': ''}}>
                        <label class="form-check-label text-danger" for="trang_thai">Ẩn</label>
                    </div>
                </div>
                <div>
                    <button type="submit" name="submit" class="btn btn-success">Xác nhận</button>
                    <a href="{{ route('admin.danhmuc.index') }}"><button type="button" class="btn btn-success">Quay lại</button></a>
                </div>
            </form>
        </div>
    </div>
    
    
    </div>
    <!-- /.container-fluid -->
    
@endsection

@section('js')
    <script>
        function showImage(event){
            const img_danh_muc = document.getElementById('img_danh_muc');
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function (){
                img_danh_muc.src = reader.result;
                img_danh_muc.style.display = 'block';
            }
            if(file){
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection