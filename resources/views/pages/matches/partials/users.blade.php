@foreach($users as $user)

<a href="{{ route('matches.show', $user->id) }}" class="block">

    <div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-[0_20px_40px_rgba(45,22,0,0.06)] transition-all duration-500 border border-transparent hover:border-[#80552c]/20">

        <!-- TOP IMAGE (optional placeholder if no image) -->
        <div class="h-40 bg-gray-100 overflow-hidden">
            <img 
                src="{{ $user->image ? asset('storage/' . $user->image) : 'https://ui-avatars.com/api/?name=' . urlencode($user->name) }}"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
            >
        </div>

        <!-- CONTENT -->
        <div class="p-6 flex flex-col gap-4">

            <!-- NAME + CITY -->
            <div>
                <h3 class="text-xl font-bold text-on-surface">
                    {{ $user->name }}
                </h3>

                <p class="text-sm text-on-surface-variant flex items-center gap-1 mt-1">
                    <span class="material-symbols-outlined text-sm">location_on</span>
                    {{ $user->city ?? 'Unknown' }}
                </p>
            </div>

            <!-- BIO -->
            <p class="text-sm text-on-surface-variant line-clamp-2">
                {{ $user->bio ?? 'No description available' }}
            </p>

            <!-- SKILLS -->
            <div class="flex flex-wrap gap-2">
                @foreach($user->skills->take(3) as $skill)
                    <span class="text-xs px-3 py-1 rounded-full bg-[#f3e5d8] text-[#80552c]">
                        {{ $skill->name }} ({{ $skill->pivot->type }})
                    </span>
                @endforeach
            </div>

            <!-- ACTIONS -->
            <div class="flex items-center justify-between mt-2">

                <span class="text-sm text-[#80552c] font-medium">
                    View profile →
                </span>

                <button class="w-10 h-10 rounded-full border flex items-center justify-center text-[#80552c] hover:bg-[#80552c]/10">
                    <span class="material-symbols-outlined text-sm">favorite</span>
                </button>

            </div>

        </div>
    </div>

</a>

@endforeach