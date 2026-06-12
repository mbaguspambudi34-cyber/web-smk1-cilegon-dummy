@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
    <section class="bg-slate-50 py-12">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-10 overflow-hidden rounded-[2rem] bg-gradient-to-r from-school-navy via-school-blue to-school-navy/90 p-8 text-white shadow-soft animate-fade-up">
                <div class="grid gap-6 lg:grid-cols-[1.5fr_1fr] lg:items-center">
                    <div>
                        <p class="text-sm uppercase tracking-[0.32em] text-school-gold/80">Dashboard Admin</p>
                        <h1 class="mt-4 text-4xl font-black tracking-tight animate-fade-up delay-100">Selamat datang kembali, {{ Auth::user()->name }}</h1>
                        <p class="mt-3 max-w-2xl text-sm leading-7 text-slate-200 animate-fade-up delay-200">Kelola dan lihat data siswa berdasarkan konsentrasi keahlian. Pantau aktivitas dan statistik sekolah dalam satu halaman yang mudah dibaca dan interaktif.</p>
                    </div>
                    <div class="rounded-[1.75rem] border border-white/10 bg-white/10 p-6 shadow-lg shadow-school-navy/10">
                        <div class="flex items-center justify-between gap-4">
                            <div>
                                <p class="text-sm uppercase tracking-[0.32em] text-school-gold/90">Jurusan Terbanyak</p>
                                <p class="mt-3 text-2xl font-black">{{ $topMajor?->name ?? 'Belum tersedia' }}</p>
                                <p class="mt-2 text-sm text-slate-200">{{ $topMajor?->students_count ?? 0 }} siswa</p>
                            </div>
                            <div class="rounded-3xl bg-school-gold px-4 py-3 text-school-navy">
                                <span class="text-xl font-black">{{ $topMajor?->students_count ?? 0 }}</span>
                            </div>
                        </div>
                        <div class="mt-6">
                            <p class="text-xs uppercase tracking-[0.28em] text-slate-300">Rata-rata siswa/jurusan</p>
                            <div class="mt-3 h-3 overflow-hidden rounded-full bg-white/20">
                                <div class="h-3 rounded-full bg-school-gold" style="width: {{ min(100, $averageStudentsPerMajor * 10) }}%"></div>
                            </div>
                            <p class="mt-2 text-sm text-slate-200">{{ $averageStudentsPerMajor }} siswa per jurusan</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid gap-6 xl:grid-cols-5">
                <div class="card-hover rounded-[1.75rem] bg-white p-6 shadow-soft animate-fade-up delay-200">
                    <p class="text-sm font-semibold uppercase tracking-[0.28em] text-school-blue">Total Siswa</p>
                    <p class="mt-4 text-4xl font-black text-school-navy">{{ $totalStudents }}</p>
                    <p class="mt-2 text-sm text-slate-500">Jumlah keseluruhan siswa</p>
                </div>
                <div class="card-hover rounded-[1.75rem] bg-gradient-to-br from-school-blue to-school-navy p-6 text-white shadow-soft animate-fade-up delay-300">
                    <p class="text-sm font-semibold uppercase tracking-[0.28em] text-school-gold">Total Jurusan</p>
                    <p class="mt-4 text-4xl font-black">{{ $totalMajors }}</p>
                    <p class="mt-2 text-sm text-slate-200">Semua jurusan aktif</p>
                </div>
                <div class="card-hover rounded-[1.75rem] bg-white p-6 shadow-soft animate-fade-up delay-300">
                    <p class="text-sm font-semibold uppercase tracking-[0.28em] text-school-blue">Siswa Laki-laki</p>
                    <p class="mt-4 text-4xl font-black text-school-navy">{{ $maleStudents }}</p>
                    <p class="mt-2 text-sm text-slate-500">Jumlah siswa pria</p>
                </div>
                <div class="card-hover rounded-[1.75rem] bg-white p-6 shadow-soft animate-fade-up delay-400">
                    <p class="text-sm font-semibold uppercase tracking-[0.28em] text-school-blue">Siswa Perempuan</p>
                    <p class="mt-4 text-4xl font-black text-school-navy">{{ $femaleStudents }}</p>
                    <p class="mt-2 text-sm text-slate-500">Jumlah siswa wanita</p>
                </div>
                <div class="card-hover rounded-[1.75rem] bg-school-gold/10 p-6 shadow-soft border border-school-gold/30 animate-fade-up delay-400">
                    <p class="text-sm font-semibold uppercase tracking-[0.28em] text-school-navy">Rata-rata</p>
                    <p class="mt-4 text-4xl font-black text-school-navy">{{ $averageStudentsPerMajor }}</p>
                    <p class="mt-2 text-sm text-school-navy/70">Rata-rata siswa per jurusan</p>
                </div>
            </div>

            <div class="mt-10 grid gap-6 xl:grid-cols-[2fr_1fr]">
                <div class="rounded-[1.75rem] bg-white p-6 shadow-soft">
                    <div class="mb-6 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                        <div>
                            <h2 class="text-2xl font-bold text-school-navy">Data Siswa</h2>
                            <p class="mt-2 text-sm text-slate-500">Gunakan filter jurusan dan pencarian untuk menemukan data siswa dengan cepat.</p>
                        </div>
                        <form method="GET" action="{{ route('dashboard') }}" class="grid gap-3 sm:grid-cols-[minmax(0,1fr)_220px_140px]">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700">Pilih Jurusan</label>
                                <select name="major_id" onchange="this.form.submit()" class="mt-2 w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-school-blue focus:ring-2 focus:ring-school-sky/30">
                                    <option value="">Semua Jurusan</option>
                                    @foreach ($majors as $major)
                                        <option value="{{ $major->id }}" {{ optional($selectedMajor)->id == $major->id ? 'selected' : '' }}>{{ $major->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700">Cari Nama atau NIS</label>
                                <input type="search" name="search" value="{{ old('search', $search) }}" placeholder="Cari..." class="mt-2 w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-school-blue focus:ring-2 focus:ring-school-sky/30">
                            </div>
                            <div class="flex items-end gap-3">
                                <button type="submit" class="inline-flex h-12 w-full items-center justify-center rounded-2xl bg-school-navy px-4 text-sm font-bold text-white transition hover:bg-school-blue">Cari</button>
                                <a href="{{ route('dashboard') }}" class="inline-flex h-12 items-center justify-center rounded-2xl border border-slate-300 bg-white px-4 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">Reset</a>
                            </div>
                        </form>
                    </div>

                    @if ($selectedMajor)
                        <div class="mb-6 rounded-3xl border border-school-blue/10 bg-school-blue/5 p-4 text-school-navy">
                            <p class="text-sm font-semibold">Menampilkan siswa jurusan: <span class="font-bold">{{ $selectedMajor->name }}</span></p>
                        </div>
                    @endif

                    <div class="overflow-x-auto rounded-[1.5rem] border border-slate-200 bg-slate-50">
                        <table class="min-w-full text-left text-sm">
                            <thead class="bg-school-navy text-white">
                                <tr>
                                    <th class="px-4 py-4">No</th>
                                    <th class="px-4 py-4">NIS</th>
                                    <th class="px-4 py-4">Nama Siswa</th>
                                    <th class="px-4 py-4">Jenis Kelamin</th>
                                    <th class="px-4 py-4">Kelas</th>
                                    <th class="px-4 py-4">Jurusan</th>
                                    <th class="px-4 py-4">Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($students as $student)
                                    <tr class="border-b border-slate-200 bg-white transition hover:bg-slate-100">
                                        <td class="px-4 py-4 font-semibold text-slate-700">{{ $loop->iteration }}</td>
                                        <td class="px-4 py-4 text-slate-600">{{ $student->nis }}</td>
                                        <td class="px-4 py-4 text-slate-900">{{ $student->name }}</td>
                                        <td class="px-4 py-4">
                                            <span class="inline-flex rounded-full px-3 py-1 text-xs font-semibold {{ $student->gender === 'Laki-laki' ? 'bg-school-blue/10 text-school-blue' : 'bg-pink-100 text-pink-700' }}">{{ $student->gender }}</span>
                                        </td>
                                        <td class="px-4 py-4 text-slate-600">{{ $student->class }}</td>
                                        <td class="px-4 py-4">
                                            <span class="inline-flex rounded-full bg-school-gold/10 px-3 py-1 text-xs font-semibold text-school-navy">{{ $student->major?->name ?? '-' }}</span>
                                        </td>
                                        <td class="px-4 py-4 text-slate-600">{{ $student->address }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="px-4 py-10 text-center text-slate-500">Belum ada data siswa pada jurusan ini.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="rounded-[1.75rem] bg-white p-6 shadow-soft">
                        <div class="flex items-center justify-between gap-4">
                            <div>
                                <h2 class="text-xl font-bold text-school-navy">Data Siswa Per Jurusan</h2>
                                <p class="mt-2 text-sm text-slate-500">Lihat jumlah siswa per jurusan dan buka detail siswa dengan cepat.</p>
                            </div>
                        </div>
                        <div class="mt-6 space-y-4">
                            @foreach ($majors as $major)
                                @php
                                    $progress = $totalStudents ? round(($major->students_count / $totalStudents) * 100) : 0;
                                    $cardVariant = $loop->index % 3;
                                    $bgClass = $cardVariant === 0 ? 'bg-school-blue/5' : ($cardVariant === 1 ? 'bg-school-gold/10' : 'bg-slate-50');
                                @endphp
                                <div class="card-hover rounded-[1.5rem] border border-slate-200 p-5 {{ $bgClass }} animate-fade-up delay-200">
                                    <div class="flex items-start justify-between gap-4">
                                        <div>
                                            <p class="text-base font-semibold text-school-navy">{{ $major->name }}</p>
                                            <p class="mt-1 text-sm text-slate-500">Kategori: {{ $major->category }}</p>
                                        </div>
                                        <div class="rounded-full bg-school-navy/10 px-4 py-2 text-xs font-semibold text-school-navy">{{ $major->students_count }} siswa</div>
                                    </div>
                                    <div class="mt-4 h-3 overflow-hidden rounded-full bg-slate-200">
                                        <div class="h-3 rounded-full bg-school-blue" style="width: {{ $progress }}%;"></div>
                                    </div>
                                    <div class="mt-4 flex items-center justify-between gap-3">
                                        <span class="text-xs uppercase tracking-[0.24em] text-slate-500">{{ $progress }}% dari total siswa</span>
                                        <a href="{{ route('dashboard', ['major_id' => $major->id]) }}" class="rounded-2xl bg-school-navy px-4 py-2 text-xs font-bold uppercase text-white transition hover:bg-school-blue">Lihat Siswa</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
