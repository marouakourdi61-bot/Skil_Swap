<x-app-layout>

<!-- Main Content Canvas -->
<main class=" min-h-screen bg-surface">
<!-- Header Hero -->
<header class="relative w-full h-[614px] flex flex-col md:flex-row items-end px-12 pb-16 bg-surface-container-low overflow-hidden">
<!-- Background Texture Layer -->
<div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: radial-gradient(#80552c 0.5px, transparent 0.5px); background-size: 24px 24px;"></div>
<div class="relative z-10 w-full flex flex-col md:flex-row gap-12 items-end">
<div class="w-72 h-96 rounded-xl overflow-hidden shadow-[0_40px_80px_rgba(45,22,0,0.12)] bg-surface-container-highest">
<img class="w-full h-full object-cover grayscale-[20%] hover:grayscale-0 transition-all duration-700" data-alt="Close-up portrait of a thoughtful professional man with short dark hair in a warm sunlit creative studio environment" src="{{ $user->image ? asset('storage/' . $user->image) : 'https://ui-avatars.com/api/?name=' . urlencode($user->name) }}"/></div>
<div class="flex-1 space-y-6 max-w-2xl">
<div class="space-y-1">
<span class="label-text text-xs tracking-[0.2em] uppercase font-bold text-primary">Senior Contributor</span>
<h1 class="text-7xl font-headline font-bold tracking-tighter text-on-surface leading-none">{{ $user->name }}</h1>
</div>
<p class="font-body text-xl leading-relaxed text-on-surface-variant font-light italic">
                        {{ $user->bio ?? 'No bio available yet.' }}
                    </p>
<div class="flex gap-4">
<span class="inline-flex items-center gap-2 bg-surface-container-lowest px-6 py-2 rounded-full text-on-surface shadow-sm font-medium">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">verified</span>
                            Master Artisan
                        </span>
<span class="inline-flex items-center gap-2 bg-surface-container-lowest px-6 py-2 rounded-full text-on-surface shadow-sm font-medium">
<span class="material-symbols-outlined text-primary">location_on</span>
                            {{ $user->location ?? 'Location not set' }}
                        </span>
</div>
</div>
</div>
</header>
<!-- Profile Content Grid -->
<div class="px-12 py-20 grid grid-cols-12 gap-16">
<!-- Sidebar Content -->
<div class="col-span-12 lg:col-span-4 space-y-16">
<!-- Availability: Tactile Schedule -->
<section class="space-y-8">
<h3 class="text-xs tracking-[0.3em] uppercase font-bold text-on-surface-variant">Tactile Schedule</h3>
<div class="bg-surface-container-lowest p-8 rounded-xl shadow-[0_20px_40px_rgba(45,22,0,0.04)] space-y-6">
<div class="flex justify-between items-center">
<span class="font-headline font-bold text-lg">Current Status</span>
<div class="flex items-center gap-2 bg-[#e8f5e9] text-[#2e7d32] px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">
<div class="w-1.5 h-1.5 rounded-full bg-[#2e7d32] animate-pulse"></div>
                                Available for Mentorship
                            </div>
</div>
<div class="grid grid-cols-7 gap-2">
<!-- Mini Calendar Grid -->
<div class="h-12 bg-surface-container-high rounded-lg opacity-20"></div>
<div class="h-12 bg-surface-container-high rounded-lg opacity-20"></div>
<div class="h-12 bg-primary-container rounded-lg flex items-center justify-center text-on-primary-container text-xs font-bold">12</div>
<div class="h-12 bg-primary rounded-lg flex items-center justify-center text-on-primary text-xs font-bold">13</div>
<div class="h-12 bg-primary-container rounded-lg flex items-center justify-center text-on-primary-container text-xs font-bold">14</div>
<div class="h-12 bg-surface-container-high rounded-lg opacity-20"></div>
<div class="h-12 bg-surface-container-high rounded-lg opacity-20"></div>
</div>
<p class="label-text text-sm text-on-surface-variant leading-relaxed">
                            Open for skill exchanges on weekend mornings and Wednesday evenings. Preference for hands-on workshop sessions.
                        </p>
<button class="w-full border border-outline-variant/30 py-4 rounded-full font-bold hover:bg-surface-container-low transition-colors">
                            Request Time Slot
                        </button>
</div>
</section>
<!-- Distinctions: Medallions -->
<section class="space-y-8">
<h3 class="text-xs tracking-[0.3em] uppercase font-bold text-on-surface-variant">Distinctions</h3>
<div class="flex flex-wrap gap-6">
<div class="group relative flex flex-col items-center">
<div class="w-20 h-20 bg-surface-container-high rounded-full flex items-center justify-center text-primary group-hover:scale-110 transition-transform cursor-help">
<span class="material-symbols-outlined text-4xl" style="font-variation-settings: 'FILL' 1;">military_tech</span>
</div>
<span class="label-text text-[10px] mt-2 font-bold uppercase text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity absolute -bottom-6 whitespace-nowrap">Skill Pioneer</span>
</div>
<div class="group relative flex flex-col items-center">
<div class="w-20 h-20 bg-tertiary-container/20 rounded-full flex items-center justify-center text-tertiary group-hover:scale-110 transition-transform cursor-help">
<span class="material-symbols-outlined text-4xl" style="font-variation-settings: 'FILL' 1;">workspace_premium</span>
</div>
<span class="label-text text-[10px] mt-2 font-bold uppercase text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity absolute -bottom-6 whitespace-nowrap">Top Mentor 2023</span>
</div>
<div class="group relative flex flex-col items-center">
<div class="w-20 h-20 bg-secondary-container/20 rounded-full flex items-center justify-center text-secondary group-hover:scale-110 transition-transform cursor-help">
<span class="material-symbols-outlined text-4xl" style="font-variation-settings: 'FILL' 1;">auto_awesome</span>
</div>
<span class="label-text text-[10px] mt-2 font-bold uppercase text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity absolute -bottom-6 whitespace-nowrap">Perfect Record</span>
</div>
</div>
</section>
</div>
<!-- Main Profile Column -->
<div class="col-span-12 lg:col-span-8 space-y-24">
<!-- Skill Gallery -->
<section class="space-y-12">
<div class="flex justify-between items-baseline">
<h2 class="text-4xl font-headline font-bold text-on-surface">Curated Gallery</h2>
<div class="flex gap-8">
<button class="label-text font-bold text-primary underline decoration-2 underline-offset-8">Offered</button>
<button class="label-text font-bold text-on-surface-variant hover:text-primary transition-colors">Wanted</button>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
<!-- Skill Card 1 -->
<div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-[0_40px_60px_rgba(45,22,0,0.08)] transition-all duration-500">
<div class="h-48 overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000" data-alt="Handcrafted wooden dovetail joint close-up with sawdust and artisan tools in soft focus" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1oKF2JB_jv0BF8cSkHdB2WcsHjM2mys46Sta8umAaKF8-PAIaqZ2cDpgRmp3jbRw1zDvS2zlXEJSWOmHl53yDH_yux4Rd3gGew91NhKzOKeJB9LKTxcu2oqTv7kmNiLLlXyj07HaynuhaYNtR1MGRh8mIAZRfNRH8uAq81LZZAsyIz4KrCjRvhHki5tdWf5JdMjopcGPCTufjsicf-Wqkz20bjSi0qUUAz2a5Dz2nwjsWZZ5baEdLPoki2T0dKaUCTewTcL_d-d7O"/>
</div>
<div class="p-8 space-y-4">
<div class="flex justify-between items-start">
<h4 class="text-2xl font-headline font-bold">Traditional Joinery</h4>
<span class="label-text text-[10px] bg-surface-container-high px-2 py-1 rounded font-bold uppercase">Level 5</span>
</div>
<p class="text-on-surface-variant leading-relaxed text-sm">
                                    Mastering the art of Japanese and Shaker-style joinery without the use of fasteners or glue.
                                </p>
<div class="pt-4 flex gap-2">
<span class="text-xs bg-surface-container text-on-surface-variant px-3 py-1 rounded-full">Woodworking</span>
<span class="text-xs bg-surface-container text-on-surface-variant px-3 py-1 rounded-full">Hand Tools</span>
</div>
</div>
</div>
<!-- Skill Card 2 -->
<div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-[0_40px_60px_rgba(45,22,0,0.08)] transition-all duration-500">
<div class="h-48 overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000" data-alt="Modern architectural drafting on a desk with tracing paper and architectural scale ruler" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjArLhxcNaYhIZdpKfvTTRBgmzoAlUK0Nes5rxVv-Kv7CuQ6UAAekG98mDWZ5l8a2symTN5ZuuX7Gp62awWj7hbWx4Nsunco1gOp5vYswzI-fuBWErDwWZzvearqFe3JiQJi1WLKQplf3B7QDN7WbvuIcQBnlSsY775n2SqBAYyAAm2wVyAPK23jjIWsjDWNqWglwXEbfF5urBXmfwlVanyUD6yIFUdddrkvwTjswl3l0wFWlZ81AUzcg3f3c3emC1cQWtJzPLCglZ"/>
</div>
<div class="p-8 space-y-4">
<div class="flex justify-between items-start">
<h4 class="text-2xl font-headline font-bold">Spatial Design</h4>
<span class="label-text text-[10px] bg-surface-container-high px-2 py-1 rounded font-bold uppercase">Level 4</span>
</div>
<p class="text-on-surface-variant leading-relaxed text-sm">
                                    Conceptualizing urban micro-dwellings and sustainable living environments through 3D modeling.
                                </p>
<div class="pt-4 flex gap-2">
<span class="text-xs bg-surface-container text-on-surface-variant px-3 py-1 rounded-full">Architecture</span>
<span class="text-xs bg-surface-container text-on-surface-variant px-3 py-1 rounded-full">Rhino 3D</span>
</div>
</div>
</div>
</div>
</section>
<!-- Received Appraisals -->
<section class="space-y-12">
<h2 class="text-4xl font-headline font-bold text-on-surface">Community Feedback</h2>
<div class="space-y-12">
<!-- Review 1 -->
<div class="relative pl-12 border-l-2 border-primary/20">
<div class="absolute -left-[11px] top-0 w-5 h-5 bg-primary rounded-full ring-8 ring-surface"></div>
<div class="space-y-4">
<div class="flex justify-between items-center">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-full bg-surface-container-highest overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Young professional woman with curly hair smiling gently in a soft lit office" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCw77I7paHtbJB8OhWVfpiGX9jt-zBS17qRXt78mtVxc5vIPdv5_JfY9gFfh5z8q5NC0JUbLapr4-o0LCkYaKCy9BtWGkr5NjiKUAqPkW8QKM5a1J_3gjoZZ0tx48toyFfqkOajvH8lvEkU7IPU_TwW3xy6YoxRDbrC_LV-1l2B0h6P3Xf_yuMCaXuctjQICBYFc4BxbauRgm2HWSgc-xxeas2_xh25rG-5YLlGcEHyUjKqHflBDBkugXQuKnRDK3mcmS4aaPjDUez2"/>
</div>
<div>
<div class="font-bold">Elena Rossi</div>
<div class="label-text text-xs text-on-surface-variant">Industrial Designer</div>
</div>
</div>
<div class="flex text-primary">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
</div>
<blockquote class="font-body text-lg italic text-on-surface-variant">
                                    "Alex's patience is unparalleled. He taught me the fundamentals of wood grain direction in a single afternoon. A truly meditative experience."
                                </blockquote>
<div class="label-text text-[10px] uppercase font-bold tracking-widest text-on-surface-variant/60">February 14, 2024</div>
</div>
</div>
<!-- Review 2 -->
<div class="relative pl-12 border-l-2 border-primary/20">
<div class="absolute -left-[11px] top-0 w-5 h-5 bg-surface-container-high rounded-full ring-8 ring-surface"></div>
<div class="space-y-4 opacity-80">
<div class="flex justify-between items-center">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-full bg-surface-container-highest overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Man with beard looking confidently towards the camera with architectural background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4UIxY2rNceQrVqA3c7sPEoJeSFxDYi_sDb7l4QYcFXNEQre5svrgC1C5o8f6kBqaXz8hiA4W7sU9BLYlfH9TnFPn8FK7Ql2xRGOq3PamPpcc0Mm38J_gRCAxVdTBsVUgmirfChPhvxpN5Oa2hdOgK6yp1NbIbLFP4WqDDwktqryM09ySIVYCnrFi_UyTepbV-tSqREdj7iLLaP69N2Ur3SHFmmg1maQcjTM3wUBrSZaUR9nb55Er6F_seWYs5Wklm9j5n21n5XXMI"/>
</div>
<div>
<div class="font-bold">Julian Vane</div>
<div class="label-text text-xs text-on-surface-variant">UI Architect</div>
</div>
</div>
<div class="flex text-primary">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
</div>
<blockquote class="font-body text-lg italic text-on-surface-variant">
                                    "Exchanged some UI principles for a workshop session on material honesty. Alex is a deep thinker who understands how the digital influences the physical."
                                </blockquote>
<div class="label-text text-[10px] uppercase font-bold tracking-widest text-on-surface-variant/60">January 2, 2024</div>
</div>
</div>
</div>
</section>
<!-- Footer Call to Action -->
<section class="bg-surface-container-low rounded-3xl p-16 flex flex-col items-center text-center space-y-8">
<h2 class="text-5xl font-headline font-extrabold tracking-tight">Ready to collaborate?</h2>
<p class="max-w-md font-body text-on-surface-variant">
                        Alex is currently accepting new exchange proposals for Spring 2024. Reach out with your portfolio or skill offering.
                    </p>
<div class="flex gap-4">
<button class="bg-primary text-on-primary px-10 py-5 rounded-full font-bold text-lg hover:scale-105 transition-transform">
                            Send Proposal
                        </button>
<button class="bg-surface-container-lowest text-on-surface px-10 py-5 rounded-full font-bold text-lg shadow-sm hover:bg-white transition-colors">
                            Book Interview
                        </button>
</div>
</section>
</div>
</div>
</x-app-layout>