<x-app-layout>

    <!-- Hero Section -->
    <section class="mb-16">
        <div class="flex justify-between items-end gap-10">

            <div class="max-w-2xl">
                <span class="font-label text-xs font-bold uppercase tracking-[0.3em] text-primary mb-4 block">
                    Archive Overview
                </span>

                <h2 class="font-headline text-6xl font-bold tracking-tighter text-on-surface leading-[0.95] mb-6">
                    Hello,  {{ auth()->user()->name }}.
                </h2>

                <p class="font-body text-lg text-on-surface-variant leading-relaxed">
                    Your archive is growing. You have {{ $pendingRequests }} pending exchanges
                    and your skills are active in the community this week.
                </p>
            </div>

            <div class="hidden lg:block pb-2">
                <button
                    class="bg-primary text-on-primary px-10 py-4 rounded-full font-headline font-bold text-sm hover:opacity-90 active:scale-95 transition-all">
                    Proposer un échange
                </button>
            </div>

        </div>
    </section>

    <!-- Summary Grid -->
    <div class="grid grid-cols-12 gap-6 mb-16">

        <!-- Skills Offered -->
        <div class="col-span-12 md:col-span-8 bg-surface-container-lowest p-10 rounded-xl relative overflow-hidden flex flex-col justify-between min-h-[400px]">

            <div class="relative z-10">
                <h3 class="font-headline text-3xl font-bold text-on-surface mb-2">
                    Compétences Offertes
                </h3>
                <p class="font-body text-on-surface-variant">
                    Sharing knowledge across the archive.
                </p>
            </div>

            <div class="relative z-10 flex items-baseline gap-4 mt-auto">
                <span class="font-headline text-[8rem] font-extrabold text-primary">
                    {{ $skillsOffered }}
                </span>

                <div class="font-label text-sm uppercase tracking-widest text-primary pb-6">
                    Skills Actifs
                </div>
            </div>

            <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-surface-container rounded-full blur-3xl opacity-50"></div>

            <div class="absolute right-10 top-10 flex gap-2">
                <span class="bg-primary-container/20 text-primary-container px-3 py-1 rounded-full text-[10px] font-bold uppercase">
                    Trending
                </span>
            </div>

        </div>

        <!-- Right cards -->
        <div class="col-span-12 md:col-span-4 grid grid-rows-2 gap-6">

            <!-- Wishlist -->
            <div class="bg-surface-container-low p-8 rounded-xl flex flex-col justify-between">
                <div class="flex justify-between items-start">
                    <span class="material-symbols-outlined text-primary scale-125">search</span>
                    <span class="font-label text-[10px] uppercase font-bold tracking-widest text-on-surface-variant">
                        Wishlist
                    </span>
                </div>

                <div>
                    <span class="font-headline text-5xl font-bold text-on-surface">
                        {{ $skillsWanted }}
                    </span>
                    <p class="font-body text-sm font-medium text-on-surface-variant mt-2">
                        Skills Recherchées
                    </p>
                </div>
            </div>

            <!-- Pending -->
            <div class="bg-primary p-8 rounded-xl flex flex-col justify-between text-on-primary">
                <div class="flex justify-between items-start">
                    <span class="material-symbols-outlined text-on-primary scale-125">pending_actions</span>
                    <div class="w-2 h-2 rounded-full bg-tertiary shadow-[0_0_12px_rgba(130,84,45,0.8)]"></div>
                </div>

                <div>
                    <span class="font-headline text-5xl font-bold">
                        {{ $pendingRequests }}
                    </span>
                    <p class="font-headline text-sm font-medium opacity-80 mt-2">
                        Demandes en attente
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- Secondary Section -->
    <div class="grid grid-cols-12 gap-10">

        <!-- BADGES -->
        <div class="col-span-12 lg:col-span-5">

            <div class="mb-8 flex justify-between items-center">
                <h3 class="font-headline text-xl font-bold">Distinctions</h3>
                <a class="font-label text-[10px] font-bold uppercase tracking-widest text-primary hover:opacity-70">
                    Voir tout
                </a>
            </div>

            <div class="bg-surface-container-low rounded-xl p-8 flex flex-wrap gap-6 justify-center lg:justify-start">

                @forelse($badges as $badge)
                    <div class="flex flex-col items-center gap-3">
                        <div class="w-16 h-16 rounded-full bg-surface-container-lowest flex items-center justify-center shadow-sm">
                            <span class="material-symbols-outlined text-primary text-3xl">
                                {{ $badge->icon ?? 'workspace_premium' }}
                            </span>
                        </div>

                        <span class="font-label text-[10px] font-semibold text-center">
                            {{ $badge->name }}
                        </span>
                    </div>
                @empty
                    <p class="text-sm text-gray-400">No badges yet</p>
                @endforelse

            </div>
        </div>

        <!-- ACTIVITY -->
        <div class="col-span-12 lg:col-span-7">

            <div class="mb-8">
                <h3 class="font-headline text-xl font-bold">Dernière activité</h3>
            </div>

            <div class="space-y-6">

                @forelse($recentExchanges as $exchange)

                    <div class="group flex items-center justify-between p-6 bg-surface-container-lowest rounded-xl">

                        <div class="flex items-center gap-6">

                            <div class="w-12 h-12 rounded-full bg-tertiary-fixed flex items-center justify-center">
                                <span class="material-symbols-outlined text-on-tertiary-container">
                                    swap_horiz
                                </span>
                            </div>

                            <div>
                                <h4 class="font-headline font-bold text-on-surface">
                                    Exchange #{{ $exchange->id }}
                                </h4>
                                <p class="font-body text-sm text-on-surface-variant">
                                    Status: {{ $exchange->status }}
                                </p>
                            </div>

                        </div>

                        <div class="text-right">
                            <span class="text-xs font-bold text-primary">
                                {{ $exchange->status }}
                            </span>
                        </div>

                    </div>

                @empty
                    <p class="text-sm text-gray-400">No activity yet</p>
                @endforelse

            </div>

        </div>

    </div>

</x-app-layout>