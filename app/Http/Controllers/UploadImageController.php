<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    public function index()
    {
        return view('uploadimage');
    }

    public function analyze(Request $request)
    {
        // Kiểm tra xem người dùng đã tải lên hình ảnh chưa
        if (!$request->hasFile('image')) {
            return view('results', ['error' => 'Không có hình ảnh nào được tải lên.']);
        }

        // Lấy tệp hình ảnh từ yêu cầu
        $image = $request->file('image');
        
        // Tạo tên tệp duy nhất để tránh xung đột
        $imageName = time() . '-' . $image->getClientOriginalName();
        
        // Đường dẫn lưu hình ảnh tạm thời
        $imagePath = storage_path('app/public/temp_images/' . $imageName);
        
        // Di chuyển hình ảnh đến thư mục tạm thời
        $image->move(storage_path('app/public/temp_images'), $imageName);

        // Đường dẫn đến script Python và đường dẫn hình ảnh
        $pythonExecutable = 'C:\\Users\\RichKid\\AppData\\Local\\Programs\\Python\\Python312\\python.exe';
        $scriptPath = 'D:\\Workspace\\image-sentiment-analysis\\storage\\app\\public\\analyze_image.py';

        // Tạo lệnh shell
        $command = escapeshellcmd("$pythonExecutable \"$scriptPath\" \"$imagePath\"");

        $errorOutput = [];
        $returnCode = 0;

        $output = shell_exec($command . ' 2>&1'); // Ghi lỗi vào đầu ra
        mb_convert_encoding($output, 'UTF-8', 'auto');
        
    

        return view('results', ['predictedEmotion' => $output]);
    }
}
