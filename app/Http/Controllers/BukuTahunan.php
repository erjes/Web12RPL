<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuTahunan extends Controller
{
    public function index()
    {
        $groups = array(
                'name' => 'XII-RPL',
                'photo' => 'https://example.com/photo/xii-rpl.jpg',
                'students' => array(
                    [
                        'image' => 'js.png',
                        'name' => 'Achmad Rifqi',
                        'class' => 'XII-RPL',
                        'quotes' => '"it always seems impossible until its done"',
                        'roll_number' => 1,
                    ],
                    [
                        'image' => 'js.png',
                        'name' => 'Alfado Davie Luis Sheva ',
                        'class' => 'XII-RPL',
                        'quotes' => '"kaya bermanfaat miskin bermartabat"',
                        'roll_number' => 2,
                    ],
                    [
                        'image' => 'js.png',
                        'name' => 'Ararya Gentala Putra Safardan',
                        'class' => 'XII-RPL',
                        'quotes' => '"no peepee, no balls, and probably no poophole since this guy fed on a radiation"',
                        'roll_number' => 3,
                    ],
                    [
                        'image' => 'js.png',
                        'name' => 'Bintang Firdaus',
                        'class' => 'XII-RPL',
                        'quotes' => '"Setia Waspada"',
                        'roll_number' => 4,
                    ],
                    [
                        'image' => 'js.png',
                        'name' => 'Cahaya Bunga',
                        'class' => 'XII-RPL',
                        'quotes' => '"If you want to live a happy life, tie it to a goal, not to people or things."',
                        'roll_number' => 5,
                    ],
                    [
                        'image' => 'js.png',
                        'name' => 'Corissa Trimassa Colya S.',
                        'class' => 'XII-RPL',
                        'quotes' => '"You always been the strongest. But you dont need to be strong every waking moment of every day."',
                        'roll_number' => 6,
                    ],
                    [
                        'image' => 'js.png',
                        'name' => 'Damar Juliansyah',
                        'class' => 'XII-RPL',
                        'quotes' => '"Lakukan yang ingin kamu lakukan selama itu tidak melanggar hukum, jangan lakukan hal tidak ingin kamu lakukan"',
                        'roll_number' => 7,
                    ],
                    [
                        'image' => 'js.png',
                        'name' => 'David Ananta Pramudya Gultom',
                        'class' => 'XII-RPL',
                        'quotes' => '"its just highschool. learn it, live it, love it."',
                        'roll_number' => 8,
                    ],
                    [
                        'image' => 'js.png',
                        'name' => 'Dede Kurniawan',
                        'class' => 'XII-RPL',
                        'quotes' => '"Diatas langit masih ada langit, dibawah inti bumi masih ada pemula"',
                        'roll_number' => 9,
                    ],
                    [
                        'image' => 'js.png',
                        'name' => 'Dhaifina Trimulyani',
                        'class' => 'XII-RPL',
                        'quotes' => '"flipped the world just to see myself still smile"',
                        'roll_number' => 10,
                    ],
                    [
                        'image' => 'js.png',
                        'name' => 'Bintang Firdaus',
                        'class' => 'XII-RPL',
                        'quotes' => '"Setia Waspada"',
                        'roll_number' => 4,
                    ],
                    [
                        'image' => 'js.png',
                        'name' => 'Dustin Juanier',
                        'class' => 'XII-RPL',
                        'quotes' => '"Its better to crying while we step ahead than we doesnt do anything"',
                        'roll_number' => 4,
                    ],
                    [
                        'image' => 'js.png',
                        'name' => 'Bintang Firdaus',
                        'class' => 'XII-RPL',
                        'quotes' => '"Setia Waspada"',
                        'roll_number' => 4,
                    ],
                    [
                        'image' => 'js.png',
                        'name' => 'Bintang Firdaus',
                        'class' => 'XII-RPL',
                        'quotes' => '"Setia Waspada"',
                        'roll_number' => 4,
                    ],
                                        [
                        'image' => 'js.png',
                        'name' => 'Bintang Firdaus',
                        'class' => 'XII-RPL',
                        'quotes' => '"Setia Waspada"',
                        'roll_number' => 4,
                    ],
                                        [
                        'image' => 'js.png',
                        'name' => 'Bintang Firdaus',
                        'class' => 'XII-RPL',
                        'quotes' => '"Setia Waspada"',
                        'roll_number' => 4,
                    ],
                                        [
                        'image' => 'js.png',
                        'name' => 'Bintang Firdaus',
                        'class' => 'XII-RPL',
                        'quotes' => '"Setia Waspada"',
                        'roll_number' => 4,
                    ],
                                        [
                        'image' => 'js.png',
                        'name' => 'Bintang Firdaus',
                        'class' => 'XII-RPL',
                        'quotes' => '"Setia Waspada"',
                        'roll_number' => 4,
                    ],

                ),
            );
        $title = "fitur1";

        return view('BukuTahunan.index', compact('groups', 'title'));
    }
}
