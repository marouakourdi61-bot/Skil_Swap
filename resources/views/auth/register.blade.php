<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <!-- Header -->
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-1">Create account</h2>
            <p class="text-gray-500 text-sm">Fill in your details to get started</p>
        </div>

        <!-- Name -->
        <div class="space-y-1.5">
            <x-input-label for="name" :value="__('Full name')" class="text-xs font-semibold text-gray-600 uppercase tracking-widest" />
            <div class="relative">
                <x-text-input
                    id="name"
                    type="text"
                    name="name"
                    :value="old('name')"
                    required
                    autofocus
                    autocomplete="name"
                    placeholder="Jane Doe"
                    class="block w-full pl-4 pr-10 py-3 border border-gray-300 rounded-lg text-gray-900 placeholder-gray-400 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent focus:bg-white transition-all duration-200 text-sm @error('name') border-red-400 @enderror"
                />
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-1 text-xs text-red-600" />
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

        <!-- Role -->
        <div class="space-y-1.5">
            <x-input-label for="role" :value="__('Role')" class="text-xs font-semibold text-gray-600 uppercase tracking-widest" />
            <div class="relative">
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
                    class="block w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg text-gray-900 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent focus:bg-white transition-all duration-200 appearance-none cursor-pointer text-sm @error('role') border-red-400 @enderror"
                >
                    <option value="" disabled {{ old('role') ? '' : 'selected' }}>Select your role…</option>
                    <option value="admin"  {{ old('role') == 'admin'  ? 'selected' : '' }}>👑  Admin</option>
                    <option value="member" {{ old('role') == 'member' ? 'selected' : '' }}>👤  Member</option>
                </select>
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
            </div>
            <!-- Role description cards -->
            <div id="roleHint" class="hidden mt-2">
                <div id="roleHintCard" class="flex items-start gap-3 p-3 rounded-lg border text-sm"></div>
            </div>
            <x-input-error :messages="$errors->get('role')" class="mt-1 text-xs text-red-600" />
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
                    autocomplete="new-password"
                    placeholder="Min. 8 characters"
                    oninput="checkStrength(this.value)"
                    class="block w-full pl-4 pr-10 py-3 border border-gray-300 rounded-lg text-gray-900 placeholder-gray-400 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent focus:bg-white transition-all duration-200 text-sm @error('password') border-red-400 @enderror"
                />
                <button type="button" onclick="togglePassword('password')" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-red-500 transition-colors">
                    <svg id="password-toggle" class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </button>
            </div>
            <!-- Strength bar -->
            <div class="h-1 w-full bg-gray-200 rounded-full overflow-hidden mt-2">
                <div id="strengthBar" class="h-full rounded-full transition-all duration-500 w-0"></div>
            </div>
            <p id="strengthLabel" class="text-xs text-gray-400 mt-1">Enter a password</p>
            <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs text-red-600" />
        </div>

        <!-- Confirm Password -->
        <div class="space-y-1.5">
            <x-input-label for="password_confirmation" :value="__('Confirm password')" class="text-xs font-semibold text-gray-600 uppercase tracking-widest" />
            <div class="relative">
                <x-text-input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    placeholder="Repeat your password"
                    class="block w-full pl-4 pr-10 py-3 border border-gray-300 rounded-lg text-gray-900 placeholder-gray-400 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent focus:bg-white transition-all duration-200 text-sm"
                />
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-xs text-red-600" />
        </div>

        <!-- Submit -->
        <div class="pt-2">
            <x-primary-button class="w-full justify-center bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-4 rounded-lg transition-all duration-200 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 uppercase tracking-widest text-sm">
                {{ __('Create Account') }}
            </x-primary-button>
        </div>

        <!-- Login link -->
        @if (Route::has('login'))
            <div class="text-center pt-5 border-t border-gray-100">
                <p class="text-sm text-gray-500">
                    {{ __('Already have an account?') }}
                    <a href="{{ route('login') }}" class="text-red-600 hover:text-red-700 font-semibold transition-colors">
                        {{ __('Sign in') }}
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
            admin: {
                icon: '👑',
                title: 'Admin',
                desc: 'Full system access — manage users, settings, and all content.',
                classes: 'bg-purple-50 border-purple-200 text-purple-800',
            },
            member: {
                icon: '👤',
                title: 'Member',
                desc: 'Standard access — view and interact with your assigned boards.',
                classes: 'bg-emerald-50 border-emerald-200 text-emerald-800',
            },
        };

        function updateRoleHint(val) {
            const wrap = document.getElementById('roleHint');
            const card = document.getElementById('roleHintCard');
            if (roleHints[val]) {
                const h = roleHints[val];
                card.className = 'flex items-start gap-3 p-3 rounded-lg border text-sm ' + h.classes;
                card.innerHTML = `<span class="text-lg leading-none mt-0.5">${h.icon}</span>
                    <div>
                        <p class="font-semibold text-xs uppercase tracking-wide mb-0.5">${h.title}</p>
                        <p class="text-xs opacity-80">${h.desc}</p>
                    </div>`;
                wrap.classList.remove('hidden');
            } else {
                wrap.classList.add('hidden');
            }
        }

        function checkStrength(pw) {
            let score = 0;
            if (pw.length >= 8)            score++;
            if (pw.length >= 12)           score++;
            if (/[A-Z]/.test(pw))          score++;
            if (/[0-9]/.test(pw))          score++;
            if (/[^A-Za-z0-9]/.test(pw))  score++;

            const bar   = document.getElementById('strengthBar');
            const label = document.getElementById('strengthLabel');
            const levels = [
                { w: '0%',   bg: '',                  txt: 'Enter a password',   color: 'text-gray-400'   },
                { w: '25%',  bg: 'bg-red-500',        txt: 'Weak',               color: 'text-red-500'    },
                { w: '50%',  bg: 'bg-orange-400',     txt: 'Fair',               color: 'text-orange-500' },
                { w: '75%',  bg: 'bg-yellow-400',     txt: 'Good',               color: 'text-yellow-600' },
                { w: '100%', bg: 'bg-emerald-500',    txt: 'Strong ✓',           color: 'text-emerald-600'},
            ];
            const lvl = Math.min(score, 4);
            bar.style.width = levels[lvl].w;
            bar.className   = 'h-full rounded-full transition-all duration-500 ' + levels[lvl].bg;
            label.textContent = levels[lvl].txt;
            label.className   = 'text-xs mt-1 ' + levels[lvl].color;
        }

        // Re-populate on validation error
        const sel = document.getElementById('role');
        if (sel.value) updateRoleHint(sel.value);
    </script>
</x-guest-layout>