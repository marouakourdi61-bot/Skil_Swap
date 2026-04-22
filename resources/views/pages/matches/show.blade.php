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

                            <div class="flex items-center gap-3">
                                <a href="{{ route('exchanges.create', ['receiver_id' => $user->id]) }}"
                                   class="bg-primary text-on-primary px-6 py-3 rounded-full font-headline font-bold text-sm shadow-sm">
                                    Send Exchange
                                </a>
                            </div>
                        </div>

                        <p class="font-body text-on-surface-variant mt-6 leading-relaxed">
                            {{ $user->bio ?? 'No description available' }}
                        </p>

                        <div class="mt-10">
                            <h2 class="font-headline text-xl font-bold tracking-tight text-on-surface mb-6">
                                Skills
                            </h2>

                            <div class="space-y-4">
                                @forelse($user->skills as $skill)
                                    <div class="flex flex-col md:flex-row gap-5 bg-surface-container-high/40 rounded-2xl p-5">
                                        <div class="md:w-44 h-28 rounded-xl overflow-hidden shrink-0">
                                            <img
                                                class="w-full h-full object-cover"
                                                src="https://via.placeholder.com/240x160?text=Skill"
                                                alt="{{ $skill->name }}"
                                            >
                                        </div>

                                        <div class="flex-1">
                                            <div class="flex items-start justify-between gap-4">
                                                <div>
                                                    <h3 class="font-headline text-lg font-extrabold text-on-surface">
                                                        {{ $skill->name }}
                                                    </h3>
                                                    <p class="text-xs text-on-surface-variant mt-1">
                                                        {{ $skill->category ?? 'General' }} • {{ $skill->pivot->type }}
                                                    </p>
                                                </div>

                                                <a href="{{ route('exchanges.create', ['receiver_id' => $user->id]) }}"
                                                   class="px-4 py-2 rounded-full bg-primary text-on-primary text-xs font-bold">
                                                    Send Exchange
                                                </a>
                                            </div>

                                            <p class="text-sm text-on-surface-variant mt-3 leading-relaxed">
                                                {{ $skill->description ?: 'No description available.' }}
                                            </p>
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

