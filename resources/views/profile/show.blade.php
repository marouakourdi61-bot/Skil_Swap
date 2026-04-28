<x-app-layout>

<main class="min-h-screen bg-surface">

<!-- Header Hero -->
<header
    class="relative w-full h-[614px] flex flex-col md:flex-row items-end px-12 pb-16 bg-surface-container-low overflow-hidden">

    <div class="absolute inset-0 opacity-10 pointer-events-none"
        style="background-image: radial-gradient(#80552c 0.5px, transparent 0.5px); background-size: 24px 24px;">
    </div>

    <div class="relative z-10 w-full flex flex-col md:flex-row gap-12 items-end">

        <!-- IMAGE -->
        <div class="w-72 h-96 rounded-xl overflow-hidden shadow-[0_40px_80px_rgba(45,22,0,0.12)] bg-surface-container-highest">
            <img class="w-full h-full object-cover grayscale-[20%] hover:grayscale-0 transition-all duration-700"
                 src="{{ $user->image ? asset('storage/' . $user->image) : 'https://ui-avatars.com/api/?name=' . urlencode($user->name) }}">
        </div>

        <!-- INFO -->
        <div class="flex-1 space-y-6 max-w-2xl">

            <div class="space-y-1">
                <span class="label-text text-xs tracking-[0.2em] uppercase font-bold text-primary">
                    Senior Contributor
                </span>

                <h1 class="text-7xl font-headline font-bold tracking-tighter text-on-surface leading-none">
                    {{ $user->name }}
                </h1>
            </div>

            <p class="font-body text-xl leading-relaxed text-on-surface-variant font-light italic">
                {{ $user->bio ?: 'No bio available yet.' }}
            </p>

            <div class="flex gap-4">
                <span class="inline-flex items-center gap-2 bg-surface-container-lowest px-6 py-2 rounded-full">
                    <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">
                        verified
                    </span>
                    {{ $user->role ?? 'Member' }}
                </span>

                <span class="inline-flex items-center gap-2 bg-surface-container-lowest px-6 py-2 rounded-full">
                    <span class="material-symbols-outlined text-primary">location_on</span>
                    {{ $user->location ?: 'Location not set' }}
                </span>
            </div>

        </div>
    </div>

    <!-- EDIT BUTTON -->
    @if(auth()->id() === $user->id)
        <a href="{{ route('profile.edit') }}"
           class="absolute top-10 right-10 px-5 py-2 rounded-full bg-primary text-white font-bold text-sm">
            Edit Profile
        </a>
    @endif

</header>

<!-- CONTENT -->
<div class="px-12 py-20 grid grid-cols-12 gap-16">

<!-- LEFT -->
<div class="col-span-12 lg:col-span-4 space-y-16">

    <section class="space-y-8">
        <h3 class="text-xs tracking-[0.3em] uppercase font-bold text-on-surface-variant">
            Tactile Schedule
        </h3>

        <div class="bg-surface-container-lowest p-8 rounded-xl">

            <span class="font-bold text-lg">
                {{ $user->availability_status ?? 'Unavailable' }}
            </span>

            <p class="text-sm text-on-surface-variant mt-3">
                {{ $user->availability_notes ?? 'No schedule set yet.' }}
            </p>

        </div>
    </section>

</div>

<!-- RIGHT -->
<div class="col-span-12 lg:col-span-8 space-y-24">

<!-- SKILLS -->
<section class="space-y-12">

    <h2 class="text-4xl font-headline font-bold text-on-surface">
         Gallery
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        @forelse($user->skills as $skill)

        <!-- SKILL CARD (same UI) -->
        <div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-[0_40px_60px_rgba(45,22,0,0.08)] transition-all duration-500">

            <!-- IMAGE -->
            <div class="h-48 overflow-hidden">
                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000"
                     src="{{ $skill->image ? asset('storage/' . $skill->image) : 'https://via.placeholder.com/600x400' }}">
            </div>

            <!-- CONTENT -->
            <div class="p-8 space-y-4">

                <div class="flex justify-between items-start">
                    <h4 class="text-2xl font-headline font-bold">
                        {{ $skill->name }}
                    </h4>

                    <span class="text-[10px] bg-surface-container-high px-2 py-1 rounded font-bold uppercase">
                        {{ $skill->pivot->type ?? 'skill' }}
                    </span>
                </div>

                <p class="text-on-surface-variant leading-relaxed text-sm">
                    {{ $skill->description ?? 'No description available.' }}
                </p>

                <div class="pt-4 flex gap-2">
                    <span class="text-xs bg-surface-container px-3 py-1 rounded-full">
                        {{ $skill->category ?? 'General' }}
                    </span>
                </div>

            </div>
        </div>

        @empty
            <p class="text-gray-500">No skills added yet.</p>
        @endforelse

    </div>

</section>

</div>
</div>

</main>

</x-app-layout>