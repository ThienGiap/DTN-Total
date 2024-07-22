@extends('layout.admin')
@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mb-5">Danh sách sản phẩm</h1>
    <form action="?act=listsp" method="post">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <button type="button" class="btn btn-secondary btn-sm" onclick="">Chọn tất cả</button>
                <button type="button" class="btn btn-secondary btn-sm" onclick="">Bỏ chọn tất cả</button>
                <button type="submit" name="xoacacmucchon" class="btn btn-secondary btn-sm">Xóa các mục đã chọn</button>
                <a href="{{route('admin.sanpham.create')}}"><button type="button" class="btn btn-secondary btn-sm">Nhập thêm</button></a>
                <div class="float-right">
                    <div class="input-group">
                        <input type="text" class="form-control" name="kyw" placeholder="Tìm kiếm...">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" name="search">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th></th>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Giá</th>
                                <th>Giá khuyến mãi</th>
                                <th>Số lượng</th>
                                <th>Trạng thái</th>
                                <th>Danh mục</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listSanPham as $index => $item)
                                <tr>
                                    <td class="align-middle text-center"><input type="checkbox" name="select[]" id="" value=""></td>
                                    <td class=" align-middle">{{ $item->ma_san_pham }}</td>
                                    <td class="col-2 align-middle">{{ $item->ten_san_pham }}</td>
                                    <td  class="col-1 align-middle"><img src="{{ $item->hinh_anh }}" alt="err" height="100px" width="100px"></td>
                                    <td class="col-2 align-middle">{{ number_format($item->gia) }}đ</td>
                                    <td class="col-2 align-middle">{{ empty(number_format($item->gia_khuyen_mai)) ? 0 : number_format($item->gia_khuyen_mai)  }}đ</td>
                                    <td  class="align-middle">{{ $item->so_luong }}</td>
                                    <td  class="col-1 align-middle">{{ $item->trang_thai }}</td>
                                    <td  class="col-1 align-middle">{{ $item->danhMuc->ten_danh_muc }}</td>
                                    <td class="col-2 align-middle">
                                        <a href=""><button type="button" class="btn btn-secondary btn-sm">Sửa</button></a> | 
                                        <a href=""><button type="button" class="btn btn-secondary btn-sm">Xóa</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>  
                    <div class="phantrang">
                        <ul>

                        </ul>
                    </div>  
                </div>
            </div>
        </div>
    </form>
</div>
<!-- /.container-fluid -->
@endsection