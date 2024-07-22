@extends('layout.admin')
@section('css')
    <link rel="stylesheet" href="{{asset('import/assets/libs/quill/quill.core.js')}}">
    <link rel="stylesheet" href="{{asset('import/assets/libs/quill/quill.snow.css')}}">
    <link rel="stylesheet" href="{{asset('import/assets/libs/quill/quill.bubble.css')}}">
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thêm mới sản phẩm</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data" class="form">
                <div class="mb-3">
                    <label for="ma_san_pham" class="form-label">Mã sản phẩm</label>
                    <input type="text" name="ma_san_pham" id="ma_san_pham" class="form-control 
                    @error('ma_san_pham') is-invalid @enderror" placeholder="Nhập mã sản phẩm..."  value="{{old('ma_san_pham')}}">
                    @error('ma_san_pham')
                        <p class="Err mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="ten_san_pham" class="form-label">Tên sản phẩm</label>
                    <input type="text" name="ten_san_pham" id="ten_san_pham" class="form-control 
                    @error('ten_san_pham') is-invalid @enderror" placeholder="Nhập tên sản phẩm..."  value="{{old('ten_san_pham')}}">
                    @error('ten_san_pham')
                        <p class="Err mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="hinh_anh" class="form-label">Hình ảnh</label>
                    <input type="file" name="hinh_anh" id="hinh_anh" class="form-control-file border" onchange="showImage(event)">
                    <img id="img_danh_muc" src="" alt="Hình ảnh danh mục" style="width:100xp; height:100px; display:none;">
                </div>
                <div class="mb-3">
                    <label for="gia" class="form-label">Giá</label>
                    <input type="number" name="gia" id="gia" class="form-control 
                    @error('gia') is-invalid @enderror" placeholder="Nhập giá sản phẩm..."  value="{{old('gia')}}">
                    @error('gia')
                        <p class="Err mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="gia_khuyen_mai" class="form-label">Giá khuyến mãi</label>
                    <input type="number" name="gia_khuyen_mai" id="gia_khuyen_mai" class="form-control 
                    @error('gia_khuyen_mai') is-invalid @enderror" placeholder="Nhập giá khuyến mãi..."  value="{{old('gia_khuyen_mai')}}">
                    @error('gia_khuyen_mai')
                        <p class="Err mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="so_luong" class="form-label">Số lượng</label>
                    <input type="number" name="so_luong" id="so_luong" class="form-control 
                    @error('so_luong') is-invalid @enderror" placeholder="Nhập số lượng..."  value="{{old('so_luong')}}">
                    @error('so_luong')
                        <p class="Err mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="ngay_nhap" class="form-label">Ngày nhập</label>
                    <input type="date" name="ngay_nhap" id="ngay_nhap" class="form-control 
                    @error('ngay_nhap') is-invalid @enderror" placeholder="Nhập ngày nhập..."  value="{{old('ngay_nhap')}}">
                    @error('ngay_nhap')
                        <p class="Err mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="mo_ta_ngan" class="form-label">Mô tả ngắn</label>
                    <textarea name="mo_ta_ngan" id="mo_ta_ngan" rows="3" placeholder="Nhập mô tả ngắn..." 
                        class="form-control @error('mo_ta_ngan') is-invalid @enderror">{{old('mo_ta_ngan')}}</textarea>
                    @error('mo_ta_ngan')
                        <p class="Err mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="mo_ta" class="form-label">Mô tả chi tiết</label>
                    <div id="quill-editor" style="height: 400px;">
                        <h1>Nhập mô tả chi tiết</h1>
                    </div>
                    <textarea name="mo_ta" id="mo_ta_content" class="d-none"></textarea>
                </div>
                <div class="mb-3">
                    <label for="hinh_anh" class="form-label">Album Hình ảnh</label>
                    <i id="add-row" class="mdi mdi-plus text-muted fs-18 rounded-2 border ms-3 p-1" style="cursor: pointer">+</i>
                    <table class="table align-middle table-nowrap mb-0">
                        <tbody>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <img id="preview_0" src="" alt="Hình ảnh" style="width:50xp; height:50px;" class="me-3">
                                    <input type="file" name="list_hinh_anh['id_0']" id="hinh_anh" class="form-control-file border" onchange="previewImage(this, 0)">
                                </td>
                                <td>
                                    <button type="button" class="btn btn-secondary btn-sm" onclick="removeRow(this)">Xóa</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mb-3">
                    <label for="trang_thai" class="form-label">Trạng thái</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="trang_thai" name="trang_thai" value="1">
                        <label class="form-check-label text-success" for="trang_thai">Hiển thị</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="trang_thai" name="trang_thai" value="0">
                        <label class="form-check-label text-danger" for="trang_thai">Ẩn</label>
                    </div>
                    <label for="trang_thai" class="form-label">Tùy chỉnh khác</label>
                    <div class="form-switch mb-2">
                        <div class="form-check">
                            <input class="form-check-input bg-danger" type="checkbox" id="trang_thai_moi" name="trang_thai_moi" checked>
                            <label class="form-check-label" for="trang_thai_moi">Mới</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="trang_thai_hot" name="trang_thai_hot" checked>
                            <label class="form-check-label" for="trang_thai_hot">Hot</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="trang_thai_noi_bat" name="trang_thai_noi_bat" checked>
                            <label class="form-check-label" for="trang_thai_noi_bat">Nổi bật</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="is_show_home" name="is_show_home" checked>
                            <label class="form-check-label" for="is_show_home">Show home</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="danh_muc_id" class="form-label">Danh mục</label>
                    <select name="danh_muc_id" class="form-select @error('danh_muc_id') is-invalid @enderror">
                        <option selected>--Chọn danh mục--</option>
                        @foreach ($listDanhMuc as $item)
                            <option value="{{$item->id}}" {{old('ten_danh_muc') == $item->id ? 'selected' : ''}}>{{$item->ten_danh_muc}}</option>
                        @endforeach
                    </select>
                    @error('danh_muc_id')
                        <p class="Err mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <button type="submit" name="submit" class="btn btn-success">Xác nhận</button>
                    <a href="{{route('admin.sanpham.index')}}"><button type="button" class="btn btn-success">Quay lại</button></a>
                </div>
            </form>
        </div>
    </div>
    </div>
    <!-- /.container-fluid -->
@endsection

@section('js')
    <script src="{{asset('import/assets/libs/quill/quill.core.js')}}"></script>
    <script src="{{asset('import/assets/libs/quill/quill.min.js')}}"></script>
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
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            var quill = new Quill("#quill-editor",{
                theme:"snow",
            })
            // Hiển thị nội dung cũ
            var oldContent = `{!! old('mo_ta') !!}`
            quill.root.innerHTML = oldContent
            // Cập nhật lại textarea khi ẩn nội dung của quill-editor thay đổi
            quill.on('text-change', function(){
                var html = quill.root.innerHTML;
                document.getElementById('mo_ta_content').value = html
            })
        })
    </script>
    {{-- Thêm album ảnh --}}
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            var rowCount = 1;
            var newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td class="d-flex align-items-center">
                    <img id="preview_${rowCount}" src="" alt="Hình ảnh" style="width:50xp; height:50px;" class="me-3">
                    <input type="file" name="list_hinh_anh['id_${rowCount}']" id="hinh_anh" class="form-control-file border" onchange="previewImage(this, ${rowCount})">
                </td>
                <td>
                    <button type="button" class="btn btn-secondary btn-sm" onclick="removeRow(this)">Xóa</button>
                </td>
            `;
            tableBody.appendChild(newRow);
            rowCount++;
        })
        function previewImage(input, rowIndex){
            if(input.file && input.file[0]){
                const reader = new FileReader();
                reader.onload = function (){
                    document.getElementById(`preview_${rowIndex}`).setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(input.file[0]);
            }
        }
    </script>
@endsection