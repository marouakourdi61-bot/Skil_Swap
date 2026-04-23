<x-app-layout>
    <main class="lg:pl-72 pt-28 pb-12 px-8 min-h-screen">
        <div class="max-w-[1100px] mx-auto">
            <div class="mb-8">
                <a href="{{ route('matches.index') }}" class="text-sm text-gray-600 hover:underline">
                    ← Back to matches
                </a>
            </div>

            <div class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow">
                <div class="grid grid-cols-1 md:grid-cols-3">
                    <div class="md:col-span-1">
                        <img class="w-full h-72 md:h-full object-cover"
                             src="{{ $user->image ?? 'https://via.placeholder.com/600' }}"
                             alt="{{ $user->name }}">
                    </div>

                    <div class="md:col-span-2 p-10">
                        <div class="flex items-start justify-between gap-6">
                            <div>
                                <h1 class="font-headline text-4xl font-extrabold tracking-tight text-on-surface">
                                    {{ $user->name }}
                                </h1>

                                <p class="font-label text-sm text-on-surface-variant flex items-center gap-1 mt-2">
                                    <span class="material-symbols-outlined text-sm">location_on</span>
                                    {{ $user->city ?? 'Unknown' }}
                                </p>
                            </div>

                            
                        </div>

                        <p class="font-body text-on-surface-variant mt-6 leading-relaxed">
                            {{ $user->bio ?? 'No description available' }}
                        </p>

                        <div class="mt-10">
                            <h2 class="font-headline text-xl font-bold tracking-tight text-on-surface mb-6">
                                Skills
                            </h2>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

    @forelse($user->skills as $skill)

        <div class="group bg-surface-container-low rounded-xl overflow-hidden shadow-sm hover:shadow-[0_40px_60px_rgba(45,22,0,0.08)] transition-all duration-500">

            <!-- IMAGE -->
            <div class="h-48 overflow-hidden">
                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000"
                     src="https://via.placeholder.com/400x300?text=Skill"
                     alt="{{ $skill->name }}">
            </div>

            <!-- CONTENT -->
            <div class="p-8 space-y-4">

                <div class="flex justify-between items-start">
                    <h4 class="text-2xl font-headline font-bold">
                        {{ $skill->name }}
                    </h4>

                    <span class="label-text text-[10px] bg-surface-container-high px-2 py-1 rounded font-bold uppercase">
                        {{ strtoupper($skill->pivot->type) }}
                    </span>
                </div>

                <p class="text-on-surface-variant leading-relaxed text-sm">
                    {{ $skill->description ?? 'No description available.' }}
                </p>

                <!-- CATEGORY -->
                <div class="pt-4 flex gap-2 flex-wrap">
                    <span class="text-xs bg-surface-container text-on-surface-variant px-3 py-1 rounded-full">
                        {{ $skill->category ?? 'General' }}
                    </span>

                    <span class="text-xs bg-surface-container text-on-surface-variant px-3 py-1 rounded-full">
                        {{ $skill->pivot->type }}
                    </span>
                </div>

                <!-- BUTTON -->
                <a href="{{ route('exchanges.create', ['receiver_id' => $user->id]) }}"
                   class="inline-block mt-4 px-5 py-2 rounded-full bg-primary text-on-primary text-xs font-bold">
                    Send Exchange
                </a>

            </div>
        </div>

    @empty

        <p class="text-gray-500">No skills.</p>

    @endforelse

</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>

