<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Metrics</title>

    <!-- 1. Filament & Livewire Styles -->
    @filamentStyles
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 antialiased font-sans">

    <div class="max-w-7xl mx-auto py-16 px-6">

        <div class="max-w-7xl mx-auto py-4 px-6 flex justify-end">
            <form action="{{ route('stats.logout') }}" method="POST">
                @csrf
                <x-filament::button
                    type="submit"
                    color="danger"
                    size="sm"
                    icon="heroicon-m-arrow-left-on-rectangle"
                    labeled-from="md">
                    Logout
                </x-filament::button>
            </form>
        </div>

        <header class="mb-10 text-center">
            <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                Real-Time Application Stats
            </h1>
            <p class="mt-3 text-lg text-gray-500">Live distribution across program cohorts.</p>
        </header>

        <main>
            <!-- 2. Render the Widget Standalone -->
            @livewire(\App\Livewire\ApplicationStatsOverview::class)
        </main>

        <footer class="mt-12 text-center text-sm text-gray-400">
            &copy; {{ date('Y') }} Application Portal. Powered by Filament.
        </footer>
    </div>

    <!-- 3. Filament & Livewire Scripts -->
    @livewireScripts
    @filamentScripts
</body>
</html>

