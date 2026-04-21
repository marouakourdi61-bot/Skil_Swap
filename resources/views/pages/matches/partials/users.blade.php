@foreach($users as $user)

<div class="md:col-span-2 bg-surface-container-lowest rounded-xl overflow-hidden flex flex-col md:flex-row group hover:shadow-[0_20px_40px_rgba(45,22,0,0.06)] transition-all duration-500">

    <!-- IMAGE -->
    <div class="relative md:w-1/2 h-72 md:h-auto overflow-hidden">
        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
             src="{{ $user->image ?? 'https://via.placeholder.com/400' }}">

        <div class="absolute top-6 left-6 bg-primary text-on-primary px-4 py-1 rounded-full font-label text-[10px] font-bold uppercase tracking-[0.2em] shadow-lg">
            Master
        </div>
    </div>

    <!-- CONTENT -->
    <div class="md:w-1/2 p-10 flex flex-col">

        <div class="flex justify-between items-start mb-6">

            <div>
                <h3 class="font-headline text-3xl font-extrabold tracking-tight text-on-surface">
                    {{ $user->name }}
                </h3>

                <p class="font-label text-sm text-on-surface-variant flex items-center gap-1 mt-2">
                    <span class="material-symbols-outlined text-sm">location_on</span>
                    {{ $user->city ?? 'Unknown' }}
                </p>
            </div>

            <div class="bg-surface-container-high/50 backdrop-blur px-4 py-2 rounded-2xl flex flex-col items-center gap-0.5">
                <span class="font-headline font-black text-xl text-primary">4.8</span>
                <span class="font-label text-[9px] uppercase font-bold tracking-tighter">Rating</span>
            </div>

        </div>

        <p class="font-body text-on-surface-variant mb-8 leading-relaxed">
            {{ $user->bio ?? 'No description available' }}
        </p>

        <!-- SKILLS -->
        <div class="flex flex-wrap gap-2 mb-auto">

            @foreach($user->skills as $skill)
                <span class="bg-surface-container-high text-on-surface px-4 py-1.5 rounded-full font-label text-[11px] font-bold uppercase tracking-wider">
                    {{ $skill->name }} ({{ $skill->pivot->type }})
                </span>
            @endforeach

        </div>

        <!-- ACTIONS -->
        <div class="mt-10 flex items-center gap-6">
            <button class="bg-primary text-on-primary px-10 py-4 rounded-full font-headline font-bold text-base shadow-sm">
                Contact
            </button>

            <button class="w-14 h-14 rounded-full border border-outline-variant/30 flex items-center justify-center text-primary">
                <span class="material-symbols-outlined">favorite</span>
            </button>
        </div>

    </div>
</div>

@endforeach