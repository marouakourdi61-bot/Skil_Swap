<x-app-layout>
<main class="flex-1 bg-surface py-12 px-8 md:px-16 lg:px-24">

    <div class="max-w-3xl mx-auto">

        <h1 class="text-4xl font-bold mb-10">Create Exchange</h1>

        <form action="{{ route('exchanges.store') }}" method="POST" class="space-y-8">
            @csrf

            <!-- Skill Offered -->
            <div>
                <label class="block text-sm font-bold mb-2">Skill You Offer</label>
                <select name="skill_offered_id" class="w-full p-3 rounded-lg border">
                    @foreach($myOfferedSkills as $skill)
                        <option value="{{ $skill->id }}">
                            {{ $skill->name }}
                        </option>
                    @endforeach
                </select>
                @if($myOfferedSkills->isEmpty())
                    <p class="text-sm text-gray-500 mt-2">You have no offered skills yet.</p>
                @endif
            </div>

            <!-- Skill Wanted -->
            <div>
                <label class="block text-sm font-bold mb-2">Skill You Want</label>
                <select name="skill_wanted_id" class="w-full p-3 rounded-lg border">
                    @if($receiverSkills->isEmpty())
                        <option value="">Select a user first</option>
                    @else
                        @foreach($receiverSkills as $skill)
                            <option value="{{ $skill->id }}">
                                {{ $skill->name }}
                            </option>
                        @endforeach
                    @endif
                </select>
                @if($receiverId && $receiverSkills->isEmpty())
                    <p class="text-sm text-gray-500 mt-2">{{ $receiver?->name ?? 'This user' }} has no offered skills.</p>
                @endif
            </div>

            <!-- Receiver -->
            <div>
                <label class="block text-sm font-bold mb-2">Choose User</label>
                <select name="receiver_id" class="w-full p-3 rounded-lg border"
                        onchange="window.location='{{ route('exchanges.create') }}?receiver_id=' + this.value">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" @selected(isset($receiverId) && (int)$receiverId === (int)$user->id)>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Message -->
            <div>
                <label class="block text-sm font-bold mb-2">Message</label>
                <textarea name="message" rows="4"
                    class="w-full p-3 rounded-lg border"
                    placeholder="Write something..."></textarea>
            </div>

            <!-- Submit -->
            <button class="w-full py-3 bg-primary text-white rounded-full font-bold">
                Send Request
            </button>

        </form>

    </div>

</main>
</x-app-layout>