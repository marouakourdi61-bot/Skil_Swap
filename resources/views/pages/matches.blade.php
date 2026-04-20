<x-app-layout>
    <!-- Main Content Area -->
    <main class="lg:pl-72 pt-28 pb-12 px-8 min-h-screen">
        <div class="max-w-[1100px] mx-auto">
            <!-- Header Section -->
            <header class="mb-12 flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div>
                    <span class="font-label text-xs uppercase tracking-[0.2em] text-primary mb-2 block">Discovery</span>
                    <h1
                        class="font-headline text-5xl md:text-6xl font-extrabold tracking-tighter text-on-surface leading-none">
                        Find Your Master.</h1>
                </div>
                <p class="font-body text-on-surface-variant max-w-xs text-lg leading-relaxed">
                    Connect with over 12,000 artisans and professionals ready to share their craft.
                </p>
            </header>
            <!-- Filter Bar -->
            <div class="mb-12 bg-surface-container-low rounded-[2rem] p-4 flex flex-wrap items-center gap-3">
                <div class="relative">
                    <button
                        class="bg-surface-container-lowest px-6 py-3 rounded-full font-label text-sm font-semibold flex items-center gap-2 text-on-surface shadow-sm border border-outline-variant/10">
                        Skill: Any
                        <span class="material-symbols-outlined text-sm">keyboard_arrow_down</span>
                    </button>
                </div>
                <div class="relative">
                    <button
                        class="bg-surface-container-lowest px-6 py-3 rounded-full font-label text-sm font-semibold flex items-center gap-2 text-on-surface shadow-sm border border-outline-variant/10">
                        City: London, UK
                        <span class="material-symbols-outlined text-sm">location_on</span>
                    </button>
                </div>
                <div class="relative">
                    <button
                        class="bg-surface-container-lowest px-6 py-3 rounded-full font-label text-sm font-semibold flex items-center gap-2 text-on-surface shadow-sm border border-outline-variant/10">
                        Category: Creative Arts
                        <span class="material-symbols-outlined text-sm">category</span>
                    </button>
                </div>
                <div class="h-6 w-[1px] bg-outline-variant/30 mx-2"></div>
                <div class="flex flex-wrap gap-2">
                    <span
                        class="bg-secondary text-white px-4 py-2 rounded-full font-label text-[10px] font-bold uppercase tracking-wider flex items-center gap-2">
                        Pottery <button class="material-symbols-outlined text-xs">close</button>
                    </span>
                    <span
                        class="bg-surface-container-high text-on-surface-variant px-4 py-2 rounded-full font-label text-[10px] font-bold uppercase tracking-wider">
                        + 3 more
                    </span>
                </div>
                <button class="ml-auto text-primary font-headline font-bold text-sm px-4 py-2 hover:underline">Reset
                    Filters</button>
            </div>
            <!-- Results Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                <!-- User Card 1 -->
                <div
                    class="bg-surface-container-lowest rounded-xl overflow-hidden group hover:shadow-[0_20px_40px_rgba(45,22,0,0.06)] transition-all duration-500">
                    <div class="relative h-72 w-full overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            data-alt="Close-up portrait of a Japanese master ceramicist working with wet clay on a wheel in a bright studio"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCMAMnyhkp__VxwGBgC8zulXf8lfJdIetknZP24mUBdZI9mbVCCYOFPEtlQlQkiAOw8RMw1vt4sUPeSoGQ4NShzJBrzenGvRdd4_LIG-KLenWb6o04ZmvfzNysRDYki14AJTYqxVQ13W0_PYczy4rD0ECc42Tw4qvW6R7LuNEKVbPmukmGnDR-vu1HsSs65R_fYMRIEnCPopzm1o2-oEeDEDv9B3eI7gJccjUOOXwuvifpMjD06HsDaguWDIsh557Xea9Z7jdlQpw9v" />
                        <div
                            class="absolute top-4 right-4 bg-surface-container-lowest/90 backdrop-blur px-3 py-1.5 rounded-full flex items-center gap-1.5 shadow-sm">
                            <span class="material-symbols-outlined text-primary text-sm"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="font-headline font-bold text-sm">4.9</span>
                            <span class="font-label text-[10px] text-on-surface-variant">(128)</span>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="font-headline text-2xl font-extrabold tracking-tight text-on-surface">Hiroshi
                                    Tanaka</h3>
                                <p class="font-label text-xs text-on-surface-variant flex items-center gap-1 mt-1">
                                    <span class="material-symbols-outlined text-xs">location_on</span> Kyoto, JP
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-8">
                            <span
                                class="bg-surface-container-high text-on-surface px-3 py-1 rounded-full font-label text-[10px] font-bold uppercase tracking-wider">Pottery</span>
                            <span
                                class="bg-surface-container-high text-on-surface px-3 py-1 rounded-full font-label text-[10px] font-bold uppercase tracking-wider">Glazing</span>
                            <span
                                class="bg-surface-container-high text-on-surface px-3 py-1 rounded-full font-label text-[10px] font-bold uppercase tracking-wider">Kintsugi</span>
                        </div>
                        <div class="flex items-center justify-between border-t border-outline-variant/10 pt-6">
                            <div class="flex -space-x-3">
                                <div
                                    class="w-8 h-8 rounded-full border-2 border-surface-container-lowest overflow-hidden">
                                    <img class="w-full h-full object-cover"
                                        data-alt="small circular avatar of a woman smiling"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAh34boRLu_iEX4H4ZDxcR1GQdrJaJMmqS_XPVKRBQhYrBgOGpB_szJkIfBvZ_c3ogAJxv3umXa98ocSDBA3OOUGvqpUS7OEqcgKM969R5h1TJdK7grKVPJFVdSfmz6TUO6bmSvvVseFSw1JkwAgSLPGhr85LiN7v-EJgPDG5koOIXkEK4VWTbWkvZ7Tr10nuzquD8nghDui40byYawTAaNZt0AoCOu4V_gsc4zyT2ZVFGAKa_uBIWaX5J82u6QdPBKZpebCAJGz8Fu" />
                                </div>
                                <div
                                    class="w-8 h-8 rounded-full border-2 border-surface-container-lowest bg-primary-container flex items-center justify-center text-[10px] text-on-primary-container font-bold">
                                    +12
                                </div>
                            </div>
                            <button
                                class="bg-primary text-on-primary px-8 py-3 rounded-full font-headline font-bold text-sm shadow-sm transition-all hover:translate-y-[-2px] active:scale-95">Contact</button>
                        </div>
                    </div>
                </div>
                <!-- User Card 2 -->
                <div
                    class="bg-surface-container-lowest rounded-xl overflow-hidden group hover:shadow-[0_20px_40px_rgba(45,22,0,0.06)] transition-all duration-500">
                    <div class="relative h-72 w-full overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            data-alt="Young woman in a linen apron painting in an airy art gallery with large windows and soft natural light"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBwLo8ni7p-pXsvcR2twVRI5o2B6MxN5OWf2jLGLHgaOWNqdbK4hdSN1oyhu_LVzHjEf-lAm9BQzYldfWx9Yubfr8wMp2L-YJnJHWrBUBVR_vFaP7n9C2NxfZFtAbH6mbr53gi4tk-eG2yNz8ApLaapwOwmGiNXt8CJXNrp1ej9V1v6jyJXS04izXZS9n5KEfS6AOWx4s8UstrZDxYTvIjMUDsne7P1iizKVq7vdAMYG8BcrhMyvuy-KpqFw2cwd9y9OTBx5zljW95D" />
                        <div
                            class="absolute top-4 right-4 bg-surface-container-lowest/90 backdrop-blur px-3 py-1.5 rounded-full flex items-center gap-1.5 shadow-sm">
                            <span class="material-symbols-outlined text-primary text-sm"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="font-headline font-bold text-sm">5.0</span>
                            <span class="font-label text-[10px] text-on-surface-variant">(42)</span>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="font-headline text-2xl font-extrabold tracking-tight text-on-surface">Elena
                                    Moretti</h3>
                                <p class="font-label text-xs text-on-surface-variant flex items-center gap-1 mt-1">
                                    <span class="material-symbols-outlined text-xs">location_on</span> Florence, IT
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-8">
                            <span
                                class="bg-surface-container-high text-on-surface px-3 py-1 rounded-full font-label text-[10px] font-bold uppercase tracking-wider">Oil
                                Painting</span>
                            <span
                                class="bg-surface-container-high text-on-surface px-3 py-1 rounded-full font-label text-[10px] font-bold uppercase tracking-wider">Sketching</span>
                            <span
                                class="bg-surface-container-high text-on-surface px-3 py-1 rounded-full font-label text-[10px] font-bold uppercase tracking-wider">Art
                                History</span>
                        </div>
                        <div class="flex items-center justify-between border-t border-outline-variant/10 pt-6">
                            <div class="flex -space-x-3">
                                <div
                                    class="w-8 h-8 rounded-full border-2 border-surface-container-lowest overflow-hidden">
                                    <img class="w-full h-full object-cover"
                                        data-alt="small circular avatar of a man with glasses"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQKWdYVLe63O2wuDpHgM0-9MFxAVPWZNQVtPrE5jv1DXDx6or_66hleeej6tlkzhfqksiC0mO28qExA22kn-P8xc8tGFuxKQtC0iTwg5nhyjl4T7f1x02F5kt8rUIQpT9pWRCpzn6wnaov_5lfQC4z3ItLzXhPAPUEqYnAfi9sc_xYfEiiXTWCDK3aTvdeX8lEIFk_xz71fBkgCngqxQTAwOneMMI1I653dgwPRYbZKeAziQKctIb6Kv25UaHWLSrjPuGX4UUQ2IiD" />
                                </div>
                                <div
                                    class="w-8 h-8 rounded-full border-2 border-surface-container-lowest bg-secondary-container flex items-center justify-center text-[10px] text-on-secondary-container font-bold">
                                    +5
                                </div>
                            </div>
                            <button
                                class="bg-primary text-on-primary px-8 py-3 rounded-full font-headline font-bold text-sm shadow-sm transition-all hover:translate-y-[-2px] active:scale-95">Contact</button>
                        </div>
                    </div>
                </div>
                <!-- User Card 3 -->
                <div
                    class="bg-surface-container-lowest rounded-xl overflow-hidden group hover:shadow-[0_20px_40px_rgba(45,22,0,0.06)] transition-all duration-500">
                    <div class="relative h-72 w-full overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            data-alt="Man in leather apron tooling intricate patterns on a piece of thick brown leather at a rustic wooden workbench"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCM-zKKKo3mdb5V1LMk8xqmwPWJNR45DRJ2OnVkDgRFMVDLw9bEvcEdsamEjq5bCkuNSUuQtmYiBM2DeSPmsTvBSl1860ek__GQR7RwGW_-mNGvB1tXysCv2peSO4XkXrnQ714wb3h9Lul6nROSFJAORDGG0kAPm82UoRaXOB7eSgTzquBt2hPrvK8cQk6-TDrl0KbPXSDMHwcb4JIpISbiaOzkxtduucfxCGKWtbhyUewxWdpFEk_sfuCoWYSpWmCdWyGownMwUVoL" />
                        <div
                            class="absolute top-4 right-4 bg-surface-container-lowest/90 backdrop-blur px-3 py-1.5 rounded-full flex items-center gap-1.5 shadow-sm">
                            <span class="material-symbols-outlined text-primary text-sm"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="font-headline font-bold text-sm">4.8</span>
                            <span class="font-label text-[10px] text-on-surface-variant">(95)</span>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="font-headline text-2xl font-extrabold tracking-tight text-on-surface">Samuel
                                    Vance</h3>
                                <p class="font-label text-xs text-on-surface-variant flex items-center gap-1 mt-1">
                                    <span class="material-symbols-outlined text-xs">location_on</span> Austin, US
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-8">
                            <span
                                class="bg-surface-container-high text-on-surface px-3 py-1 rounded-full font-label text-[10px] font-bold uppercase tracking-wider">Leathercraft</span>
                            <span
                                class="bg-surface-container-high text-on-surface px-3 py-1 rounded-full font-label text-[10px] font-bold uppercase tracking-wider">Stitching</span>
                            <span
                                class="bg-surface-container-high text-on-surface px-3 py-1 rounded-full font-label text-[10px] font-bold uppercase tracking-wider">Dyeing</span>
                        </div>
                        <div class="flex items-center justify-between border-t border-outline-variant/10 pt-6">
                            <div class="flex -space-x-3">
                                <div
                                    class="w-8 h-8 rounded-full border-2 border-surface-container-lowest overflow-hidden">
                                    <img class="w-full h-full object-cover"
                                        data-alt="small circular avatar of a person with curly hair"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAtNBWA3ZQhFmvZH09wp9-k65uaFGafyeu35pcr_FW7Mri7w-BALVHH56dm8QJ10rlxZ05p9Lyd4S_kymgs6AKpO-SwWcUyBOr01hD3CnRfJQCgPGsr9XGLA-NAO8qqnElWnKyNVW6dZpHgcSnqMOuelrOkRvewwAHWcYAoGya8GWNNqwj9kZ1Mx-ViuY3Aab16ay7TG4drIgPAO7r04k3vn1ga2Bhv24TvUnqYxHwfLTW-mDNMO5_DHN8f_ASkb5NKDTVlCBTLC7d5" />
                                </div>
                                <div
                                    class="w-8 h-8 rounded-full border-2 border-surface-container-lowest bg-tertiary-container flex items-center justify-center text-[10px] text-on-tertiary-container font-bold">
                                    +8
                                </div>
                            </div>
                            <button
                                class="bg-primary text-on-primary px-8 py-3 rounded-full font-headline font-bold text-sm shadow-sm transition-all hover:translate-y-[-2px] active:scale-95">Contact</button>
                        </div>
                    </div>
                </div>
                <!-- User Card 4 (Asymmetric Large Featured Card) -->
                <div
                    class="md:col-span-2 bg-surface-container-lowest rounded-xl overflow-hidden flex flex-col md:flex-row group hover:shadow-[0_20px_40px_rgba(45,22,0,0.06)] transition-all duration-500">
                    <div class="relative md:w-1/2 h-72 md:h-auto overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            data-alt="Professional chef plating a delicate dessert in a dark high-end kitchen with dramatic spotlighting"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBzxKEuAsn6GGQ8D9PUfFFo7d3inLUwcn9exhgPc0QucI5drlWBGVVgtM31oS_mAXNv4BqD0mYGxQcy4BLInunAlgS0sytwbtJYC9Yht97Z2GQK71GM0fo_AVWkZ8_bgW_wulC0DgaNL909v4ImSewH39gqJktO74fF87nWgovDFZI52xc1NbL8Y0eXcpnNKomyQPiK5EcN1Wf1aqh-8yqY_IHeRKHEQ-IrfTAxwvyoSEI7pSJxfIMoVGacvPjDOElENcCv9Dr9I1W5" />
                        <div
                            class="absolute top-6 left-6 bg-primary text-on-primary px-4 py-1 rounded-full font-label text-[10px] font-bold uppercase tracking-[0.2em] shadow-lg">
                            Master of the Month
                        </div>
                    </div>
                    <div class="md:w-1/2 p-10 flex flex-col">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h3 class="font-headline text-3xl font-extrabold tracking-tight text-on-surface">Chef
                                    Julianne Vane</h3>
                                <p class="font-label text-sm text-on-surface-variant flex items-center gap-1 mt-2">
                                    <span class="material-symbols-outlined text-sm">location_on</span> Paris, FR
                                </p>
                            </div>
                            <div
                                class="bg-surface-container-high/50 backdrop-blur px-4 py-2 rounded-2xl flex flex-col items-center gap-0.5">
                                <span class="font-headline font-black text-xl text-primary">5.0</span>
                                <span class="font-label text-[9px] uppercase font-bold tracking-tighter">Rating</span>
                            </div>
                        </div>
                        <p class="font-body text-on-surface-variant mb-8 leading-relaxed">
                            With 15 years in Michelin-starred kitchens, Chef Julianne specializes in pastry arts and
                            molecular gastronomy. Seeking to learn advanced woodworking for restaurant interiors.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-auto">
                            <span
                                class="bg-surface-container-high text-on-surface px-4 py-1.5 rounded-full font-label text-[11px] font-bold uppercase tracking-wider">Pastry
                                Arts</span>
                            <span
                                class="bg-surface-container-high text-on-surface px-4 py-1.5 rounded-full font-label text-[11px] font-bold uppercase tracking-wider">Plating</span>
                            <span
                                class="bg-surface-container-high text-on-surface px-4 py-1.5 rounded-full font-label text-[11px] font-bold uppercase tracking-wider">Gastronomy</span>
                        </div>
                        <div class="mt-10 flex items-center gap-6">
                            <button
                                class="bg-primary text-on-primary px-10 py-4 rounded-full font-headline font-bold text-base shadow-sm transition-all hover:translate-y-[-2px] active:scale-95 flex-grow">Book
                                Session</button>
                            <button
                                class="w-14 h-14 rounded-full border border-outline-variant/30 flex items-center justify-center text-primary hover:bg-surface-container-low transition-colors">
                                <span class="material-symbols-outlined">favorite</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- User Card 5 -->
                <div
                    class="bg-surface-container-lowest rounded-xl overflow-hidden group hover:shadow-[0_20px_40px_rgba(45,22,0,0.06)] transition-all duration-500">
                    <div class="relative h-72 w-full overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            data-alt="Portrait of a young woman with a camera in a botanical garden, soft green bokeh background"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4RXNTKbE-3RRj1h-gPjC3KwvLtxNXXDQQJMoffG6rSrXD8v6cCkHauv9iVwo5p4i3Wqcfqhylvw3hh2IbUWssJYWfLz5IBOrtEZu3bab-SSdrkTG3pj8kmX1nNGcA5wBymmRL-rkBZahf12fLBXa92-H5QqVWJ_LPaPcM_97WVdM6JmaB-L1ndrQAWHdC0ef8fNh9r52LohuoW1aMHa7OhKHfvpPxSp6Iur4BhJdDELrCIsJZ9IdAHjizpQYtmKzLpzscfvzInXFo" />
                        <div
                            class="absolute top-4 right-4 bg-surface-container-lowest/90 backdrop-blur px-3 py-1.5 rounded-full flex items-center gap-1.5 shadow-sm">
                            <span class="material-symbols-outlined text-primary text-sm"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="font-headline font-bold text-sm">4.7</span>
                            <span class="font-label text-[10px] text-on-surface-variant">(11)</span>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="font-headline text-2xl font-extrabold tracking-tight text-on-surface">Sarah
                                    Jenkins</h3>
                                <p class="font-label text-xs text-on-surface-variant flex items-center gap-1 mt-1">
                                    <span class="material-symbols-outlined text-xs">location_on</span> Portland, OR
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-8">
                            <span
                                class="bg-surface-container-high text-on-surface px-3 py-1 rounded-full font-label text-[10px] font-bold uppercase tracking-wider">Photography</span>
                            <span
                                class="bg-surface-container-high text-on-surface px-3 py-1 rounded-full font-label text-[10px] font-bold uppercase tracking-wider">Editing</span>
                            <span
                                class="bg-surface-container-high text-on-surface px-3 py-1 rounded-full font-label text-[10px] font-bold uppercase tracking-wider">Social</span>
                        </div>
                        <div class="flex items-center justify-between border-t border-outline-variant/10 pt-6">
                            <div class="flex -space-x-3">
                                <div
                                    class="w-8 h-8 rounded-full border-2 border-surface-container-lowest overflow-hidden">
                                    <img class="w-full h-full object-cover" data-alt="avatar of a man"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBIAHU5OC9S2jpYVTzespLPdOMViwPxrFzYFqOrMKJbpdu0p_BLSAZxNvE3Xj--ythCuiGLOYnR8Sg7ZhB8qc8OOJ_aynbIy4OesGMKvkCX8m-jbdoERYV8SkOpDT8_4MFzGXPtP5cJxxe5goGqUM-tGzZRYBD9eNhLelNvQW9a9TWmeX5BDyuY49YlneGF1jHyHBDH4ERwclSJoAQ0aV7zDV0S1bWoygze4yzTvIBUeSETNoScgqHNRGkLMAabeXgEJe1ZPOw0F1Hc" />
                                </div>
                            </div>
                            <button
                                class="bg-primary text-on-primary px-8 py-3 rounded-full font-headline font-bold text-sm shadow-sm transition-all hover:translate-y-[-2px] active:scale-95">Contact</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Empty State / Load More -->
            <div class="mt-20 text-center">
                <p class="font-body text-on-surface-variant mb-6 italic">Showing 34 masters out of 892 for your
                    criteria.</p>
                <button
                    class="bg-surface-container-low text-primary px-10 py-4 rounded-full font-headline font-bold hover:bg-surface-container-high transition-colors active:scale-95">
                    View More Results
                </button>
            </div>
        </div>
    </main>
    <!-- FAB (Suppressed based on rules for Details screens, but relevant for Discovery) -->
    <button
        class="fixed bottom-10 right-10 bg-on-surface text-surface w-16 h-16 rounded-full flex items-center justify-center shadow-2xl hover:scale-110 active:scale-90 transition-all z-50">
        <span class="material-symbols-outlined text-3xl">chat_bubble</span>
    </button>

    <script>
        let timeout = null;

        document.querySelector('input[name="search"]').addEventListener('keyup', function () {
            clearTimeout(timeout);

            let query = this.value;

            timeout = setTimeout(() => {
                fetch(`/matches/search?search=${query}`)
                    .then(res => res.text())
                    .then(data => {
                        document.getElementById('results').innerHTML = data;
                    });
            }, 300);
        });
    </script>
</x-app-layout>