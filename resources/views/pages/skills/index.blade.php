<x-app-layout>

    <main class="pt-10 px-12 pb-20 max-w-[1600px]">

        <!-- Search -->
        <form method="GET" action="{{ route('skills.index') }}">
            <div class="relative group">
                <span
                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">search</span>

                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search..."
                    class="w-full rounded-xl py-3 pl-12 pr-4 text-sm bg-[#ffdcbe]">
            </div>
        </form>

        <!-- Header -->
        <section class="flex justify-between items-center mt-20 mb-12">
            <div>
                <h2 class="text-4xl font-bold">Gestion des compétences</h2>
            </div>

            <a href="{{ route('skills.create') }}"
                class="bg-[#80552c] text-white px-6 py-3 rounded-full flex items-center gap-2">
                <span class="material-symbols-outlined">add</span>
                Ajouter
            </a>
        </section>

        <!-- GRID -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            @forelse($skills as $skill)
                <div
                    class="group bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-[0_40px_60px_rgba(45,22,0,0.08)] transition-all duration-500">

                    <!-- IMAGE (fake or optional) -->
                    <div class="h-40 overflow-hidden bg-[#ffe3cf]">
                        <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000"
                             src="{{ asset('storage/' . $skill->image) }}" alt="skill image">
                    </div>

                    <!-- CONTENT -->
                    <div class="p-6 space-y-4">

                        <!-- TITLE + CATEGORY BADGE -->
                        <div class="flex justify-between items-start gap-4">

                            <h3 class="text-xl font-bold text-[#2d1600]">
                                {{ $skill->name }}
                            </h3>

                            <span class="text-[10px] bg-[#80552c] text-white px-2 py-1 rounded-full uppercase">
                                {{ $skill->category }}
                            </span>

                        </div>

                        <!-- DESCRIPTION -->
                        <p class="text-sm text-gray-600 leading-relaxed">
                            {{ $skill->description }}
                        </p>

                        <!-- ACTIONS -->
                        <div class="flex justify-between items-center pt-2">

                            <!-- EDIT / DELETE -->
                            <div class="flex gap-2">

                                <a href="{{ route('skills.edit', $skill->id) }}"
                                    class="p-2 rounded-full hover:bg-white/40 transition">
                                    <span class="material-symbols-outlined text-gray-600">edit</span>
                                </a>

                                <form action="{{ route('skills.destroy', $skill->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button onclick="return confirm('Supprimer cette compétence ?')"
                                        class="p-2 rounded-full hover:bg-red-100 transition">
                                        <span class="material-symbols-outlined text-red-500">delete</span>
                                    </button>
                                </form>

                            </div>

                            <!-- OPTIONAL BADGE -->
                            <span class="text-xs bg-[#ffe3cf] text-[#80552c] px-3 py-1 rounded-full">
                                Skill
                            </span>

                        </div>

                    </div>
                </div>

            @empty
                <p>Aucune compétence trouvée.</p>
            @endforelse

        </div>

    </main>
    <script>
        let timeout = null;

        document.querySelector('input[name="search"]').addEventListener('keyup', function () {
            clearTimeout(timeout);

            timeout = setTimeout(() => {
                this.form.submit();
            }, 100);
        });
    </script>

</x-app-layout>