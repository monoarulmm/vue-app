<template>
  <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto w-full max-w-md">
      <div class="bg-white py-8 px-4 shadow-sm border border-gray-200 rounded-xl sm:px-10">

        <div class="mb-6 text-center">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900">Create an account</h2>
          <p class="mt-2 text-sm text-gray-600">Join us to get started</p>
        </div>

        <div v-if="successMessage"
          class="mb-4 p-4 rounded-lg bg-emerald-50 border border-emerald-200 text-sm text-emerald-700">
          {{ successMessage }}
        </div>

        <div v-if="errorMessage" class="mb-4 p-4 rounded-lg bg-rose-50 border border-rose-200 text-sm text-rose-700">
          {{ errorMessage }}
        </div>

        <form @submit.prevent="handleRegister" class="space-y-5">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
            <input type="text" v-model="form.name"
              class="block w-full rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm"
              placeholder="John Doe">
            <p v-if="errors.name" class="mt-1 text-xs text-rose-600">{{ errors.name[0] }}</p>
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
            <input type="number" v-model="form.phone"
              class="block w-full rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm-[appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
              placeholder="1234567890">
            <p v-if="errors.phone" class="mt-1 text-xs text-rose-600">{{ errors.phone[0] }}</p>
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
            <input type="email" v-model="form.email"
              class="block w-full rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm"
              placeholder="you@example.com">
            <p v-if="errors.email" class="mt-1 text-xs text-rose-600">{{ errors.email[0] }}</p>
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input type="password" v-model="form.password"
              class="block w-full rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm"
              placeholder="••••••••">
            <p v-if="errors.password" class="mt-1 text-xs text-rose-600">{{ errors.password[0] }}</p>
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
            <input type="password" v-model="form.password_confirmation"
              class="block w-full rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm"
              placeholder="••••••••">
            <p v-if="errors.password_confirmation" class="mt-1 text-xs text-rose-600">{{ errors.password_confirmation[0]
              }}</p>
          </div>

          <div class="pt-2">
            <button type="submit" :disabled="loading"
              class="flex w-full justify-center rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:opacity-50 disabled:cursor-not-allowed transition duration-150 ease-in-out">
              <span v-if="loading" class="flex items-center gap-2">
                <svg class="animate-spin h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                  <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                  <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                  </path>
                </svg>
                Registering...
              </span>
              <span v-else>Sign Up</span>
            </button>
          </div>
        </form>

      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      form: {
        name: '',
        email: '',
        phone: '',
        password: '',
        password_confirmation: '',
      },
      errors: {},
      loading: false,
      successMessage: '',
      errorMessage: '',
    }
  },
  methods: {
    async handleRegister() {
      this.loading = true;
      this.errors = {};
      this.successMessage = '';
      this.errorMessage = '';

      try {
        const response = await axios.post('/register', this.form);

        // লারাভেল থেকে সফল রেসপন্স আসলে
        if (response.data.status === 200 || response.status === 201) {
          this.successMessage = response.data.message || 'User Registered Successfully';
          alert("User Registered Successfully");
          this.form = { name: '', email: '', phone: '', password: '', password_confirmation: '' };
        }
        // যদি লারাভেল থেকে নরমাল উপায়ে ৪২২ আসে
        else if (response.data.status === 422) {
          this.errors = response.data.errors;
        }
      } catch (error) {
        // লারাভেল যদি সরাসরি HTTP 422 বা 500 এরর ছুড়ে মারে, তখন কোড এখানে চলে আসবে
        if (error.response) {
          if (error.response.status === 422) {
            this.errors = error.response.data.errors;
          } else {
            this.errorMessage = error.response.data.message || 'Server Error occurred.';
          }
        } else {
          this.errorMessage = 'Network error. Please check your connection.';
        }
      } finally {
        // রিকোয়েস্ট সফল হোক বা এরর আসুক—বাটনের লোডিং "অবশ্যই" বন্ধ হবে
        this.loading = false;
      }
    }
  }
}
</script>