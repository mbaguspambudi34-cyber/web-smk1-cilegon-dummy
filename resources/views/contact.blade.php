@extends('layouts.app')

@section('title', 'Contact - SMK Negeri 1 Cilegon')

@section('content')
    <section class="bg-gradient-to-br from-school-navy via-school-blue to-sky-700 py-20 text-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <span class="rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-bold text-school-gold animate-fade-up">Contact</span>
            <h1 class="mt-6 text-4xl font-black sm:text-5xl animate-fade-up delay-100">Hubungi Kami</h1>
            <p class="mt-5 max-w-3xl text-lg leading-8 text-slate-100 animate-fade-up delay-200">Silakan kirim pesan kepada pihak sekolah melalui form berikut.</p>
        </div>
    </section>

    <section class="bg-slate-100 py-20">
        <div class="mx-auto grid max-w-7xl gap-8 px-4 sm:px-6 lg:grid-cols-3 lg:px-8">
            <aside class="card-hover rounded-3xl bg-school-navy p-8 text-white shadow-soft lg:col-span-1 animate-fade-up delay-200">
                <h2 class="text-2xl font-black">Informasi Kontak</h2>
                <div class="mt-7 space-y-5 text-slate-200">
                    <div>
                        <p class="text-sm font-bold text-school-gold">Nama sekolah</p>
                        <p class="mt-1">SMK Negeri 1 Cilegon</p>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-school-gold">Alamat</p>
                        <p class="mt-1">Jalan Kedungbaya No. 21, Kelurahan Kalitimbang, Kecamatan Cibeber, Kota Cilegon, Banten</p>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-school-gold">Email</p>
                        <p class="mt-1"><a href="mailto:info@smkn1cilegon.sch.id" class="text-white underline transition hover:text-school-gold">info@smkn1cilegon.sch.id</a></p>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-school-gold">Telepon</p>
                        <p class="mt-1"><a href="tel:+62254000000" class="text-white underline transition hover:text-school-gold">0254-000000</a></p>
                    </div>
                </div>
                <div class="mt-8 overflow-hidden rounded-3xl border border-white/10 bg-white/10 p-1">
                    <iframe
                        src="https://www.google.com/maps?q=-6.0462467,106.0518361&hl=id&z=17&output=embed"
                        width="100%" height="260" class="border-0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Peta SMK Negeri 1 Cilegon">
                    </iframe>
                </div>
            </aside>

            <div class="card-hover rounded-3xl border border-slate-200 bg-white p-8 shadow-soft lg:col-span-2 animate-fade-up delay-300">
                @if (session('success'))
                    <div class="mb-6 rounded-2xl border border-green-200 bg-green-50 px-5 py-4 font-semibold text-green-800">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 px-5 py-4 font-semibold text-red-800">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="grid gap-5">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-bold text-slate-700">Nama</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 outline-none transition focus:border-school-blue focus:ring-4 focus:ring-blue-100">
                        @error('name') <p class="mt-2 text-sm font-semibold text-red-600">{{ $message }}</p> @enderror
                    </div>
                    <div class="grid gap-5 md:grid-cols-2">
                        <div>
                            <label for="email" class="block text-sm font-bold text-slate-700">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 outline-none transition focus:border-school-blue focus:ring-4 focus:ring-blue-100">
                            @error('email') <p class="mt-2 text-sm font-semibold text-red-600">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-bold text-slate-700">Nomor HP</label>
                            <input type="text" id="phone" name="phone" value="{{ old('phone') }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 outline-none transition focus:border-school-blue focus:ring-4 focus:ring-blue-100">
                            @error('phone') <p class="mt-2 text-sm font-semibold text-red-600">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-bold text-slate-700">Pesan</label>
                        <textarea id="message" name="message" rows="6" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 outline-none transition focus:border-school-blue focus:ring-4 focus:ring-blue-100">{{ old('message') }}</textarea>
                        @error('message') <p class="mt-2 text-sm font-semibold text-red-600">{{ $message }}</p> @enderror
                    </div>
                    <button type="submit" class="w-full rounded-full bg-school-blue px-6 py-4 font-black text-white shadow-lg shadow-blue-900/15 transition hover:-translate-y-0.5 hover:bg-school-navy sm:w-auto"> 
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
