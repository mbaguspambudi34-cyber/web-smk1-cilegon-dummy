@extends('layouts.app')

@section('title', 'Jurusan - SMK Negeri 1 Cilegon')

@section('content')
    <section class="bg-gradient-to-br from-school-navy via-school-blue to-sky-700 py-20 text-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <span class="rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-bold text-school-gold">Jurusan</span>
            <h1 class="mt-6 text-4xl font-black sm:text-5xl">Daftar Jurusan</h1>
            <p class="mt-5 max-w-3xl text-lg leading-8 text-slate-100">SMK Negeri 1 Cilegon memiliki berbagai kompetensi keahlian yang dirancang untuk mempersiapkan siswa menghadapi kebutuhan dunia kerja dan industri.</p>
        </div>
    </section>

    <section class="bg-slate-50 py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            @if ($majors->isNotEmpty())
                @foreach ($majors->groupBy('category') as $category => $majorsByCategory)
                    <div class="mb-10">
                        <div class="mb-6 flex items-center justify-between gap-4 flex-wrap">
                            <div>
                                                    <span class="rounded-full bg-school-blue/10 px-4 py-2 text-sm font-bold text-school-blue animate-fade-up">Kategori</span>
                                                    <h2 class="mt-3 text-3xl font-black text-school-navy animate-fade-up delay-100">{{ $category }}</h2>
                                                    <p class="mt-3 max-w-2xl text-sm leading-6 text-slate-600 animate-fade-up delay-200">Kompetensi keahlian yang dirancang untuk membangun keterampilan praktis sesuai bidang.</p>
                            </div>
                            <a href="{{ route('contact') }}" class="rounded-full bg-school-gold px-6 py-3 text-sm font-bold text-school-navy shadow-lg shadow-yellow-500/15 transition hover:bg-yellow-300">Tanya Pendaftaran</a>
                        </div>
                        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                            @foreach ($majorsByCategory as $major)
                                <article class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft transition duration-300 hover:-translate-y-2 hover:shadow-2xl card-hover animate-fade-up delay-200">
                                    <div class="relative h-56 overflow-hidden">
                                        <img src="{{ \Illuminate\Support\Str::startsWith($major->image, ['http://','https://']) ? $major->image : asset($major->image) }}" alt="{{ $major->name }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" onerror="this.onerror=null; this.src='https://via.placeholder.com/1200x720/0e1f3d/ffffff?text=Gambar+Tidak+Tersedia';">
                                        <div class="absolute inset-0 bg-gradient-to-t from-school-navy/60 to-transparent"></div>
                                    </div>
                                    <div class="p-6">
                                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-school-blue">{{ $major->category }}</p>
                                        <h2 class="mt-3 text-xl font-black text-school-navy">{{ $major->name }}</h2>
                                        <p class="mt-4 min-h-[6rem] text-sm leading-6 text-slate-600">{{ $major->description }}</p>
                                        <div class="mt-6 flex flex-wrap gap-3">
                                            <a href="{{ route('jurusan.show', $major) }}" class="inline-flex rounded-full border border-school-blue bg-white px-5 py-3 text-sm font-bold text-school-blue transition hover:bg-school-blue hover:text-white">Lihat Detail</a>
                                            <a href="{{ route('contact') }}" class="inline-flex rounded-full bg-school-blue px-5 py-3 text-sm font-bold text-white transition hover:bg-school-navy">Hubungi</a>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @else
                <div class="rounded-2xl border border-yellow-200 bg-yellow-50 p-6 text-yellow-900">
                    Data jurusan belum tersedia. Jalankan <strong>php artisan migrate</strong> dan <strong>php artisan db:seed</strong>.
                </div>
            @endif
        </div>
    </section>
@endsection
