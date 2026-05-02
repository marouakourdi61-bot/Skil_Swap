<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillSwap</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-[#fff1e7] dark:bg-stone-900 text-[#2d1600] dark:text-white">

    <!-- NAVBAR -->
    <header class="flex justify-between items-center px-10 py-6">
        <h1 class="text-2xl font-black">SkillSwap</h1>

        <div class="space-x-4">
            <a href="{{ route('login') }}" class="px-4 py-2 rounded-md border hover:bg-[#80552c] hover:text-white transition">
                Login
            </a>
            <a href="{{ route('register') }}" class="px-4 py-2 rounded-md bg-[#80552c] text-white hover:opacity-90 transition">
                Register
            </a>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="flex flex-col items-center justify-center text-center mt-20 px-6">
        <h2 class="text-5xl font-extrabold mb-6">
            Exchange Skills, <br> Grow Together
        </h2>

        <p class="max-w-xl text-lg opacity-80 mb-8">
            SkillSwap is a platform where you can share your skills and learn new ones 
            by connecting with people around you.
        </p>

        <a href="{{ route('register') }}" 
           class="px-8 py-3 bg-[#2d1600] text-white rounded-lg hover:scale-105 transition">
            Get Started
        </a>
    </section>
    <!-- FOOTER -->
    <footer class="text-center mt-24 py-6 text-sm opacity-60">
        © {{ date('Y') }} SkillSwap - All rights reserved
    </footer>

</body>
</html>