<template>
    <div class="min-h-screen bg-slate-50 text-slate-800 py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto space-y-16">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-5 flex justify-center">
                    <div class="relative group w-64 h-64 sm:w-80 sm:h-80">
                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl rotate-6 opacity-20 group-hover:rotate-12 transition duration-300"></div>
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-indigo-600 rounded-3xl -rotate-3 opacity-20 group-hover:-rotate-6 transition duration-300"></div>
                        
                        <div class="relative w-full h-full bg-slate-900 border border-slate-800 rounded-3xl flex flex-col items-center justify-center overflow-hidden shadow-xl">
                            <span class="text-6xl mb-2">👨‍💻</span>
                            <div class="text-center px-4">
                                <h3 class="text-white font-bold text-xl tracking-wide">Monoarul Islam</h3>
                                <p class="text-indigo-400 text-sm font-medium mt-1">Full-Stack Developer</p>
                            </div>
                            <div class="absolute bottom-4 left-0 right-0 flex justify-center gap-2 px-2 text-[10px] text-slate-400 font-mono">
                                <span class="bg-slate-800 px-2 py-0.5 rounded">PHP</span>
                                <span class="bg-slate-800 px-2 py-0.5 rounded">Laravel</span>
                                <span class="bg-slate-800 px-2 py-0.5 rounded">Vue.js</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 space-y-6">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-widest text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full">About Me</span>
                        <h1 class="mt-3 text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                            Crafting robust software solutions with clean architecture.
                        </h1>
                    </div>
                    
                    <p class="text-slate-600 leading-relaxed text-base">
                        Hi, I'm a passionate Computer Science & Engineering student and software developer. I specialize in building scalable web applications using modern backend and frontend technologies. My core focus lies in algorithmic problem-solving, structural software design, and optimization.
                    </p>

                    <div class="grid grid-cols-3 gap-4 pt-4">
                        <div class="bg-white border border-slate-100 p-4 rounded-2xl shadow-sm">
                            <p class="text-2xl sm:text-3xl font-extrabold text-indigo-600">15+</p>
                            <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mt-1">Projects Done</p>
                        </div>
                        <div class="bg-white border border-slate-100 p-4 rounded-2xl shadow-sm">
                            <p class="text-2xl sm:text-3xl font-extrabold text-purple-600">500+</p>
                            <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mt-1">CP Solves</p>
                        </div>
                        <div class="bg-white border border-slate-100 p-4 rounded-2xl shadow-sm">
                            <p class="text-2xl sm:text-3xl font-extrabold text-slate-800">100%</p>
                            <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mt-1">Dedication</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white border border-slate-100 rounded-3xl p-8 shadow-sm space-y-8">
                <div class="text-center max-w-xl mx-auto">
                    <h2 class="text-2xl font-bold text-slate-900">Technical Expertise</h2>
                    <p class="text-sm text-slate-500 mt-2">Here are the key technologies and frameworks I work with day-to-day.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                        <div class="w-10 h-10 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center font-bold mb-4">⚙️</div>
                        <h3 class="font-bold text-slate-900 mb-3">Backend & Languages</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-white text-xs font-medium px-3 py-1.5 rounded-lg border border-slate-200">PHP</span>
                            <span class="bg-white text-xs font-medium px-3 py-1.5 rounded-lg border border-slate-200">Laravel Framework</span>
                            <span class="bg-white text-xs font-medium px-3 py-1.5 rounded-lg border border-slate-200">C / C++</span>
                            <span class="bg-white text-xs font-medium px-3 py-1.5 rounded-lg border border-slate-200">MySQL</span>
                        </div>
                    </div>

                    <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                        <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center font-bold mb-4">💻</div>
                        <h3 class="font-bold text-slate-900 mb-3">Frontend Architecture</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-white text-xs font-medium px-3 py-1.5 rounded-lg border border-slate-200">Vue.js</span>
                            <span class="bg-white text-xs font-medium px-3 py-1.5 rounded-lg border border-slate-200">JavaScript (ES6+)</span>
                            <span class="bg-white text-xs font-medium px-3 py-1.5 rounded-lg border border-slate-200">Tailwind CSS</span>
                            <span class="bg-white text-xs font-medium px-3 py-1.5 rounded-lg border border-slate-200">HTML5 / CSS3</span>
                        </div>
                    </div>

                    <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                        <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center font-bold mb-4">🛠️</div>
                        <h3 class="font-bold text-slate-900 mb-3">Tools & Systems</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-white text-xs font-medium px-3 py-1.5 rounded-lg border border-slate-200">Git & GitHub</span>
                            <span class="bg-white text-xs font-medium px-3 py-1.5 rounded-lg border border-slate-200">VS Code</span>
                            <span class="bg-white text-xs font-medium px-3 py-1.5 rounded-lg border border-slate-200">Postman API</span>
                            <span class="bg-white text-xs font-medium px-3 py-1.5 rounded-lg border border-slate-200">Linux Environment</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-8">
                <div class="text-center max-w-xl mx-auto">
                    <h2 class="text-2xl font-bold text-slate-900">Education & Journey</h2>
                    <p class="text-sm text-slate-500 mt-2">A brief outlook on my academic roadmap and milestones.</p>
                </div>

                <div class="max-w-3xl mx-auto relative border-l-2 border-slate-200 ml-4 md:ml-auto">
                    
                    <div class="mb-10 ml-6 relative">
                        <span class="absolute -left-9 top-1 bg-indigo-600 text-white w-6 h-6 rounded-full flex items-center justify-center text-xs shadow-md">
                            🎓
                        </span>
                        <div class="bg-white border border-slate-100 p-5 rounded-2xl shadow-sm">
                            <span class="text-xs font-bold text-indigo-600 uppercase tracking-wider bg-indigo-50 px-2 py-0.5 rounded">Currently Enrolled</span>
                            <h3 class="font-bold text-slate-900 text-lg mt-1">B.Sc. in Computer Science & Engineering (CSE)</h3>
                            <p class="text-sm font-semibold text-slate-600">Dhaka University of Engineering & Technology (DUET)</p>
                            <p class="text-xs text-slate-400 mt-1">Focusing on Core Computer Science theory, advanced data structures, and continuous learning.</p>
                        </div>
                    </div>

                    <div class="mb-2 ml-6 relative">
                        <span class="absolute -left-9 top-1 bg-slate-800 text-white w-6 h-6 rounded-full flex items-center justify-center text-xs">
                            📜
                        </span>
                        <div class="bg-white border border-slate-100 p-5 rounded-2xl shadow-sm">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider bg-slate-100 px-2 py-0.5 rounded">Completed</span>
                            <h3 class="font-bold text-slate-900 text-lg mt-1">Diploma in Engineering</h3>
                            <p class="text-sm font-semibold text-slate-600">Major in Computer Technology</p>
                            <p class="text-xs text-slate-400 mt-1">Acquired a strong baseline in foundational coding architecture and full-stack web application development basics.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    name: 'AboutComponent'
}
</script>