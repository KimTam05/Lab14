<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Sửa loại sản phẩm</title>
</head>
<body>
    <div class="container py-4">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <h1>Sửa loại sản phẩm</h1>
                <form action="" method="post">
                    @csrf
                    <div class="form-group my-2">
                        <label for="">Mã loại sản phẩm</label>
                        <input type="text" name="kntMaLoai" class="form-control"  value="{{ $kntdanhsach->kntMaLoai }}">
                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="">Tên loại sản phẩm</label>
                        <input type="text" name="kntTenLoai" class="form-control" value="{{ $kntdanhsach->kntTenLoai }}">
                        @error('category_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="">Trạng thái</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="kntStatus" value='0' {{ $kntdanhsach->kntStatus == 0 ? "checked": " " }}>
                            <label for="" class="form-check-label">Đang mở</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="kntStatus" value='1' {{ $kntdanhsach->kntStatus == 1 ? "checked": " " }}>
                            <label for="" class="form-check-label">Đã đóng</label>
                        </div>
                        @error('status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <input type="submit" value="Sửa loại sản phẩm" class="btn btn-primary my-2">
                    <a href="/kntloaisanpham" class="btn btn-outline-secondary">Hủy</a>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>

</body>
</html>
