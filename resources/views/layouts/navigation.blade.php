<header class="fixed top-0 right-0 left-72 z-40 bg-[#fff8f5]/80 backdrop-blur-xl border-b border-stone-200/50 px-10 py-4 flex justify-between items-center transition-all duration-300">
    
    <div class="flex items-center gap-4">
        
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
                
            </div>
            
            <div class="relative">
                
                <div class="absolute -bottom-0.5 -right-0.5 w-3.5 h-3.5 bg-green-500 border-2 border-white rounded-full"></div>
            </div>
        </div>
    </div>
</header>