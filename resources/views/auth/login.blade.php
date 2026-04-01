<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Header -->
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-1">Welcome back</h2>
            <p class="text-gray-500 text-sm">Enter your credentials to access your workspace</p>
        </div>

        <!-- Role -->
        <div class="space-y-1.5">
            <x-input-label for="role" :value="__('Role')" class="text-xs font-semibold text-gray-600 uppercase tracking-widest" />
            <div class="relative">
                <!-- left icon -->
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div>
                <select
                    id="role"
                    name="role"
                    required
                    onchange="updateRoleHint(this.value)"
                    class="block w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg text-gray-900 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent focus:bg-white transition-all duration-200 appearance-none cursor-pointer text-sm @error('role') border-red-400 ring-1 ring-red-400 @enderror"
                >
                    <option value="" disabled {{ old('role') ? '' : 'selected' }}>Select your role…</option>
                    <option value="admin"  {{ old('role') == 'admin'  ? 'selected' : '' }}>👑  Admin</option>
                    <option value="member" {{ old('role') == 'member' ? 'selected' : '' }}>👤  Member</option>
                </select>
                <!-- chevron -->
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
            </div>
            <!-- Role hint -->
            <div id="roleHint" class="hidden mt-1">
                <span id="roleHintBadge" class="inline-flex items-center text-xs font-medium px-2.5 py-1 rounded-full"></span>
            </div>
            <x-input-error :messages="$errors->get('role')" class="mt-1 text-xs text-red-600" />
        </div>

        <!-- Email -->
        <div class="space-y-1.5">
            <x-input-label for="email" :value="__('Email address')" class="text-xs font-semibold text-gray-600 uppercase tracking-widest" />
            <div class="relative">
                <x-text-input
                    id="email"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
                    autocomplete="username"
                    placeholder="you@example.com"
                    class="block w-full pl-4 pr-10 py-3 border border-gray-300 rounded-lg text-gray-900 placeholder-gray-400 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent focus:bg-white transition-all duration-200 text-sm @error('email') border-red-400 @enderror"
                />
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs text-red-600" />
        </div>

        <!-- Password -->
        <div class="space-y-1.5">
            <x-input-label for="password" :value="__('Password')" class="text-xs font-semibold text-gray-600 uppercase tracking-widest" />
            <div class="relative">
                <x-text-input
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                    placeholder="••••••••"
                    class="block w-full pl-4 pr-10 py-3 border border-gray-300 rounded-lg text-gray-900 placeholder-gray-400 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent focus:bg-white transition-all duration-200 text-sm @error('password') border-red-400 @enderror"
                />
                <button type="button" onclick="togglePassword('password')" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-red-500 transition-colors">
                    <svg id="password-toggle" class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </button>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs text-red-600" />
        </div>

        <!-- Remember & Forgot -->
        <div class="flex items-center justify-between pt-1">
            <label class="flex items-center gap-2 cursor-pointer group">
                <input
                    id="remember_me"
                    type="checkbox"
                    name="remember"
                    {{ old('remember') ? 'checked' : '' }}
                    class="h-4 w-4 text-red-600 border-gray-300 rounded focus:ring-red-500 transition-colors"
                >
                <span class="text-sm text-gray-600 group-hover:text-gray-900 transition-colors">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm text-red-600 hover:text-red-700 font-semibold transition-colors">
                    {{ __('Forgot password?') }}
                </a>
            @endif
        </div>

        <!-- Submit -->
        <div class="pt-2">
            <x-primary-button class="w-full justify-center bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-4 rounded-lg transition-all duration-200 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 uppercase tracking-widest text-sm">
                {{ __('Sign In') }}
            </x-primary-button>
        </div>

        <!-- Register link -->
        @if (Route::has('register'))
            <div class="text-center pt-5 border-t border-gray-100">
                <p class="text-sm text-gray-500">
                    {{ __("Don't have an account?") }}
                    <a href="{{ route('register') }}" class="text-red-600 hover:text-red-700 font-semibold transition-colors">
                        {{ __('Get started') }}
                    </a>
                </p>
            </div>
        @endif
    </form>

    <script>
        function togglePassword(id) {
            const input  = document.getElementById(id);
            const toggle = document.getElementById(id + '-toggle');
            const hidden = input.type === 'password';
            input.type   = hidden ? 'text' : 'password';
            toggle.innerHTML = hidden
                ? `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>`
                : `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>`;
        }

        const roleHints = {
            admin:  { label: '👑 Full system access', classes: 'bg-purple-50 text-purple-700 border border-purple-200' },
            member: { label: '👤 Standard access',    classes: 'bg-emerald-50 text-emerald-700 border border-emerald-200' },
        };

        function updateRoleHint(val) {
            const wrap  = document.getElementById('roleHint');
            const badge = document.getElementById('roleHintBadge');
            if (roleHints[val]) {
                badge.textContent = roleHints[val].label;
                badge.className   = 'inline-flex items-center text-xs font-medium px-2.5 py-1 rounded-full ' + roleHints[val].classes;
                wrap.classList.remove('hidden');
            } else {
                wrap.classList.add('hidden');
            }
        }

        // Re-populate badge on validation error (old value)
        const sel = document.getElementById('role');
        if (sel.value) updateRoleHint(sel.value);
    </script>
</x-guest-layout>