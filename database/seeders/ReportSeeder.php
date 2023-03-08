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
                'title'=>'Perbaikan Jalan di Cimahi Selatan',
                'message'=>'Saat ini, kondisi jalan yang berada di depan rumah saya sangat buruk dan mengganggu kenyamanan serta keselamatan 
                pengguna jalan. Jalan tersebut berlubang-lubang, bergelombang, dan banyak bagian yang rusak. Terlebih lagi, pada saat musim 
                hujan, genangan air sering terjadi di beberapa titik jalan dan menyebabkan kendaraan terjebak dan sulit untuk melintas. Kondisi 
                jalan yang buruk ini juga telah menyebabkan kerusakan pada kendaraan saya dan warga lainnya.',
                'destination_agency'=>'Pemda Kota Cimahi',
                'images'=>'jalan rusak.jpg',
                'status'=>'Terkirim',
                'incident_date'=>'2023-03-06 06:59:19',
                'created_at' => now(),
            ],
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
            [
                'id_user'=>'3',
                'title'=>'Keamanan yang Semakain Melemah',
                'message'=>'Kepada pihak berwenang, Saya ingin melaporkan tentang kekhawatiran saya terkait dengan keamanan yang semakin lemah di 
                daerah kami. Saya tinggal di lingkungan yang semakin sering terjadi tindakan kejahatan, seperti pencurian dan perampokan. 
                Saya telah melihat beberapa kali bagaimana para pelaku kejahatan tersebut melakukan aksinya dengan sangat leluasa dan berani, 
                bahkan pada siang hari. Hal ini membuat saya dan masyarakat setempat merasa tidak aman dan khawatir akan keselamatan kami. 
                
                Selain itu, saya juga menyadari bahwa sistem keamanan yang ada saat ini di daerah kami tidak memadai. 
                Terkadang, aparat keamanan tidak mampu memberikan respons yang cepat dan tepat ketika terjadi kejahatan, sehingga pelaku dapat 
                lolos tanpa diidentifikasi. Saya memohon kepada pihak berwenang untuk meningkatkan sistem keamanan dan pengawasan di daerah kami 
                agar masyarakat dapat merasa lebih aman dan nyaman. Saya juga berharap bahwa aparat keamanan dapat diberikan pelatihan dan peralatan 
                yang memadai untuk mempermudah dalam menangani tindakan kejahatan. Terima kasih atas perhatian yang diberikan. Hormat saya, Adzan',
                'destination_agency'=>'Kepolisian Cimahi Tengah',
                'images'=>'keamanan.jpg',
                'status'=>'Terkirim',
                'incident_date'=>'2023-03-06 06:59:19',
                'created_at' => now(),
            ],
        ]);
    }
}