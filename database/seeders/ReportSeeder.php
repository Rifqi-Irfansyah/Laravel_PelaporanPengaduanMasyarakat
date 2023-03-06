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
        ]);
    }
}
