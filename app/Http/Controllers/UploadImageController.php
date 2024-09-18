<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\ImageProcessing;

use Illuminate\Support\Facades\Auth;


class UploadImageController extends Controller
{
    public function index()
    {
        return view('uploadimage');
    }

    public function analyze(Request $request)
    {

    if (!$request->hasFile('image')) {
        return view('results', ['error' => 'Không có hình ảnh nào được tải lên.']);
    }

    $image = $request->file('image');

    $imageName = time() . '-' . $image->getClientOriginalName();

    $tempImagePath = 'temp_images/' . $imageName;
    $imagePath = storage_path('app/public/' . $tempImagePath);
    

    $image->move(storage_path('app/public/temp_images'), $imageName);

    // Đường dẫn đến script Python và đường dẫn hình ảnh
    $pythonExecutable = 'C:\\Users\\RichKid\\AppData\\Local\\Programs\\Python\\Python312\\python.exe';
    $scriptPath = 'D:\\Workspace\\image-sentiment-analysis\\storage\\app\\public\\analyze_image.py';

    // Tạo lệnh shell
    $command = escapeshellcmd("$pythonExecutable \"$scriptPath\" \"$imagePath\"");

    $output = shell_exec($command . ' 2>&1'); // Ghi lỗi vào đầu ra
    mb_convert_encoding($output, 'UTF-8', 'auto');
 
    if(Auth::user()){
        ImageProcessing::create(
            [
                'user_id' => Auth::id(),
                'path' => $tempImagePath,
                'emotion' => $output
            ]
            );
    }


    $imageUrl = asset('storage/' . $tempImagePath);

    return view('results', ['predictedEmotion' => $output, 'image' => $imageUrl]);
    }

    

}
