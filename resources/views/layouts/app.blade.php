<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'SMK Negeri 1 Cilegon')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        school: {
                            navy: '#071f3a',
                            blue: '#0b4f8a',
                            sky: '#38bdf8',
                            gold: '#f6c445'
                        }
                    },
                    boxShadow: {
                        soft: '0 18px 45px rgba(15, 23, 42, 0.10)'
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(30px);} 
            to { opacity: 1; transform: translateY(0);} 
        }
        @keyframes fadeLeft {
            from { opacity: 0; transform: translateX(-30px);} 
            to { opacity: 1; transform: translateX(0);} 
        }
        @keyframes fadeRight {
            from { opacity: 0; transform: translateX(30px);} 
            to { opacity: 1; transform: translateX(0);} 
        }
        @keyframes typing { from { width: 0; } to { width: 100%; } }
        @keyframes blink { 50% { border-color: transparent; } }

        .animate-fade-up { animation: fadeUp 0.9s ease forwards; }
        .animate-fade-left { animation: fadeLeft 0.9s ease forwards; }
        .animate-fade-right { animation: fadeRight 0.9s ease forwards; }

        .delay-100 { animation-delay: 0.1s; opacity: 0; }
        .delay-200 { animation-delay: 0.2s; opacity: 0; }
        .delay-300 { animation-delay: 0.3s; opacity: 0; }
        .delay-400 { animation-delay: 0.4s; opacity: 0; }
        .delay-500 { animation-delay: 0.5s; opacity: 0; }

        .typing-text {
            display: inline-block; overflow: hidden; white-space: nowrap;
            border-right: 3px solid #f6c445; animation: typing 3s steps(35,end), blink 0.8s infinite;
        }

        .nav-link-animated { position: relative; transition: color 0.28s ease; }
        .nav-link-animated::after { content: ""; position: absolute; width: 0; height: 2px; left: 0; bottom: -6px; background: #f6c445; transition: width 0.28s ease; }
        .nav-link-animated:hover::after { width: 100%; }

        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover { transform: translateY(-8px); box-shadow: 0 20px 35px rgba(0,0,0,0.15); }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">
    @php
        $logoUrl = 'https://smkn1cilegon.sch.id/wp-content/uploads/2022/12/LOGO-NAMA-SMKN1-07.png';
        $menus = [
            ['label' => 'Home', 'route' => 'home'],
            ['label' => 'Profil Sekolah', 'route' => 'profil'],
            ['label' => 'Jurusan', 'route' => 'jurusan'],
            ['label' => 'Contact', 'route' => 'contact'],
        ];
    @endphp

    <header class="sticky top-0 z-50 border-b border-slate-200/80 bg-white/95 shadow-md shadow-slate-900/5 backdrop-blur-md">
        <nav class="mx-auto flex max-w-7xl items-center justify-between gap-6 px-4 py-3.5 sm:px-6 lg:px-8">
            <a href="{{ route('home') }}" class="flex min-w-0 items-center gap-3">
                <span class="flex h-12 w-12 shrink-0 items-center justify-center overflow-hidden rounded-xl bg-white p-1 shadow ring-1 ring-slate-200">
                    <img src="{{ $logoUrl }}" alt="Logo SMK Negeri 1 Cilegon" class="h-full w-full object-contain" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <span class="hidden text-sm font-black text-school-navy">SMK</span>
                </span>
                <span class="truncate text-base font-black tracking-wide text-school-navy sm:text-lg">SMK Negeri 1 Cilegon</span>
            </a>

            <button type="button" class="rounded-lg border border-slate-300 bg-white p-2 text-school-navy shadow-sm md:hidden" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" aria-label="Buka menu">
                <span class="block h-0.5 w-6 bg-school-navy"></span>
                <span class="mt-1.5 block h-0.5 w-6 bg-school-navy"></span>
                <span class="mt-1.5 block h-0.5 w-6 bg-school-navy"></span>
            </button>

            <div class="hidden items-center gap-2 md:flex">
                @foreach ($menus as $menu)
                    @php
                        $isActive = request()->routeIs($menu['route'])
                            || ($menu['route'] === 'profil' && request()->routeIs('about'))
                            || ($menu['route'] === 'jurusan' && request()->routeIs('product', 'jurusan.*'));
                    @endphp
                    <a href="{{ route($menu['route']) }}" class="nav-link-animated rounded-full px-4 py-2 text-sm font-bold transition {{ $isActive ? 'bg-school-blue text-white shadow-sm shadow-blue-900/15' : 'text-slate-700 hover:bg-blue-50 hover:text-school-gold' }}">
                        {{ $menu['label'] }}
                    </a>
                @endforeach

                @guest
                    <a href="{{ route('login') }}" class="nav-link-animated rounded-full bg-school-navy px-4 py-2 text-sm font-bold text-white shadow-sm shadow-slate-900/10 transition hover:bg-school-blue">Login</a>
                @endguest

                @auth
                    <a href="{{ route('dashboard') }}" class="nav-link-animated rounded-full bg-school-blue px-4 py-2 text-sm font-bold text-white shadow-sm shadow-blue-900/15 transition hover:bg-school-navy">Dashboard</a>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="nav-link-animated rounded-full bg-slate-100 px-4 py-2 text-sm font-bold text-slate-700 transition hover:bg-slate-200">Logout</button>
                    </form>
                @endauth
            </div>
        </nav>

        <div id="mobile-menu" class="hidden border-t border-slate-200 bg-white px-4 py-3 shadow-lg md:hidden">
            <div class="mx-auto grid max-w-7xl gap-2">
                @foreach ($menus as $menu)
                    @php
                        $isActive = request()->routeIs($menu['route'])
                            || ($menu['route'] === 'profil' && request()->routeIs('about'))
                            || ($menu['route'] === 'jurusan' && request()->routeIs('product', 'jurusan.*'));
                    @endphp
                    <a href="{{ route($menu['route']) }}" class="nav-link-animated rounded-xl px-4 py-3 text-sm font-bold {{ $isActive ? 'bg-school-blue text-white shadow-sm' : 'text-slate-700 hover:bg-blue-50 hover:text-school-gold' }}">
                        {{ $menu['label'] }}
                    </a>
                @endforeach

                @guest
                    <a href="{{ route('login') }}" class="nav-link-animated rounded-xl bg-school-navy px-4 py-3 text-sm font-bold text-white shadow-sm hover:bg-school-blue">Login</a>
                @endguest

                @auth
                    <a href="{{ route('dashboard') }}" class="nav-link-animated rounded-xl bg-school-blue px-4 py-3 text-sm font-bold text-white shadow-sm hover:bg-school-navy">Dashboard</a>
                    <form action="{{ route('logout') }}" method="POST" class="rounded-xl bg-slate-100 p-3 text-sm font-bold text-slate-700 hover:bg-slate-200">
                        @csrf
                        <button type="submit" class="w-full text-left">Logout</button>
                    </form>
                @endauth
            </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-school-navy text-white">
        <div class="mx-auto grid max-w-7xl gap-10 px-4 py-12 sm:px-6 md:grid-cols-3 lg:px-8">
            <div>
                <div class="flex items-center gap-3">
                    <span class="flex h-12 w-12 shrink-0 items-center justify-center overflow-hidden rounded-xl bg-white p-1">
                        <img src="{{ $logoUrl }}" alt="Logo SMK Negeri 1 Cilegon" class="h-full w-full object-contain" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                        <span class="hidden text-sm font-black text-school-navy">SMK</span>
                    </span>
                    <h2 class="text-lg font-bold">SMK Negeri 1 Cilegon</h2>
                </div>
                <p class="mt-4 text-sm leading-6 text-slate-300">Website profil sekolah dan sistem informasi sederhana untuk memperkenalkan profil, jurusan, dan kontak sekolah.</p>
            </div>
            <div>
                <h3 class="font-bold">Navigasi</h3>
                <div class="mt-4 grid gap-2 text-sm text-slate-300">
                    <a href="{{ route('home') }}" class="hover:text-school-gold">Home</a>
                    <a href="{{ route('profil') }}" class="hover:text-school-gold">Profil Sekolah</a>
                    <a href="{{ route('jurusan') }}" class="hover:text-school-gold">Jurusan</a>
                    <a href="{{ route('contact') }}" class="hover:text-school-gold">Contact</a>
                </div>
            </div>
            <div>
                <h3 class="font-bold">Kontak</h3>
                <div class="mt-4 space-y-2 text-sm text-slate-300">
                    <p>SMK Negeri 1 Cilegon</p>
                    <p>Jalan Kedungbaya No. 21, Kalitimbang, Cibeber, Kota Cilegon, Banten</p>
                    <p><a href="mailto:info@smkn1cilegon.sch.id" class="hover:text-school-gold">info@smkn1cilegon.sch.id</a></p>
                    <p><a href="tel:+62254000000" class="hover:text-school-gold">0254-000000</a></p>
                </div>
            </div>
        </div>

    </footer>
</body>
</html>
