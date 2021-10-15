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
        $s = $bb->title . "\r\n\r\n";
        $s .= $bb->content . "\r\n";
        $s .= $bb->price . " руб.\r\n";
        $s .= "\r\n";

        return response($s)->header('Content-Type', 'text/plain');
    }
}
