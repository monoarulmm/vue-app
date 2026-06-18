<template>
    <footer class="bg-slate-900 text-slate-300 border-t border-slate-800 pt-16 pb-28 md:pb-12">
        <div class="max-w-7xl mx-auto px-4 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
                
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-gradient-to-r from-indigo-500 to-purple-500 flex items-center justify-center text-white font-bold text-sm">
                            MM
                        </div>
                        <div>
                            <h2 class="text-md font-bold text-white tracking-tight uppercase">MM IT</h2>
                            <p class="text-[11px] text-indigo-400 font-medium tracking-wider">CSE Portfolio</p>
                        </div>
                    </div>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Building scalable web applications, crafting clean code, and solving complex algorithmic problems with modern tech stacks.
                    </p>
                    <div class="flex items-center gap-3 pt-2">
                        <a href="#" class="p-2 rounded-lg bg-slate-800 text-slate-400 hover:text-white hover:bg-indigo-600 transition shadow-sm">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.464-1.11-1.464-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.27.098-2.65 0 0 .84-.27 2.75 1.025A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.579.688.481C19.137 20.162 22 16.418 22 12c0-5.523-4.477-10-10-10z"/></svg>
                        </a>
                        <a href="#" class="p-2 rounded-lg bg-slate-800 text-slate-400 hover:text-white hover:bg-indigo-600 transition shadow-sm">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        <a href="#" class="p-2 rounded-lg bg-slate-800 text-slate-400 hover:text-white hover:bg-indigo-600 transition shadow-sm">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Navigation</h3>
                    <ul class="space-y-2.5 text-sm">
                        <li><button @click="$emit('show-view','home')" class="hover:text-indigo-400 transition text-slate-400">Home</button></li>
                        <li><button @click="$emit('show-view','about')" class="hover:text-indigo-400 transition text-slate-400">About Me</button></li>
                        <li><button @click="$emit('show-view','portfolio')" class="hover:text-indigo-400 transition text-slate-400">My Portfolio</button></li>
                        <li><button @click="$emit('show-view','contact')" class="hover:text-indigo-400 transition text-slate-400">Contact</button></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Expertise</h3>
                    <ul class="space-y-2.5 text-sm text-slate-400">
                        <li class="hover:text-slate-200 transition cursor-default">Frontend Development</li>
                        <li class="hover:text-slate-200 transition cursor-default">Backend Architecture</li>
                        <li class="hover:text-slate-200 transition cursor-default">Database Management</li>
                        <li class="hover:text-slate-200 transition cursor-default">UI/UX Design Integration</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Stay Updated</h3>
                    <p class="text-sm text-slate-400 mb-4 leading-relaxed">Subscribe to get notifications about my new projects and tech blogs.</p>
                    <form @submit.prevent class="flex flex-col sm:flex-row gap-2">
                        <input 
                            type="email" 
                            placeholder="Enter your email" 
                            class="w-full px-4 py-2 text-sm bg-slate-800 border border-slate-700 rounded-lg text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                        />
                        <button type="submit" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-500 text-white font-medium text-sm rounded-lg shadow-md transition shrink-0">
                            Join
                        </button>
                    </form>
                </div>

            </div>

            <div class="border-t border-slate-800 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                <p>&copy; 2026 MM IT. All rights reserved.</p>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-slate-400 transition">Privacy Policy</a>
                    <a href="#" class="hover:text-slate-400 transition">Terms of Service</a>
                </div>
            </div>

        </div>
    </footer>
</template>

<script>
export default {
    name: 'FooterComponent',
    emits: ['show-view']
}
</script>