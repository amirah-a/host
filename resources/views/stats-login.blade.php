<head>
    @filamentStyles
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">
    <x-filament::section class="max-w-md w-full mx-6">
        <x-slot name="heading">Secure Access</x-slot>
        <form action="{{ route('stats.login.post') }}" method="POST" class="space-y-4 mt-4">
            @csrf
            <x-filament::input.wrapper :valid="!$errors->has('passkey')">
                <x-filament::input type="password" name="passkey" placeholder="Enter Access Code" required autofocus />
            </x-filament::input.wrapper>
            @error('passkey') <p class="text-danger-600 text-sm">{{ $message }}</p> @enderror
            <x-filament::button type="submit" class="w-full">Verify & Enter</x-filament::button>
        </form>
    </x-filament::section>
    @filamentScripts
</body>
