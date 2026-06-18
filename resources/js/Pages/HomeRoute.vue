<template>
    <div class="min-h-screen bg-slate-50">

        <!-- Header -->
        <header-component @show-view="changeView" />

        <!-- HOME -->
        <div v-if="currentView === 'home'">

            <!-- HERO SECTION -->
            <section class="relative bg-gradient-to-br from-indigo-700 via-purple-700 to-indigo-900 text-white overflow-hidden">

                <div class="absolute inset-0 opacity-20">
                    <div class="w-[500px] h-[500px] bg-white rounded-full blur-3xl absolute -top-40 -left-40"></div>
                    <div class="w-[400px] h-[400px] bg-yellow-300 rounded-full blur-3xl absolute bottom-0 right-0"></div>
                </div>

                <div class="relative max-w-7xl mx-auto px-6 py-28 grid md:grid-cols-2 items-center gap-12">

                    <!-- TEXT -->
                    <div>
                        <p class="text-indigo-200 font-medium mb-3">
                            👋 Hello, I'm a CSE Student
                        </p>

                        <h1 class="text-5xl font-bold leading-tight mb-6">
                            Building Modern
                            <span class="text-yellow-300">Web Applications</span>
                        </h1>

                        <p class="text-indigo-100 text-lg mb-8 leading-relaxed">
                            Passionate Computer Science & Engineering student focused on
                            web development, problem solving, and building real-world
                            scalable applications using Laravel, Vue.js, and Tailwind CSS.
                        </p>

                        <div class="flex flex-wrap gap-4">

                            <button
                                @click="changeView('portfolio')"
                                class="px-6 py-3 bg-white text-indigo-700 font-semibold rounded-lg hover:bg-gray-100 transition shadow-lg"
                            >
                                🚀 View Projects
                            </button>

                            <button
                                @click="changeView('contact')"
                                class="px-6 py-3 border border-white rounded-lg hover:bg-white hover:text-indigo-700 transition"
                            >
                                📩 Hire Me
                            </button>

                        </div>

                        <!-- Skills badges -->
                        <div class="mt-8 flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-white/20 rounded-full text-sm">Laravel</span>
                            <span class="px-3 py-1 bg-white/20 rounded-full text-sm">Vue.js</span>
                            <span class="px-3 py-1 bg-white/20 rounded-full text-sm">Tailwind</span>
                            <span class="px-3 py-1 bg-white/20 rounded-full text-sm">MySQL</span>
                        </div>
                    </div>

                    <!-- IMAGE -->
                    <div class="flex justify-center">
                        <div class="relative">
                            <div class="absolute -inset-4 bg-white/20 rounded-full blur-xl"></div>

                            <img
                                src="https://images.unsplash.com/photo-1522071820081-009f0129c71c"
                                class="w-80 h-80 object-cover rounded-full border-8 border-white shadow-2xl relative"
                                alt="Profile"
                            >
                        </div>
                    </div>

                </div>
            </section>

            <!-- ABOUT PREVIEW -->
            <section class="py-20 max-w-7xl mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-slate-800">About Me</h2>
                    <p class="text-slate-500 mt-2">A quick introduction</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200">
                    <p class="text-slate-600 leading-relaxed text-center">
                        I am a passionate CSE student who loves to explore modern web technologies.
                        My goal is to become a professional full-stack developer and contribute to
                        real-world impactful software systems.
                    </p>
                </div>
            </section>

            <!-- SKILLS SECTION -->
            <section class="py-16 bg-slate-100">
                <div class="max-w-7xl mx-auto px-6">

                    <h2 class="text-3xl font-bold text-center text-slate-800 mb-10">
                        Skills & Technologies
                    </h2>

                    <div class="grid md:grid-cols-4 gap-6">

                        <div class="bg-white p-6 rounded-xl shadow-sm text-center hover:shadow-md transition">
                            <h3 class="font-semibold text-lg">Frontend</h3>
                            <p class="text-slate-500 mt-2">Vue.js, Tailwind</p>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-sm text-center hover:shadow-md transition">
                            <h3 class="font-semibold text-lg">Backend</h3>
                            <p class="text-slate-500 mt-2">Laravel, PHP</p>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-sm text-center hover:shadow-md transition">
                            <h3 class="font-semibold text-lg">Database</h3>
                            <p class="text-slate-500 mt-2">MySQL</p>
                        </div>

                        <div class="bg-white p-6 rounded-xl shadow-sm text-center hover:shadow-md transition">
                            <h3 class="font-semibold text-lg">Tools</h3>
                            <p class="text-slate-500 mt-2">Git, GitHub</p>
                        </div>

                    </div>
                </div>
            </section>

            <!-- CTA SECTION -->
            <section class="py-20 text-center bg-gradient-to-r from-indigo-700 to-purple-700 text-white">
                <h2 class="text-3xl font-bold mb-4">
                    Let’s Build Something Amazing
                </h2>

                <p class="text-indigo-100 mb-8">
                    Open for internship, freelance & collaboration
                </p>

                <button
                    @click="changeView('contact')"
                    class="px-8 py-3 bg-white text-indigo-700 font-semibold rounded-lg hover:bg-gray-100 transition"
                >
                    Contact Me
                </button>
            </section>

        </div>

        <!-- Other Views -->
        <about-component v-else-if="currentView === 'about'" />
        <education-component v-else-if="currentView === 'education'" />
        <portfolio-component v-else-if="currentView === 'portfolio'" />
        <contact-component v-else-if="currentView === 'contact'" />
        <login-component v-else-if="currentView === 'login'" />
        <register-component v-else-if="currentView === 'register'" />
        <setting-component v-else-if="currentView === 'setting'" />

        <!-- FOOTER -->
        <footer-component />

    </div>
</template>

<script>
export default {
    data() {
        return {
            currentView: 'home',
        }
    },
    methods: {
        changeView(viewName) {
            this.currentView = viewName;
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    }
}
</script>