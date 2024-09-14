<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <style>
    p {
        color: #5f6368;
        line-height: 1.7;
        font-weight: 500;
    }
    </style>
    @include('layouts.app')
    <div class="container" style="margin-top:24px">
        <div>
            <div class="row align-items-center">
                <div class="col-6">
                    <h1 style="font-size: 44px;font-weight: 700; margin-bottom:16px"> Unveiling Emotions, One Image at a
                        Time</h1>
                    <p>
                        Với mỗi bức ảnh, AI của chúng tôi đi sâu vào cảnh quan cảm xúc, tiết lộ những cảm xúc qua hình
                        ảnh.
                        Từ niềm vui đến nỗi buồn, hệ thống giải mã những cảm xúc phức tạp được ghi lại trong từng khung
                        hình</p>
                </div>
                <div class="col-6">
                    <img src="https://qualetics.com/wp-content/uploads/2023/04/sentiment-analysis-and-written-test-emotion-recognition-automated-artificial-intelligence-technologies-happy-man-and-259168367-1-1024x745.jpg"
                        alt="" style="width:570px; height:500px" class="rounded">
                </div>
            </div>


            <div class="row mt-3 shadow" style="border: 1px solid #efefef;border-radius: 4px;" id="about">
                <h4 style="font-size: 24px; font-weight: 600;">About</h4>
                <p>Chào mừng đến với website của chúng tôi. Nơi Cảm Xúc Được Khám Phá Qua Mỗi Hình Ảnh!</p>
                <p>Tại SENTIVA, chúng tôi kết hợp công nghệ AI tiên tiến với phân tích hình ảnh để mang đến cho bạn
                    những hiểu biết sâu sắc
                    về cảm xúc và tâm trạng được thể hiện qua từng bức ảnh. Chúng tôi hiểu rằng mỗi hình ảnh đều chứa
                    đựng những cảm xúc và câu chuyện riêng biệt,
                    và chúng tôi ở đây để giúp bạn khai thác những điều này.</p>
                <div class="col-4">
                    <img style="width:300px;height:300px"
                        src="https://media.istockphoto.com/id/1487494292/vi/vec-to/ng%C6%B0%E1%BB%9Di-ph%E1%BB%A5-n%E1%BB%AF-c%C3%B3-t%C3%A2m-tr%E1%BA%A1ng.jpg?s=2048x2048&w=is&k=20&c=hKwSdydFXpgIALAp_wp4rUWOG30VYVHZQXpMZc_Bpv0="
                        alt="">
                </div>
                <div class="col-4">
                    <img style="width:300px;height:300px"
                        src="https://media.istockphoto.com/id/1326639660/vi/vec-to/ph%E1%BB%A5-n%E1%BB%AF-tr%E1%BA%BB-l%E1%BB%B1a-ch%E1%BB%8Dn-nh%E1%BB%AFng-c%E1%BA%A3m-x%C3%BAc-kh%C3%A1c-nhau-c%C3%B4-g%C3%A1i-%C4%91%C3%B3ng-vai-tr%C3%B2-thay-%C4%91%E1%BB%95i-c%E1%BA%A3m-x%C3%BAc-ki%E1%BB%83m-so%C3%A1t.jpg?s=2048x2048&w=is&k=20&c=0rJB-siN_3VNP6rIgkrVxWID3gxidLxtMlLwB8ggYqc="
                        alt="">
                </div>
                <div class="col-4">
                    <img style="width:300px;height:300px"
                        src="https://media.istockphoto.com/id/1022769310/vi/vec-to/m%C3%A0u-bi%E1%BB%83u-t%C6%B0%E1%BB%A3ng-c%E1%BA%A3m-x%C3%BAc-c%C6%A1-b%E1%BA%A3n-v%C3%A0-ngh%E1%BB%87-thu%E1%BA%ADt-%C4%91%C6%B0%E1%BB%9Dng-k%E1%BA%BB.jpg?s=2048x2048&w=is&k=20&c=akFPra-TysRzaJ903Pk2v18MYXbxd1D5-u405TTKHDM="
                        alt="">
                </div>

                <p class="mt-3">Chúng tôi sử dụng các thuật toán học máy và trí tuệ nhân tạo hiện đại để phân tích và nhận diện cảm
                    xúc từ hình ảnh mà bạn gửi lên. Hệ thống của chúng tôi không chỉ đơn thuần là nhận diện khuôn mặt mà
                    còn đi sâu vào các yếu tố khác như màu sắc, biểu cảm và ngữ cảnh để cung cấp cái nhìn chính xác và
                    toàn diện về cảm xúc.</p>
            </div>

            <div class="row mt-5" id="contact">
                <h4 class="mt-3" style="font-size: 24px; font-weight: 600;">Contact</h4>
                <div class="col-3">
                    <div class="d-flex">
                        <div class="me-3">
                        <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <p>HCM City, VietNam</p>
                    </div>

                    <div class="d-flex">
                        <div class="me-3"><i class="fa-solid fa-phone"></i></div>   
                        <p>0123456789</p>
                    </div>

                    <div class="d-flex">
                        <div class="me-3"><i class="fa-regular fa-envelope"></i></div>
                        <p>email@gmail.com</p>
                    </div>
                </div>

                <div class="col-9">
                    <div class="d-flex">
                        <input class="form-control me-4" type="text" placeholder="Name">
                        <input class="form-control" type="text" placeholder="Email">
                    </div>

                    <div class="mt-3">
                        <input class="form-control" type="text" placeholder="Message">
                    </div>

                    <div class="mt-3 text-end">
                        <button type="submit" class="btn btn-dark text-white">SEND</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>

</html>