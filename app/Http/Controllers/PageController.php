<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        $data = [
            [
                'image'       => 'img/beranda1.jpg',
                'category'    => 'Legenda Urban',
                'title'       => 'Teror Malam Jumat',
                'description' => 'Dengarkan kisah-kisah yang menghantui malam Jumat, ada cerita-cerita yang tak terlupakan!',
            ],
            [
                'image'       => 'img/beranda2.jpg',
                'category'    => 'Psikologis',
                'title'       => 'Penampakan',
                'description' => 'Jelajahi kisah-kisah yang menggugah emosi dan memicu pikiran tentang hal yang tidak biasa.',
            ],
            [
                'image'       => 'img/beranda3.jpg',
                'category'    => 'Misteri',
                'title'       => 'Tak Terduga',
                'description' => 'Temukan cerita-cerita yang penuh kejutan dan ketegangan, siap untuk membuat bulu kuduk merinding!',
            ]
        ];
        return view('welcome', compact('data'));
    }
    public function login()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        session(['username' => $request->username]);

        return redirect()->route('dashboard');
    }

    public function dashboard()
    {
        $stats = [
            'arsip' => 666,
            'korban' => '13,402',
            'penulis' => 13
        ];

        $cerita = [
            [
                'kategori' => 'Urban Legend',
                'judul' => 'Tumbal Malam Jumat',
                'isi' => 'Suara gamelan itu terdengar lagi tepat jam 12 malam...',
                'penulis' => 'Ki Joko',
                'waktu' => '2 jam lalu',
            ],
            [
                'kategori' => 'Penampakan',

                'judul' => 'Ketukan di Jendela Kamar 308',
                'isi' => 'Lantai 3 rumah sakit itu konon sudah ditutup...',
                'penulis' => 'Risa S.',
                'waktu' => '5 jam lalu',
            ],
            [
                'kategori' => 'Mitos / Legenda',

                'judul' => 'Kereta Hantu Manggarai',
                'isi' => 'Banyak yang bersaksi melihat kereta itu lewat...',
                'penulis' => 'fABYAN',
                'waktu' => '1 hari lalu',
            ],
        ];

        return view('dashboard', compact('stats', 'cerita'));
    }

    public function pengelolaan()
    {
        $cerita = [
            [
                'id' => 1,
                'judul' => 'Nyanyian Sinden di Tengah Malam',
                'penulis' => 'Bayu_Segara',
                'kategori' => 'Urban Legend',
                'status' => 'menunggu',
                'isi' => '
                  <p class="mb-4">Tepat pukul 2 pagi, terdengar suara tembang Jawa mengalun pelan dari arah kebun bambu belakang rumah. Suaranya meliuk-liuk, menyayat hati namun sekaligus membuat bulu kuduk berdiri. Padahal, rumah nenek berada di ujung desa yang berbatasan langsung dengan hutan pinus, tidak ada tetangga dalam radius 500 meter.</p>
                    <p class="mb-4">Aku mencoba menutup telinga dengan bantal, tapi suara itu bukannya mereda, malah terasa semakin dekat. Seolah-olah sosok yang menyanyi itu sedang melangkah pelan memutari tembok kamarku.</p>
                    <p class="mb-4">Tiba-tiba, suara tembang itu berhenti tepat di depan jendelaku. Jendela kayu tua yang celahnya cukup lebar. Udara di dalam kamar yang awalnya pengap mendadak berubah menjadi sangat dingin, diiringi aroma melati yang sangat menyengat bercampur bau anyir darah.</p>
                    <p class="mb-4">Aku menahan napas. Mataku tak bisa lepas dari celah jendela itu. Dan di sanalah aku melihatnya—sebuah mata merah menyala mengintip dari balik celah kayu, menatapku lurus-lurus di kegelapan.</p>
                    <p><strong>"Kowe durung turu, nduk?"</strong> Suara parau seorang wanita tua terdengar tepat dari balik dinding, disusul suara ketukan pelan... <em>tok... tok... tok...</em></p>'
            ],
            [
                'id' => 2,
                'judul' => 'Kamar 308 Hotel Tua',
                'penulis' => 'Misteri_ID',
                'kategori' => 'Penampakan',
                'status' => 'terpublikasi',
                'isi' => '
                <p class="mb-4">Kamar 308 di hotel tua itu sudah lama dikunci. Resepsionis hanya akan menggeleng pelan jika ada tamu yang bertanya, seolah angka itu membawa sesuatu yang tidak seharusnya disebut. Namun malam itu, karena hotel penuh dan hujan deras mengguyur tanpa henti, aku terpaksa menerima kunci kamar tersebut.</p>
                <p class="mb-4">Lorong menuju lantai tiga terasa berbeda. Lampunya redup, beberapa bahkan berkedip tidak beraturan. Karpet tua mengeluarkan bau lembap, seperti tidak pernah terkena cahaya matahari selama bertahun-tahun. Setiap langkah kakiku terdengar lebih keras dari biasanya, menggema panjang di lorong yang kosong.</p>
                <p class="mb-4">Saat pintu kamar 308 terbuka, udara dingin langsung menyergap. Bukan dingin biasa—lebih seperti hawa dari ruang yang lama tertutup. Aku mencoba mengabaikannya, menyalakan lampu, dan masuk. Semuanya terlihat normal, kecuali cermin besar di sudut ruangan yang tampak sedikit berkabut meski ruangan tidak lembap.</p>
                <p class="mb-4">Sekitar pukul 1 malam, aku terbangun karena suara air menetes. <em>tik... tik... tik...</em> Suara itu berasal dari kamar mandi. Dengan malas, aku bangkit dan berjalan mendekat. Tapi saat pintu kamar mandi kubuka, tidak ada apa-apa. Lantai kering. Keran tertutup rapat.</p>
                <p class="mb-4">Aku kembali ke tempat tidur, tapi suara itu muncul lagi. Kali ini lebih dekat... seolah berasal dari dalam kamar. Perlahan aku menoleh ke arah cermin. Nafasku langsung tertahan.</p>
                <p class="mb-4">Di dalam cermin, aku melihat diriku sendiri... tapi tidak persis sama. Sosok itu berdiri diam, dengan kepala sedikit miring. Dan di belakangnya—tepat di belakangku—ada seorang wanita berambut panjang menutupi wajahnya, berdiri terlalu dekat.</p>
                <p class="mb-4">Aku spontan menoleh ke belakang. Kosong. Tidak ada siapa-siapa. Tapi saat aku kembali melihat ke cermin...</p>
                <p><strong>Sosok itu sudah berdiri tepat di belakangku.</strong> Nafasnya terasa dingin di tengkukku, diiringi bisikan lirih... <em>"Kamu masuk ke kamarku..."</em></p>
                '
            ],
        ];

        return view('pengelolaan', compact('cerita'));
    }

    public function profile()
    {
        return view('profile');
    }

    public function logout()
    {
        session()->forget('username');
        return redirect()->route('login');
    }
}
