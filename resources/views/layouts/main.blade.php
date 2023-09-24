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

        <link rel="icon" href="favicon.ico"><link href="{{ asset('style.css') }}" rel="stylesheet">
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased"
        x-data="{ 
            page: 'ecommerce', 
            'loaded': true, 
            'darkMode': true, 
            'stickyMenu': false, 
            'sidebarToggle': false, 
            'scrollTop': false,
            directiveName:'' }"
        x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"

    >
        <x-banner />

        <!-- ===== Preloader Start ===== -->
        <div x-show="loaded" x-init="window.addEventListener('DOMContentLoaded', () => {setTimeout(() => loaded = false, 500)})"
            class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white">
            <div class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-primary border-t-transparent"></div>
        </div>
        <!-- ===== Preloader End ===== -->       


        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            {{-- @livewire('navigation-menu') --}}

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif


            <!-- ===== Page Wrapper Start ===== -->
            <div class="flex h-screen overflow-hidden">
                @include('layouts.sidebar')
              
                <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
                @include('layouts.header')
                    <main>
                        @yield('content')
                    </main>  
                </div>
              
            </div>            

        </div>

        @stack('modals')

        @livewireScripts

        <script defer src="bundle.js"></script>
        
    </body>
</html>
