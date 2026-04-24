<x-app-layout>

<main class=" pt-28 pb-12 px-8">
    <div class="max-w-[1100px] mx-auto">

        <h1 class="text-3xl font-bold mb-10">History</h1>

        <div class="space-y-6">

            @forelse($history as $exchange)

                @php
                    $otherUser = $exchange->sender_id === auth()->id()
                        ? $exchange->receiver
                        : $exchange->sender;
                @endphp

                <div class="bg-white p-6 rounded-xl shadow flex justify-between items-center">

                    <div>
                        <h3 class="font-bold text-lg">
                            {{ $otherUser->name }}
                        </h3>

                        <p class="text-sm text-gray-500">
                            {{ $exchange->skillOffered?->name }} ⇄
                            {{ $exchange->skillWanted?->name }}
                        </p>

                        <p class="text-xs text-gray-400 mt-1">
                            {{ $exchange->created_at->diffForHumans() }}
                        </p>
                    </div>

                    <span class="px-4 py-1 rounded-full text-xs font-bold
                        {{ $exchange->status == 'accepted' ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600' }}">
                        {{ $exchange->status }}
                    </span>

                </div>

            @empty
                <p class="text-gray-500">No history yet.</p>
            @endforelse

        </div>

    </div>
</main>

</x-app-layout>