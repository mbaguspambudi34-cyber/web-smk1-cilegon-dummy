@extends('layouts.app')

@section('title', 'Home - SMK Negeri 1 Cilegon')

@section('content')
    <section class="relative min-h-screen overflow-hidden bg-gradient-to-br from-blue-950 via-school-blue to-sky-800">
        <video autoplay muted loop playsinline preload="auto" class="pointer-events-none absolute inset-0 h-full w-full object-cover opacity-80">
            <source src="{{ asset('videos/profil.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(96,165,250,0.35),_transparent_45%)]"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-blue-950/85 via-blue-900/55 to-blue-800/20"></div>

        <div class="relative z-20 mx-auto flex min-h-screen max-w-7xl items-center px-4 py-24 sm:px-6 lg:px-8">
            <div class="max-w-4xl text-white">
                <div class="mb-6 flex h-20 w-20 items-center justify-center overflow-hidden rounded-2xl bg-white/95 p-2 shadow-2xl shadow-slate-950/20">
                    <img src="https://smkn1cilegon.sch.id/wp-content/uploads/2022/12/LOGO-NAMA-SMKN1-07.png" alt="Logo SMK Negeri 1 Cilegon" class="h-full w-full object-contain" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <span class="hidden text-sm font-black text-school-navy">SMK Negeri 1 Cilegon</span>
                </div>
                <span class="inline-flex rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-bold text-school-gold backdrop-blur animate-fade-up">SMK Pusat Keunggulan</span>
                <h1 class="mt-6 text-4xl font-black leading-tight sm:text-6xl lg:text-7xl animate-fade-up delay-100">Bangun Karier Teknikmu di SMK Negeri 1 Cilegon</h1>
                <p class="mt-6 max-w-3xl text-xl leading-8 text-slate-100 animate-fade-up delay-200">Sekolah vokasi yang menyiapkan generasi muda untuk kompetensi industri, wirausaha, dan penguasaan teknologi.</p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="{{ route('jurusan') }}" class="animate-fade-up delay-300 rounded-full bg-school-gold px-7 py-3 font-bold text-school-navy shadow-lg shadow-yellow-500/20 transition hover:-translate-y-0.5 hover:bg-yellow-300">Lihat Jurusan</a>
                    <a href="{{ route('contact') }}" class="animate-fade-up delay-400 rounded-full border border-white/40 bg-white/10 px-7 py-3 font-bold text-white backdrop-blur transition hover:-translate-y-0.5 hover:bg-white hover:text-school-navy">Hubungi Kami</a>
                </div>

                <div class="mt-6 animate-fade-up delay-500">
                    <p class="mt-4 text-sm text-slate-200">Motto sekolah:</p>
                    <p class="mt-2 text-lg font-semibold text-school-gold typing-text">Disiplin • Giat • Terampil • Tawakal</p>
                </div>

                <div class="mt-10 grid max-w-4xl gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="card-hover animate-fade-up delay-200 rounded-2xl border border-white/15 bg-white/10 p-5 backdrop-blur">
                        <p class="text-3xl font-black text-school-gold">10</p>
                        <p class="mt-1 text-sm font-semibold text-slate-100">Kompetensi Keahlian</p>
                    </div>
                    <div class="card-hover animate-fade-up delay-300 rounded-2xl border border-white/15 bg-white/10 p-5 backdrop-blur">
                        <p class="text-3xl font-black text-school-gold">1997</p>
                        <p class="mt-1 text-sm font-semibold text-slate-100">Berdiri Sejak</p>
                    </div>
                    <div class="card-hover animate-fade-up delay-400 rounded-2xl border border-white/15 bg-white/10 p-5 backdrop-blur">
                        <p class="text-3xl font-black text-school-gold">PK</p>
                        <p class="mt-1 text-sm font-semibold text-slate-100">SMK Pusat Keunggulan</p>
                    </div>
                    <div class="card-hover animate-fade-up delay-500 rounded-2xl border border-white/15 bg-white/10 p-5 backdrop-blur">
                        <p class="text-3xl font-black text-school-gold">IDUKA</p>
                        <p class="mt-1 text-sm font-semibold text-slate-100">Kolaborasi Industri</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <span class="rounded-full bg-blue-50 px-4 py-2 text-sm font-bold text-school-blue">Keunggulan Sekolah</span>
                <h2 class="mt-5 text-3xl font-black text-school-navy sm:text-4xl">Pembelajaran praktis, terstruktur, dan siap kerja</h2>
            </div>
            <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                @foreach ([
                    ['title' => 'Pendekatan Industri', 'text' => 'Kurikulum selaras dengan kebutuhan IDUKA dan pola kerja dunia usaha.'],
                    ['title' => 'Fasilitas Lengkap', 'text' => 'Laboratorium modern, bengkel otomotif, dan ruang multimedia siap pakai.'],
                    ['title' => 'Tenaga Pengajar Berpengalaman', 'text' => 'Guru kompeten dengan pengalaman praktik industri dan pembelajaran aktif.'],
                    ['title' => 'Penguatan Karakter', 'text' => 'Kedisiplinan, kreatif, dan kolaborasi menjadi fokus setiap program.'],
                ] as $item)
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-soft transition hover:-translate-y-1">
                        <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl bg-school-blue text-lg font-black text-white">{{ $loop->iteration }}</div>
                        <h3 class="text-lg font-black text-school-navy">{{ $item['title'] }}</h3>
                        <p class="mt-3 text-sm leading-6 text-slate-600">{{ $item['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-slate-100 py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:grid-cols-2 lg:px-8">
            <div class="grid gap-8 lg:grid-cols-2">
                <div class="rounded-3xl bg-school-navy p-8 text-white shadow-soft">
                    <p class="text-sm font-bold text-school-gold">Tentang Sekolah</p>
                    <h2 class="mt-3 text-3xl font-black">SMK Negeri 1 Cilegon</h2>
                    <p class="mt-5 leading-8 text-slate-100">Sekolah kejuruan yang mendidik siswa dengan kompetensi teknik industri, otomotif, manufaktur, dan informatika dalam lingkungan pembelajaran modern.</p>
                </div>
                <div class="grid gap-4">
                    <div class="rounded-2xl bg-white p-6 shadow-soft">
                        <p class="text-3xl font-black text-school-blue">Praktik Nyata</p>
                        <p class="mt-2 text-sm text-slate-600">Rangkaian praktik proyek dan alat industri membuat siswa siap kerja sejak dini.</p>
                    </div>
                    <div class="rounded-2xl bg-white p-6 shadow-soft">
                        <p class="text-3xl font-black text-school-blue">Berkelanjutan</p>
                        <p class="mt-2 text-sm text-slate-600">Penguatan karakter dan literasi digital menjadi landasan lulusan berdaya saing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end">
                <div>
                    <span class="rounded-full bg-yellow-50 px-4 py-2 text-sm font-bold text-yellow-700">Preview Jurusan</span>
                    <h2 class="mt-5 text-3xl font-black text-school-navy sm:text-4xl">Jurusan Unggulan</h2>
                </div>
                <a href="{{ route('jurusan') }}" class="rounded-full bg-school-blue px-6 py-3 text-center font-bold text-white transition hover:bg-school-navy">Lihat Semua Jurusan</a>
            </div>
            <div class="mt-10 grid gap-6 md:grid-cols-3">
                @forelse ($featuredMajors as $major)
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-soft">
                        <p class="text-sm font-bold text-school-blue">{{ $major->category }}</p>
                        <h3 class="mt-2 text-xl font-black text-school-navy">{{ $major->name }}</h3>
                        <p class="mt-3 text-sm leading-6 text-slate-600">{{ $major->description }}</p>
                        <div class="mt-5">
                            <a href="{{ route('jurusan.show', $major) }}" class="inline-flex rounded-full bg-school-blue px-5 py-3 text-sm font-bold text-white transition hover:bg-school-navy">Detail Jurusan</a>
                        </div>
                    </div>
                @empty
                    <div class="rounded-2xl border border-yellow-200 bg-yellow-50 p-6 text-yellow-900 md:col-span-3">
                        Data preview jurusan akan tampil setelah menjalankan migration dan seeder.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="bg-school-navy py-16 text-white">
        <div class="mx-auto flex max-w-7xl flex-col items-start justify-between gap-6 px-4 sm:px-6 md:flex-row md:items-center lg:px-8">
            <div>
                <p class="text-sm font-bold text-school-gold">Informasi Jurusan dan Kontak</p>
                <h2 class="mt-3 text-3xl font-black">Kenali Jurusan dan Hubungi Sekolah</h2>
            </div>
            <div class="flex flex-wrap gap-3">
                <a href="{{ route('jurusan') }}" class="rounded-full bg-white px-6 py-3 font-bold text-school-navy">Lihat Jurusan</a>
                <a href="{{ route('contact') }}" class="rounded-full bg-school-gold px-6 py-3 font-bold text-school-navy">Hubungi Kami</a>
            </div>
        </div>
    </section>
@endsection
