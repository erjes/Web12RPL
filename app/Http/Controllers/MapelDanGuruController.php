<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelDanGuruController extends Controller
{
    public function guru()
    {
        $kejuruan1 = [
            [
                'nama'      => 'Amrul Khairullah, ST',
                'NIP'       => '197104082022211000',
                'mapel'     => 'Pemrograman Dasar',
                'gambar'    => asset('picture/FotoGuru/PAK_AMRUL.jpg'),
                'quotes'    => 'Jangan takut untuk gagal, dalam coding kegagalan adalah proses pembelajaran yang sangat berarti.',
            ],
            [
                'nama'      => 'Bukari',
                'NIP'       => '196910112014121000',
                'mapel'     => 'Komputer dan Jaringan Dasar',
                'gambar'    => asset('picture/FotoGuru/PAK_BUKARI.jpg'),
                'quotes'    => 'Belajar terus menurus sampai ajal telah tiba.',
            ],
            [
                'nama'      => 'Dedy Subroto',
                'NIP'       => '197712132014121001',
                'mapel'     => 'Dasar Desain Grafis',
                'gambar'    => asset('picture/FotoGuru/PAK_DEDY.jpg'),
                'quotes'    => '-',
            ],
            [
                'nama'      => 'Nurmiyati, S.Pd',
                'NIP'       => '197703102008012036',
                'mapel'     => 'Sistem Komputer',
                'gambar'    => asset('picture/FotoGuru/BU_NURMIYATI.jpg'),
                'quotes'    => 'Saya harap siswa RPL dapat mengimplementasikan ilmu yang mereka dapat di SMK, seperti membuat aplikasi game pendidikan, menjadi penangkal hacker, serta memperkuat security jaringan',
            ],
        ];


        $nonkejuruan1 = [
            [
                'nama'      => 'Agustini Mardelyni, S.Pd',
                'NIP'       => '199108172022212000',
                'mapel'     => 'Matematika',
                'gambar'    => asset('picture/FotoGuru/BU_AGUSTIN.jpg'),
                'quotes'    => 'Lebih baik 3 jam lebih cepat daripada terlambat 1 menit.',
            ],
            [
                'nama'      => 'Anna Mailani, S.Pd',
                'NIP'       => '196605272016062001',
                'mapel'     => 'Pendidikan Pancasila dan Kewarganegaraan',
                'gambar'    => asset('picture/FotoGuru/BU_ANNA.jpg'),
                'quotes'    => 'Hidup itu harus punya arti, lakukan hal yang terbaik dan terindah dalam hidup kita',
            ],
            [
                'nama'      => 'Arman Rivai, S.Pd',
                'NIP'       => '199304112022211000',
                'mapel'     => 'Sejarah',
                'gambar'    => asset('picture/FotoGuru/PAK_ARMAN.jpg'),
                'quotes'    => 'Selalu ingat jasa-jasa guru kalian yang telah mengantarkan ke jenjang kehidupan selanjutnya. Semoga kelas XII RPL kompak selalu walaupun sudah menjadi alumni. Mendapat pekerjaan dan pendidikan tinggi yang layak',
            ],
            [
                'nama'      => 'Atik Yuli Hastuty, M.Pd',
                'NIP'       => '197707052008012033',
                'mapel'     => 'Fisika',
                'gambar'    => asset('picture/FotoGuru/BU_ATIK.jpg'),
                'quotes'    => 'Jadilah orang yag bermanfaat bagi orang lain. Tetap semangat dan sukses selalu',
            ],
            [
                'nama'      => 'Nina Noverita, S.Pd',
                'NIP'       => '196408071991032006',
                'mapel'     => 'Bahasa Inggris',
                'gambar'    => asset('picture/FotoGuru/BU_NINA.jpg'),
                'quotes'    => 'Struggle, Pray, Success. Spirit for life',
            ],
            [
                'nama'      => 'Nurisa Amanda, S.Pd',
                'NIP'       => '199605022022212000',
                'mapel'     => 'Bimbingan Konseling',
                'gambar'    => asset('picture/FotoGuru/BU_NURISA.jpg'),
                'quotes'    => 'Jangan takut gagal, tidak ada yang salah dari kegagalan. Karena tidak ada kesuksesan tanpa kegagalan',
            ],
            [
                'nama'      => 'Siti Iswah Mawadah',
                'NIP'       => '1022440 (NIKKI)',
                'mapel'     => 'Pendidikan Agama Islam',
                'gambar'    => asset('picture/FotoGuru/BU_ISWAH.jpg'),
                'quotes'    => 'Apapun nanti hasilnya, banggalah terhadap setiap proses yang kamu lalui, hargai dirimu yang terus berusaha untuk menjadi lebih baik',
            ],
            [
                'nama'      => 'Dra. Sunariah',
                'NIP'       => '196404101992032003',
                'mapel'     => 'Bahasa Indonesia',
                'gambar'    => asset('picture/FotoGuru/BU_SUNARIAH.jpg'),
                'quotes'    => 'Teruslah belajar karena hidup ini akan selalu memberi pelajaran-pelajaran baru',
            ],
            [
                'nama'      => 'Untung Sarwo Prayogo, S.Pd',
                'NIP'       => '196903272008011013',
                'mapel'     => 'Bahasa Indonesia',
                'gambar'    => asset('picture/FotoGuru/PAK_UNTUNG.jpg'),
                'quotes'    => 'Jangan takut menghadapi hidup, kerja keras, dan jangan lupa beribadah',
            ],
            [
                'nama'      => 'Yuli Astuti S.Pd',
                'NIP'       => '198407192022212000',
                'mapel'     => 'Kimia',
                'gambar'    => asset('picture/FotoGuru/BU_YULI.jpg'),
                'quotes'    => 'Quitters never win, winner never quiet',
            ],
        ];

        $kejuruan2 = [
            [
                'nama'      => 'Abdul Gafur',
                'NIP'       => '197703112022211000',
                'mapel'     => 'Basis Data',
                'gambar'    => asset('picture/FotoGuru/PAK_GHAFUR.jpg'),
                'quotes'    => 'Berdoa Kepada Tuhan sebelum mengerjakan sesuatu, agar senantiasa dipermudah',
            ],
            [
                'nama'      => 'Amrul Khairullah, ST',
                'NIP'       => '197104082022211000',
                'mapel'     => 'Pemrograman Berorientasi Objek',
                'gambar'    => asset('picture/FotoGuru/PAK_AMRUL.jpg'),
                'quotes'    => 'Jangan takut untuk gagal, dalam coding kegagalan adalah proses pembelajaran yang sangat berarti.',
            ],
            [
                'nama'      => 'Mujiantoro, S.Pd, MMSI',
                'NIP'       => '197709052022211000',
                'mapel'     => 'Pemodelan Perangkat Lunak',
                'gambar'    => asset('picture/FotoGuru/PAK_MUJI.jpg'),
                'quotes'    => 'Untuk anak RPL yang bapak sayangi, tingkatkan terus semangat belajarmu naik, agar kamu dapat bekerja di perusahaan bagus atau kuliah di kampus terbaik',
            ],
            [
                'nama'      => 'R. Wisnu Sarjono, S.Pd, MT',
                'NIP'       => '197208242008011010',
                'mapel'     => 'Produk Kreatif dan Kewirausahaan',
                'gambar'    => asset('picture/FotoGuru/PAK_WISNU.jpg'),
                'quotes'    => 'Tetap kompak, semangat, pantang menyerah, dan gigih dalam mencapai cita cita',
            ],
            [
                'nama'      => 'Wanto Ari Wibowo, S.Kom',
                'NIP'       => '198407072022211000',
                'mapel'     => 'Pemrograman Web dan Perangkat Bergerak',
                'gambar'    => asset('picture/FotoGuru/PAK_WANTO.jpg'),
                'quotes'    => 'Untuk menjadi programmer yang lebih baik, alangkah baiknya dalam waktu 24 jam disisihkan waktu untuk ngoding',
            ],

        ];

        $nonkejuruan2 = [
            [
                'nama'      => 'Anna Mailani, S.Pd',
                'NIP'       => '196605272016062001',
                'mapel'     => 'Pancasila',
                'gambar'    => asset('picture/FotoGuru/BU_ANNA.jpg'),
                'quotes'    => 'Hidup itu harus punya arti, lakukan hal yang terbaik dan terindah dalam hidup kita',
            ],
            [
                'nama'      => 'Latifah Nurul Hidayati, S.Pd',
                'NIP'       => '199504162022212000',
                'mapel'     => 'Bahasa Indonesia',
                'gambar'    => asset('picture/FotoGuru/BU_NURUL.jpg'),
                'quotes'    => 'Berjalanlah, jangan lelah kelak perjuanganmu akan indah',
            ],
            [
                'nama'      => 'Leti Yulieti, S.Pd',
                'NIP'       => '196607221990032005',
                'mapel'     => 'Matematika',
                'gambar'    => asset('picture/FotoGuru/BU_LETI.jpeg'),
                'quotes'    => 'Berakit-rakit dahulu, berenang-renang kemudian. Bersakit-sakit dahulu, bersenang-senang kemudian',
            ],
            [
                'nama'      => 'Luke Nugroho, S.Pd',
                'NIP'       => '199205232020121019',
                'mapel'     => 'PJOK',
                'gambar'    => asset('picture/FotoGuru/PAK_LUKE.jpg'),
                'quotes'    => 'Jangan takut mencoba hal baru',
            ],
            [
                'nama'      => 'Nina Noverita, S.Pd',
                'NIP'       => '196408071991032006',
                'mapel'     => 'Bahasa Inggris',
                'gambar'    => asset('picture/FotoGuru/BU_NINA.jpg'),
                'quotes'    => 'Struggle, Pray, Success. Spirit for life',
            ],
            [
                'nama'      => 'Nurisa Amanda, S.Pd',
                'NIP'       => '199605022022212000',
                'mapel'     => 'Bimbingan Konseling',
                'gambar'    => asset('picture/FotoGuru/BU_NURISA.jpg'),
                'quotes'    => 'Jangan takut gagal, tidak ada yang salah dari kegagalan. Karena tidak ada kesuksesan tanpa kegagalan',
            ],
        ];

        $kejuruan3 = [
            [
                'nama'      => 'Abdul Gafur',
                'NIP'       => '197703112022211000',
                'mapel'     => 'Basis Data',
                'gambar'    => asset('picture/FotoGuru/PAK_GHAFUR.jpg'),
                'quotes'    => 'Berdoa Kepada Tuhan sebelum mengerjakan sesuatu, agar senantiasa dipermudah',
            ],
            [
                'nama'      => 'Amrul Khairullah, ST',
                'NIP'       => '197104082022211000',
                'mapel'     => 'Pemograman Berorientasi Objek',
                'gambar'    => asset('picture/FotoGuru/PAK_AMRUL.jpg'),
                'quotes'    => 'Jangan takut untuk gagal, dalam coding kegagalan adalah proses pembelajaran yang sangat berarti',
            ],
            [
                'nama'      => 'R. Wisnu Sarjono, S.Pd, MT',
                'NIP'       => '197208242008011010',
                'mapel'     => 'Produk Kreatif Dan Kewirausahaan',
                'gambar'    => asset('picture/FotoGuru/PAK_WISNU.jpg'),
                'quotes'    => 'Tetap kompak, semangat, pantang menyerah, dan gigih dalam mencapai cita cita',
            ],
            [
                'nama'      => 'Wanto Ari Wibowo, S.Kom',
                'NIP'       => '198407072022211000',
                'mapel'     => 'Pemrograman Web Dan Perangkat Bergerak',
                'gambar'    => asset('picture/FotoGuru/PAK_WANTO.jpg'),
                'quotes'    => 'Untuk menjadi programmer yang lebih baik, alangkah baiknya dalam waktu 24 jam disisihkan waktu untuk ngoding',
            ],
        ];

        $nonkejuruan3 = [
            [
                'nama'      => 'Agustini Mardelyni, S.Pd',
                'NIP'       => '199108172022212000',
                'mapel'     => 'Matematika',
                'gambar'    => asset('picture/FotoGuru/BU_AGUSTIN.jpg'),
                'quotes'    => 'Lebih baik 3 jam lebih cepat daripada terlambat 1 menit',
            ],
            [
                'nama'      => 'Hafizh Taufiqurahman',
                'NIP'       => '1026937 (NIKKI)',
                'mapel'     => 'Pancasila',
                'gambar'    => asset('picture/FotoGuru/PAK_HAFIZH.jpg'),
                'quotes'    => 'Jadilah manusia yang taat menjalankan ibadah, selalu ingat pesan walikelas dan guru yang mengajarmu. Teruslah berkarya untuk kemajuan bangsa Indonesia, serta ukir prestasi sesuai minat bakat kalian',
            ],
            [
                'nama'      => 'Mutmainnah Naiyan',
                'NIP'       => '1002801 (NIKKI)',
                'mapel'     => 'Pendidikan Agama Islam',
                'gambar'    => asset('picture/FotoGuru/BU_MUT.jpg'),
                'quotes'    => 'Jadilah pribadi yang baik dan bersahaja. Utamakan akhlak dan adabmu karena orang yang beradab lebih baik dari orang yang berilmu.',
            ],
            [
                'nama'      => 'Nina Noverita, S.Pd',
                'NIP'       => '196408071991032006',
                'mapel'     => 'Bahasa Inggris',
                'gambar'    => asset('picture/FotoGuru/BU_NINA.jpg'),
                'quotes'    => 'Struggle, Pray, Success. Spirit for life',
            ],
            [
                'nama'      => 'Nurisa Amanda, S.Pd',
                'NIP'       => '199605022022212000',
                'mapel'     => 'Bimbingan Konseling',
                'gambar'    => asset('picture/FotoGuru/bu_NURISA.jpg'),
                'quotes'    => 'Jangan takut gagal, tidak ada yang salah dari kegagalan. Karena tidak ada kesuksesan tanpa kegagalan',
            ],
            [
                'nama'      => 'Sudirwan',
                'NIP'       => '196812232022211000',
                'mapel'     => 'Bahasa Indonesia',
                'gambar'    => asset('picture/FotoGuru/PAK_SUDIRWAN.jpg'),
                'quotes'    => '-',
            ],
        ];

        $title = "Guru";
        return view('MapelDanGuru.index', compact('kejuruan1','nonkejuruan1', 'kejuruan2', 'nonkejuruan2', 'kejuruan3', 'nonkejuruan3', 'title')); // Adjust the view name
    }
}
