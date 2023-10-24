<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelDanGuruController extends Controller
{
    public function index()
    {
        $data = [
            [
                'nama' => 'Bukori',
                'NIP' => '12345',
                'gambar' => asset('FotoGuru/BU_ICHA_BK.JPG'), // Update the image path and extension
                'quotes' => 'Life is beautiful.',
            ],
            [
                'nama' => 'Jane Smith',
                'NIP' => '67890',
                'gambar' => 'jane.jpg',
                'quotes' => 'Dream big and work hard.',
            ],
            [
                'nama' => 'Alice Johnson',
                'NIP' => '54321',
                'gambar' => 'alice.jpg',
                'quotes' => 'Success is a journey, not a destination.',
            ],
            [
                'nama' => 'Bob Anderson',
                'NIP' => '98765',
                'gambar' => 'bob.jpg',
                'quotes' => 'Believe in yourself and never give up.',
            ],
            [
                'nama' => 'Eva Wilson',
                'NIP' => '13579',
                'gambar' => 'eva.jpg',
                'quotes' => 'You are capable of amazing things.',
            ],
        ];

        $title = "fitur1";

        return view('MapelDanGuru.index', compact('data', 'title')); // Adjust the view name

    }
}
