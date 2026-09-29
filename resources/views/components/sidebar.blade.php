<!DOCTYPE html>
<html>
<head>
    <title>TEST</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<div class="flex min-h-screen">

{{-- nav --}}
    <aside class="flex flex-col items-center w-48 bg-[#171717]">
        <div class="flex h-20">

        </div>

        <a href="{{ route('dashboard.index') }}"
        class="text-white mb-5"> 
        Dashboard 
        </a>

        <a href="{{ route('user.index') }}"
        class="text-white mb-5"> 
        Users
        </a>

        <a href="{{ route('ticket.index') }}"
        class="text-white mb-5"> 
        Ticket
        </a>

        <a href="{{ route('calllogs.index') }}"
        class="text-white mb-5"> 
        Call Logs
        </a>

        <a href="{{ route('reports.index') }}"
        class="text-white mb-5"> 
        Reports
        </a>

    </aside>

    <main class="flex-1">
        {{ $slot }}
    </main>

</div>
</body>
</html>