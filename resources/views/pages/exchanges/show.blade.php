<x-app-layout>
<main class="flex-1 bg-surface py-12 px-8 md:px-16 lg:px-24">

    <div class="max-w-4xl mx-auto bg-white rounded-xl p-10 shadow">

        <!-- Header -->
        <div class="flex items-center gap-6 mb-8">

            <img class="w-16 h-16 rounded-full"
                 src="{{ $exchange->sender->avatar ?? 'https://ui-avatars.com/api/?name='.$exchange->sender->name }}">

            <div>
                <h2 class="text-2xl font-bold">{{ $exchange->sender->name }}</h2>
                <p class="text-gray-500">{{ $exchange->created_at->diffForHumans() }}</p>
            </div>

        </div>

        <!-- Skills -->
        <div class="grid grid-cols-1 gap-6 mb-10">

            <div class="p-6 bg-gray-100 rounded-lg">
                <p class="text-sm text-gray-500">Offers</p>
                <h3 class="text-lg font-bold text-primary">
                    {{ $exchange->skillOffered?->name ?? $exchange->skill?->name ?? 'N/A' }}
                </h3>
            </div>

        </div>

        <!-- Message -->
        <div class="mb-10">
            <h4 class="font-bold mb-2">Message</h4>
            <p class="text-gray-700">
                {{ $exchange->message ?? 'No message provided.' }}
            </p>
        </div>

        <!-- Status -->
        <div class="mb-10">
            <span class="px-4 py-2 rounded-full 
                @if($exchange->status == 'pending') bg-yellow-100 text-yellow-700
                @elseif($exchange->status == 'accepted') bg-green-100 text-green-700
                @else bg-red-100 text-red-700
                @endif
            ">
                {{ ucfirst($exchange->status) }}
            </span>
        </div>

        <!-- Actions -->
        @if($exchange->status == 'pending')
        <div class="flex gap-4">

            <form action="{{ route('exchanges.update', $exchange->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <input type="hidden" name="status" value="accepted">
                <button class="px-6 py-2 bg-green-500 text-white rounded-full">
                    Accept
                </button>
            </form>

            <form action="{{ route('exchanges.update', $exchange->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <input type="hidden" name="status" value="rejected">
                <button class="px-6 py-2 border rounded-full">
                    Reject
                </button>
            </form>

        </div>
        @endif

    </div>

</main>
</x-app-layout>