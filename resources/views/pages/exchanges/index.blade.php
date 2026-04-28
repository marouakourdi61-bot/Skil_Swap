<x-app-layout>
    <!-- Main Content -->
    <main class="flex-1 bg-surface py-12 px-8 md:px-16 lg:px-24">
        <header class="mb-16 flex flex-col md:flex-row md:items-end justify-between gap-8">
            <div class="max-w-xl">
                
                <h1
                    class="text-6xl md:text-7xl font-headline font-extrabold tracking-tighter text-on-surface leading-none">
                    Exchanges</h1>
                
            </div>
            
        </header>
        <!-- Categorized Content -->
        <div class="grid grid-cols-1 gap-20">
            <!-- Section 1: Demandes reçues -->
            <section>
                <div class="flex items-center gap-4 mb-8">
                    <span class="w-8 h-[1px] bg-primary"></span>
                    <h3 class="font-headline text-xl font-bold tracking-tight">
                        Demandes reçues
                    </h3>
                </div>

                <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">

                    @forelse($exchanges as $exchange)
                        <div
                            class="group bg-surface-container-lowest rounded-xl p-8 editorial-shadow hover:translate-y-[-4px] transition-all">
                            <div class="flex items-start gap-6">

                                <!-- Avatar -->
                                <div class="w-16 h-16 rounded-full overflow-hidden">
                                    <img class="w-full h-full object-cover"
                                        src="{{ $exchange->sender->avatar ?? 'https://ui-avatars.com/api/?name=' . $exchange->sender->name }}" />
                                </div>

                                <!-- Content -->
                                <div class="flex-1">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <h4 class="font-headline text-lg font-bold">
                                                {{ $exchange->sender->name }}
                                            </h4>
                                            <p class="text-sm text-gray-500">
                                                {{ $exchange->sender->email }}
                                            </p>
                                        </div>

                                        <span class="text-xs text-gray-400">
                                            {{ $exchange->created_at->diffForHumans() }}
                                        </span>
                                    </div>

                                    <div class="mt-4 bg-gray-100 p-4 rounded-lg">
                                        <p class="text-sm">
                                            Offers
                                            <span class="text-secondary font-bold">
                                                {{ $exchange->skillOffered?->name ?? $exchange->skill?->name ?? 'N/A' }}
                                            </span>
                                        </p>
                                    </div>

                                    <div class="mt-6 flex gap-3">

                                        <!-- Accept -->
                                        <form action="{{ route('exchanges.update', $exchange->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="status" value="accepted">
                                            <button class="flex-1 px-4 py-2 bg-green-500 text-white rounded-full">
                                                Accept
                                            </button>
                                        </form>

                                        <!-- Reject -->
                                        <form action="{{ route('exchanges.update', $exchange->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="status" value="rejected">
                                            <button class="flex-1 px-4 py-2 border rounded-full">
                                                Reject
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    @empty
                        <p class="text-gray-500">No exchanges found.</p>
                    @endforelse

                </div>
            </section>
            <!-- Section 2: Acceptations -->
            <section>
                <div class="flex items-center gap-4 mb-8">
                    <span class="w-8 h-[1px] bg-secondary"></span>
                    <h3 class="font-headline text-xl font-bold tracking-tight">Acceptations</h3>
                </div>
                <div class="space-y-6">
                    @forelse($acceptedExchanges as $exchange)
                        <div
                            class="relative overflow-hidden bg-white rounded-xl p-6 flex flex-col md:flex-row md:items-center justify-between gap-6 editorial-shadow">
                            <div class="absolute left-0 top-0 bottom-0 w-1 bg-secondary-container"></div>
                            <div class="flex items-center gap-5">
                                <div class="w-14 h-14 rounded-full overflow-hidden border-2 border-secondary-container">
                                    <img class="w-full h-full object-cover"
                                        src="{{ $exchange->receiver->avatar ?? 'https://ui-avatars.com/api/?name=' . $exchange->receiver->name }}" />
                                </div>
                                <div>
                                    <p class="font-headline text-on-surface font-medium leading-tight">
                                        @php
                                            $otherUser = $exchange->sender_id === auth()->id() ? $exchange->receiver : $exchange->sender;
                                        @endphp

                                        <span class="font-bold">{{ $otherUser->name }}</span>
                                        The exchange is done:
                                        <span class="italic">
                                            {{ $exchange->skillWanted?->name ?? 'N/A' }}
                                        </span>
                                        ⇄
                                        <span class="italic">
                                            {{ $exchange->skillOffered?->name ?? $exchange->skill?->name ?? 'N/A' }}
                                        </span>
                                    </p>
                                    <p
                                        class="font-label text-xs text-on-surface-variant/60 mt-1 uppercase tracking-tighter">
                                        Connected {{ $exchange->updated_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 shrink-0">
                                <button
                                    class="flex items-center gap-2 px-5 py-2.5 rounded-full bg-secondary text-white font-headline text-sm font-bold">
                                    <span class="material-symbols-outlined text-sm">calendar_today</span>
                                    Schedule
                                </button>
                                <button
                                    onclick="openModal({{ $otherUser->id }}, '{{ $otherUser->email }}', '{{ $otherUser->name }}')"
                                    class="p-2.5 rounded-full bg-secondary-container/20 text-secondary hover:bg-secondary-container/40 transition-colors">
                                    <span class="material-symbols-outlined">mail</span>
                                </button>
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500">No acceptations found.</p>
                    @endforelse
                </div>
            </section>
            
        </div>
    </main>


    </div>
    <!-- Mobile Bottom NavBar -->
    <nav
        class="md:hidden fixed bottom-0 left-0 right-0 bg-surface/90 backdrop-blur-lg px-8 py-4 flex justify-between items-center z-50 tonal-transition border-t border-outline-variant/10">
        <button class="flex flex-col items-center gap-1 text-[#2d1600]/40">
            <span class="material-symbols-outlined text-2xl">grid_view</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-[#80552c]">
            <span class="material-symbols-outlined text-2xl"
                style="font-variation-settings: 'FILL' 1;">swap_horiz</span>
        </button>
        <button
            class="w-12 h-12 rounded-full bg-primary text-on-primary flex items-center justify-center -translate-y-6 shadow-xl shadow-primary/20">
            <span class="material-symbols-outlined text-2xl">add</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-[#2d1600]/40">
            <span class="material-symbols-outlined text-2xl">mail</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-[#2d1600]/40">
            <span class="material-symbols-outlined text-2xl">person</span>
        </button>
    </nav>


    <!-- MAIL MODAL -->
    <div id="mailModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">

        <div class="bg-white rounded-2xl p-6 w-full max-w-lg relative shadow-xl">

            <!-- Close -->
            <button onclick="closeModal()" class="absolute top-4 right-4 text-gray-500">
                ✖
            </button>

            <h2 class="text-xl font-bold mb-6">Send Message</h2>

            <form action="{{ route('message.send') }}" method="POST" id="mailForm" class="space-y-4">
                @csrf

                <!-- TO -->
                <div>
                    <label class="text-sm font-medium">To</label>
                    <input type="email" name="to_email" id="toEmail" readonly
                        class="w-full border rounded-lg p-2 bg-gray-100">
                </div>

                <!-- SUBJECT -->
                <div>
                    <label class="text-sm font-medium">Subject</label>
                    <input type="text" name="subject" id="subject" class="w-full border rounded-lg p-2"
                        placeholder="Enter subject...">
                </div>

                <!-- MESSAGE -->
                <div>
                    <label class="text-sm font-medium">Message</label>
                    <textarea name="message" id="message" rows="5" class="w-full border rounded-lg p-2"
                        placeholder="Write your message..."></textarea>
                </div>

                <!-- SEND -->
                <button type="submit" class="w-full bg-primary text-white py-2 rounded-lg font-bold">
                    Send
                </button>
            </form>

        </div>
    </div>

    <script>
        function openModal(userId, email, name) {
            document.getElementById('mailModal').classList.remove('hidden');
            document.getElementById('mailModal').classList.add('flex');

            document.getElementById('toEmail').value = email;
        }

        function closeModal() {
            document.getElementById('mailModal').classList.add('hidden');
        }


    </script>
</x-app-layout>