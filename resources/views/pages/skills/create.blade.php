<x-app-layout>

    <main class="pt-10 px-12 pb-20 max-w-[900px] mx-auto">

        <!-- Header -->
        <section class="mb-12">
            <p class="font-label text-xs uppercase tracking-[0.3em] text-primary font-bold">
                New Skill
            </p>
            <h2 class="font-headline text-4xl font-extrabold text-on-surface tracking-tighter">
                Ajouter une compétence
            </h2>
        </section>

        <!-- Form Card -->
        <div class="bg-surface-container-lowest rounded-3xl p-10 shadow-sm">

            <form action="{{ route('skills.store') }}" method="POST" class="space-y-8 " enctype="multipart/form-data" >
                @csrf

                <!-- NAME -->
                <div>
                    <label class="block text-sm font-bold mb-2">Nom de la compétence</label>
                    <input type="text" name="name"
                        class="w-full rounded-xl border-none bg-[#ffdcbe] p-4 focus:ring-2 focus:ring-primary/20"
                        placeholder="Ex: UI Design"
                        required>

                    @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- CATEGORY -->
                <div>
                    <label class="block text-sm font-bold mb-2">Catégorie</label>
                    <input type="text" name="category"
                        class="w-full rounded-xl border-none bg-[#ffdcbe] p-4 focus:ring-2 focus:ring-primary/20"
                        placeholder="Ex: Design / Dev / Marketing"
                        required>

                    @error('category')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                

                <!-- DESCRIPTION -->
                <div>
                    <label class="block text-sm font-bold mb-2">Description</label>
                    <textarea name="description" rows="4"
                        class="w-full rounded-xl border-none bg-[#ffdcbe] p-4 focus:ring-2 focus:ring-primary/20"
                        placeholder="Décris ta compétence..."></textarea>

                    @error('description')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <input type="file" name="image" id="image">

                <!-- TYPE (offered / wanted) -->
                <div>
                    <label class="block text-sm font-bold mb-4">Type</label>

                    <div class="flex gap-4">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="type" value="offered" checked>
                            <span>Offered</span>
                        </label>

                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="type" value="wanted">
                            <span>Wanted</span>
                        </label>
                    </div>
                </div>

                <!-- BUTTONS -->
                <div class="flex justify-between items-center pt-6">

                    <a href="{{ route('skills.index') }}"
                        class="text-sm text-gray-500 hover:underline">
                        Annuler
                    </a>

                    <button type="submit"
                        class="bg-primary text-on-primary px-8 py-3 rounded-full font-bold hover:scale-105 transition">
                        Ajouter
                    </button>
                </div>

            </form>

        </div>

    </main>

</x-app-layout>