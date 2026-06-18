<template>
  <div>
    <h2>Site Setting Management</h2>

    <div class="card">
      <form @submit.prevent="formSubmit" enctype="multipart/form-data">
        
        <div class="form-group">
          <label>Site Name</label>
          <input type="text" v-model="form.site_name" placeholder="site name">
        </div>
        
        <div class="form-group">
          <label>logo light</label>
          <input type="file" @change="onFileChange">
        </div>

        <button type="submit">submit</button>
      </form>
    </div>

    <div v-if="imagePreview">
      <p>Image Preview</p>
      <div>
        <img :src="imagePreview" alt="logo preview" style="max-width: 150px;">
        <button type="button" @click="removeImage">delete</button>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      success: '',
      errorMessage: '',
      imagePreview: null, // 💡 ফিক্স: ডাটাতে এটি শুরুতে null হিসেবে ডিফাইন করতে হবে

      form: {
        site_name: '',
        logo_light: '',
      }
    }
  },
  methods: {
    onFileChange(e) {
      const file = e.target.files[0];

      if (file) {
        this.form.logo_light = file; // মূল ফাইলটি ফর্মে রাখা হলো
        this.imagePreview = URL.createObjectURL(file); // প্রিভিউ লিংক তৈরি করা হলো
      }
    },

    removeImage() {
      this.form.logo_light = ''; // ফাইল খালি করা হলো
      this.imagePreview = null; // প্রিভিউ ডিলিট করা হলো
      
      // অপশনাল: ইনপুট ফিল্ডকে ক্লিন করার জন্য পেজ রিলোড ছাড়া বেসিক কোডে এটি এভাবেই কাজ করবে
    },

    formSubmit() {
      this.success = '';
      this.errorMessage = '';

      // ব্যাকএন্ডে ফাইল পাঠানোর জন্য FormData তৈরি
      let formData = new FormData();
      formData.append('site_name', this.form.site_name);

      if (this.form.logo_light) {
        formData.append('logo_light', this.form.logo_light);
      }

      // এক্সিওস পোস্ট রিকোয়েস্ট
      axios.post('/setting/store', formData, {
        headers: { 'Content-Type': 'multipart/form-data' }
      })
      .then(response => {
        if (response.status === 200 || response.status === 201) {
          this.success = response.data.message || 'Settings Saved Successfully!';
          alert("Settings Saved Successfully");
          
          // ফর্ম এবং প্রিভিউ রিসেট
          this.form.site_name = '';
          this.form.logo_light = '';
          this.imagePreview = null; 
        }
      })
      .catch(error => {
        console.error(error);
      });
    }
  }
}
</script> ```

### 💡 অতিরিক্ত ট্রিক (বেসিক কোডের জন্য):
যখন আপনি `delete` বাটনে চাপ দিয়ে ছবি রিমুভ করবেন, তখন স্ক্রিন থেকে ছবি চলে গেলেও মূল `<input type="file">` ফিল্ডে কিন্তু ফাইলের নামটা আটকে থাকে। আপনি যদি চান ডিলিট বাটনে চাপ দিলে ফাইল ইনপুট ফিল্ডটাও একদম ফ্রেশ হয়ে যাক, তাহলে `removeImage()` মেথডটি এভাবে লিখতে পারেন:

```javascript
removeImage() {
  this.form.logo_light = '';
  this.imagePreview = null;
  
  // এটি ইনপুট ফিল্ডের ভেতরের টেক্সটকেও একদম খালি করে দেবে
  document.querySelector('input[type="file"]').value = ''; 
}