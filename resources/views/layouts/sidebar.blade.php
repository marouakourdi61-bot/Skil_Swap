<!-- Navigation Shell: SideNavBar -->
<aside
    class="fixed left-0 top-0 h-full w-72 bg-[#fff1e7] dark:bg-stone-900 flex flex-col py-12 px-8 h-screen border-none shadow-[0_20px_40px_rgba(45,22,0,0.06)] z-50">
    <div class="flex flex-col mb-8">
        <h1 class="font-headline text-3xl font-black text-[#2d1600] tracking-tighter">SkillSwap Pro</h1>
        <p class="font-label text-[10px] tracking-[0.2em] uppercase text-on-surface-variant opacity-70">The Tactile
            Archive</p>
    </div>
    <nav class="flex-1 space-y-4">
        <a class="flex items-center gap-4 text-[#80552c] dark:text-[#bd8a5c] font-bold scale-105 origin-left transition-all duration-300"
            href="/dashboard">
            <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
            <span class="font-headline text-sm tracking-tight">Dashboard</span>
        </a>
        <a class="flex items-center gap-4 text-stone-500 dark:text-stone-400 font-medium hover:text-[#80552c] dark:hover:text-[#bd8a5c] transition-all duration-300 ease-out hover:translate-x-1"
            href="/skills">
            <span class="material-symbols-outlined" data-icon="psychology">psychology</span>
            <span class="font-headline text-sm tracking-tight">My Skills</span>
        </a>
        <a class="flex items-center gap-4 text-stone-500 dark:text-stone-400 font-medium hover:text-[#80552c] dark:hover:text-[#bd8a5c] transition-all duration-300 ease-out hover:translate-x-1"
            href="{{ route('exchanges.index') }}">
            <span class="material-symbols-outlined" data-icon="swap_horiz">swap_horiz</span>
            <span class="font-headline text-sm tracking-tight">Exchanges</span>
        </a>
        <a class="flex items-center gap-4 text-stone-500 dark:text-stone-400 font-medium hover:text-[#80552c] dark:hover:text-[#bd8a5c] transition-all duration-300 ease-out hover:translate-x-1"
            href="#">
            <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
            <span class="font-headline text-sm tracking-tight">Notifications</span>
        </a>
        <a href="{{ route('profile.show') }}"
            class="flex items-center gap-4 text-stone-500 hover:text-[#80552c] transition-all">
            <span class="material-symbols-outlined">person</span>
            Profile 
        </a>
    </nav>
    <div class="mt-auto">
        <a class="flex items-center gap-4 text-stone-500 dark:text-stone-400 font-medium hover:text-error transition-all duration-300 ease-out hover:translate-x-1"
            href="#">
            <span class="material-symbols-outlined" data-icon="logout">logout</span>
            <span class="font-headline text-sm tracking-tight">Logout</span>
        </a>
    </div>
</aside>