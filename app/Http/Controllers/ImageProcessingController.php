<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageProcessing;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class ImageProcessingController extends Controller
{
    public function historyanalyze(){
        $userId = Auth::id();
        $data = ImageProcessing::where('user_id', $userId)->latest()->get();
        return view('results_image', ['data' => $data]);
    }

    public function show($id){
        
        $data = ImageProcessing::find($id);

        if (!$data) {
            return redirect()->route('uploadimage')->with('error', 'Bản ghi không tìm thấy.');
        }
        return view('image_show', ['data' => $data]);
    }
}
