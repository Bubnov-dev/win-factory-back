<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public static function uploadFile($file, $tmp = true)
    {
        if ($tmp) {
            $path = $file->store('public/files-tmp');

        } else {
            $path = $file->store('public/files');
        }
        return "http://" . $_SERVER['SERVER_NAME'] .':'.$_SERVER['SERVER_PORT']. "/storage/" . str_replace("public/" , "", $path);
    }
}
