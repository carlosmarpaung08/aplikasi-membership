<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; // Pastikan ini diimpor

class ContentController extends Controller
{
    private $allArticles = [
        ['id' => 1, 'title' => 'Pengantar Aplikasi Membership', 'description' => 'Memulai dengan fitur-fitur dasar.', 'level' => 'A', 'access' => ['A', 'B', 'C']],
        ['id' => 2, 'title' => 'Strategi Pemasaran Digital Dasar', 'description' => 'Memahami dasar-dasar SEO dan Media Sosial.', 'level' => 'A', 'access' => ['A', 'B', 'C']],
        ['id' => 3, 'title' => 'Tips Produktivitas untuk Pemula', 'description' => 'Meningkatkan efisiensi kerja harian Anda.', 'level' => 'A', 'access' => ['A', 'B', 'C']],
        ['id' => 4, 'title' => 'Analisis Mendalam Fitur Premium', 'description' => 'Mengeksplorasi fitur-fitur lanjutan aplikasi.', 'level' => 'B', 'access' => ['B', 'C']],
        ['id' => 5, 'title' => 'Panduan Lengkap Google Analytics', 'description' => 'Menguasai data analitik untuk pertumbuhan.', 'level' => 'B', 'access' => ['B', 'C']],
        ['id' => 6, 'title' => 'Membuat Kampanye Email yang Efektif', 'description' => 'Langkah demi langkah membangun daftar email.', 'level' => 'B', 'access' => ['B', 'C']],
        ['id' => 7, 'title' => 'Dasar-Dasar Keamanan Siber', 'description' => 'Melindungi akun dan data Anda secara online.', 'level' => 'B', 'access' => ['B', 'C']],
        ['id' => 8, 'title' => 'Pengantar Otomatisasi Pemasaran', 'description' => 'Mempelajari alat dan strategi otomatisasi.', 'level' => 'B', 'access' => ['B', 'C']],
        ['id' => 9, 'title' => 'Optimasi Konversi Landing Page', 'description' => 'Meningkatkan rasio konversi situs web Anda.', 'level' => 'B', 'access' => ['B', 'C']],
        ['id' => 10, 'title' => 'Pengenalan Blockchain untuk Bisnis', 'description' => 'Bagaimana teknologi blockchain mempengaruhi industri.', 'level' => 'B', 'access' => ['B', 'C']],
        ['id' => 11, 'title' => 'Tren AI dalam Pemasaran 2024', 'description' => 'Wawasan tentang adopsi AI terbaru.', 'level' => 'C', 'access' => ['C']],
        ['id' => 12, 'title' => 'Strategi Investasi untuk Masa Depan', 'description' => 'Analisis pasar dan proyeksi pertumbuhan.', 'level' => 'C', 'access' => ['C']],
        ['id' => 13, 'title' => 'Masterclass Data Science untuk Non-Developer', 'description' => 'Memahami data besar dan penerapannya.', 'level' => 'C', 'access' => ['C']],
        ['id' => 14, 'title' => 'Wawancara Eksklusif dengan CEO Industri', 'description' => 'Pandangan dari pemimpin visioner.', 'level' => 'C', 'access' => ['C']],
        ['id' => 15, 'title' => 'Deep Dive: Keamanan Jaringan Tingkat Lanjut', 'description' => 'Melindungi infrastruktur digital dari ancaman.', 'level' => 'C', 'access' => ['C']],
    ];

    private $allVideos = [
        ['id' => 1, 'title' => 'Tour Aplikasi Anda (Dasar)', 'description' => 'Video pengenalan antarmuka pengguna.', 'level' => 'A', 'access' => ['A', 'B', 'C']],
        ['id' => 2, 'title' => 'Membuat Profil Pertama Anda', 'description' => 'Langkah-langkah untuk mengatur akun Anda.', 'level' => 'A', 'access' => ['A', 'B', 'C']],
        ['id' => 3, 'title' => 'Cara Mengakses Konten', 'description' => 'Panduan cepat untuk menemukan artikel dan video.', 'level' => 'A', 'access' => ['A', 'B', 'C']],
        ['id' => 4, 'title' => 'Studi Kasus: Peningkatan Trafik Web', 'description' => 'Video analisis kampanye SEO yang sukses.', 'level' => 'B', 'access' => ['B', 'C']],
        ['id' => 5, 'title' => 'Tutorial Lanjutan: Google Ads', 'description' => 'Mengelola kampanye iklan yang kompleks.', 'level' => 'B', 'access' => ['B', 'C']],
        ['id' => 6, 'title' => 'Webinar: Tren Pemasaran Konten', 'description' => 'Diskusi tentang strategi konten terbaru.', 'level' => 'B', 'access' => ['B', 'C']],
        ['id' => 7, 'title' => 'Pengenalan Cyber Security untuk Bisnis', 'description' => 'Video fundamental perlindungan data perusahaan.', 'level' => 'B', 'access' => ['B', 'C']],
        ['id' => 8, 'title' => 'Workshop Otomatisasi CRM', 'description' => 'Langkah-langkah mengimplementasikan CRM otomatis.', 'level' => 'B', 'access' => ['B', 'C']],
        ['id' => 9, 'title' => 'Membuat Video Marketing Berdampak', 'description' => 'Tips produksi dan distribusi video.', 'level' => 'B', 'access' => ['B', 'C']],
        ['id' => 10, 'title' => 'Sesi Tanya Jawab Live Pemasaran', 'description' => 'Pertanyaan dan jawaban langsung dari para ahli.', 'level' => 'B', 'access' => ['B', 'C']],
        ['id' => 11, 'title' => 'Masterclass AI untuk Pengambilan Keputusan', 'description' => 'Mengeksplorasi penggunaan AI dalam strategi bisnis.', 'level' => 'C', 'access' => ['C']],
        ['id' => 12, 'title' => 'Wawancara Eksklusif: Visi Masa Depan', 'description' => 'Diskusi dengan pemimpin industri.', 'level' => 'C', 'access' => ['C']],
        ['id' => 13, 'title' => 'Analisis Ekonomi Global 2025', 'description' => 'Prediksi dan wawasan pasar global.', 'level' => 'C', 'access' => ['C']],
        ['id' => 14, 'title' => 'Advanced Cloud Computing Strategies', 'description' => 'Mengeksplorasi solusi cloud enterprise.', 'level' => 'C', 'access' => ['C']],
        ['id' => 15, 'title' => 'Keamanan Blockchain & Kriptografi', 'description' => 'Aspek keamanan dalam teknologi blockchain.', 'level' => 'C', 'access' => ['C']],
    ];

    // Definisi level akses
    // Tipe A dapat mengakses konten level A
    // Tipe B dapat mengakses konten level A, B
    // Tipe C dapat mengakses konten level A, B, C
    private $accessLevelMap = [
        'A' => ['A'],
        'B' => ['A', 'B'],
        'C' => ['A', 'B', 'C'],
    ];

    // Batasan jumlah konten yang ditampilkan berdasarkan tipe membership
    private $displayLimits = [
        'A' => ['articles' => 3, 'videos' => 3],
        'B' => ['articles' => 10, 'videos' => 10],
        'C' => ['articles' => PHP_INT_MAX, 'videos' => PHP_INT_MAX], // PHP_INT_MAX untuk tak terbatas
    ];

    /**
     * Menampilkan daftar artikel berdasarkan tipe membership pengguna.
     *
     * @return \Illuminate\View\View
     */
    public function articles()
    {
        $user = Auth::user();
        $userMembershipType = $user->membership_type;
        $allowedLevels = $this->accessLevelMap[$userMembershipType];
        $displayLimit = $this->displayLimits[$userMembershipType]['articles'];

        $filteredArticles = [];
        $count = 0;

        foreach ($this->allArticles as $article) {
            // Hanya tambahkan artikel jika levelnya diizinkan untuk tipe membership user
            if (in_array($article['level'], $allowedLevels)) {
                $filteredArticles[] = $article;
            }
        }

        // Batasi jumlah artikel yang ditampilkan berdasarkan displayLimit
        $accessibleArticles = array_slice($filteredArticles, 0, $displayLimit);

        return view('content.articles.index', compact('accessibleArticles', 'userMembershipType', 'displayLimit'));
    }

    /**
     * Menampilkan daftar video berdasarkan tipe membership pengguna.
     *
     * @return \Illuminate\View\View
     */
    public function videos()
    {
        $user = Auth::user();
        $userMembershipType = $user->membership_type;
        $allowedLevels = $this->accessLevelMap[$userMembershipType];
        $displayLimit = $this->displayLimits[$userMembershipType]['videos'];

        $filteredVideos = [];
        $count = 0;

        foreach ($this->allVideos as $video) {
            // Hanya tambahkan video jika levelnya diizinkan untuk tipe membership user
            if (in_array($video['level'], $allowedLevels)) {
                $filteredVideos[] = $video;
            }
        }

        // Batasi jumlah video yang ditampilkan berdasarkan displayLimit
        $accessibleVideos = array_slice($filteredVideos, 0, $displayLimit);

        return view('content.videos.index', compact('accessibleVideos', 'userMembershipType', 'displayLimit'));
    }

    /**
     * Menampilkan detail artikel spesifik.
     * Ini hanya contoh, dalam aplikasi nyata ini akan mengambil dari database.
     *
     * @param int $id
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function showArticle($id)
    {
        $user = Auth::user();
        $userMembershipType = $user->membership_type;

        $article = collect($this->allArticles)->firstWhere('id', $id);

        if (!$article) {
            abort(404); // Artikel tidak ditemukan
        }

        // Periksa apakah user memiliki akses ke artikel ini berdasarkan levelnya
        if (!in_array($article['level'], $this->accessLevelMap[$userMembershipType])) {
            return redirect()->back()->with('access_denied', 'Tipe membership Anda tidak mengizinkan akses ke konten ini. Silakan upgrade membership Anda!');
        }

        return view('content.articles.show', compact('article', 'userMembershipType'));
    }

    /**
     * Menampilkan detail video spesifik.
     * Ini hanya contoh, dalam aplikasi nyata ini akan mengambil dari database.
     *
     * @param int $id
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function showVideo($id)
    {
        $user = Auth::user();
        $userMembershipType = $user->membership_type;

        $video = collect($this->allVideos)->firstWhere('id', $id);

        if (!$video) {
            abort(404); // Video tidak ditemukan
        }

        // Periksa apakah user memiliki akses ke video ini berdasarkan levelnya
        if (!in_array($video['level'], $this->accessLevelMap[$userMembershipType])) {
            return redirect()->back()->with('access_denied', 'Tipe membership Anda tidak mengizinkan akses ke konten ini. Silakan upgrade membership Anda!');
        }

        return view('content.videos.show', compact('video', 'userMembershipType'));
    }
}