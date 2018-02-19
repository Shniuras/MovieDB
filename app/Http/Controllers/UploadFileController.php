<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function update(Request $request)
    {
        $path = $request->file('file')->storePublicly('storage');
        return $path;
    }
}
