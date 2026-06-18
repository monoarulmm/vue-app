<template>
    <div class="min-h-screen bg-slate-50 py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto space-y-12">
            
            <!-- HEADER -->
            <div class="text-center max-w-xl mx-auto">
                <span class="text-xs font-bold uppercase tracking-widest text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full">My Work</span>
                <h2 class="mt-3 text-3xl font-extrabold text-slate-900 tracking-tight">Featured Projects</h2>
                <p class="text-sm text-slate-500 mt-2">A showcase of my recent coding solutions, web platforms, and engineering experiments.</p>
            </div>

            <!-- FILTER TABS -->
            <div class="flex justify-center gap-2 overflow-x-auto pb-2 scrollbar-none">
                <button 
                    v-for="tab in tabs" 
                    :key="tab"
                    @click="activeTab = tab"
                    :class="[
                        'px-4 py-1.5 text-xs font-bold uppercase tracking-wider rounded-full transition-all duration-200 shrink-0 border',
                        activeTab === tab 
                            ? 'bg-slate-900 text-white border-slate-900 shadow-sm' 
                            : 'bg-white text-slate-600 border-slate-200 hover:border-slate-300'
                    ]"
                >
                    {{ tab }}
                </button>
            </div>

            <!-- PROJECTS GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div 
                    v-for="project in filteredProjects" 
                    :key="project.id"
                    class="bg-white border border-slate-100 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition duration-300 flex flex-col group"
                >
                    <!-- Project Image / Tech Placeholder -->
                    <div class="h-48 bg-slate-900 relative flex items-center justify-center p-6 text-center overflow-hidden shrink-0">
                        <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/20 to-purple-600/20 opacity-50"></div>
                        <span class="text-4xl z-10 filter drop-shadow-md group-hover:scale-110 transition duration-300">{{ project.icon }}</span>
                        
                        <!-- Floating Category Badge -->
                        <span class="absolute top-4 right-4 text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur text-slate-800 px-2.5 py-1 rounded-lg">
                            {{ project.category }}
                        </span>
                    </div>

                    <!-- Project Info -->
                    <div class="p-5 flex flex-col flex-1 justify-between space-y-4">
                        <div class="space-y-2">
                            <h3 class="font-bold text-slate-900 text-lg leading-snug group-hover:text-indigo-600 transition">
                                {{ project.title }}
                            </h3>
                            <p class="text-slate-500 text-xs leading-relaxed line-clamp-3">
                                {{ project.description }}
                            </p>
                        </div>

                        <!-- Tech Stack Tags -->
                        <div class="space-y-4">
                            <div class="flex flex-wrap gap-1.5">
                                <span 
                                    v-for="tech in project.tags" 
                                    :key="tech"
                                    class="bg-slate-50 text-slate-600 font-mono text-[10px] px-2 py-0.5 rounded-md border border-slate-100"
                                >
                                    {{ tech }}
                                </span>
                            </div>

                            <!-- Action Buttons -->
                            <div class="grid grid-cols-2 gap-2 pt-2 border-t border-slate-50">
                                <a :href="project.github" target="_blank" class="inline-flex items-center justify-center gap-1.5 py-2 text-xs font-semibold rounded-lg border border-slate-200 hover:bg-slate-50 text-slate-700 transition">
                                    Code 🛠️
                                </a>
                                <a :href="project.live" target="_blank" class="inline-flex items-center justify-center gap-1.5 py-2 text-xs font-semibold rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white shadow-sm transition">
                                    Live Demo 🚀
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    name: 'PortfolioComponent',
    data() {
        return {
            activeTab: 'All',
            tabs: ['All', 'Full-Stack', 'Backend', 'Frontend'],
            projects: [
                {
                    id: 1,
                    title: 'E-Commerce Management API',
                    description: 'A robust and secure backend service featuring comprehensive role-based access control, advanced order checkout queues, dynamic product indexing, and payment gateway integration.',
                    category: 'Backend',
                    icon: '📦',
                    tags: ['Laravel', 'MySQL', 'Redis', 'REST API'],
                    github: '#',
                    live: '#'
                },
                {
                    id: 2,
                    title: 'Real-time Portfolio Dashboard',
                    description: 'An interactive analytical dashboard with custom grid system, state management persistence, lazy-loaded interactive canvas charts, and dark mode configuration.',
                    category: 'Frontend',
                    icon: '📊',
                    tags: ['Vue.js 3', 'Tailwind CSS', 'Pinia', 'Chart.js'],
                    github: '#',
                    live: '#'
                },
                {
                    id: 3,
                    title: 'University Management System',
                    description: 'A complete modular application facilitating course scheduling, student performance grading reports, real-time notice board push alerts, and direct teacher-student chat integration.',
                    category: 'Full-Stack',
                    icon: '🏫',
                    tags: ['Laravel', 'Vue.js', 'Inertia.js', 'PostgreSQL'],
                    github: '#',
                    live: '#'
                }
            ]
        }
    },
    computed: {
        filteredProjects() {
            if (this.activeTab === 'All') return this.projects;
            return this.projects.filter(project => project.category === this.activeTab);
        }
    }
}
</script>