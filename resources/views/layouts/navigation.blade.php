<header class="fixed top-0 right-0 left-72 z-40 bg-[#fff8f5]/80 backdrop-blur-xl border-b border-stone-200/50 px-10 py-4 flex justify-between items-center transition-all duration-300">
    
    <div class="flex items-center gap-4">
        <h2 class="font-headline text-xs font-black tracking-[0.2em] uppercase text-stone-400">
            The Earthbound Editorial
        </h2>
    </div>

    <div class="flex items-center gap-8">
        
        <div class="flex items-center gap-2 bg-white/50 px-4 py-2 rounded-full border border-stone-200/50 shadow-sm">
            <span class="material-symbols-outlined text-[#80552c] text-lg" style="font-variation-settings: 'FILL' 1;">stars</span>
            <span class="font-bold text-sm text-[#80552c]">1,250 <span class="text-[10px] opacity-70 uppercase tracking-tighter">Points</span></span>
        </div>

        <button class="relative p-2 text-stone-400 hover:text-[#80552c] transition-colors">
            <span class="material-symbols-outlined">notifications</span>
            <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-[#fff8f5]"></span>
        </button>

        <div class="flex items-center gap-4 pl-4 border-l border-stone-200/60 cursor-pointer group">
            <div class="text-right">
                <p class="text-sm font-bold text-stone-900 group-hover:text-[#80552c] transition-colors">
                    {{ Auth::user()->name }}
                </p>
                <p class="text-[10px] text-stone-400 font-bold uppercase tracking-widest">
                    Master Artisan
                </p>
            </div>
            
            <div class="relative">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAme9nCAGhEn4AJBnPGhTRTzEnBJNz-yiStv-AL7HqRlY90-TpO6vp5VDMjqIkSh2h7JNqzwq6NdJCEuuUifDSTgJULDvqm2s1JcOqv7ck-jU3cbCHmPd7EqOq9XYn3Gg_9qBzPdBd-DsQl-ifYSR-whgnJGesUmDZMIir2yi4-76NPGinMkCCV7IxOFPM81zD3QhtdfhxIlN0iZ3VoaBPcPKNruPWKaVXx_asBC4bcHQoLvDQh94vZdekxgeDtsjO-Xtd0kYWLVwIR" 
                     alt="Profile" 
                     class="w-10 h-10 rounded-full object-cover border-2 border-[#80552c]/20 group-hover:border-[#80552c] transition-all" />
                
                <div class="absolute -bottom-0.5 -right-0.5 w-3.5 h-3.5 bg-green-500 border-2 border-white rounded-full"></div>
            </div>
        </div>
    </div>
</header>