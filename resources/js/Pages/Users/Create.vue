<template>
  <layout>
    <div class="container">
      
      <!-- ERROR MESSAGE BANNER -->
      <div v-if="Object.keys(errors).length > 0" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 relative" role="alert">
        <strong class="font-bold">Alert</strong>
        <span class="block sm:inline">{{ errors[Object.keys(errors)[0]][0] }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
          <svg 
            class="fill-current h-6 w-6 text-red-500" role="button"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <title>Close</title>
            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </span>
      </div>

      <!-- CREATE USER FORM -->
      <form action="/users" method="POST" class="my-5" @submit.prevent="createUser">

        <!-- GROUP :: NAME -->
        <div class="form-group flex flex-wrap -mx-3 mb-2">

          <!-- TITLE -->
          <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
            <label 
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
              for="grid-name-title">Title</label>
            <input 
              class="form-control appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
              id="grid-name-title" 
              type="text" 
              placeholder="Khun"
              v-model="form.name_title">
          </div>

          <!-- FIRST NAME -->
          <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
            <label 
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
              for="grid-name-first">Name.First</label>
            <input 
              class="form-control appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
              id="grid-name-first" 
              type="text" 
              placeholder="First"
              v-model="form.name_first">
          </div>

          <!-- MIDDLE NAME -->
          <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
            <label 
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
              for="grid-name-middle">Name.Mid</label>
            <input 
              class="form-control appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
              id="grid-name-middle" 
              type="text" 
              placeholder="Middle"
              v-model="form.name_middle">
          </div>

          <!-- LAST NAME -->
          <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
            <label 
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
              for="grid-name-last">Name.Last</label>
            <input 
              class="form-control appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
              id="grid-name-last" 
              type="text" 
              placeholder="Last"
              v-model="form.name_last">
          </div>
        </div>

        <!-- GROUP :: SEX && DOB -->
        <div class="form-group flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3">
            <label 
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
              for="grid-info-sex">Sex</label>
            <select 
              class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" 
              id="grid-info-sex">
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
              <option>Prefer Not to Say</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg 
                class="fill-current h-4 w-4" 
                xmlns="http://www.w3.org/2000/svg" 
                viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
          </div>

          <div class="w-full md:w-1/2 px-3">
            <label 
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
              for="grid-info-dob">Date.of.Birth</label>
          </div>
        </div>

        <!-- GROUP :: CREDENTIALS :: E-MAIL -->
        <div class="form-group flex flex-wrap -mx-3 mb-6">

          <!-- EMAIL -->
          <div class="w-full md:w-1/2 px-3">
            <label 
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
              for="grid-cred-email">E-mail</label>
            <input
              class="form-control appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
              id="grid-cred-email" 
              type="text" 
              placeholder="myemail@example.com"
              v-model="form.email">
          </div>

          <!-- CONFIRM EMAIL -->
          <div class="w-full md:w-1/2 px-3">
            <label 
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
              for="grid-cred-email2">E-mail.Confirm</label>
            <input 
              class="form-control appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
              id="grid-cred-email2" 
              type="text" 
              placeholder="myemail@example.com"
              v-model="form.email_confirm">
          </div>
        </div>

        <!-- GROUP :: CREDENTIALS :: PASSWORD -->
        <div class="form-group flex flex-wrap -mx-3 mb-6">

          <!-- PASSWORD -->
          <div class="w-full md:w-1/2 px-3">
            <label 
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
              for="grid-cred-pass">Pasword</label>
            <input 
              class="form-control appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
              id="grid-cred-pass" 
              type="password" 
              placeholder="******************"
              v-model="form.password">
            <p class="text-gray-600 text-xs italic">Min. 16 characters</p>
          </div>

          <!-- CONFIRM PASSWORD -->
          <div class="w-full md:w-1/2 px-3">
            <label 
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
              for="grid-cred-pass2">Password.Confirm</label>
            <input 
              class="form-control appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
              id="grid-cred-pass2" 
              type="password" 
              placeholder="******************"
              v-model="form.password_confirm">
          </div>
        </div>

        <!-- BUTTONS -->
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700">
          Create User
        </button>
      </form>

    </div>
  </layout>
</template>

<script>
  import layout from "@/Layouts/Dashboard/Layout"

  export default {
    layout: layout,

    props: ['errors'],

    data() {
      return {
        form: {
          name_title: '',
          name_first: '',
          name_middle: '',
          name_last: '',
          email: '',
          email_confirm: '',
          password: '',
          passowrd_confirm: '',
        }
      }
    },

    methods: {
      createUser() {
        this.loading = true;
        this.$inertia.post(`/users/`, this.form)
          .then(()=>{
            //
          })
      }
    }
  }
</script>