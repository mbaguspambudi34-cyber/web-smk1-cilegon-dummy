<?php

namespace Database\Seeders;

use App\Models\Major;
use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $majors = Major::all();

        if ($majors->isEmpty()) {
            return;
        }

        $names = [
            'Ahmad Fauzi', 'Siti Nurhayati', 'Budi Santoso', 'Dewi Lestari', 'Rizki Pratama',
            'Fajar Hidayat', 'Ayu Permata', 'Nur Aini', 'Andi Ramadhan', 'Salsa Cahaya',
            'Yoga Pratama', 'Maya Sari', 'Tegar Wirawan', 'Putri Ayu', 'Rian Hendra',
            'Intan Maharani', 'Fikri Saputra', 'Rina Wulandari', 'Reza Nugraha', 'Lia Kusuma',
            'Deni Kurniawan', 'Anisa Putri', 'Arif Maulana', 'Nadia Ramadhani', 'Kevin Pratama',
            'Linda Kurnia', 'Yogi Prayoga', 'Riana Prameswari', 'Bayu Adi', 'Citra Indah',
            'Dimas Wicaksana', 'Putri Nabila', 'Hendra Wijaya', 'Ika Salsabila', 'Rizal Fahmi',
            'Dian Oktavia', 'Galih Ari', 'Maya Pratiwi', 'Rio Saputra', 'Cindy Melani',
            'Fandi Maulana', 'Salsa Amelia', 'Rafli Ramadhan', 'Nina Cahaya', 'Faris Alvaro',
            'Intan Sari', 'Aditya Raka', 'Elisa Putri', 'Bagas Prasetyo', 'Reni Marlina',
        ];

        $classes = [
            'X RPL 1', 'X RPL 2', 'X TKJ 1', 'X TKJ 2', 'X MM 1',
            'XI RPL 1', 'XI TKJ 1', 'XI MM 1', 'XI OTOM 1', 'XI ETI 1',
            'XII RPL 1', 'XII TKJ 1', 'XII MM 1', 'XII OTOM 1', 'XII LAS 1',
        ];

        $addresses = [
            'Cibeber', 'Kalitimbang', 'Jombang', 'Citangkil', 'Ciwandan',
            'Merak', 'Gerem', 'Warnasari', 'Purwakarta', 'Ketileng',
            'Kp. Kebon Kongok', 'Jl. Pasir Putih', 'Perumahan Pilar Mas', 'Komplek Asri', 'Kp. Rawa Laut',
        ];

        $genders = ['Laki-laki', 'Perempuan'];

        foreach ($names as $index => $name) {
            $studentData = [
                'nis' => sprintf('1023%03d', $index + 1),
                'name' => $name,
                'gender' => $genders[$index % 2],
                'class' => $classes[$index % count($classes)],
                'address' => $addresses[$index % count($addresses)],
                'major_id' => $majors[$index % $majors->count()]->id,
            ];

            Student::updateOrCreate(
                ['nis' => $studentData['nis']],
                $studentData
            );
        }
    }
}
