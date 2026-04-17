<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link
            href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
            rel="stylesheet" />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet" />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet" />
        <script id="tailwind-config">
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        "colors": {
                            "surface-container-lowest": "#ffffff",
                            "tertiary-fixed": "#ffdcc3",
                            "on-secondary-fixed": "#2d1600",
                            "tertiary-fixed-dim": "#f7ba8b",
                            "on-primary-fixed": "#2e1600",
                            "inverse-on-surface": "#ffeee1",
                            "on-tertiary-container": "#482402",
                            "on-secondary": "#ffffff",
                            "tertiary-container": "#bf895e",
                            "surface-tint": "#80552c",
                            "secondary": "#7e5630",
                            "on-background": "#2d1600",
                            "surface-container-low": "#fff1e7",
                            "outline": "#83746a",
                            "surface-container-highest": "#ffdcbe",
                            "primary-fixed-dim": "#f5bb89",
                            "error-container": "#ffdad6",
                            "on-secondary-container": "#78512c",
                            "surface-container-high": "#ffe3cc",
                            "secondary-fixed": "#ffdcc0",
                            "outline-variant": "#d5c3b7",
                            "background": "#fff8f5",
                            "on-primary": "#ffffff",
                            "secondary-fixed-dim": "#f1bc8e",
                            "primary": "#80552c",
                            "tertiary": "#82542d",
                            "on-error": "#ffffff",
                            "surface-bright": "#fff8f5",
                            "error": "#ba1a1a",
                            "inverse-primary": "#f5bb89",
                            "on-tertiary": "#ffffff",
                            "on-tertiary-fixed-variant": "#663d18",
                            "on-surface": "#2d1600",
                            "primary-fixed": "#ffdcc1",
                            "surface-container": "#ffeada",
                            "surface-dim": "#ffd2a9",
                            "secondary-container": "#fdc798",
                            "primary-container": "#bd8a5c",
                            "surface": "#fff8f5",
                            "on-tertiary-fixed": "#2f1500",
                            "inverse-surface": "#4a2800",
                            "on-surface-variant": "#50443b",
                            "on-error-container": "#93000a",
                            "on-secondary-fixed-variant": "#633f1b",
                            "on-primary-container": "#462501",
                            "on-primary-fixed-variant": "#653e17",
                            "surface-variant": "#ffdcbe"
                        },
                        "borderRadius": {
                            "DEFAULT": "0.25rem",
                            "lg": "0.5rem",
                            "xl": "0.75rem",
                            "full": "9999px"
                        },
                        "fontFamily": {
                            "headline": ["Manrope"],
                            "body": ["Manrope"],
                            "label": ["Inter"]
                        }
                    },
                },
            }
        </script>
        <style>
            .material-symbols-outlined {
                font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            }

            body {
                background-color: #fff8f5;
                color: #2d1600;
            }
        </style>
    </head>


<body class="font-sans antialiased bg-[#fff8f5] dark:bg-stone-950">
    <div class="min-h-screen">
         @include('layouts.sidebar')
        
         @include('layouts.navigation')
        

        

        <main class="pl-72 pt-28 min-h-screen">
            <div class="px-10 pb-12">
                {{ $slot }}
            </div>
        </main>

    </div>
</body>
</html>