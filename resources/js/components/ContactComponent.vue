<template>
    <div class="min-h-screen bg-slate-50 py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto space-y-12">
            
            <!-- HEADER -->
            <div class="text-center max-w-xl mx-auto">
                <span class="text-xs font-bold uppercase tracking-widest text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full">Get In Touch</span>
                <h2 class="mt-3 text-3xl font-extrabold text-slate-900 tracking-tight">Let's Connect</h2>
                <p class="text-sm text-slate-500 mt-2">Have an exciting project proposal, contract opening, or just want to say hi? Send me a message!</p>
            </div>

            <!-- CONTACT SECTION CONTENT -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- LEFT: CONTACT INFO INFO -->
                <div class="lg:col-span-5 bg-slate-900 text-slate-300 rounded-2xl p-8 shadow-xl space-y-8 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/10 to-purple-600/10 pointer-events-none"></div>
                    
                    <div class="relative space-y-2">
                        <h3 class="text-xl font-bold text-white">Contact Information</h3>
                        <p class="text-xs text-slate-400">Feel free to reach out. I typically respond within 24 hours.</p>
                    </div>

                    <div class="space-y-5 relative">
                        <!-- Email -->
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-slate-800 text-indigo-400 flex items-center justify-center shrink-0">
                                ✉️
                            </div>
                            <div>
                                <p class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Email Me</p>
                                <a href="mailto:contact@mmit.com" class="text-sm text-white hover:text-indigo-400 transition font-medium">contact@mmit.com</a>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-slate-800 text-indigo-400 flex items-center justify-center shrink-0">
                                📍
                            </div>
                            <div>
                                <p class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Location</p>
                                <p class="text-sm text-white font-medium">Gazipur, Dhaka, Bangladesh</p>
                            </div>
                        </div>

                        <!-- Availability -->
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-slate-800 text-emerald-400 flex items-center justify-center shrink-0">
                                💼
                            </div>
                            <div>
                                <p class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Freelance Work</p>
                                <p class="text-sm text-white font-medium">Available for Remote Projects</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: CONTACT FORM -->
                <div class="lg:col-span-7 bg-white border border-slate-100 rounded-2xl p-8 shadow-sm">
                    
                    <!-- SUCCESS MESSAGE -->
                    <div v-if="submitted" class="bg-emerald-50 border border-emerald-200 rounded-xl p-4 text-center space-y-2 animate-fadeIn">
                        <span class="text-2xl">🎉</span>
                        <h4 class="font-bold text-emerald-900 text-sm">Message Sent Successfully!</h4>
                        <p class="text-xs text-emerald-700">Thank you for getting in touch. I will read and review your email shortly.</p>
                        <button @click="submitted = false" class="text-xs font-bold text-emerald-800 underline mt-2 block mx-auto">Send another message</button>
                    </div>

                    <!-- FORM -->
                    <form v-else @submit.prevent="handleSubmit" class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Name -->
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Your Name</label>
                                <input 
                                    type="text" 
                                    required 
                                    v-model="form.name"
                                    placeholder="John Doe"
                                    class="w-full px-4 py-2.5 text-sm bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 focus:outline-none transition-all duration-200"
                                />
                            </div>
                            <!-- Email -->
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Email Address</label>
                                <input 
                                    type="email" 
                                    required 
                                    v-model="form.email"
                                    placeholder="john@example.com"
                                    class="w-full px-4 py-2.5 text-sm bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 focus:outline-none transition-all duration-200"
                                />
                            </div>
                        </div>

                        <!-- Subject -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Subject</label>
                            <input 
                                type="text" 
                                required 
                                v-model="form.subject"
                                placeholder="Project Collaboration Opportunity"
                                class="w-full px-4 py-2.5 text-sm bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 focus:outline-none transition-all duration-200"
                            />
                        </div>

                        <!-- Message -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1">Message</label>
                            <textarea 
                                rows="4" 
                                required 
                                v-model="form.message"
                                placeholder="Describe your project requirements or thoughts here..."
                                class="w-full px-4 py-2.5 text-sm bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 focus:outline-none transition-all duration-200 resize-none"
                            ></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button 
                            type="submit"
                            class="w-full py-3 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white text-xs font-bold uppercase tracking-wider rounded-xl shadow-md shadow-indigo-100 transition-all duration-200 active:scale-[0.99]"
                        >
                            Send Message ✉️
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    name: 'ContactComponent',
    data() {
        return {
            submitted: false,
            form: {
                name: '',
                email: '',
                subject: '',
                message: ''
            }
        }
    },
    methods: {
        handleSubmit() {
            // পরবর্তীতে ডাটাবেজ বা ইমেইল সার্ভিস (যেমন: EmailJS) এখানে কানেক্ট করবেন
            console.log('Form data submitted:', this.form);
            
            this.submitted = true;
            // ফর্ম ফিল্ড রিসেট
            this.form.name = '';
            this.form.email = '';
            this.form.subject = '';
            this.form.message = '';
        }
    }
}
</script>