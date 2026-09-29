<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GobHelpDesk</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-[#171717]">

    {{-- ========================================================= --}}
    {{-- NAVBAR --}}
    {{-- ========================================================= --}}

    <header class="border-b border-gray-100 bg-white">
        <nav class="mx-auto flex h-20 max-w-7xl items-center justify-between px-6 lg:px-10">

            {{-- Logo --}}
            <a href="/" class="flex items-center gap-3">

                <div class="flex h-9 w-9 items-center justify-center rounded-md bg-[#9E0808]">
                      <img src="{{ asset("images/logo.jpg")}}" alt="">
                </div>

                <div>
                    <p class="text-sm font-bold leading-none">
                        GobHelpDesk
                    </p>

                    <p class="mt-1 text-[7px] font-medium uppercase tracking-wide text-gray-500">
                        Tulong para sa Mamamayan
                    </p>
                </div>

            </a>


            {{-- Navigation --}}
            <div class="hidden items-center gap-8 md:flex">

                <a href="#home"
                   class="border-b-2 border-[#9E0808] py-7 text-xs font-medium text-[#9E0808]">
                    Home
                </a>

                <a href="#how-it-works"
                   class="py-7 text-xs font-medium text-gray-600 transition hover:text-[#9E0808]">
                    Paano Ito Gumagana
                </a>

                <a href="#about"
                   class="py-7 text-xs font-medium text-gray-600 transition hover:text-[#9E0808]">
                    Tungkol sa Amin
                </a>

                <a href=""
                   class="rounded-md border border-gray-200 px-5 py-2.5 text-xs font-semibold transition hover:bg-gray-50">
                    Login
                </a>

            </div>

        </nav>
    </header>


    {{-- ========================================================= --}}
    {{-- HERO --}}
    {{-- ========================================================= --}}

    <section id="home" class="bg-white">

        <div class="mx-auto grid max-w-7xl items-center gap-12 px-6 py-20 lg:grid-cols-2 lg:px-10 lg:py-24">

            {{-- Left --}}
            <div>

                <div class="mb-5 flex items-center">

                    <p class="text-[10px] font-bold uppercase tracking-wide text-[#9E0808]">
                        Opisyal na Tulong, Mas Madaling Lapitan
                    </p>

                </div>


                <h1 class="max-w-xl text-5xl font-light leading-[1.08] tracking-tight lg:text-6xl">

                    May Problema?

                    <br>

                    May
                    <span class="font-bold text-[#9E0808] text-7xl">
                        SOL
                    </span>usyon!

                </h1>


                <p class="mt-7 max-w-lg text-sm leading-6 text-gray-500">
                    Ipadala ang inyong concern, request, o report sa isang
                    lugar—at subaybayan ang progreso nito anumang oras.
                </p>


                {{-- Buttons --}}
                <div class="mt-7 flex flex-wrap gap-3">

                    <a href="#report"
                       class="inline-flex items-center gap-3 rounded-md bg-[#9E0808] px-5 py-3 text-xs font-semibold text-white transition hover:bg-[#800707]">

                        Mag-ulat ng Problema

                        <span>→</span>

                    </a>

                    <a href="#tracking"
                       class="inline-flex items-center gap-2 rounded-md border border-gray-200 px-5 py-3 text-xs font-semibold text-gray-700 transition hover:bg-gray-50">

                        Tingnan ang status

                        <svg class="h-3.5 w-3.5"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="m21 21-4.35-4.35m2.35-5.65a8 8 0 11-16 0 8 8 0 0116 0z"/>

                        </svg>

                    </a>

                </div>


                <div class="mt-5 flex items-center gap-2 text-[10px] text-gray-500">

                    Libre, ligtas, at bukas para sa lahat.

                </div>

            </div>


            {{-- Right image --}}
            <div class="relative">

                <div class="overflow-hidden rounded-2xl">

                    <img
                        src="{{ asset('images/hero.png') }}"
                        alt="GobHelpDesk assistance"
                        class="h-[420px] w-full object-cover"
                    >

                </div>


                {{-- Location badge --}}
                <div class="absolute right-[-10px] top-5 rounded-full bg-[#9E0808] px-4 py-2 text-[10px] font-semibold text-white shadow-lg">

                    📍 Tugon na malinaw

                </div>


                {{-- Floating concern card --}}
                <div class="absolute -bottom-5 left-[-20px] w-72 rounded-xl bg-white p-5 shadow-xl">

                    <div class="flex items-center justify-between">

                        <p class="text-[9px] font-bold text-green-600">
                            ● MAY AKSYON NA
                        </p>

                        <p class="text-[9px] text-gray-400">
                            #GHD-2048
                        </p>

                    </div>

                    <p class="mt-3 text-xs font-semibold">
                        Naaayos ang siring ilaw sa inyong kalsada
                    </p>

                    <p class="mt-2 text-[9px] text-gray-400">
                        ◷ Na-update 12 minuto ang nakalipas
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ========================================================= --}}
    {{-- FEATURE STRIP --}}
    {{-- ========================================================= --}}

    <section class="border-y border-gray-100 bg-[#F7F6F4]">

        <div class="mx-auto grid max-w-7xl grid-cols-1 px-6 py-6 text-[10px] lg:grid-cols-4 lg:px-10">

            <div class="font-semibold uppercase text-gray-600">
                Serbisyong may malinaw na proseso
            </div>

            <div class="flex items-center gap-2 text-gray-600">
                <span class="text-red-600">✓</span>
                Isang reference number
            </div>

            <div class="flex items-center gap-2 text-gray-600">
                <span class="text-red-600">✓</span>
                Regular na update
            </div>

            <div class="flex items-center gap-2 text-gray-600">
                <span class="text-red-600">✓</span>
                Direktang tugon
            </div>

        </div>

    </section>


    {{-- ========================================================= --}}
    {{-- HOW IT WORKS --}}
    {{-- ========================================================= --}}

    <section id="how-it-works" class="bg-white px-6 py-24">

        <div class="mx-auto max-w-7xl">

            <div class="mx-auto max-w-2xl text-center">

                <div class="flex items-center justify-center gap-2">

                    <p class="text-[10px] font-bold uppercase text-[#9E0808]">
                        Paano Ito Gumagana?
                    </p>

                </div>

                <h2 class="mt-4 text-3xl font-medium leading-tight lg:text-4xl">
                    Tatlong hakbang mula
                    <br>
                    concern hanggang solusyon
                </h2>

                <p class="mt-4 text-sm leading-6 text-gray-500">
                    Simple ang proseso. Alam ninyo kung nasaan ang report at
                    kung ano ang susunod na mangyayari.
                </p>

            </div>


            {{-- Cards --}}
            <div class="mt-14 grid gap-8 lg:grid-cols-3">

                {{-- Card 1 --}}
                <div class="relative rounded-xl border border-gray-200 bg-white p-7 shadow-sm">

                    <div class="flex items-center justify-between">

                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-red-50 text-[#9E0808]">
                            ♧
                        </div>

                        <span class="text-xl font-bold text-red-300">
                            01
                        </span>

                    </div>

                    <h3 class="mt-6 text-base font-medium">
                        Magsumite
                    </h3>

                    <p class="mt-2 text-xs leading-5 text-gray-500">
                        Ikuwento ang concern, idagdag ang lokasyon at litrato kung mayroon.
                    </p>

                </div>


                {{-- Card 2 --}}
                <div class="relative rounded-xl border border-gray-200 bg-white p-7 shadow-sm">

                    <div class="flex items-center justify-between">

                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-red-50 text-[#9E0808]">
                            ◉
                        </div>

                        <span class="text-xl font-bold text-red-300">
                            02
                        </span>

                    </div>

                    <h3 class="mt-6 text-base font-medium">
                        Subaybayan
                    </h3>

                    <p class="mt-2 text-xs leading-5 text-gray-500">
                        Gamitin ang reference number para makita kung sino ang umaksyon at ano ang update.
                    </p>

                </div>


                {{-- Card 3 --}}
                <div class="relative rounded-xl border border-gray-200 bg-white p-7 shadow-sm">

                    <div class="flex items-center justify-between">

                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-red-50 text-[#9E0808]">
                            ✓
                        </div>

                        <span class="text-xl font-bold text-red-300">
                            03
                        </span>

                    </div>

                    <h3 class="mt-6 text-base font-medium">
                        Malutas
                    </h3>

                    <p class="mt-2 text-xs leading-5 text-gray-500">
                        Makakatanggap ng sagot kapag may aksyon na o tapos na ang inyong concern.
                    </p>

                </div>

            </div>


            <p class="mt-7 text-center text-[10px] font-bold text-[#9E0808]">
                Magsumite → Subaybayan → Malutas
            </p>

        </div>

    </section>


    {{-- ========================================================= --}}
    {{-- WHY GOB --}}
    {{-- ========================================================= --}}

    <section id="about" class="bg-[#F7F6F4] px-6 py-24">

        <div class="mx-auto grid max-w-7xl items-center gap-16 lg:grid-cols-2">

            {{-- Red card --}}
            <div class="relative overflow-hidden rounded-2xl bg-[#9E0808] p-9 text-white">

                {{-- Decorative circles --}}
                <div class="absolute -right-20 -top-20 h-52 w-52 rounded-full border-[30px] border-red-400/20"></div>

                <p class="text-[9px] font-bold uppercase">
                    • Mas mahusay na serbisyo
                </p>

                <h2 class="mt-6 max-w-sm text-3xl font-light leading-tight">
                    Tulong na mabilis makita,
                    madaling sundan.
                </h2>

                <p class="mt-5 max-w-sm text-xs leading-5 text-red-100">
                    Isang ligtas na lugar para sa inyong mga concern.
                    Hindi kailangang hulaan kung saan ilalapit o paulit-ulit magkuwento.
                </p>

                <div class="mt-8 flex items-center gap-4">

                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-white/10">
                        ◷
                    </div>

                    <div>
                        <p class="text-lg font-bold">
                            24/7
                        </p>

                        <p class="text-[10px] text-red-100">
                            Puwedeng magsumite online
                        </p>
                    </div>

                </div>

            </div>


            {{-- Features --}}
            <div class="space-y-8">

                <div class="border-b border-gray-200 pb-7">

                    <div class="flex gap-5">

                        <span class="text-[#9E0808]">ϟ</span>

                        <div class="flex-1">

                            <div class="flex justify-between gap-5">

                                <h3 class="text-base font-medium">
                                    Mas mabilis na tugon
                                </h3>

                                <span class="text-[8px] font-bold text-[#9E0808]">
                                    WALANG PAikot-IKOT
                                </span>

                            </div>

                            <p class="mt-2 text-xs leading-5 text-gray-500">
                                Direktang naipapasa ang concern sa tamang pangkat
                                para masimulan agad ang aksyon.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="border-b border-gray-200 pb-7">

                    <div class="flex gap-5">

                        <span class="text-[#9E0808]">☷</span>

                        <div class="flex-1">

                            <div class="flex justify-between gap-5">

                                <h3 class="text-base font-medium">
                                    Malinaw sa bawat hakbang
                                </h3>

                                <span class="text-[8px] font-bold text-[#9E0808]">
                                    MAY KASAYSAYAN NG UPDATE
                                </span>

                            </div>

                            <p class="mt-2 text-xs leading-5 text-gray-500">
                                Makikita ang status, petsa ng update, at susunod
                                na gagawin—walang panghuhula.
                            </p>

                        </div>

                    </div>

                </div>


                <div>

                    <div class="flex gap-5">

                        <span class="text-[#9E0808]">♧</span>

                        <div class="flex-1">

                            <div class="flex justify-between gap-5">

                                <h3 class="text-base font-medium">
                                    Serbisyong madaling lapitan
                                </h3>

                                <span class="text-[8px] font-bold text-[#9E0808]">
                                    PARA SA BAWAT MAMAMAYAN
                                </span>

                            </div>

                            <p class="mt-2 text-xs leading-5 text-gray-500">
                                Simple ang salita, malinaw ang form, at puwedeng
                                gamitin sa computer o telepono.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ========================================================= --}}
    {{-- TRACKING --}}
    {{-- ========================================================= --}}

    <section id="tracking" class="bg-white px-6 py-24">

        <div class="mx-auto grid max-w-7xl items-center gap-16 lg:grid-cols-2">

            <div>

                <div class="flex items-center gap-2">

                    <span class="h-1.5 w-1.5 rounded-full bg-[#9E0808]"></span>

                    <p class="text-[9px] font-bold uppercase text-[#9E0808]">
                        Serbisyong Mapagkakatiwalaan
                    </p>

                </div>

                <h2 class="mt-5 max-w-lg text-3xl font-medium leading-tight">
                    Bawat concern, may
                    malinaw na pananagutan.
                </h2>

                <p class="mt-5 max-w-lg text-sm leading-6 text-gray-500">
                    Hindi natatapos sa “natanggap na.” Makikita ninyo kung
                    may gumagawa na at kung kailan ito na-update.
                </p>


                <div class="mt-8 space-y-5">

                    <div class="flex gap-4">

                        <span class="text-[#9E0808]">♧</span>

                        <div>
                            <h4 class="text-xs font-semibold">
                                Ligtas ang impormasyon
                            </h4>

                            <p class="mt-1 text-[10px] text-gray-500">
                                Tanging awtorisadong pangkat ang makakakita ng detalye.
                            </p>
                        </div>

                    </div>


                    <div class="flex gap-4">

                        <span class="text-[#9E0808]">♙</span>

                        <div>
                            <h4 class="text-xs font-semibold">
                                May totoong sumusagot
                            </h4>

                            <p class="mt-1 text-[10px] text-gray-500">
                                Ang concern ay hawak ng tamang tanggapan.
                            </p>
                        </div>

                    </div>


                    <div class="flex gap-4">

                        <span class="text-[#9E0808]">↻</span>

                        <div>
                            <h4 class="text-xs font-semibold">
                                May malinaw na rekord
                            </h4>

                            <p class="mt-1 text-[10px] text-gray-500">
                                Nakikita ang bawat update mula pagsusumite hanggang paglutas.
                            </p>
                        </div>

                    </div>

                </div>

            </div>


            {{-- Tracking card --}}
            <div class="rounded-2xl border border-gray-200 bg-[#FAF9F7] p-7 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>

                        <p class="text-[8px] font-bold uppercase text-[#9E0808]">
                            Live na halimbawa
                        </p>

                        <h3 class="mt-2 text-base font-medium">
                            Concern #GHD-2048
                        </h3>

                    </div>

                    <span class="rounded-full bg-red-50 px-3 py-1 text-[8px] font-semibold text-[#9E0808]">
                        ● Ginagawa na
                    </span>

                </div>


                <div class="mt-6 rounded-xl bg-white p-5">

                    <p class="text-[8px] font-semibold text-gray-400">
                        KALSADA AT ILAW
                    </p>

                    <p class="mt-2 text-xs font-semibold">
                        Sirang streetlight sa Mabini Street
                    </p>

                </div>


                <div class="mt-5 space-y-5">

                    <div class="flex gap-4">

                        <span class="flex h-6 w-6 items-center justify-center rounded-full bg-red-50 text-xs text-[#9E0808]">
                            ✓
                        </span>

                        <div>
                            <p class="text-[10px] font-medium">
                                Natanggap
                            </p>

                            <p class="text-[9px] text-gray-400">
                                Nakuha na ang report at reference number.
                            </p>
                        </div>

                        <span class="ml-auto text-[8px] text-gray-400">
                            8:14 AM
                        </span>

                    </div>


                    <div class="flex gap-4">

                        <span class="flex h-6 w-6 items-center justify-center rounded-full bg-red-50 text-xs text-[#9E0808]">
                            ✓
                        </span>

                        <div>
                            <p class="text-[10px] font-medium">
                                Naipasa sa tamang pangkat
                            </p>

                            <p class="text-[9px] text-gray-400">
                                Nasa City Maintenance Team na ang concern.
                            </p>
                        </div>

                        <span class="ml-auto text-[8px] text-gray-400">
                            8:32 AM
                        </span>

                    </div>


                    <div class="flex gap-4">

                        <span class="flex h-6 w-6 items-center justify-center rounded-full bg-[#9E0808] text-xs text-white">
                            ✓
                        </span>

                        <div>
                            <p class="text-[10px] font-medium">
                                Ginagawa na
                            </p>

                            <p class="text-[9px] text-gray-400">
                                Naka-iskedyul ang pag-inspeksyon ngayong araw.
                            </p>
                        </div>

                        <span class="ml-auto text-[8px] text-gray-400">
                            10:05 AM
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ========================================================= --}}
    {{-- CTA --}}
    {{-- ========================================================= --}}

    <section id="report" class="relative overflow-hidden bg-[#9E0808] px-6 py-20 text-white">

        {{-- Background decoration --}}
        <div class="absolute -right-32 -top-32 h-96 w-96 rounded-full border-[60px] border-red-400/20"></div>

        <div class="relative mx-auto flex max-w-7xl flex-col justify-between gap-10 lg:flex-row lg:items-center">

            <div>

                <p class="text-[9px] font-bold uppercase">
                    • Handa kaming makinig
                </p>

                <h2 class="mt-5 max-w-2xl text-3xl font-light leading-tight lg:text-4xl">
                    May concern?
                    Ipaabot natin sa tamang tao.
                </h2>

                <p class="mt-5 max-w-xl text-sm leading-6 text-red-100">
                    Magsumite ngayon at hahanapan ang concern ng tamang tugon.
                </p>

            </div>


            <div class="flex flex-col items-start gap-4">

                <a href="#"
                   class="rounded-md bg-white px-6 py-4 text-xs font-bold text-[#9E0808] shadow-lg transition hover:bg-gray-100">

                    Magsumite ng Concern
                    <span class="ml-3">→</span>

                </a>

                <p class="text-[10px] text-red-100">
                    ☎ Tulong: (02) 8888-HELP
                </p>

            </div>

        </div>

    </section>


    {{-- ========================================================= --}}
    {{-- FOOTER --}}
    {{-- ========================================================= --}}

    <footer class="bg-[#171717] px-6 py-14 text-white">

        <div class="mx-auto max-w-7xl">

            <div class="grid gap-12 lg:grid-cols-3">

                {{-- Brand --}}
                <div>

                    <div class="flex items-center gap-3">

                        <div class="flex h-9 w-9 items-center justify-center rounded-md bg-white text-[#9E0808]">
                            <img src="{{ asset("images/logo.jpg") }}" alt="">
                        </div>

                        <div>
                            <p class="text-sm font-bold">
                                GobHelpDesk
                            </p>

                            <p class="text-[7px] uppercase tracking-wide text-gray-400">
                                Tulong para sa Mamamayan
                            </p>
                        </div>

                    </div>

                    <p class="mt-5 max-w-sm text-xs leading-5 text-gray-400">
                        Ang simpleng online help desk para sa concerns,
                        requests, at reports ng mamamayan.
                    </p>

                    <div class="mt-5 space-y-2 text-[10px] text-gray-400">

                        <p>✉ tulong@gobhelpdesk.gov.ph</p>

                        <p>☎ (02) 8888-HELP</p>

                    </div>

                </div>


                {{-- Links --}}
                <div>

                    <p class="text-[9px] font-bold uppercase text-gray-500">
                        Mga Link
                    </p>

                    <div class="mt-5 space-y-3 text-xs text-gray-400">

                        <a href="#home" class="block hover:text-white">
                            Home
                        </a>

                        <a href="#how-it-works" class="block hover:text-white">
                            Paano Ito Gumagana
                        </a>

                        <a href="#tracking" class="block hover:text-white">
                            Tingnan ang Status
                        </a>

                        <a href="#" class="block hover:text-white">
                            Mga Karaniwang Tanong
                        </a>

                    </div>

                </div>


                {{-- Help --}}
                <div>

                    <p class="text-[9px] font-bold uppercase text-gray-500">
                        Tungkol
                    </p>

                    <div class="mt-5 space-y-3 text-xs text-gray-400">

                        <a href="#about" class="block hover:text-white">
                            Tungkol sa Amin
                        </a>

                        <a href="#" class="block hover:text-white">
                            Alamin ang Privacy
                        </a>

                        <a href="#" class="block hover:text-white">
                            Accessibility
                        </a>

                    </div>

                </div>

            </div>


            <div class="mt-12 flex flex-col justify-between gap-4 border-t border-gray-800 pt-6 text-[9px] text-gray-500 lg:flex-row">

                <p>
                    © Pamahalaang serbisyong para sa bawat Pilipino
                </p>

                <p>
                    © 2026 GobHelpDesk. Lahat ng karapatan ay nakalaan.
                </p>

            </div>

        </div>

    </footer>

</body>
</html>