<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bb;

class BbsController extends Controller
{
    public function index()
    {
        $content = ['bbs' => Bb::latest()->get()];
        return view('index', $content);
    }

    public function detail(BB $bb)
    {
        return view('detail', ['bb' => $bb]);
    }
}
