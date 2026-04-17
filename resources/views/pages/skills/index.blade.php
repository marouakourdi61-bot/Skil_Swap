<x-app-layout>

<main class="pt-10 px-12 pb-20 max-w-[1600px]">

    <!-- Search -->
    <form method="GET" action="{{ route('skills.index') }}">
    <div class="relative group">
        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">search</span>
        
        <input 
        type="text" 
        name="search"
        value="{{ request('search') }}"
        
        placeholder="Search..."
        class="w-full rounded-xl py-3 pl-12 pr-4 text-sm bg-[#ffdcbe]"
>
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
        <div class="bg-[#fff1e7] rounded-2xl p-6 shadow hover:shadow-lg transition">

            <!-- Top -->
            <div class="flex justify-between">
                <span class="text-xs bg-[#80552c] text-white px-3 py-1 rounded-full">
                    {{ $skill->category }}
                </span>

                <div class="flex gap-2">

                    <!-- EDIT -->
                    <a href="{{ route('skills.edit', $skill->id) }}"
                       class="p-2 hover:bg-gray-200 rounded-full">
                        <span class="material-symbols-outlined text-gray-600">edit</span>
                    </a>

                    <!-- DELETE -->
                    <form action="{{ route('skills.destroy', $skill->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button onclick="return confirm('Supprimer cette compétence ?')"
                                class="p-2 hover:bg-red-100 rounded-full">
                            <span class="material-symbols-outlined text-red-500">delete</span>
                        </button>
                    </form>

                </div>
            </div>

            <!-- Content -->
            <div class="mt-4">
                <h3 class="text-xl font-bold text-[#2d1600]">
                    {{ $skill->name }}
                </h3>

                <p class="text-sm text-gray-600 mt-2">
                    {{ $skill->description }}
                </p>
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