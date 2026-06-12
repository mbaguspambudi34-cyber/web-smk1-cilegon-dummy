@extends('layouts.app')

@section('title', 'Login Admin')

@section('content')
    <section class="min-h-screen bg-school-navy py-20">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-10 rounded-3xl bg-white/95 px-6 py-10 shadow-soft sm:px-12 sm:py-14">
                <div class="text-center">
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-school-blue">Login Admin</p>
                    <h1 class="mt-4 text-3xl font-black text-school-navy sm:text-4xl">Masuk ke Dashboard Sekolah</h1>
                    <p class="mt-3 text-sm text-slate-600">Gunakan akun admin untuk mengelola data siswa dan jurusan.</p>
                </div>

                <div class="grid gap-8 md:grid-cols-[1fr_1fr] md:items-start">
                    <div class="rounded-3xl bg-school-blue/5 p-8">
                        <h2 class="text-xl font-bold text-school-navy">Informasi Akun Demo</h2>
                        <div class="mt-6 space-y-4 text-sm text-slate-700">
                            <p><span class="font-semibold">Email:</span> admin@smkn1cilegon.sch.id</p>
                            <p><span class="font-semibold">Password:</span> admin123</p>
                            <p>Gunakan data ini untuk masuk ke dashboard admin.</p>
                        </div>
                    </div>

                    <div class="rounded-3xl bg-slate-100 p-8">
                        <form action="{{ route('login.process') }}" method="POST" class="space-y-6">
                            @csrf

                            <div>
                                <label for="email" class="block text-sm font-semibold text-slate-700">Email</label>
                                <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus class="mt-2 w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-school-blue focus:ring-2 focus:ring-school-sky/30" placeholder="admin@smkn1cilegon.sch.id">
                            </div>

                            <div>
                                <label for="password" class="block text-sm font-semibold text-slate-700">Password</label>
                                <input id="password" name="password" type="password" required class="mt-2 w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-school-blue focus:ring-2 focus:ring-school-sky/30" placeholder="********">
                            </div>

                            @if($errors->any())
                                <div class="rounded-2xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                                    {{ $errors->first() }}
                                </div>
                            @endif

                            <button type="submit" class="w-full rounded-2xl bg-school-navy px-5 py-3 text-sm font-bold uppercase tracking-[0.08em] text-white transition hover:bg-school-blue">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
