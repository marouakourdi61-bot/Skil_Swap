<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-[#2d1600] leading-tight">
            {{ __('Edit Profile') }}
        </h2>
    </x-slot>

<div class="py-12 bg-[#fff8f5] min-h-screen">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-xl rounded-3xl overflow-hidden border border-[#f3e3d6]">

            <!-- HEADER -->
            <div class="bg-gradient-to-r from-[#80552c] to-[#bd8a5c] px-8 py-10 text-white">
                <div class="flex items-center gap-6">
                    <div class="w-20 h-20 rounded-full overflow-hidden bg-white/20">
                        <img class="w-full h-full object-cover"
                             src="{{ auth()->user()->image ? asset('storage/' . auth()->user()->image) : 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) }}">
                    </div>

                    <div>
                        <h1 class="text-3xl font-bold">{{ Auth::user()->name }}</h1>
                        <p class="text-white/80 mt-1">Manage your profile</p>
                    </div>
                </div>
            </div>

            <!-- CONTENT -->
            <div class="p-8 space-y-8">

                <!-- PROFILE INFO -->
                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="bg-[#fffaf7] p-6 rounded-2xl border border-[#f5e5d8] space-y-4">
                        <h3 class="text-2xl font-bold text-[#2d1600]">Profile Information</h3>

                        <input type="text" name="name"
                               value="{{ old('name', auth()->user()->name) }}"
                               class="w-full border rounded-lg p-2"
                               placeholder="Name">

                        <input type="email" name="email"
                               value="{{ old('email', auth()->user()->email) }}"
                               class="w-full border rounded-lg p-2"
                               placeholder="Email">

                        <input type="file" name="image"
                               class="w-full border rounded-lg p-2">

                        <input type="text" name="city"
                               value="{{ old('city', auth()->user()->city) }}"
                               class="w-full border rounded-lg p-2"
                               placeholder="City">

                        <textarea name="bio" rows="4"
                                  class="w-full border rounded-lg p-2"
                                  placeholder="Your bio...">{{ old('bio', auth()->user()->bio) }}</textarea>

                        <textarea name="availability" rows="3"
                                  class="w-full border rounded-lg p-2"
                                  placeholder="Availability (ex: weekends...)">{{ old('availability', auth()->user()->availability) }}</textarea>

                        <button class="bg-[#80552c] text-white px-6 py-2 rounded-full font-bold">
                            Save Changes
                        </button>
                    </div>
                </form>

                <!-- SKILLS -->
                <div class="bg-[#fffaf7] p-6 rounded-2xl border border-[#f5e5d8]">
                    <h3 class="text-2xl font-bold text-[#2d1600] mb-4">Your Skills</h3>

                    <div class="flex flex-wrap gap-2 mb-4">
                        @forelse(auth()->user()->skills as $skill)
                            <span class="px-3 py-1 bg-[#f3e3d6] rounded-full text-sm">
                                {{ $skill->name }} ({{ $skill->pivot->type }})
                            </span>
                        @empty
                            <span class="text-sm text-gray-500">No skills added</span>
                        @endforelse
                    </div>

                    <a href="{{ route('user.skills.index') }}"
                       class="inline-block px-4 py-2 bg-[#80552c] text-white rounded-full text-sm">
                        Manage Skills
                    </a>
                </div>

                <!-- PASSWORD -->
                <div class="bg-[#fffaf7] p-6 rounded-2xl border border-[#f5e5d8]">
                    <h3 class="text-2xl font-bold text-[#2d1600] mb-4">Update Password</h3>
                    @include('profile.partials.update-password-form')
                </div>

                <!-- DELETE -->
                <div class="bg-[#fff1f0] p-6 rounded-2xl border border-red-200">
                    <h3 class="text-2xl font-bold text-red-700 mb-4">Delete Account</h3>
                    @include('profile.partials.delete-user-form')
                </div>

            </div>
        </div>
    </div>
</div>


</x-app-layout>
