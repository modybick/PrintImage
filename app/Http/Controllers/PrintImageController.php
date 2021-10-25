<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrintRequest;
use Illuminate\Http\Request;

class PrintImageController extends Controller
{
    public function index()
    {
        return view('PrintImage');
    }

    public function store(PrintRequest $request)
    {
        //ファイル名付けて保存
        if ($file = $request->img) {
            $fileName = time() . "_" . $file->getClientOriginalName();
            $target_path = public_path('uploaded/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }

        // //印刷実行
        // $pythonPath = "/var/www/PrintImage/app/Console/";
        // $command = "python3 " . $pythonPath . "Print.py " . $target_path . $fileName;
        // exec($command);
        return view('Printed');
    }
}
