<x-app-layout>
    <main class="px-6 min-h-screen">

        <div class="max-w-5xl mx-auto">

            <!-- BACK -->
            <div class="mb-8">
                <a href="{{ route('matches.index') }}" class="text-sm text-gray-600 hover:underline">
                    ← Back to matches
                </a>
            </div>

            <!-- MAIN CARD -->
            <div class="w-full bg-surface-container-lowest rounded-2xl overflow-hidden shadow">

                <!-- FIX: removed 3-col grid (was causing empty space) -->
                <div class="grid grid-cols-1">

                    <!-- LEFT CONTENT -->
                    <div class="p-6">

                        <!-- HEADER -->
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

                        <!-- BIO -->
                        <p class="font-body text-on-surface-variant mt-6 leading-relaxed">
                            {{ $user->bio ?? 'No description available' }}
                        </p>

                        <!-- SKILLS TITLE -->
                        <div class="mt-10">
                            <h2 class="font-headline text-xl font-bold text-on-surface mb-6">
                                Skills
                            </h2>

                            <!-- GRID SKILLS -->
                            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

                                @forelse($user->skills as $skill)

                                    <div class="w-full h-full bg-surface-container-low rounded-xl overflow-hidden shadow-sm hover:shadow-[0_20px_40px_rgba(45,22,0,0.08)] transition-all duration-500 flex flex-col group">

                                        <!-- IMAGE -->
                                        <div class="h-44 overflow-hidden">
                                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                                 src="https://via.placeholder.com/400x300?text=Skill"
                                                 alt="{{ $skill->name }}">
                                        </div>

                                        <!-- CONTENT -->
                                        <div class="p-5 flex flex-col flex-1 space-y-3">

                                            <!-- TITLE -->
                                            <div class="flex justify-between items-start">
                                                <h4 class="text-xl font-bold text-on-surface">
                                                    {{ $skill->name }}
                                                </h4>

                                                <span class="text-[10px] bg-surface-container-high px-2 py-1 rounded font-bold uppercase">
                                                    {{ strtoupper($skill->pivot->type) }}
                                                </span>
                                            </div>

                                            <!-- DESCRIPTION -->
                                            <p class="text-sm text-on-surface-variant leading-relaxed">
                                                {{ $skill->description ?? 'No description available.' }}
                                            </p>

                                            <!-- CATEGORY -->
                                            <div class="flex flex-wrap gap-2 pt-2">
                                                <span class="text-xs bg-surface-container px-3 py-1 rounded-full">
                                                    {{ $skill->category ?? 'General' }}
                                                </span>

                                                <span class="text-xs bg-surface-container px-3 py-1 rounded-full">
                                                    {{ $skill->pivot->type }}
                                                </span>
                                            </div>

                                            <!-- BUTTON -->
                                            <div class="mt-auto pt-4">
                                                <a href="{{ route('exchanges.create', ['receiver_id' => $user->id]) }}"
                                                   class="block text-center bg-primary text-on-primary px-4 py-2 rounded-full text-xs font-bold">
                                                    Send Exchange
                                                </a>
                                            </div>

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