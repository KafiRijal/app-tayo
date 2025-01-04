<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;
use App\Models\Informasi;

class LandingPageController extends Controller
{
    public function index()
    {
        $info = Informasi::all();
        $materi = Materi::all();

        $data = [
            'materi' => $materi,
            'info' => $info,
        ];
        return view('index', $data);
    }
    public function tentang()
    {
        return view('tentang');
    }
    public function info()
    {
        $info = Informasi::all();

        $data = [
            'info' => $info,
        ];
        return view('info', $data);
    }
    public function kalender()
    {
        return view('kalender');
    }
    public function materi()
    {
        $materi = Materi::all();

        $data = [
            'materi' => $materi,
        ];
        return view('materi', $data);
    }
    public function kontak()
    {
        return view('kontak');
    }
}
