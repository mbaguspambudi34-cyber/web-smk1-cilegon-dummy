@extends('layouts.app')

@section('title', 'Profil Sekolah - SMK Negeri 1 Cilegon')

@section('content')
    <section class="bg-gradient-to-br from-school-navy via-school-blue to-sky-700 py-20 text-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl">
                <span class="rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-bold text-school-gold animate-fade-up">Profil Sekolah</span>
                <h1 class="mt-6 text-4xl font-black sm:text-5xl animate-fade-up delay-100">Profil Sekolah</h1>
                <p class="mt-5 text-lg leading-8 text-slate-100 animate-fade-up delay-200">Mengenal sejarah, visi, misi, tujuan, dan struktur organisasi SMK Negeri 1 Cilegon.</p>
            </div>
        </div>
    </section>

    <section class="bg-slate-100 py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-8 lg:grid-cols-3">
                <article class="card-hover rounded-3xl bg-white p-8 shadow-soft lg:col-span-2 animate-fade-up delay-200">
                    <p class="text-sm font-black uppercase tracking-wide text-school-blue">Sejarah Singkat</p>
                    <h2 class="mt-3 text-3xl font-black text-school-navy">Perjalanan SMK Negeri 1 Cilegon</h2>

                    <div class="mt-6 space-y-5 leading-8 text-slate-600">
                        <p>SMK Negeri 1 Cilegon berdiri tahun 1997, dibangun dari proyek Loan ADB VOCTEC (Vocational Technology), semula bernama SMK Negeri 1 Cibeber yang diresmikan pada tanggal 29 April 1998 di Serang oleh Bapak Drs. H. Thamrin Gunardi sebagai Kepala Kantor Wilayah Departemen Pendidikan dan Kebudayaan Propinsi Jawa Barat.</p>
                        <p>SMK Negeri 1 Cilegon adalah Kelompok Teknologi dan Industri yang ada di lingkungan Dinas Pendidikan Kabupaten Serang saat itu, kemudian beralih berada di lingkungan Dinas Pendidikan Kota Cilegon setelah terbentuknya Propinsi Banten. Pada Tahun 2016 berdasarkan Undang-Undang No 23 Tahun 2014 tentang Pemerintah Daerah, SMK, SLTA dan SKh diambil alih berada di lingkungan Pemerintah Provinsi Banten.</p>
                        <p>Bidang keahlian yang ada di SMK Negeri 1 Cilegon saat ini adalah Bidang Teknologi dan Rekayasa, serta Teknologi Informasi dan Komunikasi. Pada Tahun 2020 SMKN 1 Cilegon menjadi SMK Center Of Excellent (COE) sektor Kerjasama Luar Negeri dan dilanjut pada Tahun 2021 menjadi SMK Pusat Keunggulan (PK) dengan bidang keahlian Teknologi Manufaktur dan Rekayasa dan Teknologi Informasi.</p>
                        <p>Lokasi sekolah berada di Jalan Kedungbaya No. 21 Kelurahan Kalitimbang Kecamatan Cibeber, sekitar 4 km dari pusat Kota Cilegon wilayah selatan, menempati areal sekitar 22.240 m2 dengan kontur tanah tidak rata.</p>
                        <p>Pada Tahun Ajaran 1997-1998, SMK Negeri 1 Cilegon dengan Kepala Sekolah Drs. Afandi Haryanto mulai menerima siswa baru dengan 3 Program Keahlian, yaitu Teknik Elektronika, Teknik Listrik Pemakaian, dan Teknik Mesin Perkakas.</p>
                        <p>Seiring perkembangannya, SMK Negeri 1 Cilegon membuka kompetensi keahlian lainnya. Pada tahun 2006 dibuka Kompetensi Keahlian Teknik Mekanik Otomotif dan Teknik Komputer dan Jaringan. Selanjutnya Teknik Listrik berubah menjadi Teknik Otomasi Industri, dan membuka 2 Kompetensi Keahlian baru yaitu Teknik Gambar Mesin dan Teknik Mekatronika.</p>
                        <p>Pada Tahun 2017 Program Keahlian Teknik Mesin bertambah Kompetensi Keahlian Teknik Fabrikasi Logam dan Manufaktur. Pada Tahun 2019 Bidang Keahlian Teknologi Informasi bertambah Kompetensi Keahlian Sistem Informatika, Jaringan dan Aplikasi, dan pada Tahun 2023 membuka Kompetensi Keahlian Teknik Pengelasan.</p>
                        <p>Hingga kini Kompetensi Keahlian yang dilayani di SMK Negeri 1 Cilegon berjumlah 10 Kompetensi Keahlian yaitu Teknik Elektronika Industri, Teknik Mekatronika, Teknik Otomasi Industri, Teknik Pemesinan, Desain Gambar Mesin, Teknik Kendaraan Ringan, Teknik Fabrikasi Logam dan Manufaktur, Teknik Pengelasan, Rekayasa Perangkat Lunak dan Sistem Informatika Jaringan dan Aplikasi.</p>
                        <p>Kini SMK Negeri 1 Cilegon berusaha mewujudkan lulusan yang kompeten, produktif, berkarakter dan berdaya saing global. Diharapkan lulusan yang kompeten dapat terserap di Industri dan Dunia Kerja (IDUKA), melanjutkan pendidikan, serta mampu menjadi wirausahawan muda.</p>
                        <p>Untuk mencapai harapan dan cita-cita SMK yang berprestasi, SMK Negeri 1 Cilegon akan terus berjuang dan berusaha menjadi kebanggaan.</p>
                    </div>
                </article>

                <aside class="space-y-6">
                    <div class="card-hover rounded-3xl bg-school-navy p-8 text-white shadow-soft animate-fade-up delay-300">
                        <p class="text-sm font-black uppercase tracking-wide text-school-gold">Identitas</p>
                        <h3 class="mt-3 text-2xl font-black">SMK Negeri 1 Cilegon</h3>
                        <p class="mt-4 text-sm leading-6 text-slate-200">Sekolah kejuruan bidang teknologi, rekayasa, dan teknologi informasi yang berorientasi pada kompetensi industri.</p>
                    </div>
                    <div class="card-hover rounded-3xl bg-white p-8 shadow-soft animate-fade-up delay-400">
                        <p class="text-sm font-black uppercase tracking-wide text-school-blue">Lokasi</p>
                        <p class="mt-3 font-bold text-school-navy">Jalan Kedungbaya No. 21, Kalitimbang, Cibeber, Kota Cilegon, Banten</p>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="rounded-3xl bg-gradient-to-br from-school-navy to-school-blue p-8 text-white shadow-soft md:p-10">
                <p class="text-sm font-black uppercase tracking-wide text-school-gold">Visi Sekolah</p>
                <blockquote class="mt-5 text-2xl font-black leading-snug sm:text-3xl">Mewujudkan lulusan yang berkompeten, berkarakter, berproduktif, berwawasan lingkungan dan berdaya saing global.</blockquote>
            </div>
        </div>
    </section>

    <section class="bg-slate-100 py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <p class="text-sm font-black uppercase tracking-wide text-school-blue">Misi Sekolah</p>
                <h2 class="mt-3 text-3xl font-black text-school-navy">Langkah strategis sekolah</h2>
            </div>
            <div class="mt-10 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    'Mengembangkan kurikulum yang mampu menciptakan kompetensi sesuai dengan kebutuhan dunia kerja.',
                    'Mengembangkan pendidikan dan pelatihan kejuruan yang terintegrasi dengan dunia kerja.',
                    'Meningkatkan sarana dan prasarana yang memenuhi standar praktik kejuruan.',
                    'Menerapkan nilai-nilai karakter bangsa melalui penguatan pendidikan karakter sesuai dengan profil Pelajar Pancasila.',
                    'Melaksanakan Pembelajaran dengan model Project Based Learning, dan Teaching Factory.',
                    'Mengembangkan dan meningkatkan kapasitas kompetensi keahlian untuk menjadi pusat keunggulan center of excellent dalam pembentukan lulusan yang produktif.',
                    'Menumbuhkan jiwa kewirausahaan.',
                    'Meningkatkan kemampuan berbahasa Inggris dan bahasa asing lainnya serta fasilitasi sertifikasi kompetensi dalam penguatan lulusan yang berdaya saing global.',
                    'Mengembangkan budaya berpikir positif, berwawasan luas, berdaya saing, dan unggul dalam mutu.',
                ] as $mission)
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-soft">
                        <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-school-gold text-sm font-black text-school-navy">{{ $loop->iteration }}</div>
                        <p class="text-sm font-semibold leading-6 text-slate-700">{{ $mission }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-8 lg:grid-cols-3">
                <div>
                    <p class="text-sm font-black uppercase tracking-wide text-school-blue">Tujuan Sekolah</p>
                    <h2 class="mt-3 text-3xl font-black text-school-navy">Target pengembangan siswa</h2>
                    <p class="mt-4 leading-7 text-slate-600">Tujuan sekolah diarahkan untuk membentuk lulusan yang religius, profesional, disiplin, adaptif, dan siap berkembang di dunia kerja maupun pendidikan lanjutan.</p>
                </div>
                <div class="rounded-3xl bg-slate-50 p-6 shadow-soft lg:col-span-2">
                    <ol class="space-y-4">
                        @foreach ([
                            'Meningkatkan keimanan dan ketaqwaan peserta didik kepada Tuhan Yang Maha Esa.',
                            'Meningkatkan kualitas tenaga kependidikan sesuai dengan tuntutan pembelajaran yang berkualitas.',
                            'Mengoptimalkan sumber daya yang ada agar mampu menghasilkan tamatan yang profesional sesuai dengan kebutuhan pasar kerja.',
                            'Meningkatkan kedisiplinan, kejujuran, kreatifitas, inovasi, keuletan dan ketekunan peserta didik dalam belajar.',
                            'Membekali peserta didik pengetahuan dan keterampilan yang diperlukan dan sesuai dengan potensinya untuk melanjutkan ke jenjang yang lebih tinggi.',
                            'Membekali peserta didik pengetahuan dan keterampilan serta teknologi yang diperlukan oleh masyarakat sekitar.',
                            'Membekali peserta didik agar mempunyai semangat juang dan sikap kerja keras untuk mengejar ketertinggalan.',
                            'Mempersiapkan peserta didik agar menjadi pribadi yang mempunyai semangat yang tinggi untuk belajar secara mandiri dan mempunyai jiwa entrepreneurship.',
                            'Membekali peserta didik agar menjadi pribadi yang dapat beradaptasi dengan lingkungan/budaya sekitar.',
                            'Mempersiapkan peserta didik yang memahami budaya bangsa dan mengikuti keteladanan para pendiri bangsa dan tokoh bangsa.',
                            'Mempersiapkan peserta didik yang beriman dan bertakwa kepada Tuhan Yang Maha Esa serta berakhlak mulia.',
                        ] as $goal)
                            <li class="flex gap-4">
                                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-school-blue text-sm font-black text-white">{{ $loop->iteration }}</span>
                                <span class="leading-7 text-slate-700">{{ $goal }}</span>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-slate-100 py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
                <div>
                    <p class="text-sm font-black uppercase tracking-wide text-school-blue">Struktur Organisasi</p>
                    <h2 class="mt-3 text-3xl font-black text-school-navy">Struktur organisasi sekolah</h2>
                </div>
                <a href="https://smkn1cilegon.sch.id/wp-content/uploads/2026/05/WhatsApp-Image-2026-05-17-at-23.09.16.jpeg" target="_blank" rel="noopener" class="rounded-full bg-school-blue px-6 py-3 text-center text-sm font-black text-white transition hover:bg-school-navy">Lihat Gambar Penuh</a>
            </div>
            <div class="mt-8 rounded-3xl bg-white p-4 shadow-soft sm:p-6">
                <img src="https://smkn1cilegon.sch.id/wp-content/uploads/2026/05/WhatsApp-Image-2026-05-17-at-23.09.16.jpeg" alt="Struktur organisasi SMK Negeri 1 Cilegon" class="max-h-[780px] w-full rounded-2xl object-contain" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                <p class="hidden rounded-2xl bg-slate-100 p-8 text-center font-semibold text-slate-600">Struktur organisasi sekolah akan ditampilkan pada bagian ini.</p>
            </div>
        </div>
    </section>
@endsection
