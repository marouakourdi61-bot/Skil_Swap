<x-app-layout>
<main class="lg:pl-72 pt-28 pb-12 px-8 min-h-screen">
    <div class="max-w-[1100px] mx-auto">

        <!-- SEARCH INPUT -->
        <div class="mb-10">
            <input type="text"
                   name="search"
                   placeholder="Search by name or skill..."
                   class="w-full p-4 rounded-xl border border-gray-300 shadow-sm focus:outline-none"
            >
        </div>
        

        <!-- RESULTS -->
        <div id="results" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">

            @include('pages.matches.partials.users', ['users' => $users])

        </div>

    </div>
</main>

<script>
let timeout = null;

document.querySelector('input[name="search"]').addEventListener('keyup', function () {

    clearTimeout(timeout);

    let query = this.value;

    timeout = setTimeout(() => {

        fetch(`/matches/search?search=${query}`)
            .then(res => res.text())
            .then(data => {
                document.getElementById('results').innerHTML = data;
            });
            

    }, 300);

});
</script>

</x-app-layout>