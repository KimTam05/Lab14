<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Danh sách loại sản phẩm</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a href="#" class="navbar-brand text-white">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">Trang Chu <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Loai San Pham</a>
                </li>
            </ul>
        </div>
    </nav>



    <div class="container my-3">
        <h1>Danh sách loại sản phẩm</h1>
        <a href="/kntloaisanpham/create" class="btn btn-success">Thêm mới</a>
        <table class="table table-bordered my-2">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th>Trạng thái</th>
                    <th>Chỉnh sửa</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $stt = 0;
                @endphp
                @foreach ($kntdanhsach as $item)
                    @php
                        $stt++;
                    @endphp
                    <tr>
                        <td>{{ $stt }}</td>
                        <td>{{ $item->kntMaLoai }}</td>
                        <td>{{ $item->kntTenLoai }}</td>
                        <td>{{ $item->kntStatus == 0 ? "Đang mở": "Đã đóng" }}</td>
                        <td>
                            <a href="/kntloaisanpham/{{$item->id}}/edit" class="btn btn-outline-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="/kntloaisanpham/{{$item->id}}/delete" class="btn btn-outline-danger" onclick=""><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
