<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuTahunan extends Controller
{
    public function index()
    {
        $groups = [
            [
                'name' => 'XII-RPL',
                'photo' => 'https://example.com/photo/xii-rpl.jpg',
                'students' => [
                    [
                        'name' => 'John Smith',
                        'class' => 'XII-RPL',
                        'roll_number' => 1,
                    ],
                    [
                        'name' => 'Sally Williams',
                        'class' => 'XII-RPL',
                        'roll_number' => 2,
                    ],
                    [
                        'name' => 'Bob Smart',
                        'class' => 'XII-RPL',
                        'roll_number' => 3,
                    ],
                    [
                        'name' => 'Jenny Penny',
                        'class' => 'XII-RPL',
                        'roll_number' => 4,
                    ],
                ],
            ],
        ];

        return view('BukuTahunan.index', [
            'groups' => $groups,
            'title' => 'Halaman Utama'

        ]);
    }
}
