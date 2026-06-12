<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $majors = [
            [
                'name' => 'Teknik Elektronika Industri',
                'category' => 'Teknik Elektronika',
                'description' => 'Mempelajari instalasi, perbaikan, dan pemeliharaan sistem elektronika industri seperti kontrol motor, sensor otomatis, dan rangkaian pengendali.',
                'image' => 'images/majors/teknik-elektronika-industri.jpg',
            ],
            [
                'name' => 'Teknik Mekatronika',
                'category' => 'Teknik Industri',
                'description' => 'Mengintegrasikan mekanika, elektronika, dan pemrograman untuk merancang serta mengoperasikan sistem otomasi dan robotika industri.',
                'image' => 'images/majors/teknik-mekatronika.jpg',
            ],
            [
                'name' => 'Teknik Otomasi Industri',
                'category' => 'Teknik Industri',
                'description' => 'Berfokus pada pemrograman PLC, pengendalian mesin otomatis, pemantauan proses, dan integrasi sistem produksi cerdas.',
                'image' => 'images/majors/teknik-otomasi-industri.jpg',
            ],
            [
                'name' => 'Teknik Pemesinan',
                'category' => 'Teknik Mesin',
                'description' => 'Membekali siswa kemampuan membaca gambar teknik, mengoperasikan mesin bubut, frais, dan mesin CNC untuk membuat komponen presisi.',
                'image' => 'images/majors/teknik-pemesinan.jpg',
            ],
            [
                'name' => 'Teknik Pengelasan',
                'category' => 'Teknik Mesin',
                'description' => 'Memahami berbagai teknik las, persiapan material, pengujian kualitas sambungan, serta keselamatan kerja di bengkel dan pabrik.',
                'image' => 'images/majors/teknik-pengelasan.jpg',
            ],
            [
                'name' => 'Teknik Kendaraan Ringan',
                'category' => 'Otomotif',
                'description' => 'Belajar perawatan, servis, dan diagnosis kendaraan ringan dengan teknologi mesin, kelistrikan, dan sistem injeksi modern.',
                'image' => 'images/majors/teknik-kendaraan-ringan.jpg',
            ],
            [
                'name' => 'Teknik Fabrikasi Logam dan Manufaktur',
                'category' => 'Teknik Mesin',
                'description' => 'Memahami proses fabrikasi, pemotongan, pembentukan, dan perakitan komponen logam sesuai standar industri manufaktur.',
                'image' => 'images/majors/teknik-fabrikasi-logam.jpg',
            ],
            [
                'name' => 'Desain Gambar Mesin',
                'category' => 'Teknik Mesin',
                'description' => 'Mempelajari gambar teknik, perancangan produk, dan penggunaan perangkat lunak CAD untuk menghasilkan gambar kerja yang akurat.',
                'image' => 'images/majors/desain-gambar-mesin.jpg',
            ],
            [
                'name' => 'Rekayasa Perangkat Lunak',
                'category' => 'Informatika',
                'description' => 'Mengembangkan aplikasi perangkat lunak, basis data, dan sistem web dengan metodologi pengembangan perangkat lunak modern.',
                'image' => 'images/majors/rekayasa-perangkat-lunak.jpg',
            ],
            [
                'name' => 'Sistem Informatika Jaringan dan Aplikasi',
                'category' => 'Informatika',
                'description' => 'Fokus pada jaringan komputer, keamanan siber, manajemen server, dan pengembangan aplikasi sistem informasi berbasis web.',
                'image' => 'images/majors/sistem-informatika-jaringan.jpg',
            ],
        ];

        foreach ($majors as $major) {
            Major::updateOrCreate(['name' => $major['name']], $major);
        }
    }
}
