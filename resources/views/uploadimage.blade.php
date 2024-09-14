@include('layouts.app')
<div>
    <div style="background-color:#195fd7; height:342px;">
        <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
            <div class="text-center" style="width: 650px;">
                <h3 class="text-white" style="font-size: 48px;">Tải Hình Ảnh</h3> 
                <form class="mt-4" action="/uploadimage" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="d-flex">
                        <input type="file" class="form-control me-2" name="image" id="image" required style="padding: 15px 12px;">
                        <input style="background-color: #00be63;" class="btn text-white" type="submit" value="SEND">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">
            <h4 style="font-size: 24px; font-weight: 600;">Cách Hoạt Động</h4>
            <p>Trang web phân tích cảm xúc hình ảnh của chúng tôi sử dụng công nghệ AI tiên tiến để đọc 
            và phân tích cảm xúc ẩn chứa trong mỗi bức ảnh mà bạn tải lên. Quy trình hoạt động bao gồm các bước sau:</p>
            <ol class="ms-4">
                <li><strong>Tải Hình Ảnh</strong><p>Người dùng chọn và tải lên hình ảnh từ thiết bị của mình.</p></li>
                <li><strong>Phân Tích Dữ Liệu</strong><p>Sau khi nhận được hình ảnh, hệ thống AI sẽ xử lý dữ liệu hình ảnh, áp dụng các kỹ thuật nhận diện đối tượng và phân tích cảm xúc.</p></li>
                <li><strong>Kết Quả Phân Tích</strong><p>Hệ thống sẽ trả về kết quả bao gồm các cảm xúc được nhận diện trong hình ảnh như vui vẻ, buồn bã, tức giận, bất ngờ, hoặc trung lập. Mỗi cảm xúc sẽ được biểu thị bằng các giá trị khác nhau để phản ánh mức độ cảm xúc.</p>
                </li>
            </ol>
        </div>

        <div class="row mt-5">
            <h4 style="font-size: 24px; font-weight: 600;">Lưu Ý</h4>
            <ul class="ms-4">
                <li><p>Vui lòng chỉ tải lên những hình ảnh hợp lệ và không vi phạm quy định pháp luật.</p></li>
                <li><p>Kết quả phân tích cảm xúc chỉ mang tính tham khảo và có thể không chính xác trong mọi trường hợp, đặc biệt là đối với các hình ảnh trừu tượng hoặc không rõ ràng.</p></li>
                <li><p>Chúng tôi cam kết bảo mật dữ liệu hình ảnh của bạn và sẽ không lưu trữ bất kỳ thông tin cá nhân nào sau khi phân tích hoàn tất.</p>
                </li>
            </ul>
        </div>
    </div>
</div>
@include('layouts.footer')