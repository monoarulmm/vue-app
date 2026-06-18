<template>
  <div>
    <h2>Create New Notice</h2>

    <div class="card">
      <form @submit.prevent="formSubmit" enctype="multipart/form-data">
        
        <div class="form-group">
          <label>Notice Title</label>
          <input type="text" v-model="form.title" placeholder="Enter notice title">
        </div>

        <div class="form-group">
          <label>Description</label>
          <textarea v-model="form.desc" placeholder="Enter description"></textarea>
        </div>
        
        <div class="form-group">
          <label>Notice File</label>
          <input type="file" @change="onFileChange">
        </div>

        <button type="submit">submit</button>
      </form>
    </div>

    <div v-if="fileType">
      <p>Attachment Preview</p>
      <div>
        
        <img v-if="fileType.startsWith('image/')" :src="filePreviewUrl" alt="notice preview" style="max-width: 150px;">

        <div v-else-if="fileType === 'application/pdf'">
          <p style="color: red; font-weight: bold;">📄 PDF Document Selected</p>
          <a :href="filePreviewUrl" target="_blank">View PDF</a>
        </div>

        <div v-else>
          <p style="color: blue;">📁 Document Selected: {{ fileName }}</p>
        </div>

        <br>
        <button type="button" @click="removeFile">delete</button>
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
      
      // ফাইল ট্র্যাকিং ভ্যারিয়েবল
      notice_raw_file: null,
      filePreviewUrl: null,
      fileType: null,
      fileName: '',

      form: {
        title: '',
        desc: '',
      }
    }
  },
  methods: {
    onFileChange(e) {
      const file = e.target.files[0];

      if (file) {
        this.notice_raw_file = file; // মূল ফাইলটি আলাদা ভ্যারিয়েবলে রাখা হলো
        this.fileType = file.type;   // ফাইলের টাইপ (image, pdf ইত্যাদি)
        this.fileName = file.name;   // ফাইলের আসল নাম
        this.filePreviewUrl = URL.createObjectURL(file); // প্রিভিউ লিংক তৈরি
      }
    },

    removeFile() {
      this.notice_raw_file = null;
      this.filePreviewUrl = null;
      this.fileType = null;
      this.fileName = '';
      
      // ইনপুট ফিল্ডের ভেতরের লেখার নাম রিসেট করার জন্য
      document.querySelector('input[type="file"]').value = '';
    },

    formSubmit() {
      this.success = '';
      this.errorMessage = '';

      // FormData তৈরি করা হচ্ছে ব্যাকএন্ডে পাঠানোর জন্য
      let formData = new FormData();
      formData.append('title', this.form.title);
      formData.append('desc', this.form.desc);

      if (this.notice_raw_file) {
        formData.append('notice_file', this.notice_raw_file);
      }

      // এক্সিওস পোস্ট রিকোয়েস্ট (ল্যারাভেল নোটিশ কন্ট্রোলারের রাউট বসাবেন এখানে)
      axios.post('/api/notice/store', formData, {
        headers: { 'Content-Type': 'multipart/form-data' }
      })
      .then(response => {
        if (response.status === 200 || response.status === 201) {
          this.success = response.data.message || 'Notice Saved Successfully!';
          alert("Notice Saved Successfully");
          
          // ফর্ম এবং প্রিভিউ সম্পূর্ণ রিসেট
          this.form.title = '';
          this.form.desc = '';
          this.removeFile(); 
        }
      })
      .catch(error => {
        console.error(error);
      });
    }
  }
}
</script>