<x-app-layout>

    <main class="pt-10 px-12 pb-20 max-w-[800px] mx-auto">

        <!-- Title -->
        <div class="mb-10">
            <h2 class="text-3xl font-bold text-[#2d1600]">Modifier une compétence</h2>
            <p class="text-sm text-gray-500">Mettez à jour votre compétence</p>
        </div>

        <!-- Form -->
        <form action="{{ route('skills.update', $skill->id) }}" method="POST"
              class="bg-[#fff1e7] p-8 rounded-2xl shadow space-y-6">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div>
                <label class="block text-sm font-semibold mb-2">Nom</label>
                <input type="text" name="name"
                       value="{{ old('name', $skill->name) }}"
                       class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#80552c] outline-none">
            </div>

            <!-- Category -->
            <div>
                <label class="block text-sm font-semibold mb-2">Catégorie</label>
                <input type="text" name="category"
                       value="{{ old('category', $skill->category) }}"
                       class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#80552c] outline-none">
            </div>

            <!-- Description -->
            <div>
                <label class="block text-sm font-semibold mb-2">Description</label>
                <textarea name="description" rows="4"
                          class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#80552c] outline-none">{{ old('description', $skill->description) }}</textarea>
            </div>

            <!-- Buttons -->
            <div class="flex justify-between items-center">
                <a href="{{ route('skills.index') }}"
                   class="text-gray-600 hover:underline">
                    ← Retour
                </a>

                <button type="submit"
                        class="bg-[#80552c] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#6a4524] transition">
                    Mettre à jour
                </button>
            </div>

        </form>

    </main>

</x-app-layout>