<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="h-full">
<div x-data='{sbOpen: false}'>
{{--    <x-ui-layout-off-canvas :menu="$menu"></x-ui-layout-off-canvas>--}}
{{--    <x-ui-layout-desktop-sidebar :menu="$menu"></x-ui-layout-desktop-sidebar>--}}
    <div class="flex flex-1 flex-col md:pl-64">
        <x-top-bar></x-top-bar>

        <x-banner />

        <main class="flex-1">
            <div class="py-6 max-w-6xl mx-auto x-full space-y-4">
                @isset($header)
                    <div class="mx-auto max-w-7xl px-4">
                        {{$header}}
                    </div>
                @endisset
                <div class="mx-auto max-w-7xl px-4">
                    {{$slot}}
                </div>
            </div>
        </main>
    </div>
</div>

@stack('modals')

@livewireScripts
</body>

@stack('modals')

@livewireScripts
</body>
</html>
