<template>
    <!-- MAIN HEADER -->
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-slate-200/80 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 lg:px-8">
            <div class="flex items-center justify-between h-16 gap-4">

                <!-- Logo Component -->
                <div class="flex items-center gap-3 shrink-0 cursor-pointer" @click="$emit('show-view','home')">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 flex items-center justify-center text-white font-bold shadow-md shadow-indigo-100">
                        MM
                    </div>
                    <div class="hidden sm:block">
                        <h1 class="text-sm font-bold text-slate-800 tracking-tight uppercase">MM IT</h1>
                        <p class="text-[11px] text-indigo-600 font-semibold tracking-wider">CSE Portfolio</p>
                    </div>
                </div>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center gap-1 text-sm font-medium text-slate-600">
                    <button @click="$emit('show-view','home')" class="hover:text-indigo-600 hover:bg-slate-50 transition px-3 py-2 rounded-lg">Home</button>
                    <button @click="$emit('show-view','about')" class="hover:text-indigo-600 hover:bg-slate-50 transition px-3 py-2 rounded-lg">About</button>
                    <button @click="$emit('show-view','portfolio')" class="hover:text-indigo-600 hover:bg-slate-50 transition px-3 py-2 rounded-lg">Portfolio</button>
                    <button @click="$emit('show-view','contact')" class="hover:text-indigo-600 hover:bg-slate-50 transition px-3 py-2 rounded-lg">Contact</button>
                </nav>

                <!-- Desktop Search Bar -->
                <div class="hidden md:flex flex-1 max-w-md mx-4">
                    <div class="relative w-full">
                        <input
                            type="text"
                            placeholder="Search projects, skills..."
                            class="w-full pl-10 pr-4 py-2 text-sm bg-slate-50 border border-slate-200 rounded-full focus:bg-white focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 focus:outline-none transition-all duration-200"
                        />
                        <svg class="w-4 h-4 text-slate-400 absolute left-3.5 top-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>

                <!-- Action Buttons (Notification, Cart, Auth) -->
                <div class="flex items-center gap-2 sm:gap-3 shrink-0 relative">
                    
                    <!-- NOTIFICATION BUTTON & DROPDOWN -->
                    <div class="relative">
                        <button @click="toggleNotification" class="relative p-2 rounded-full text-slate-600 hover:bg-slate-100 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405C18.21 14.79 18 13.92 18 13V9a6 6 0 10-12 0v4c0 .92-.21 1.79-.595 2.595L4 17h5m6 0a3 3 0 11-6 0m6 0H9" />
                            </svg>
                            <span class="absolute top-1.5 right-1.5 bg-red-500 text-white text-[9px] font-bold w-3.5 h-3.5 flex items-center justify-center rounded-full">
                                3
                            </span>
                        </button>

                        <!-- Notification Dropdown Menu -->
                        <div v-if="isNotificationOpen" class="absolute right-0 mt-2 w-64 bg-white border border-slate-200 rounded-xl shadow-xl z-50 py-2">
                            <div class="px-4 py-2 font-bold text-sm text-slate-800 border-b border-slate-100">Notifications</div>
                            <div class="text-xs text-slate-600 max-h-48 overflow-y-auto">
                                <a href="#" class="block px-4 py-2.5 hover:bg-slate-50 border-b border-slate-50">New project added to Portfolio</a>
                                <a href="#" class="block px-4 py-2.5 hover:bg-slate-50 border-b border-slate-50">Skill section has been updated</a>
                                <a href="#" class="block px-4 py-2.5 hover:bg-slate-50">Welcome to MM IT Portfolio!</a>
                            </div>
                        </div>
                    </div>

                    <!-- CART BUTTON & DROPDOWN -->
                    <div class="relative">
                        <button @click="toggleCart" class="relative p-2 rounded-full text-slate-600 hover:bg-slate-100 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m0 0h16" />
                            </svg>
                            <span class="absolute top-1.5 right-1.5 bg-indigo-600 text-white text-[9px] font-bold w-3.5 h-3.5 flex items-center justify-center rounded-full">
                                2
                            </span>
                        </button>

                        <!-- Cart Dropdown Menu -->
                        <div v-if="isCartOpen" class="absolute right-0 mt-2 w-64 bg-white border border-slate-200 rounded-xl shadow-xl z-50 py-2">
                            <div class="px-4 py-2 font-bold text-sm text-slate-800 border-b border-slate-100">My Items (2)</div>
                            <div class="text-xs text-slate-600 max-h-48 overflow-y-auto">
                                <div class="px-4 py-2.5 hover:bg-slate-50 border-b border-slate-50 flex justify-between items-center">
                                    <span>E-Commerce Script</span>
                                    <span class="font-bold text-indigo-600">$49</span>
                                </div>
                                <div class="px-4 py-2.5 hover:bg-slate-50 border-b border-slate-50 flex justify-between items-center">
                                    <span>Portfolio Template</span>
                                    <span class="font-bold text-indigo-600">$19</span>
                                </div>
                            </div>
                            <div class="px-4 pt-2">
                                <button class="w-full py-1.5 bg-indigo-600 text-white text-xs font-semibold rounded-lg text-center block hover:bg-indigo-700 transition">View Cart</button>
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Auth Buttons -->
                    <div class="hidden sm:flex items-center gap-2 ml-1">
                        <button @click="$emit('show-view','login')" class="px-3 py-1.5 text-sm font-medium text-slate-700 hover:bg-slate-50 transition rounded-lg">Login</button>
                        <button @click="$emit('show-view','setting')" class="px-3 py-1.5 text-sm font-medium text-slate-700 hover:bg-slate-50 transition rounded-lg">settings</button>
                        <button @click="$emit('show-view','register')" class="px-3.5 py-1.5 text-sm font-medium bg-slate-900 text-white rounded-lg hover:bg-slate-800 transition shadow-sm">Join</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Mobile Top Search Bar -->
        <div class="md:hidden px-4 pb-3 pt-1 border-t border-slate-100 bg-white">
            <div class="relative w-full">
                <input
                    type="text"
                    placeholder="Search projects, skills..."
                    class="w-full pl-10 pr-4 py-2 text-sm bg-slate-50 border border-slate-200 rounded-full focus:bg-white focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 focus:outline-none transition-all"
                />
                <svg class="w-4 h-4 text-slate-400 absolute left-3.5 top-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </header>

    <!-- MOBILE BOTTOM NAVIGATION BAR (Moved outside of <header> and fixed at the absolute bottom) -->
    <div class="md:hidden fixed bottom-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-lg border-t border-slate-200 shadow-[0_-4px_20px_rgba(0,0,0,0.05)] pb-safe">
        <div class="flex justify-around items-center h-16 px-2 max-w-md mx-auto">
            
            <button @click="$emit('show-view','home')" class="flex flex-col items-center justify-center flex-1 h-full text-slate-600 hover:text-indigo-600 active:scale-95 transition gap-1">
                <svg class="w-5 h-5 text-slate-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                </svg>
                <span class="text-[9px] font-bold uppercase tracking-wider text-slate-500">Home</span>
            </button>

            <button @click="$emit('show-view','about')" class="flex flex-col items-center justify-center flex-1 h-full text-slate-600 hover:text-indigo-600 active:scale-95 transition gap-1">
                <svg class="w-5 h-5 text-slate-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11z"/>
                </svg>
                <span class="text-[9px] font-bold uppercase tracking-wider text-slate-500">Schedule</span>
            </button>

            <button @click="$emit('show-view','portfolio')" class="flex flex-col items-center justify-center flex-1 h-full text-slate-600 hover:text-indigo-600 active:scale-95 transition gap-1">
                <svg class="w-5 h-5 text-slate-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22 16V4c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2zm-11-4l2.03 2.71L16 11l4 5H8l3-4zM2 6v14c0 1.1.9 2 2 2h14v-2H4V6H2z"/>
                </svg>
                <span class="text-[9px] font-bold uppercase tracking-wider text-slate-500">Gallery</span>
            </button>

            <button @click="$emit('show-view','about')" class="flex flex-col items-center justify-center flex-1 h-full text-slate-600 hover:text-indigo-600 active:scale-95 transition gap-1">
                <svg class="w-5 h-5 text-slate-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                </svg>
                <span class="text-[9px] font-bold uppercase tracking-wider text-slate-500">About</span>
            </button>

            <button @click="$emit('show-view','contact')" class="flex flex-col items-center justify-center flex-1 h-full text-slate-600 hover:text-indigo-600 active:scale-95 transition gap-1">
                <svg class="w-5 h-5 text-slate-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm6 12H6v-1c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1z"/>
                </svg>
                <span class="text-[9px] font-bold uppercase tracking-wider text-slate-500">Contact</span>
            </button>

        </div>
    </div>
</template>

<script>
export default {
    name: 'HeaderComponent',
    emits: ['show-view'],
    data() {
        return {
            isNotificationOpen: false,
            isCartOpen: false
        }
    },
    methods: {
        toggleNotification() {
            this.isNotificationOpen = !this.isNotificationOpen;
            if (this.isNotificationOpen) this.isCartOpen = false; // কার্ট খোলা থাকলে বন্ধ হবে
        },
        toggleCart() {
            this.isCartOpen = !this.isCartOpen;
            if (this.isCartOpen) this.isNotificationOpen = false; // নোটিফিকেশন খোলা থাকলে বন্ধ হবে
        }
    }
}
</script>

<style scoped>
/* আধুনিক মোবাইল আইফোনে হোম ইন্ডিকেটর বারের ব্যাকগ্রাউন্ড মার্জিন ঠিক রাখার জন্য */
.pb-safe {
    padding-bottom: env(safe-area-inset-bottom);
}
</style>