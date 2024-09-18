@include('layouts.app')
@if(Auth()->user())
<div class="container mt-3">
    <h1 class="text-center">Lịch Sử Phân Tích Hình Ảnh</h1>
    <div class="d-flex flex-column align-items-center" style="width:98%; height:90vh; overflow-y: auto;">
        @foreach($data as $item)
        <a href="{{ url('/results/' . $item->id) }}" class="text-decoration-none text-dark">
            <div class="mt-3"
                style="border-radius: 4px; border: 1px solid #efefef; padding: 8px 16px; box-shadow: var(--bs-box-shadow-sm)">
                <h4>{{ basename($item->path) }}</h4>
                <p>Phân Tích Cảm Xúc</p>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endif




@if(!Auth()->user())
<div class="d-flex align-items-center justify-content-center" style="height:90vh; font-size:88px;    font-weight: lighter;">
    <p class="fst-italic">Vui Lòng Đăng Nhập</p>
</div>
@endif

