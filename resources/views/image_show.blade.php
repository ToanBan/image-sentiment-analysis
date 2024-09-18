@include('layouts.app');
<div class="container">
    <div class="d-flex align-items-center justify-content-center" style="height:90vh;">
    <img style="width:300px; height:300px" src="/storage/{{$data->path}}" alt="">
        <div class="ms-3">
            <h1 class="text-success">Kết Quả Phân Tích Cảm Xúc</h1>
            <p class="mt-3 fs-5">Sau quá trình phân tích hình ảnh bạn nhận được có cảm xúc: <strong
                    class="text-success">{{ $data->emotion }}</strong></p>
            
            <a class="text-primary btn btn-light" href="/uploadimage"><p>Phân Tích Hình Ảnh Khác</p></a>
        </div>
    </div>
</div>