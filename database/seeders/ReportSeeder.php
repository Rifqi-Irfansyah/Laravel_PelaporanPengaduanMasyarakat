<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('report')->insert([
            [
                'id_user'=>'3',
                'title'=>'Tawuran Pelajar di Cimahi',
                'message'=>'Kejadian tawuran antar sekolah menjadi masalah yang sangat serius dan membahayakan keselamatan warga di sekitar lokasi kejadian. 
                Dalam kasus ini, warga melihat bahwa sekelompok pelajar dari sekolah SMK XYZ berselisih dengan sekolah SMK XY, sehingga memicu kekhawatiran 
                akan terulangnya aksi tawuran di kemudian hari. Untuk mencegah hal ini terjadi, warga meminta bantuan kepolisian untuk menertibkan dan 
                mengambil tindakan preventif agar aksi tawuran tidak terulang lagi. Dalam situasi seperti ini, kepolisian perlu bekerja sama dengan pihak 
                sekolah dan masyarakat sekitar untuk mengatasi masalah tawuran antar sekolah. Selain menertibkan pelaku tawuran, kepolisian juga perlu 
                melakukan sosialisasi kepada pelajar tentang bahaya dan dampak buruk dari tawuran. Hal ini bertujuan agar para pelajar tidak terprovokasi 
                untuk melakukan aksi tawuran dan menjaga lingkungan sekolah serta masyarakat sekitar tetap aman dan kondusif. Selain itu, perlu ada peran 
                aktif dari pihak sekolah untuk mengawasi para pelajarnya dan melakukan tindakan preventif jika ada indikasi tawuran akan terjadi. Pihak sekolah 
                juga perlu memfasilitasi kegiatan positif dan membina nilai-nilai kebersamaan dan perdamaian di antara pelajar agar tercipta lingkungan belajar 
                yang sehat dan harmonis. Dalam situasi seperti ini, kolaborasi antara kepolisian, sekolah, dan masyarakat sangat diperlukan untuk menciptakan 
                lingkungan belajar yang kondusif dan aman bagi semua pihak.',
                'destination_agency'=>'Kepolisian Cimahi Tengah',
                'images'=>'tawuran.jpg',
                'status'=>'Terkirim',
                'incident_date'=>'2023-03-06 06:59:19',
                'created_at' => now(),
            ],
        ]);
    }
}