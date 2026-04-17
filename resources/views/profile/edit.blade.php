<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-[#2d1600] leading-tight">
            {{ __('Edit Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-[#fff8f5] min-h-screen">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl rounded-3xl overflow-hidden border border-[#f3e3d6]">

                <!-- Header Section -->
                <div class="bg-gradient-to-r from-[#80552c] to-[#bd8a5c] px-8 py-10 text-white">
                    <div class="flex items-center gap-6">
                        <div class="w-20 h-20 rounded-full bg-white/20 flex items-center justify-center text-4xl font-bold">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>
                        <div>
                            <h1 class="text-3xl font-bold">{{ Auth::user()->name }}</h1>
                            <p class="text-white/80 mt-1">Manage your account information and security settings</p>
                        </div>
                    </div>
                </div>

                <!-- Profile Content -->
                <div class="p-8 space-y-8">

                    <!-- Profile Information -->
                    <div class="bg-[#fffaf7] p-6 rounded-2xl shadow-sm border border-[#f5e5d8]">
                        <div class="mb-6">
                            <h3 class="text-2xl font-bold text-[#2d1600]">Profile Information</h3>
                            <p class="text-[#80552c] mt-1">
                                Update your account's profile information and email address.
                            </p>
                        </div>

                        <div class="max-w-2xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="bg-[#fffaf7] p-6 rounded-2xl shadow-sm border border-[#f5e5d8]">
                        <div class="mb-6">
                            <h3 class="text-2xl font-bold text-[#2d1600]">Update Password</h3>
                            <p class="text-[#80552c] mt-1">
                                Make sure your account uses a long, random password to stay secure.
                            </p>
                        </div>

                        <div class="max-w-2xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>

                    <!-- Delete Account -->
                    <div class="bg-[#fff1f0] p-6 rounded-2xl shadow-sm border border-red-200">
                        <div class="mb-6">
                            <h3 class="text-2xl font-bold text-red-700">Delete Account</h3>
                            <p class="text-red-500 mt-1">
                                Once your account is deleted, all of its resources and data will be permanently removed.
                            </p>
                        </div>

                        <div class="max-w-2xl">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>