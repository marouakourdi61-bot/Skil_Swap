@foreach($users as $user)

<a href="{{ route('matches.show', $user->id) }}" class="md:col-span-1 block">
<div class="bg-surface-container-lowest w-full max-w-5xl mx-auto rounded-xl overflow-hidden grid grid-cols-1 md:grid-cols-3 group hover:shadow-[0_20px_40px_rgba(45,22,0,0.06)] transition-all duration-500">
   
    

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
</a>

@endforeach