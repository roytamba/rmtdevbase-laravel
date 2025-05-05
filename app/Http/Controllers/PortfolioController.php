<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function downloadCv()
    {
        $path = 'documents/MyCV.pdf';

        dd(Storage::exists('documents/cv.pdf'));

        if (!Storage::exists($path)) {
            abort(404);
        }

        return response()->file($fullPath, [
            'Content-Type' => 'application/pdf',
        ]);
    }
}
