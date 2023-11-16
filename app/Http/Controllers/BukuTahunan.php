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
                        'image' => 'ahmad.png',
                        'name' => 'Achmad Rifqi',
                        'class' => 'XII-RPL',
                        'quotes' => '"it always seems impossible until its done"',
                        'roll_number' => 1,
                    ],
                    [
                        'image' => 'pado.png',
                        'name' => 'Alfado Davie Luis Sheva ',
                        'class' => 'XII-RPL',
                        'quotes' => '"kaya bermanfaat miskin bermartabat"',
                        'roll_number' => 2,
                    ],
                    [
                        'image' => 'arya.png',
                        'name' => 'Ararya Gentala Putra Safardan',
                        'class' => 'XII-RPL',
                        'quotes' => '"no peepee, no balls, and probably no poophole since this guy fed on a radiation"',
                        'roll_number' => 3,
                    ],
                    [
                        'image' => 'bintang.png',
                        'name' => 'Bintang Firdaus',
                        'class' => 'XII-RPL',
                        'quotes' => '"Setia Waspada"',
                        'roll_number' => 4,
                    ],
                    [
                        'image' => 'caca.png',
                        'name' => 'Cahaya Bunga',
                        'class' => 'XII-RPL',
                        'quotes' => '"If you want to live a happy life, tie it to a goal, not to people or things."',
                        'roll_number' => 5,
                    ],
                    [
                        'image' => 'cori.png',
                        'name' => 'Corissa Trimassa Colya S.',
                        'class' => 'XII-RPL',
                        'quotes' => '"You always been the strongest. But you dont need to be strong every waking moment of every day."',
                        'roll_number' => 6,
                    ],
                    [
                        'image' => 'damar.png',
                        'name' => 'Damar Juliansyah',
                        'class' => 'XII-RPL',
                        'quotes' => '"Lakukan yang ingin kamu lakukan selama itu tidak melanggar hukum, jangan lakukan hal tidak ingin kamu lakukan"',
                        'roll_number' => 7,
                    ],
                    [
                        'image' => 'david.png',
                        'name' => 'David Ananta Pramudya Gultom',
                        'class' => 'XII-RPL',
                        'quotes' => '"its just highschool. learn it, live it, love it."',
                        'roll_number' => 8,
                    ],
                    [
                        'image' => 'dede.png',
                        'name' => 'Dede Kurniawan',
                        'class' => 'XII-RPL',
                        'quotes' => '"Diatas langit masih ada langit, dibawah inti bumi masih ada pemula"',
                        'roll_number' => 9,
                    ],
                    [
                        'image' => 'dafina.png',
                        'name' => 'Dhaifina Trimulyani',
                        'class' => 'XII-RPL',
                        'quotes' => '"flipped the world just to see myself still smile"',
                        'roll_number' => 10,
                    ],
                    [
                        'image' => 'dustin.png',
                        'name' => 'Dustin Juanier',
                        'class' => 'XII-RPL',
                        'quotes' => '"Its better to crying while we step ahead than we doesnt do anything"',
                        'roll_number' => 11,
                    ],
                    [
                        'image' => 'fattah.png',
                        'name' => 'Fattah Kalamukti',
                        'class' => 'XII-RPL',
                        'quotes' => '"Happiness exists as long as you wish for it"',
                        'roll_number' => 12,
                    ],
                    [
                        'image' => 'eby.png',
                        'name' => 'Febriyanti Gala',
                        'class' => 'XII-RPL',
                        'quotes' => '"Jangan mudah putus asa"',
                        'roll_number' => 13,
                    ],
                    [
                        'image' => 'galuh.png',
                        'name' => 'Galuh Arya Maulana',
                        'class' => 'XII-RPL',
                        'quotes' => '"Those who live in the past limit their future"',
                        'roll_number' => 14,
                    ],
                    [
                        'image' => 'haikal.png',
                        'name' => 'Haikal Ramadhan',
                        'class' => 'XII-RPL',
                        'quotes' => '"Ikan gapernah perduli bahwa burung bisa terbang"',
                        'roll_number' => 15,
                    ],
                    [
                        'image' => 'karina.png',
                        'name' => 'Karina Margaretha',
                        'class' => 'XII-RPL',
                        'quotes' => '"Kamu layak bahagia dengan menghargai pencapaian sekecil apapun"',
                        'roll_number' => 16,
                    ],
                    [
                        'image' => 'maulin.png',
                        'name' => 'Maolinda Sekarwati',
                        'class' => 'XII-RPL',
                        'quotes' => '"lagi cape banget belakangan ini kaya abis dikroyok warga"',
                        'roll_number' => 17,
                    ],
                    [
                        'image' => 'alfi.png',
                        'name' => 'Mohamad Alfi',
                        'class' => 'XII-RPL',
                        'quotes' => '"udah makan belom?"',
                        'roll_number' => 18,
                    ],
                    [
                        'image' => 'rizi.png',
                        'name' => 'Muhammad Alfa Rizi',
                        'class' => 'XII-RPL',
                        'quotes' => '"It is never too late to be what you might have been."',
                        'roll_number' => 19,
                    ],
                    [
                        'image' => 'ikhwan.png',
                        'name' => 'Muhammad Ikhwan Fadillah',
                        'class' => 'XII-RPL',
                        'quotes' => '"If you struggle about something, and no matter what, you keep finding something to fight for." -Joel Miller',
                        'roll_number' => 20,
                    ],
                    [
                        'image' => 'udin.png',
                        'name' => 'Muhammad Tiflanil Azhar',
                        'class' => 'XII-RPL',
                        'quotes' => '"menuju tidak terbatas dan melampauinya"',
                        'roll_number' => 21,
                    ],
                    [
                        'image' => 'vicky.png',
                        'name' => 'Muhammad Vicky Satrio',
                        'class' => 'XII-RPL',
                        'quotes' => '"kiss can remove anger, but too much kiss can remove clothes"',
                        'roll_number' => 22,
                    ],
                    [
                        'image' => 'nayla.png',
                        'name' => 'Nayla Shakila Al-Jabbar',
                        'class' => 'XII-RPL',
                        'quotes' => '"without chat gpt we are nothing "',
                        'roll_number' => 23,
                    ],
                    [
                        'image' => 'neti.png',
                        'name' => 'Neti Amalia',
                        'class' => 'XII-RPL',
                        'quotes' => '"Happiness is easy as ABC"',
                        'roll_number' => 24,
                    ],
                    [
                        'image' => 'novi.png',
                        'name' => 'Novita Indri Lestari',
                        'class' => 'XII-RPL',
                        'quotes' => '"jangan takut salah kan ada tipe-x"',
                        'roll_number' => 25,
                    ],
                    [
                        'image' => 'radja.png',
                        'name' => 'Radja Mahesa Waluya',
                        'class' => 'XII-RPL',
                        'quotes' => '"jangan takut salah kan ada tipe-x"',
                        'roll_number' => 26,
                    ],
                    [
                        'image' => 'raisa.png',
                        'name' => 'Raisa Arifa Zahra',
                        'class' => 'XII-RPL',
                        'quotes' => '"Everything you lose is a step you take"',
                        'roll_number' => 27,
                    ],
                    [
                        'image' => 'tama.png',
                        'name' => 'Rasya Oetama Putra',
                        'class' => 'XII-RPL',
                        'quotes' => '"if u not good today, dont worry, other time u be good"',
                        'roll_number' => 28,
                    ],
                    [
                        'image' => 'salman.png',
                        'name' => 'Salman Ramadhan alfaridzi',
                        'class' => 'XII-RPL',
                        'quotes' => '"Just Do It."',
                        'roll_number' => 29,
                    ],
                    [
                        'image' => 'sabil.png',
                        'name' => 'Salsabila Laylatul Maswah',
                        'class' => 'XII-RPL',
                        'quotes' => '"Jangan mengulang kesalahan yang sama, masih ada kesalahan lain yang belum di coba"',
                        'roll_number' => 30,
                    ],
                    [
                        'image' => 'lita.png',
                        'name' => 'Talitha Yumna Akbariani',
                        'class' => 'XII-RPL',
                        'quotes' => '"it always seems impossible until its done a World"',
                        'roll_number' => 31,
                    ],
                    [
                        'image' => 'willy.png',
                        'name' => 'Willy Zaki',
                        'class' => 'XII-RPL',
                        'quotes' => '"jangan takut salah kan ada tipe-x"',
                        'roll_number' => 32,
                    ],
                    [
                        'image' => 'yudhis.png',
                        'name' => 'Yudhistira Raka Pratama',
                        'class' => 'XII-RPL',
                        'quotes' => '"jangan takut salah kan ada tipe-x"',
                        'roll_number' => 33,
                    ],




                ),
            );
        $title = "fitur1";

        return view('BukuTahunan.index', compact('groups', 'title'));
    }
}
