@extends('layouts.app')

@section('title', $major->name . ' - SMK Negeri 1 Cilegon')

@section('content')
    <section class="bg-gradient-to-br from-school-navy via-school-blue to-sky-700 py-20 text-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <span class="rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-bold text-school-gold">Jurusan</span>
            <h1 class="mt-6 text-4xl font-black sm:text-5xl">{{ $major->name }}</h1>
            <p class="mt-5 max-w-3xl text-lg leading-8 text-slate-200">Kategori: {{ $major->category }}. Pelajari visi, materi unggulan, dan peluang karir jurusan ini di SMK Negeri 1 Cilegon.</p>
            <div class="mt-8 flex flex-wrap gap-3">
                <a href="{{ route('jurusan') }}" class="rounded-full bg-white px-6 py-3 text-sm font-black text-school-navy transition hover:bg-slate-100">Kembali ke Jurusan</a>
                <a href="{{ route('contact') }}" class="rounded-full bg-school-gold px-6 py-3 text-sm font-black text-school-navy transition hover:bg-yellow-300">Hubungi Sekolah</a>
            </div>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="mx-auto grid max-w-7xl gap-12 px-4 sm:px-6 lg:grid-cols-3 lg:px-8">
            <div class="lg:col-span-2">
                <div class="overflow-hidden rounded-3xl shadow-soft">
                    <img src="{{ \Illuminate\Support\Str::startsWith($major->image, ['http://','https://']) ? $major->image : asset($major->image) }}" alt="{{ $major->name }}" class="h-[420px] w-full object-cover" loading="lazy" onerror="this.onerror=null; this.src='https://via.placeholder.com/1200x720/0e1f3d/ffffff?text=Gambar+Tidak+Tersedia';">
                </div>
                <div class="mt-10 space-y-8">
                    <article>
                        <h2 class="text-2xl font-black text-school-navy">Deskripsi Jurusan</h2>
                        <p class="mt-4 leading-8 text-slate-700">{{ $major->description }}</p>
                    </article>

                    <article>
                        <h2 class="text-2xl font-black text-school-navy">Kompetensi Utama</h2>
                        <div class="mt-6 grid gap-4 sm:grid-cols-2">
                            <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                                <h3 class="font-black text-school-navy">Praktik Langsung</h3>
                                <p class="mt-3 text-sm leading-6 text-slate-600">Pembelajaran difokuskan pada laboratorium, proyek, dan alat nyata sesuai industri.</p>
                            </div>
                            <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                                <h3 class="font-black text-school-navy">Kerja Tim & Softskill</h3>
                                <p class="mt-3 text-sm leading-6 text-slate-600">Siswa dilatih komunikasi, kepemimpinan, dan etika kerja yang profesional.</p>
                            </div>
                        </div>
                    </article>

                    <article>
                        <h2 class="text-2xl font-black text-school-navy">Peluang Karir</h2>
                        <ul class="mt-6 space-y-4 text-slate-600">
                            <li class="flex gap-3">
                                <span class="mt-1 h-2.5 w-2.5 rounded-full bg-school-blue"></span>
                                <span>Tenaga teknisi di industri manufaktur dan otomasi.</span>
                            </li>
                            <li class="flex gap-3">
                                <span class="mt-1 h-2.5 w-2.5 rounded-full bg-school-blue"></span>
                                <span>Spesialis perawatan dan perakitan mesin industri.</span>
                            </li>
                            <li class="flex gap-3">
                                <span class="mt-1 h-2.5 w-2.5 rounded-full bg-school-blue"></span>
                                <span>Pengembang aplikasi atau administrator jaringan untuk jurusan informatika.</span>
                            </li>
                        </ul>
                    </article>
                </div>
            </div>

            <aside class="space-y-6">
                <div class="rounded-3xl bg-school-navy p-8 text-white shadow-soft">
                    <h3 class="text-lg font-black">Info Singkat</h3>
                    <div class="mt-6 space-y-4 text-sm leading-7">
                        <p><span class="font-bold">Nama Jurusan:</span> {{ $major->name }}</p>
                        <p><span class="font-bold">Kategori:</span> {{ $major->category }}</p>
                        <p><span class="font-bold">Durasi Pembelajaran:</span> 3 tahun</p>
                        <p><span class="font-bold">Media Praktik:</span> Workshop, laboratorium, dan simulasi industri</p>
                    </div>
                </div>
                <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-soft">
                    <h3 class="text-lg font-black text-school-navy">Program Unggulan</h3>
                    <ul class="mt-6 space-y-4 text-slate-600">
                        <li class="flex gap-3">
                            <span class="mt-1 h-2.5 w-2.5 rounded-full bg-school-blue"></span>
                            <span>Pelatihan sertifikasi sesuai standar industri.</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="mt-1 h-2.5 w-2.5 rounded-full bg-school-blue"></span>
                            <span>Kerjasama dengan IDUKA dan magang terarah.</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="mt-1 h-2.5 w-2.5 rounded-full bg-school-blue"></span>
                            <span>Proyek akhir berbasis kebutuhan dunia kerja.</span>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>
    </section>
@endsection
